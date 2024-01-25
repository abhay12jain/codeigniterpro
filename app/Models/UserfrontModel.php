<?php 

namespace App\Models;  

use CodeIgniter\Model;



class UserfrontModel extends Model{

    

    protected $table = 'pd_users';

    

    protected $allowedFields = [

        'first_name',

        'last_name',

        'email_id',

        'phone_number',

        'user_image',

        'gplus_link',

        'linkedin_link',

        'fb_link',

        'password',

        'status',

        'submit_date',

        'updated_at',

        'employee_id',

        'company_name',

        'module',

        'role',

        'full_name',

        'circle'

    ];



    public function verifyEmail($email){

       

        $builder = $this->db->table('pd_users');

        $builder->select("id,status,email_id,password,first_name"); 

        $builder->where('email_id',$email);

        $result = $builder->get();

        if(count($result->getResultArray())==1)

        {

            return $result->getRowArray();

        }

        else

        {

            return false;

        }

    }





    public function updatedAt($id){

        $builder = $this->db->table('pd_users');

        $builder->where('id', $id);

        $builder->update(['updated_at'=>date('d-m-Y h:i:s')]);

        if($this->db->affectedRows()==1)

        {

            return true;

        }

        else

        {

            return false;

        }

    }



    public function verifyToken($token){

        $builder = $this->db->table('pd_users');

        $builder->select("id,email_id,updated_at");

        $builder->where('id',$token);

        $result = $builder->get();

        if(count($result->getResultArray())==1)

        {

            return $result->getRowArray();

        }

        else

        {

            return false;

        }

    }



    public function updatePassword($id,$pwd){

        $builder = $this->db->table('pd_users');

        $builder->where('id', $id);

        $builder->update(['password'=>$pwd]);

        if($this->db->affectedRows()==1)

        {

            return true;

        }

        else

        {

            return false;

        }

    }

}