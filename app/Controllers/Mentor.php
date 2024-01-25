<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BookmeetingModel;

class Mentor extends BaseController
{
   
    // Load all mentors members
    public function index(){
        $BookmeetingModel = new BookmeetingModel();
        $data = [
            'mentors_data' => $BookmeetingModel->paginate(10),
            'pager' => $BookmeetingModel->pager
        ];
       
        echo view('templates/admin_header')
        .view('admin/mentors/view_mentor', $data)
        .view('templates/admin_footer');
    }
    
    // Load add mentors form
    public function create(){
        return view('templates/admin_header')
        .view('admin/mentors/add_mentor')
        .view('templates/admin_footer');
    }

   // show single mentors
    public function store()
     {  
     helper(['form', 'url']);
         
             $BookmeetingModel = new BookmeetingModel();

             $title = $this->request->getVar('title_data');
             $designation = $this->request->getVar('designation');
             $description = $this->request->getVar('description');
             $expertise = $this->request->getVar('expertise');
             $price = $this->request->getVar('price');
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
                'mentor_name'=>$title,
                'mentor_designation'=>$designation,
                'expertise'=>$expertise,
                'description'=>$description,
                'price'=>$price,
                'submit_date'=>$submit_date,
                'team_image' =>  $newName
                
            ];

             //print_r($data); exit;
             $save = $BookmeetingModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';
              }
        }
            }else{

                $data = [
                'mentor_name'=>$title,
                'mentor_designation'=>$designation,
                'expertise'=>$expertise,
                'description'=>$description,
                'price'=>$price,
                'submit_date'=>$submit_date
            ];

            $save = $BookmeetingModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';

              }

            }

       return redirect()->to( base_url('admin/add_mentor') )->with('msg', $msg);
    }


    // show single testimonial
    public function singleMentor($id = null){
        $BookmeetingModel = new BookmeetingModel();
        $data['testi_obj'] = $BookmeetingModel->where('id', $id)->first();
        return view('templates/admin_header')
        .view('admin/mentors/edit_mentor', $data)
        .view('templates/admin_footer');

    }

    // update testimonial data
    public function update(){
        $id = $this->request->getVar('id');
         helper(['form', 'url']);
         
             $BookmeetingModel = new BookmeetingModel();
             $title = $this->request->getVar('title_data');
             $designation = $this->request->getVar('designation');
             $description = $this->request->getVar('description');
             $expertise = $this->request->getVar('expertise');
             $submit_date = date('d-m-Y');
             $price = $this->request->getVar('price');
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
                            'mentor_name'=>$title,
                            'mentor_designation'=>$designation,
                            'expertise'=>$expertise,
                            'description'=>$description,
                            'price'=>$price,
                            'submit_date'=>$submit_date,
                            'team_image' =>  $newName
                        ];

                                 $save = $BookmeetingModel->update($id, $data);
                                  if($save){
                                    $msg = 'Data Updated Successfully.';
                                  }else{
                                    $msg = 'Data Not Updated.';
                                  }
                    }


            }else{

                $data = [
                'mentor_name'=>$title,
                'mentor_designation'=>$designation,
                'expertise'=>$expertise,
                'description'=>$description,
                'price'=>$price,
                'submit_date'=>$submit_date
                
                
            ];

            $save = $BookmeetingModel->update($id, $data);

                      if($save){
                        $msg = 'Data Updated Successfully.';
                      }else{
                        $msg = 'Data Not Updated.';

                      }
            }
       return redirect()->to( base_url('admin/view_mentor') )->with('msg', $msg);
    }
 
    // delete testimonial
    public function delete_mentor($id = null){
        $BookmeetingModel = new BookmeetingModel();
        $data['mentors_data_delete'] = $BookmeetingModel->where('id', $id)->delete($id);
             if($data){
                $msg = 'Data Deleted Successfully.';
              }else{
                $msg = 'Data Not Updated.';
              }
        return redirect()->to( base_url('admin/view_mentor') )->with('msg', $msg); 
    }    
}



