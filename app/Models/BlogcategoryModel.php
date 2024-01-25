<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class BlogcategoryModel extends Model{
    protected $table = 'blog_category';
    
    protected $allowedFields = [
        'category_name',  
        'submit_date'
    ];
}