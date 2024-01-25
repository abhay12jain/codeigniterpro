<?php 
namespace App\Models;
use CodeIgniter\Model;
class CompanyModel extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['zone', 'company_name', 'state', 'circle', 'submit_date'];
}