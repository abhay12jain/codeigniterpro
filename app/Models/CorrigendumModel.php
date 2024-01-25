<?php 

namespace App\Models;  

use CodeIgniter\Model;

  

class CorrigendumModel extends Model{

    protected $table = 'corrigendum';

    

    protected $allowedFields = [        

        'upload_document',
        'add_description',
        'tender_id'
        
    ];

}