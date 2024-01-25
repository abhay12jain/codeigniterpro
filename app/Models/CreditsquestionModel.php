<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class CreditsquestionModel extends Model{
    protected $table = 'credit_questions';
    
    protected $allowedFields = [
        'questions',
        'company_id',
        'submit_date'
    ];
}