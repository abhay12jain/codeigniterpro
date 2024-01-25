<?php 
namespace App\Models;
use CodeIgniter\Model;
class TestimonialsModel extends Model
{
    protected $table = 'testimonials';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['title', 'designation', 'description', 'image_name', 'image_type', 'submit_date'];
}