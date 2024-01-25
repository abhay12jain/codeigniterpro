<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UserfrontModel;

use App\Models\DocumentUserModel;

use App\Models\TenderModel;

use App\Models\TenderassignModel;
use App\Models\DivisionModel;
use App\Models\CompanyModel;
use App\Models\CircleModel;



class AdminUserlist extends BaseController

{

   

    // Load all pd_users members

    public function index(){

        $DocumentUserModel = new DocumentUserModel();

        $data = [

            'pd_users_data' => $DocumentUserModel->paginate(5),

            'pager' => $DocumentUserModel->pager

        ];

       

        
        return view('templates/admin_header')
        .view('admin_user/pd_users/view_user', $data)
        .view('templates/admin_footer');

    }

    public function detilsuser($id = null){

        $DocumentUserModel = new DocumentUserModel();
        $TendModel = new TenderModel();

        $assignModel = new TenderassignModel();

        $data['user_obj'] = $DocumentUserModel->where('id', $id)->first();

        $data['pre'] = $assignModel->where('user_id',$id)->findall();
        // $data['pre'] = $assignModel->findall();

        $get_d['tend'] = $assignModel->where('user_id', $id)->findall();

       
        $get_id= $assignModel->Select('tender_id')->where('user_id', $id)->first();
        $data['pre'] = $TendModel->where('tender_id', $get_id)->findall();



         // echo "<pre>"; print_r($get_id); echo "</pre>"; exit();

         //client_nme  tender_refer_number

        return view('templates/admin_header')

        .view('admin_user/pd_users/view_review_user', $data)

        .view('templates/admin_footer');



    }

    

    // Load add pd_users form

    public function create(){

        $DivisionModel = new DivisionModel();
        $circModel = new CircleModel();
        $orgModel = new CompanyModel();
        $data['organization_data'] = $orgModel->Select('DISTINCT(company_name)')->find();
        $data['circle'] = $circModel->Select('DISTINCT(circle)')->find();
        $data['state'] = $DivisionModel->Select('DISTINCT(state)')->find();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        // exit();
        return view('templates/admin_header')
        .view('admin_user/pd_users/add_user',$data)
        .view('templates/admin_footer');
    }

 



    public function store()
    {
        helper(['form', 'url']);


             $DocumentUserModel = new DocumentUserModel();

             $employee_id = $this->request->getVar('employe_id');

             $full_name = $this->request->getVar('full_name');

             $email_id = $this->request->getVar('email_id');

             $phone_number = $this->request->getVar('phone_number');

             $password = $this->request->getVar('password');

             $cnfpassword = $this->request->getVar('cnfpassword');

             $circle = $this->request->getVar('org_circle');
             $usercircle = implode(',', $circle);

             $state = $this->request->getVar('state');
             // $userstate = implode(',', $state);

             $zone = $this->request->getVar('zone');

             $role = $this->request->getVar('role');
             $userrole = implode(',', $role);

             $company_name = $this->request->getVar('org_organization');
             $userorg = implode(',', $company_name);
             
             
             

             $submit_date = date('d-m-Y');

             $data = [

                    'employe_id'=>$employee_id,

                    'full_name'=>$full_name,

                    'email_id'=>$email_id,

                    'phone_no'=>$phone_number,

                    'password'=>password_hash($password, PASSWORD_DEFAULT),

                    'conform_password'=>password_hash($cnfpassword, PASSWORD_DEFAULT),

                    'circle'=>$usercircle,

                    'state'=>$state,

                    'zone'=>$zone,

                    'role'=> $userrole,

                    'company_name'=>$userorg,

                    

                    'submit_date'=>$submit_date

               ];
                

             $save = $DocumentUserModel->insert($data);

            //  echo "<pre>";
            // print_r($data);
            // echo "</pre>";

            // exit();



              if($save){

                $msg = 'Data Added Successfully.';

              }else{

                $msg = 'Data Not Added.';



              }
            return redirect()->to( base_url('admin_user/add_user') )->with('msg', $msg);
    }

  





    // show single testimonial

    public function singleuser($id = null){

        $DocumentUserModel = new DocumentUserModel();
        $DivisionModel = new DivisionModel();
        $circModel = new CircleModel();
        $orgModel = new CompanyModel();

        $data['user_obj'] = $DocumentUserModel->where('id', $id)->first();
        $data['circle'] = $circModel->Select('DISTINCT(circle)')->find();
        $data['comp_data'] = $orgModel->Select('DISTINCT(company_name)')->find();

        // echo "<pre>";
        // print_r($sum);
        // echo "</pre>";
        // exit();

        return view('templates/admin_header')

        .view('admin_user/pd_users/edit_user', $data)

        .view('templates/admin_footer');



    }



