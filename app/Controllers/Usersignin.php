<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserfrontModel;
use App\Models\DocumentUserModel;

  
class Usersignin extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('frontend/signin');
    } 
  
    public function loginAuthfront()
    {
        $session = session();
        $dbdata = new DocumentUserModel();
        
        $email = $this->request->getVar('email_id');
        $password = $this->request->getVar('password');
        
        $data = $dbdata->where('email_id', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'full_name' => $data['full_name'],
                    'organization' => $data['company_name'],
                    'email_id' => $data['email_id'],
                    'circle' => $data['circle'],
                    'role'=>$data['role'],
                    'pitchUserLogged' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin/dashboard?action=success');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }



public function forgot_password(){
    $session = session();
    $UserfrontModel = new UserfrontModel();
    
        $data = [];
        if($this->request->getMethod()=='post'){
             $rules = [
                'email_id'=>[
                    'label' => 'Email',
                    'rules'=> 'required|valid_email',
                    'errors' => [
                        'required' =>'{field} field required',
                        'valid_email' => 'Valid {field} required'
                    ]
                ],
            ];
             if($this->validate($rules)){
                $emailid = $this->request->getVar('email_id',FILTER_SANITIZE_EMAIL);
                $session->set('forgot_email',$emailid);
                 
                 $userdata = $UserfrontModel->verifyEmail($emailid);
                 if(!empty($userdata)){

                   
                $subject = "Pitch n Grow | Forgot Your Password? We Got You Covered!";

                //$message    = "<h3>Reset Your Password by click on link below.<br></h3>";
                $message    = "<p><b>Click below to reset your password: </b><br>".base_url().'/reset_password_link/'.md5($emailid)."</p>";
                $message    .="Let’s Pitch n Grow!";
                           
                $email = \Config\Services::email();
                $date = date('d-m-Y');
                $email->setTo($emailid);

                $email->setFrom('no-reply@milleniance.com', 'Pitch n Grow');
                $email->setSubject($subject);
                $email->setMessage($message); 
                if ($email->send()) 
                {
                   $session->setFlashdata('success','Please click on the Link sent to your email id.',3);  
                }
                    //$session->setFlashdata('success','Email Exists',3);
                     //return redirect()->to(current_url());
                 }else{
                    $session->setFlashdata('error','Email does not exists',3);
                    return redirect()->to(current_url());
                 }
             }
             else{
                 $data['validation']=$this->validator;
             }
        }
        return view("frontend/forgotpwd",$data);
    }

public function reset_password($token=null){
    $session = session();
    $forgot_email = $session->get('forgot_email');

    if($token == md5($forgot_email)){
        return view('frontend/resetpwd');
    }else{
        return view('frontend/invalidresetpwd');
    }
       
}

public function reset_password_data(){
       $session = session();
       $email = $session->get('forgot_email');
       if(!$email){
          return view('frontend/invalidresetpwd');
       }
       $UserfrontModel = new UserfrontModel();
       $id = $UserfrontModel->Select('id')->where('email_id', $email)->first();

        if($this->request->getMethod()=='post'){
                       $rules = [
                           'pwd' => [
                               'label' =>'Password',
                               'rules' => 'required|min_length[6]|max_length[16]',
                           ],
                           'cpwd' => [
                               'label' => 'Confirm Password',
                               'rules' => 'required|matches[pwd]'
                           ],
                       ];
       if($this->validate($rules)){
           $pwd = password_hash($this->request->getVar('pwd'),PASSWORD_DEFAULT);
           if($UserfrontModel->updatePassword($id['id'],$pwd)){
               $session->setFlashdata('success_message','Password Successfully Updated.',3);
              // return redirect()->to(base_url().'/signin');
           }
           else{
               session()->setTempdata('error_message','Sorry! Unablr to update Password. try again',3);
               return redirect()->to(current_url());
           }
       }else{
           $data['validation'] = $this->validator;
       }
                   }
                
            
        return view('frontend/resetpwd');
    }


}