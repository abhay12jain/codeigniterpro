<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserfrontModel;
  
class Usersignup extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('frontend/signup');
    } 
  
    public function otp(){
        $email_id = $this->request->getVar('email_id');
        $UserfrontModel = new UserfrontModel();
        $emailExists = $UserfrontModel->where('email_id',$email_id)->first();

      if($email_id){
        
        if($emailExists){
            echo "Email Already Exists";
            }else{
                       
                $session = session();
                $otp = rand (1000 , 9999);
                $session->set('otp_val', $otp);

                $otp = $session->get('otp_val');
                $subject = "Pitch n Grow | Email Verification OTP";
                $message    = "<h3>Use the below OTP to verify your email<br></h3>";
                $message    .= "<p><b>OTP: </b>".$otp."</p>";
                $message    .= "Let’s Pitch n Grow!";
                
                $email = \Config\Services::email();
                $date = date('d-m-Y');
                $email->setTo($email_id, 'Pitch n Grow');

                $email->setFrom('no-reply@milleniance.com', 'Pitch n Grow');
                $email->setSubject($subject);
                $email->setMessage($message); 
                if ($email->send()) 
                {
                    echo "4 Digit OTP Sent to your entered email address";
                }else{
                    echo "OTP Not Sent";
                }
            }
        }
    }

    public function verify_email()
    {
        $session = session();  
        $otp = $this->request->getVar('otp');
        $sesOtp = $session->get('otp_val');
        if($sesOtp==$otp){
            return true;
        }else{
            return false;
        } 
    }

    public function validate_otp(){

        if($this->verify_email()==true){
            echo "OTP Matched";
         }else{
            echo "OTP Not Matched";
         }
    }

    public function store()
    {

        helper(['form']);
        $date = date('d-m-Y');

           

       
        $rules = [
            
            'email_id'  => [
                'label'  => 'Email id',
                'rules'=>'required|min_length[4]|max_length[100]|valid_email|is_unique[pd_users.email_id]',
                'errors' => [
                               'is_unique' => 'Email Already Exists.'
                            ]
            ],
            'phone_number'  => [
                'label'  => 'Phone Number',
                'rules'=>'required|min_length[10]|max_length[10]|is_unique[pd_users.phone_number]',
                'errors' => [
                               'is_unique' => 'Phone Number Already Exists.'
                            ]
            ],
            'password'  => 'required|min_length[4]|max_length[50]',
            'confirm_password'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $session = session();
            $database = db_connect();
            $builder = $database->table('pd_users');
            $otp =  $this->request->getVar('otp');
            $data = [
                
                'email_id'    => $this->request->getVar('email_id'),
                'phone_number'    => $this->request->getVar('phone_number'),
                'status'=>'Active',
                'submit_date'=>$date,
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $builder->insert($data);
            $session->setFlashdata('success','You have successfully registered.',3);
            return redirect()->to('/signin');

        }else{
            $data['validation'] = $this->validator;
            echo view('frontend/signup', $data);  
        }
          
    }
}