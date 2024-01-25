<?php 

namespace App\Models;

use CodeIgniter\Model;

class DocumentNameModel extends Model

{

    protected $table = 'document_name';

    protected $primaryKey = 'id';

    protected $allowedFields = ['document_file','document_type', 'name','submit_date'];

}