<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class CreditscategoryModel extends Model{
    protected $table = 'credit_category';
    
    protected $allowedFields = [
        'category_name',
        'submit_date'
    ];
}