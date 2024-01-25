<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class ContactusModel extends Model{
    protected $table = 'Contact_us';
    
    protected $allowedFields = [
        'name',
        'email',
        'phone_num',
        'message',
        'startup_stage',
        'submit_date'
        ];
}