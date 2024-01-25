<?php 

namespace App\Models;

use CodeIgniter\Model;

class DocassignModel extends Model

{

    protected $table = 'assign_document';

    

    protected $allowedFields = [        

        'tender_id',

        'document',

        'document_type',

        'document_name',

        'remarks',
      

    ];
}