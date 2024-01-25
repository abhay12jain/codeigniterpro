<?php 

namespace App\Models;  

use CodeIgniter\Model;

  

class DocumentUserModel extends Model{

    protected $table = 'document_users';

    

    protected $allowedFields = [

        'employe_id',

        'company_name',

        'full_name',

        'email_id',

        'phone_no',

        'password',

        

        'user_image',

        'zone',

            

        'role',

        'circle',

        'submit_date'

    ];

}