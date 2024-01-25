<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PagesModel;
use App\Models\PageSettingsModel;


class Page extends BaseController
{
   
    public function index(){
        $PagesModel = new PagesModel();
            $data = [
                'page_datas' => $PagesModel->paginate(10),
                'pager' => $PagesModel->pager
            ];
       
        echo view('templates/admin_header')
        .view('admin/pages/view_page', $data)
        .view('templates/admin_footer');
    }
    
    public function create(){
        return view('templates/admin_header')
        .view('admin/pages/add_page')
        .view('templates/admin_footer');
    }

    public function store()
    {  
 
     helper(['form', 'url']);
         
             $PagesModel = new PagesModel();
             $title = $this->request->getVar('title_data');
             $description = $this->request->getVar('description');
             $meta_title = $this->request->getVar('meta_title');
             $page_status = $this->request->getVar('page_status');
             $meta_description = $this->request->getVar('meta_description');
             $meta_keywords = $this->request->getVar('meta_keywords');
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
                'page_title'=>$title,
                'page_description'=>$description,
                'page_status'=>$page_status,
                'meta_title'=>$meta_title,
                'page_status'=>$page_status,
                'meta_description'=> $meta_description,
                'meta_keywords'=>$meta_keywords,
                'submit_date'=>$submit_date,
                'featured_image' =>  $newName,
                'image_type'  => $avatar->getClientMimeType()
            ];

                    //print_r($data); exit;

