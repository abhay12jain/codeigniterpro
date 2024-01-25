<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class CreditscollectionModel extends Model{
    protected $table = 'credit_collection';
    
    protected $allowedFields = [
        'category',
        'company',
        'amount',
        'user_id',
        'question',
        'answer'
    ];
}