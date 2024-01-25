<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class RaisefundingModel extends Model{
    protected $table = 'raise_funding';
    
    protected $allowedFields = [
        'company',
        'user_id',
        'status',
        'submit_date',
        
    ];
}