             $save = $PagesModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';
              }
        }
            }else{

                $data = [
                'page_title'=>$title,
                'page_description'=>$description,
                'page_status'=>$page_status,
                'meta_title'=>$meta_title,
                'page_status'=>$page_status,
                'meta_description'=> $meta_description,
                'meta_keywords'=>$meta_keywords,
                'submit_date'=>$submit_date,
            ];

            $save = $PagesModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';

              }

            }

       return redirect()->to( base_url('admin/add_page') )->with('msg', $msg);
    }


    // show single page
    public function singlePage($id = null){

        $PagesModel = new PagesModel();
        $data['page_obj'] = $PagesModel->where('id', $id)->first();

        $PageSettingsModel = new PageSettingsModel();
        $data['pagesetting_obj'] = $PageSettingsModel->where('page_id', $id)->first();
        
        return view('templates/admin_header')
        .view('admin/pages/edit_page', $data)
        .view('templates/admin_footer');

    }
    // update page data
    public function update(){
        $userModel = new PagesModel();
        $id = $this->request->getVar('id');


         helper(['form', 'url']);
         
             $PagesModel = new PagesModel();
              $title = $this->request->getVar('title_data');
             $description = $this->request->getVar('description');
             $meta_title = $this->request->getVar('meta_title');
             $page_status = $this->request->getVar('page_status');
             $meta_description = $this->request->getVar('meta_description');
             $meta_keywords = $this->request->getVar('meta_keywords');
             $submit_date = date('d-m-Y');
             $avatar = $this->request->getFile('file');
             $imageCheck = $avatar->getClientName();
             
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
                                'page_title'=>$title,
                                'page_description'=>$description,
                                'page_status'=>$page_status,
                                'meta_title'=>$meta_title,
                                'page_status'=>$page_status,
                                'meta_description'=> $meta_description,
                                'meta_keywords'=>$meta_keywords,
                                'submit_date'=>$submit_date,
                                'featured_image' =>  $newName,
                                'image_type'  => $avatar->getClientMimeType()
                         ];

                                 $save = $PagesModel->update($id, $data);

                                  if($save){
                                    $msg = 'Page Updated Successfully.';
                                  }else{
                                    $msg = 'Page Not Updated.';
                                  }
                    }


            }else{

                $data = [
                'page_title'=>$title,
                'page_description'=>$description,
                'page_status'=>$page_status,
                'meta_title'=>$meta_title,
                'page_status'=>$page_status,
                'meta_description'=> $meta_description,
                'meta_keywords'=>$meta_keywords,
                'submit_date'=>$submit_date,
            ];

            $save = $PagesModel->update($id, $data);

                      if($save){
                        $msg = 'Page Updated Successfully.';
                      }else{
                        $msg = 'Page Not Updated.';

                      }

            }

       return redirect()->to( base_url('admin/view_page') )->with('msg', $msg);


        
    }
 
    // delete page
    public function delete($id = null){
        $PagesModel = new PagesModel();
        $data['page_delete'] = $PagesModel->where('id', $id)->delete($id);

             if($data){
                $msg = 'Page Deleted Successfully.';
              }else{
                $msg = 'Page Not Updated.';

              }
        return redirect()->to( base_url('admin/view_page') )->with('msg', $msg);
    }


    //Add Need Pitchek.    
       
    public function add_pitchdeck(){

         $PageSettingsModel = new PageSettingsModel();
         $pitchdeck_heading = $this->request->getVar('pitchdeck_heading');
         $pitchdeck_description = $this->request->getVar('pitchdeck_description');
         $page_id = $this->request->getVar('page_id');
         $getFile = $this->request->getFile('pitch_file');
         $imageName = $getFile->getClientName();
         $submit_date = date('d-m-Y');



         $data = [
                     'pitchdeck_left_img'=>$imageName,
                     'pitchdeck_heading'=>$pitchdeck_heading,
                     'pitchdeck_description'=>$pitchdeck_description,
                     'page_id'=>$page_id,
                     'submit_date'=>$submit_date
                ]; 

                $PageSettingsModel->insert($data);

                if($data){
                $msg = 'Page updated Successfully.';
              }else{
                $msg = 'Page Not Update.';

              }




        return redirect()->to( base_url('admin/view_page') )->with('msg', $msg);
         
    }

   // Update Pitchdeck
    public function update_pitchdeck(){

         $PageSettingsModel = new PageSettingsModel();
         $pitchdeck_heading = $this->request->getVar('pitchdeck_heading');
         $pitchdeck_description = $this->request->getVar('pitchdeck_description');
         $page_id = $this->request->getVar('page_id');
         $update_id = $this->request->getVar('update_id');
         $getFile = $this->request->getFile('pitch_file');
         $imageCheck = $getFile->getClientName();

         $submit_date = date('d-m-Y');


       if($imageCheck) {

                     $validated = $this->validate([
                        'file' => [
                            'uploaded[pitch_file]',
                            'mime_in[pitch_file,image/jpg,image/jpeg,image/gif,image/png]',
                            'max_size[pitch_file,1024]',
                          ],
                     ]);
 
                    if (!$validated) {

                        $msg = 'Only allow file type [jpg,jpeg,png and gif] and image size should be less than 1 MB';

                    }else{
                         $avatar = $this->request->getFile('pitch_file');
                         $imageName = $getFile->getRandomName();
                         $getFile->move(ROOTPATH . 'uploads', $imageName);


                    $data = [
                     'pitchdeck_left_img'=>$imageName,
                     'pitchdeck_heading'=>$pitchdeck_heading,
                     'pitchdeck_description'=>$pitchdeck_description,
                     'page_id'=>$page_id,
                     'submit_date'=>$submit_date
                    ]; 



                $data = $PageSettingsModel->update($update_id, $data);

                if($data){
                $msg = 'Page updated Successfully.';
              }else{
                $msg = 'Page Not Update.';

              }
          }

    }else{


        $data = [
                     
                     'pitchdeck_heading'=>$pitchdeck_heading,
                     'pitchdeck_description'=>$pitchdeck_description,
                     'page_id'=>$page_id,
                     'submit_date'=>$submit_date
                ]; 

                

                $data = $PageSettingsModel->update($update_id, $data);

                if($data){
                $msg = 'Page updated Successfully.';
              }else{
                $msg = 'Page Not Update.';

              }

               

    }

          return redirect()->to( base_url('admin/view_page') )->with('msg', $msg);    
       
    }

}



