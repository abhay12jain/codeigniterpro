<?php 
namespace App\Models;
use CodeIgniter\Model;
class TeamModel extends Model
{
    protected $table = 'team';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['member_name', 'designation', 'description', 'team_image','fb_url','twitter_url','linkedin_url', 'meta_title', 'meta_description', 'meta_keywords', 'submit_date'];
}