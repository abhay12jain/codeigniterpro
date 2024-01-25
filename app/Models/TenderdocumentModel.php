<?php 
namespace App\Models;  
use CodeIgniter\Model;
class TenderdocumentModel extends Model{
    protected $table = 'tender_document';   
    protected $allowedFields = [
        'tender_id',
        'document_name',
        'document_type',
        'document_list',
        'document_file',
        'remarks',
        'status',
        'final_status',
        'submit_date'
    ];
}