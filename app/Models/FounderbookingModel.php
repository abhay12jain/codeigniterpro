<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class FounderbookingModel extends Model{
    protected $table = 'founder_data';
    
    protected $allowedFields = [
        'booking_date',
        'founder_name',
        'founder_designation',
        'user_id',
        'submit_date'
    ];
}