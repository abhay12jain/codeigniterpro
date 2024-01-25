<?php 
namespace App\Models;
use CodeIgniter\Model;
class ServicesModel extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['services_image', 'service_title', 'service_description', 'status', 'submit_date'];
}