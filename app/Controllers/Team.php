<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TeamModel;

class Team extends BaseController
{
   
    // Load all team members
    public function index(){
        $teamModel = new TeamModel();
        $data = [
            'team_data' => $teamModel->paginate(10),
            'pager' => $teamModel->pager
        ];
       
        echo view('templates/admin_header')
        .view('admin/team/view_team', $data)
        .view('templates/admin_footer');
    }
    
    // Load add team form
    public function create(){
        return view('templates/admin_header')
        .view('admin/team/add_team')
        .view('templates/admin_footer');
    }

   // show single team
    public function store()
     {  
     helper(['form', 'url']);
         
             $teamModel = new TeamModel();
             $title = $this->request->getVar('title_data');
             $designation = $this->request->getVar('designation');
             $description = $this->request->getVar('description');
             $meta_title = $this->request->getVar('meta_title');
             $fb_url = $this->request->getVar('fb_url');
             $twitter_url = $this->request->getVar('twitter_url');
             $linkedin_url = $this->request->getVar('linkedin_url');
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
                'member_name'=>$title,
                'description'=>$description,
                'designation'=>$designation,
                'meta_title'=>$meta_title,
                'fb_url'=>$fb_url,
                'twitter_url'=>$twitter_url,
                'linkedin_url'=>$linkedin_url,
                'meta_description'=>$meta_description,
                'meta_keywords'=>$meta_keywords,
                'submit_date'=>$submit_date,
                'team_image' =>  $newName
                
            ];

                    //print_r($data); exit;

             $save = $teamModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';
              }
        }
            }else{

                $data = [
                'member_name'=>$title,
                'description'=>$description,
                'designation'=>$designation,
                'meta_title'=>$meta_title,
                'fb_url'=>$fb_url,
                'twitter_url'=>$twitter_url,
                'linkedin_url'=>$linkedin_url,
                'meta_description'=>$meta_description,
                'meta_keywords'=>$meta_keywords,
                'submit_date'=>$submit_date
            ];

            $save = $teamModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';

              }

            }

       return redirect()->to( base_url('admin/add_team') )->with('msg', $msg);
    }


    // show single testimonial
    public function singleTeam($id = null){
        $teamModel = new TeamModel();
        $data['testi_obj'] = $teamModel->where('id', $id)->first();
        
        return view('templates/admin_header')
        .view('admin/team/edit_team', $data)
        .view('templates/admin_footer');

    }

    // update testimonial data
    public function update(){
        $id = $this->request->getVar('id');
         helper(['form', 'url']);
         
             $teamModel = new TeamModel();
             $title = $this->request->getVar('title_data');
             $designation = $this->request->getVar('designation');
             $description = $this->request->getVar('description');
             $fb_url = $this->request->getVar('fb_url');
             $twitter_url = $this->request->getVar('twitter_url');
             $linkedin_url = $this->request->getVar('linkedin_url');
             $meta_title = $this->request->getVar('meta_title');
             $meta_description = $this->request->getVar('meta_description');
             $meta_keywords = $this->request->getVar('meta_keywords');
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
                            'member_name'=>$title,
                            'description'=>$description,
                            'designation'=>$designation,
                            'meta_title'=>$meta_title,
                            'fb_url'=>$meta_title,
                            'twitter_url'=>$meta_title,
                            'linkedin_url'=>$meta_title,
                            'meta_description'=>$meta_description,
                            'meta_keywords'=>$meta_keywords,
                            'team_image' =>  $newName,
                            'image_type'  => $avatar->getClientMimeType()
                        ];

                                 $save = $teamModel->update($id, $data);
                                  if($save){
                                    $msg = 'Data Updated Successfully.';
                                  }else{
                                    $msg = 'Data Not Updated.';
                                  }
                    }


            }else{

                $data = [
                'member_name'=>$title,
                'description'=>$description,
                'designation'=>$designation,
                'fb_url'=>$meta_title,
                'twitter_url'=>$meta_title,
                'linkedin_url'=>$meta_title,
                'meta_title'=>$meta_title,
                'meta_description'=>$meta_description,
                'meta_keywords'=>$meta_keywords
                
            ];

            $save = $teamModel->update($id, $data);

                      if($save){
                        $msg = 'Data Updated Successfully.';
                      }else{
                        $msg = 'Data Not Updated.';

                      }
            }
       return redirect()->to( base_url('admin/view_team') )->with('msg', $msg);
    }
 
    // delete testimonial
    public function delete_team($id = null){
        $teamModel = new TeamModel();
        $data['team_data_delete'] = $teamModel->where('id', $id)->delete($id);
             if($data){
                $msg = 'Data Deleted Successfully.';
              }else{
                $msg = 'Data Not Updated.';
              }
        return redirect()->to( base_url('admin/view_team') )->with('msg', $msg); 
    }    
}



