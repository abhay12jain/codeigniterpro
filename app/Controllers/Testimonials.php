<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TestimonialsModel;

class Testimonials extends BaseController
{
   
    public function index(){
        $testiModel = new TestimonialsModel();
        $data = [
            'testi_datas' => $testiModel->paginate(10),
            'pager' => $testiModel->pager
        ];
       
        echo view('templates/admin_header')
        .view('admin/testimonial/view_testimonials', $data)
        .view('templates/admin_footer');
    }
    
    public function create(){
        return view('templates/admin_header')
        .view('admin/testimonial/add_testimonials')
        .view('templates/admin_footer');
    }

public function store()
   {  
 
     helper(['form', 'url']);
         
             $testiModel = new TestimonialsModel();
             $title = $this->request->getVar('title_data');
             $designation = $this->request->getVar('designation');
             $description = $this->request->getVar('description');
             $submit_date = date('d-m-Y');
             $avatar = $this->request->getFile('file');
             $imageCheck = $avatar->getClientName();
             if($imageCheck) {
             $validated = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,1024]',
            ],
        ]);
 
       if (!$validated) {
            $msg = 'Only allow file type [jpg,jpeg,png and gif] and image size should be less than 1 MB';
        }else{
             $avatar = $this->request->getFile('file');
             $newName = $avatar->getRandomName();
             $avatar->move(ROOTPATH . 'uploads', $newName);
        
             $data = [
                'title'=>$title,
                'description'=>$description,
                'designation'=>$designation,
                'submit_date'=>$submit_date,
                'image_name' =>  $newName,
                'image_type'  => $avatar->getClientMimeType()
            ];

                    //print_r($data); exit;

             $save = $testiModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';
              }
        }
            }else{

                $data = [
                'title'=>$title,
                'description'=>$description,
                'designation'=>$designation,
                'submit_date'=>$submit_date
            ];

            $save = $testiModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';

              }

            }

       return redirect()->to( base_url('admin/add_testimonials') )->with('msg', $msg);
    }


    // show single testimonial
    public function singleTestimonial($id = null){
        $testiModel = new TestimonialsModel();
        $data['testi_obj'] = $testiModel->where('id', $id)->first();
        
        return view('templates/admin_header')
        .view('admin/testimonial/edit_testimonials', $data)
        .view('templates/admin_footer');

    }
    // update testimonial data
    public function update(){
        $userModel = new TestimonialsModel();
        $id = $this->request->getVar('id');


         helper(['form', 'url']);
         
             $testiModel = new TestimonialsModel();
             $title = $this->request->getVar('title_data');
             $designation = $this->request->getVar('designation');
             $description = $this->request->getVar('description');
           
             
             $avatar = $this->request->getFile('file');
             $imageCheck = $avatar->getClientName();

        if($imageCheck) {

                     $validated = $this->validate([
                        'file' => [
                            'uploaded[file]',
                            'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                            'max_size[file,1024]',
                          ],
                     ]);
 
                   if (!$validated) {

                        $msg = 'Only allow file type [jpg,jpeg,png and gif] and image size should be less than 1 MB';

                    }else{
                         $avatar = $this->request->getFile('file');
                         
                         $newName = $avatar->getRandomName();
                         $avatar->move(ROOTPATH . 'uploads', $newName);
                    
                         $data = [
                            'title'=>$title,
                            'description'=>$description,
                            'designation'=>$designation,
                            'image_name' =>  $newName,
                            'image_type'  => $avatar->getClientMimeType()
                        ];

                                 $save = $testiModel->update($id, $data);

                                  if($save){
                                    $msg = 'Data Updated Successfully.';
                                  }else{
                                    $msg = 'Data Not Updated.';
                                  }
                    }


            }else{

                $data = [
                'title'=>$title,
                'description'=>$description,
                'designation'=>$designation
                 ];

            $save = $testiModel->update($id, $data);

                      if($save){
                        $msg = 'Data Updated Successfully.';
                      }else{
                        $msg = 'Data Not Updated.';

                      }

            }

       return redirect()->to( base_url('admin/view_testimonials') )->with('msg', $msg);


        
    }
 
    // delete testimonial
    public function delete($id = null){
        $testiModel = new TestimonialsModel();
        $data['testi_data_delete'] = $testiModel->where('id', $id)->delete($id);

             if($data){
                $msg = 'Data Deleted Successfully.';
              }else{
                $msg = 'Data Not Updated.';

              }
        return redirect()->to( base_url('admin/view_testimonials') )->with('msg', $msg);
    }    

}



