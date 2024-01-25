<?php 

namespace App\Models;  

use CodeIgniter\Model;

  

class DivisionModel extends Model{

    protected $table = 'division';

    

    protected $allowedFields = [

        

        'zone',

        'organization_name',

        'state',

        'circle',

        'department',

        'division',

        'submit_date'
    ];

}