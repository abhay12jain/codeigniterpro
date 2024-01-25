<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ServicesModel;

class ServicesCont extends BaseController
{
   
    // Load all services members
    public function index(){
        $ServicesModel = new ServicesModel();
        $data = [
            'services_data' => $ServicesModel->paginate(10),
            'pager' => $ServicesModel->pager
        ];
       
        echo view('templates/admin_header')
        .view('admin/services/view_service', $data)
        .view('templates/admin_footer');
    }
    
    // Load add services form
    public function create(){
        return view('templates/admin_header')
        .view('admin/services/add_service')
        .view('templates/admin_footer');
    }

   // show single services
    public function store()
     {  
     helper(['form', 'url']);
         
             $ServicesModel = new ServicesModel();
             $title = $this->request->getVar('title_data');
             $description = $this->request->getVar('description');
             $status = $this->request->getVar('status');
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
                'service_title'=>$title,
                'service_description'=>$description,
                'status'=>$status,
                'submit_date'=>$submit_date,
                'services_image' =>  $newName
                
            ];

                    //print_r($data); exit;

             $save = $ServicesModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';
              }
        }
            }else{

                $data = [
                'service_title'=>$title,
                'service_description'=>$description,
                'status'=>$status,
                'submit_date'=>$submit_date,
            ];

            $save = $ServicesModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';

              }

            }

       return redirect()->to( base_url('admin/add_service') )->with('msg', $msg);
    }


    // show single testimonial
    public function singleservices($id = null){
        $ServicesModel = new ServicesModel();
        $data['services_obj'] = $ServicesModel->where('id', $id)->first();
        
        return view('templates/admin_header')
        .view('admin/services/edit_service', $data)
        .view('templates/admin_footer');

    }

    // update testimonial data
    public function update(){
        $id = $this->request->getVar('id');
         helper(['form', 'url']);
         
             $ServicesModel = new ServicesModel();
             $title = $this->request->getVar('title_data');
             $description = $this->request->getVar('description');
             $status = $this->request->getVar('status');
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
                            'service_title'=>$title,
                            'service_description'=>$description,
                            'status'=>$status,
                            'submit_date'=>$submit_date,
                            'services_image' =>  $newName
                         ];

                                 $save = $ServicesModel->update($id, $data);
                                  if($save){
                                    $msg = 'Data Updated Successfully.';
                                  }else{
                                    $msg = 'Data Not Updated.';
                                  }
                    }


            }else{

                $data = [
                'service_title'=>$title,
                'service_description'=>$description,
                'status'=>$status,
                'submit_date'=>$submit_date
                
                
            ];

            $save = $ServicesModel->update($id, $data);

                      if($save){
                        $msg = 'Data Updated Successfully.';
                      }else{
                        $msg = 'Data Not Updated.';

                      }
            }
       return redirect()->to( base_url('admin/view_service') )->with('msg', $msg);
    }
 
    // delete testimonial
    public function delete_service($id = null){
        $ServicesModel = new ServicesModel();
        $data['services_data_delete'] = $ServicesModel->where('id', $id)->delete($id);
             if($data){
                $msg = 'Data Deleted Successfully.';
              }else{
                $msg = 'Data Not Updated.';
              }
        return redirect()->to( base_url('admin/view_service') )->with('msg', $msg); 
    }    
}



