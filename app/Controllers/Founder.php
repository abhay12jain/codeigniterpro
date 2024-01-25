<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BookfounderModel;

class Founder extends BaseController
{
   
    // Load all founders members
    public function index(){
        $BookfounderModel = new BookfounderModel();
        $data = [
            'founders_data' => $BookfounderModel->paginate(10),
            'pager' => $BookfounderModel->pager
        ];
       
        echo view('templates/admin_header')
        .view('admin/founder/view_founder', $data)
        .view('templates/admin_footer');
    }
    
    // Load add founders form
    public function create(){
        return view('templates/admin_header')
        .view('admin/founder/add_founder')
        .view('templates/admin_footer');
    }

   // show single founders
    public function store()
     {  
     helper(['form', 'url']);
         
             $BookfounderModel = new BookfounderModel();

             $title = $this->request->getVar('title_data');
             $designation = $this->request->getVar('designation');
             $description = $this->request->getVar('description');
             
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
                'founder_name'=>$title,
                'founder_designation'=>$designation,
                'description'=>$description,
                'price'=>$price,
                'submit_date'=>$submit_date,
                'team_image' =>  $newName
                
            ];

             //print_r($data); exit;
             $save = $BookfounderModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';
              }
        }
            }else{

                $data = [
                'founder_name'=>$title,
                'founder_designation'=>$designation,
                'description'=>$description,
                'price'=>$price,
                'submit_date'=>$submit_date
            ];

            $save = $BookfounderModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';

              }

            }

       return redirect()->to( base_url('admin/add_founder') )->with('msg', $msg);
    }


    // show single founder
    public function singleFounder($id = null){
        $BookfounderModel = new BookfounderModel();
        $data['founder_obj'] = $BookfounderModel->where('id', $id)->first();
        return view('templates/admin_header')
        .view('admin/founder/edit_founder', $data)
        .view('templates/admin_footer');

    }

    // update founder data
    public function update(){
        $id = $this->request->getVar('id');
         helper(['form', 'url']);
         
             $BookfounderModel = new BookfounderModel();
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
                            'founder_name'=>$title,
                            'founder_designation'=>$designation,
                            'expertise'=>$expertise,
                            'description'=>$description,
                            'price'=>$price,
                            'submit_date'=>$submit_date,
                            'team_image' =>  $newName
                        ];

                                 $save = $BookfounderModel->update($id, $data);
                                  if($save){
                                    $msg = 'Data Updated Successfully.';
                                  }else{
                                    $msg = 'Data Not Updated.';
                                  }
                    }


            }else{

                $data = [
                'founder_name'=>$title,
                'founder_designation'=>$designation,
                'expertise'=>$expertise,
                'description'=>$description,
                'price'=>$price,
                'submit_date'=>$submit_date
                
                
            ];

            $save = $BookfounderModel->update($id, $data);

                      if($save){
                        $msg = 'Data Updated Successfully.';
                      }else{
                        $msg = 'Data Not Updated.';

                      }
            }
       return redirect()->to( base_url('admin/view_founder') )->with('msg', $msg);
    }
 
    // delete founder
    public function delete_founder($id = null){
        $BookfounderModel = new BookfounderModel();
        $data['founders_data_delete'] = $BookfounderModel->where('id', $id)->delete($id);
             if($data){
                $msg = 'Data Deleted Successfully.';
              }else{
                $msg = 'Data Not Updated.';
              }
        return redirect()->to( base_url('admin/view_founder') )->with('msg', $msg); 
    }    
}



