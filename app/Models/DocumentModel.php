<?php 
namespace App\Models;  
use CodeIgniter\Model;
class DocumentModel extends Model{
    protected $table = 'document_upload';
    protected $allowedFields = [        
        'document_name',
        'document_description',
        'document_type',
        'document_size',
        'document_file',
        'document_name_val',
        'submit_date',
        'tender_id',
        'status'
    ];
}