    // update testimonial data

    public function update()

    {
        $id = $this->request->getVar('id');
        
        helper(['form', 'url']);


             $DocumentUserModel = new DocumentUserModel();
             $employee_id = $this->request->getVar('employe_id');
             $full_name = $this->request->getVar('full_name');
             $email_id = $this->request->getVar('email_id');
             $phone_number = $this->request->getVar('phone_no');
             $password = $this->request->getVar('password');
             $cnfpassword = $this->request->getVar('cnfpassword');
             $zone = $this->request->getVar('zone');
             $circle = $this->request->getVar('org_circle');
             $usercircle = implode(',', $circle);

             $state = $this->request->getVar('state');
             $role = $this->request->getVar('role');
             $userrole = implode(',', $role);
             $company_name = $this->request->getVar('org_organization');
             $userorg = implode(',', $company_name);

             $submit_date = date('d-m-Y');

             $data = [

                    'employe_id'=>$employee_id,
                    'full_name'=>$full_name,
                    'email_id'=>$email_id,
                    'phone_no'=>$phone_number,
                    'password'=>password_hash($password, PASSWORD_DEFAULT),
                    'conform_password'=>password_hash($cnfpassword, PASSWORD_DEFAULT),
                    'zone'=>$zone,
                    'circle'=>$usercircle,
                    'state'=>$state,
                    'role'=> $userrole,
                    'company_name'=>$userorg,
                    'submit_date'=>$submit_date
               ];
        //     echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit();
            if(!$password){
               unset($data['password']);
             }


              
             
             $save = $DocumentUserModel->update($id, $data);
             
             if($save){
                $msg = 'Data Update Successfully.';
              }else{
                $msg = 'Data Not Update.';

              }
            return redirect()->to( base_url('/admin_user/view_user') )->with('msg', $msg);
    }

    // public function update(){

    //     $id = $this->request->getVar('id');

    //      helper(['form', 'url']);

         

    //          $UserfrontModel = new UserfrontModel();

    //          $first_name = $this->request->getVar('first_name');

    //          $last_name = $this->request->getVar('last_name');

    //          $email_id = $this->request->getVar('email_id');

    //          $phone_number = $this->request->getVar('phone_number');

    //          $password = $this->request->getVar('password');

    //          $submit_date = date('d-m-Y');

    //          $avatar = $this->request->getFile('file');

    //          $imageCheck = $avatar->getClientName();



        // if($imageCheck) {



        //              $validated = $this->validate([

        //                 'file' => [

        //                     'uploaded[file]',

        //                     'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',

        //                     'max_size[file,1024]',

        //                   ],

        //              ]);

 

        //            if (!$validated) {

        //                 $msg = 'Only allow file type [jpg,jpeg,png and gif] and image size should be less than 1 MB';

        //             }else{

        //                  $avatar = $this->request->getFile('file');

        //                  $newName = $avatar->getRandomName();

        //                  $avatar->move(ROOTPATH . 'uploads', $newName);

        //                  $data = [

        //                     'first_name'=>$first_name,

        //                     'last_name'=>$last_name,

        //                     'email_id'=>$email_id,

        //                     'phone_number'=>$phone_number,

        //                     'password'=>$password,

        //                     'submit_date'=>$submit_date,

        //                     'user_image' =>  $newName

        //                 ];



        //                          $save = $UserfrontModel->update($id, $data);

        //                           if($save){

        //                             $msg = 'Data Updated Successfully.';

        //                           }else{

        //                             $msg = 'Data Not Updated.';

        //                           }

        //             }





        //     }else{



        //         $data = [

        //                     'first_name'=>$first_name,

        //                     'last_name'=>$last_name,

        //                     'email_id'=>$email_id,

        //                     'phone_number'=>$phone_number,

        //                     'password'=>$password,

        //                     'submit_date'=>$submit_date,

        //         ];



    //         $save = $UserfrontModel->update($id, $data);



    //                   if($save){

    //                     $msg = 'Data Updated Successfully.';

    //                   }else{

    //                     $msg = 'Data Not Updated.';



    //                   }

    //         }

    //    return redirect()->to( base_url('/admin_user/view_user') )->with('msg', $msg);

    // }

 

    // delete testimonial

    public function delete_user($id = null){

        $DocumentUserModel = new DocumentUserModel();

        $data['pd_users_data_delete'] = $DocumentUserModel->where('id', $id)->delete($id);

             if($data){

                $msg = 'Data Deleted Successfully.';

              }else{

                $msg = 'Data Not Updated.';

              }

        return redirect()->to( base_url('/admin_user/view_user') )->with('msg', $msg); 

    }    

}







