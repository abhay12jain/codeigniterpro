<?php 
namespace App\Models;
use CodeIgniter\Model;
class CircleModel extends Model
{
    protected $table = 'circle';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['zone','state', 'circle', 'submit_date'];
}