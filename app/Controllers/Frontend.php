<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TestimonialsModel;
use App\Models\BlogModel;
use App\Models\PagesModel;
use App\Models\PageSettingsModel;
use App\Models\ServicesModel;
use App\Models\ContactusModel;
class Frontend extends BaseController
{
   

    public function index()

    {  

        $testiModel = new TestimonialsModel();
        //$blogModel = new BlogModel();
        $PagesModel = new PagesModel();
        $PageSettingsModel = new PageSettingsModel();
        $ServicesModel = new ServicesModel();
        
     // $posts =  $blogModel->join('wp_postmeta','wp_post.id = wp_postmeta.post_id' )->select('wp_postmeta.*','wp_post.*');
      // global $wpdb;
    //$results = $wpdb->get_results( "SELECT * FROM $wpdb->posts, $wpdb->postmeta where $wpdb->posts.ID = $wpdb->postmeta.post_id and $wpdb->postmeta.meta_key = '_thumbnail_id' and $wpdb->posts.post_type='post' limit 12");


        $data['testi_datas'] = $testiModel->findAll();
        //$data['blogdata'] = $blogModel->where('post_type', 'post')->findAll(12);
        $data['page_datas'] = $PagesModel->where('id', 1)->first();
        $data['need_pitchdeck'] = $PageSettingsModel->where('page_id', 1)->first();
        $data['services_datas'] = $ServicesModel->findAll(); 
        
       
        return view('templates/public_header', $data)
        .view('frontend/home', $data)
        .view('templates/public_footer');
    }


public function about_us()
    {
        $PagesModel = new PagesModel();
        $data['page_datas'] = $PagesModel->where('id', 2)->first();
        return view('templates/public_header',$data)
        .view('frontend/about',$data)
        .view('templates/public_footer');
    }


    public function video_pitch()
    {
        $PagesModel = new PagesModel();
        $data['page_datas'] = $PagesModel->where('id', 3)->first();
        return view('templates/public_header',$data)
        .view('frontend/video_pitch',$data)
        .view('templates/public_footer');
    }



public function contact_us()
    {
        $PagesModel = new PagesModel();
        $data['page_datas'] = $PagesModel->where('id', 4)->first();
        return view('templates/public_header',$data)
        .view('frontend/contact',$data)
        .view('templates/public_footer');
    }

    function request_sendMail() { 
        helper(['form', 'url']);
        $session = session();
        $ContactusModel = new ContactusModel();
        
        $first_name = $this->request->getVar('first_name');
        $emailid = $this->request->getVar('emailid');
        $phonenum = $this->request->getVar('phonenum');
        $sub = $this->request->getVar('sub');
        $messagebox = $this->request->getVar('message');
        
        
        $subject = "Contact Us | Pitch n Grow";

        $message    = "<h3>Contact Us<br></h3>";
        $message    .= "<p><b>Name: </b>".$first_name."</p> 
                    <p><b>Email: </b>".$emailid."</p> 
                    <p><b>Phone Number: </b>".$phonenum."</p>
                    <p><b>Startup stage: </b>".$sub."</p>
                    <p><b>Message: </b>".$messagebox."</p>";
                   

        $email = \Config\Services::email();
        $date = date('d-m-Y');
        $email->setTo('farhan.haider@milleniance.com');

        $email->setFrom('no-reply@milleniance.com', 'Easy to Pitch');
        $email->setSubject($subject);
        $email->setMessage($message); 
        if ($email->send()) 
        {

          $data = [
                'name'=>$first_name,
                'email'=>$emailid,
                'phone_num'=>$phonenum,
                'message'=>$messagebox,
                'startup_stage'=>$sub
                
       ];

        $save = $ContactusModel->insert($data);

            if($save){
                $session->setFlashdata('success', 'Your Request has been successfully submitted.');
                return redirect()->to('/contact-us');

            }else{
                
                $session->setFlashdata('error', 'Mail Not Send.');
                return redirect()->to('/contact-us');
            }

       }else{
           $session->setFlashdata('error', 'Mail Not Send.');
           return redirect()->to('/contact-us');
       }


}

public function get_funding()
    {
        $PagesModel = new PagesModel();
        $data['page_datas'] = $PagesModel->where('id', 5)->first();
        return view('templates/public_header',$data)
        .view('frontend/funding',$data)
        .view('templates/public_footer');
    }
public function investor()
    {
        $PagesModel = new PagesModel();
        $data['page_datas'] = $PagesModel->where('id', 5)->first();
        return view('templates/public_header',$data)
        .view('frontend/investor',$data)
        .view('templates/public_footer');
    }
public function services()
    {
        $PagesModel = new PagesModel();
        $data['page_datas'] = $PagesModel->where('id', 6)->first();
        return view('templates/public_header',$data)
        .view('frontend/service',$data)
        .view('templates/public_footer');
    }

public function blog()
    {
        $PagesModel = new PagesModel();
        $data['page_datas'] = $PagesModel->where('id', 7)->first();
        return view('templates/public_header',$data)
        .view('frontend/blog',$data)
        .view('templates/public_footer');
    }
public function blogDetail()
    {
        $PagesModel = new PagesModel();
        $data['page_datas'] = $PagesModel->where('id', 8)->first();
        return view('templates/public_header',$data)
        .view('frontend/blog-detail',$data)
        .view('templates/public_footer');
    }


    public function testpage(){
        $testModel = new FrontendModel();
        $data['test_datas'] = $testModel->findAll();

       return view('templates/public_header')
        .view('frontend/test', $data)
        .view('templates/public_footer');

    }

    public function testaction(){
                    $testModel = new FrontendModel();
                    $dataval = $this->request->getPost();
                    $aa = 'aaval';
                    $bb = 'bbval';
                    $arraval = array('aa'=>$aa, 'bb'=>$bb);
                    $allarray = array_merge($arraval, $dataval);

                    foreach($allarray as $key => $val){
                       if($val=='Submit') continue;
                    $data = [
                                'meta_key'=>$key,
                                'meta_value'=>$val,
                                'field_name'=>'home_banner'
                            ]; 
                         $testModel->insert($data);
                   }
     }


}
