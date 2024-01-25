<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CreditsModel;
use App\Models\CreditscategoryModel;
use App\Models\CreditscollectionModel;
use App\Models\CreditsquestionModel;

class Credits extends BaseController
{
   
    // Load all credits members
    public function index(){
        $CreditsModel = new CreditsModel();
        $data = [
            'credits_data' => $CreditsModel->paginate(10),
            'pager' => $CreditsModel->pager
        ];
        echo view('templates/admin_header')
        .view('admin/credits/view_credit', $data)
        .view('templates/admin_footer');
    }


public function index_category(){
        $CreditscategoryModel = new CreditscategoryModel();
        $data = [
            'credits_cat_data' => $CreditscategoryModel->paginate(10),
            'pager' => $CreditscategoryModel->pager
        ];
        echo view('templates/admin_header')
        .view('admin/credits/view_credit_category', $data)
        .view('templates/admin_footer');
    }

    // Load all credits members
    public function list_questions($id){
        $CreditsquestionModel = new CreditsquestionModel();
        $data = [
            'questions_data' => $CreditsquestionModel->where('company_id',$id)->paginate(10),
            'pager' => $CreditsquestionModel->pager
        ];
        echo view('templates/admin_header')
        .view('admin/credits/view_questions', $data)
        .view('templates/admin_footer');
    }
    
    // Load add credits form
    public function create(){
        $CreditsModel = new CreditsModel();
        $CreditscategoryModel = new CreditscategoryModel();
        $data['credits_data'] = $CreditsModel->findall();
        $data['credits_cat_data'] = $CreditscategoryModel->findall();
        return view('templates/admin_header')
        .view('admin/credits/add_credit',$data)
        .view('templates/admin_footer');
    }

    // Load add credits category form
    public function create_category(){
        $CreditscategoryModel = new CreditscategoryModel();
        $data['credits_category_data'] = $CreditscategoryModel->findall();
        return view('templates/admin_header')
        .view('admin/credits/add_credit_category')
        .view('templates/admin_footer');
    }

  public function category_store(){
     $CreditscategoryModel = new CreditscategoryModel();
     $category_name = $this->request->getVar('category_name');
     $data = [
                'category_name'=>$category_name
            ];

             //print_r($data); exit;
             $save = $CreditscategoryModel->insert($data);

              if($save){
                $msg = 'Category Added Successfully.';
              }else{
                $msg = 'Category Not Added.';
              }

              return redirect()->to( base_url('admin/add_credit_category') )->with('msg', $msg);
  }


   // show single credits
    public function store()
     {  
     helper(['form', 'url']);
         
             $CreditsModel = new CreditsModel();
             $title = $this->request->getVar('title_data');
             $category_id = $this->request->getVar('cat_data');
             $credit_amount = $this->request->getVar('credit_amount');
             $url = $this->request->getVar('url_data');
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
                'url'=>$url,
                'category_id'=>$category_id,
                'credit_amount'=>$credit_amount,
                'submit_date'=>$submit_date,
                'image' =>  $newName
                
            ];

