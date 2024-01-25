<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class BookfounderModel extends Model{
    protected $table = 'book_founder';
    
    protected $allowedFields = [
        'founder_name',
        'founder_designation',
        'description',
        'price',
        'team_image',
        'submit_date'
    ];
}