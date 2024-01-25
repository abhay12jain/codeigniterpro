<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserDashboardModel extends Model{
    protected $table = 'users_data';
    
    protected $allowedFields = [
        'startup_stage',
        'industry',
        'other_industry',
        'idea_description',
        'startup_stage',
        'refrence_link',
        'idea_file',
        'idea_file2',
        'idea_file3',
        'user_id',
        'financial_valuation_file',
        'pitchdeck_upload',
        'raise_funding',
        'credits',
        'step1_status',
        'step2_status',
        'step3_status',
        'step4_status',
        'step5_status',
        'step6_status',
        'tracking_status1',
        'tracking_status2',
        'tracking_status3',
        'tracking_status4',
        'tracking_status5',
        'tracking_status6',
        'submit_date' 
    ];


public function updatePassword($npwd,$id){
        $builder = $this->db->table('pd_users');
        $builder->where('id',$id);
        $builder->update(['password'=>$npwd]);
        if($this->db->affectedRows()>0){
            return true;
        }
        else{
            return false;
        }
    }




}