             //print_r($data); exit;
             $save = $CreditsModel->insert($data);

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
                'url'=>$url,
                'credit_amount'=>$credit_amount,
                'category_id'=>$category_id,
                'submit_date'=>$submit_date
                
            ];

            $save = $CreditsModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';

              }

            }

       return redirect()->to( base_url('admin/add_credit') )->with('msg', $msg);
    }


    // show single testimonial
    public function singlecredit($id = null){
        $CreditsModel = new CreditsModel();
        $CreditscategoryModel = new CreditscategoryModel();
        $data['credit_obj'] = $CreditsModel->where('id', $id)->first();
        $data['credits_cat_data'] = $CreditscategoryModel->findall();
        return view('templates/admin_header')
        .view('admin/credits/edit_credit', $data)
        .view('templates/admin_footer');

    }

    public function singlecreditcategory($id = null){
        $CreditscategoryModel = new CreditscategoryModel();
        $data['credit_cat_obj'] = $CreditscategoryModel->where('id', $id)->first();
        return view('templates/admin_header')
        .view('admin/credits/edit_credit_category', $data)
        .view('templates/admin_footer');

    }

    // show single testimonial
    public function singlecreditquestion($id = null){
        $CreditsquestionModel = new CreditsquestionModel();
        $data['credit_question_obj'] = $CreditsquestionModel->where('id', $id)->first();
        return view('templates/admin_header')
        .view('admin/credits/edit_question', $data)
        .view('templates/admin_footer');

    }

    // add questions
    public function credit_questions(){
        $CreditsquestionModel = new CreditsquestionModel();

        return view('templates/admin_header')
        .view('admin/credits/add_questions')
        .view('templates/admin_footer');
    }

     public function credit_questions_store(){

        $CreditsquestionModel = new CreditsquestionModel();
        $credit_questions = $this->request->getVar('credit_questions');
        $company_id = $this->request->getVar('company_id');
        foreach($credit_questions as $credit_question){
            $data = [
                'questions'=>$credit_question,
                'company_id'=>$company_id
            ];

            $save = $CreditsquestionModel->insert($data);
        }
        
        if($save){
          $msg = 'Data Added Successfully.';
        }else{
          $msg = 'Data Not Added.';
        }

         return redirect()->to( base_url('admin/add_credit_questions/'.$company_id) )->with('msg', $msg);
    }

 // update testimonial data
    public function update_question(){
        $id = $this->request->getVar('id');
        $CreditsquestionModel = new CreditsquestionModel();
         helper(['form', 'url']);
         $question = $this->request->getVar('questions');
         $data = [
                    'questions'=>$question,
                    
                ];

         $save = $CreditsquestionModel->update($id, $data);
          if($save){
            $msg = 'Data Updated Successfully.';
          }else{
            $msg = 'Data Not Updated.';
          }
          return redirect()->to( base_url('admin/edit_question/'.$id) )->with('msg', $msg);
    }


    public function update_categoy(){
        $id = $this->request->getVar('id');
        $CreditscategoryModel = new CreditscategoryModel();
         helper(['form', 'url']);
         $category_name = $this->request->getVar('category_name');
         $data = [
                    'category_name'=>$category_name,
                    
                ];

         $save = $CreditscategoryModel->update($id, $data);
          if($save){
            $msg = 'Data Updated Successfully.';
          }else{
            $msg = 'Data Not Updated.';
          }
          return redirect()->to( base_url('admin/edit_credit_category/'.$id) )->with('msg', $msg);
    }


    // update testimonial data
    public function update(){
        $id = $this->request->getVar('id');
         helper(['form', 'url']);
         
             $CreditsModel = new CreditsModel();
             $title = $this->request->getVar('title_data');
             $url = $this->request->getVar('url_data');
             $description = $this->request->getVar('description');
             $category_id = $this->request->getVar('cat_data');

             $credit_amount = $this->request->getVar('credit_amount');
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
                            'url'=>$url,
                            'credit_amount'=>$credit_amount,
                            'category_id'=>$category_id,
                            'submit_date'=>$submit_date,
                            'image' =>  $newName
                        ];

                                 $save = $CreditsModel->update($id, $data);
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
                'url'=>$url,
                'credit_amount'=>$credit_amount,
                'category_id'=>$category_id,
                'submit_date'=>$submit_date
                
                
                
            ];

            $save = $CreditsModel->update($id, $data);

                      if($save){
                        $msg = 'Data Updated Successfully.';
                      }else{
                        $msg = 'Data Not Updated.';

                      }
            }
       return redirect()->to( base_url('admin/view_credit') )->with('msg', $msg);
    }
 
    // delete testimonial
    public function delete_credit($id = null){
        $CreditsModel = new CreditsModel();
        $data['credits_data_delete'] = $CreditsModel->where('id', $id)->delete($id);
             if($data){
                $msg = 'Data Deleted Successfully.';
              }else{
                $msg = 'Data Not Updated.';
              }
        return redirect()->to( base_url('admin/view_credit'))->with('msg', $msg); 
    }


// delete testimonial
    public function delete_credit_category($id = null){
        $CreditscategoryModel = new CreditscategoryModel();
        $data['credits_cat_delete'] = $CreditscategoryModel->where('id', $id)->delete($id);
             if($data){
                $msg = 'Data Deleted Successfully.';
              }else{
                $msg = 'Data Not Updated.';
              }
        return redirect()->to( base_url('admin/view_credit_category'))->with('msg', $msg); 
    }
    // delete testimonial
    public function delete_question($id = null){
        $CreditsquestionModel = new CreditsquestionModel();
        $data['credits_question_delete'] = $CreditsquestionModel->where('id', $id)->delete($id);
             if($data){
                $msg = 'Data Deleted Successfully.';
              }else{
                $msg = 'Data Not Updated.';
              }
        return redirect()->to( base_url('admin/view_credit'))->with('msg', $msg); 
    }


    // Credit popup fecth
    public function credit_data_fetch(){
     helper(['form', 'url']);
     $CreditsModel = new CreditsModel();
     $category_id = $this->request->getVar('id');
     $data['credit_list_obj'] = $CreditsModel->where('category_id', $category_id)->findall();
     echo view('frontend/dashboard/ajax/credit_ajax', $data);
    }

    public function credit_form_fetch(){
     helper(['form', 'url']);
     $CreditsquestionModel = new CreditsquestionModel();
     $category_id = $this->request->getVar('id');
     $data['credit_questions'] = $CreditsquestionModel->where('company_id', $category_id)->findall();
     echo view('frontend/dashboard/ajax/credit_form_ajax', $data);
    }



// Credit popup fecth
    public function credit_form_data(){
     helper(['form', 'url']);
     $CreditscollectionModel = new CreditscollectionModel();
     $user_id = session()->get('id');
     $category_name = $this->request->getVar('category_name');
     $amount = $this->request->getVar('amount');
     $company_name = $this->request->getVar('company_name');
     $question = $this->request->getVar('question');
     $answer = $this->request->getVar('answer');
$count = count($answer)-1;

for($i=0; $i<=$count; $i++){
        $data = [
                'category'=>$category_name,
                'company'=>$company_name,
                'amount'=>$amount,
                'user_id'=>$user_id,
                'question'=>$question[$i],
                'answer'=>$answer[$i]
                ];

            $save = $CreditscollectionModel->insert($data);
    }
            if($save){
              return redirect()->to( base_url('user/dashboard/credits?action=success'));
            }else{
              $msg = 'Data Not Added.';
              return redirect()->to( base_url('user/dashboard/credits'))->with('msg', $msg);
            }
           
      


    }

}



