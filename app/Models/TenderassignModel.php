<?php 

namespace App\Models;  

use CodeIgniter\Model;

  

class TenderassignModel extends Model{

    protected $table = 'tender_assign';

    

    protected $allowedFields = [        

        'tender_id',

        'assing_user',

        'user_type',

              

    ];

    

}