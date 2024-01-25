<?php 

namespace App\Models;  

use CodeIgniter\Model;

  

class RFPModel extends Model{

    protected $table = 'rfp_extractor';

    

    protected $allowedFields = [

        'tender_id',

        'document_type',

        'document_file'

        

    ];

}