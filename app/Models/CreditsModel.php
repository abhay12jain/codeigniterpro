<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class CreditsModel extends Model{
    protected $table = 'credits';
    
    protected $allowedFields = [
        'image',
        'title',
        'description',
        'url',
        'category_id',
        'credit_amount',
        
        'submit_date'
    ];
}