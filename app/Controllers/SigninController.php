<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\UserfrontModel;
use App\Models\DocumentUserModel; 

class SigninController extends Controller

{

    public function index()
    {
        helper(['form']);
        echo view('admin_user/signin');
    } 


    public function loginAuth()

    {
        $session = session();
        $userModel = new UserfrontModel();
        $email = $this->request->getVar('email_id');
        $password = $this->request->getVar('password');        
        $data = $userModel->where('email_id', $email)->first();

        if($data){
        $pass = $data['password'];
        $authenticatePassword = password_verify($password, $pass);
        if($authenticatePassword){
        $ses_data = [
                    'admin_id' => $data['id'],
                    'email_id' => $data['email_id'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to('/admin_user/dashboard');
        }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/admin_user');
        }

        }else{
                $session->setFlashdata('msg', 'Email does not exist.');
                return redirect()->to('/admin_user');
        }

    }

}