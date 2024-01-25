<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class BookmeetingModel extends Model{
    protected $table = 'book_meeting';
    
    protected $allowedFields = [
        'expertise',
        'mentor_name',
        'mentor_designation',
        'description',
        'price',
        'team_image',
        'submit_date'
    ];
}