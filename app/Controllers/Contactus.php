<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TeamModel;
use App\Models\ContactusModel;
class Contactus extends BaseController
{
   
    // Load all team members
    public function index(){
        $ContactusModel = new ContactusModel();
        $data = [
            'contact_data' => $ContactusModel->paginate(10),
            'pager' => $ContactusModel->pager
        ];
       
        echo view('templates/admin_header')
        .view('admin/contactus/view_contactus', $data)
        .view('templates/admin_footer');
    }
    
    
   
    // delete testimonial
    public function delete_contact($id = null){
        $ContactusModel = new ContactusModel();
        $data['contact_data_delete'] = $ContactusModel->where('id', $id)->delete($id);
             if($data){
                $msg = 'Data Deleted Successfully.';
              }else{
                $msg = 'Data Not Updated.';
              }
        return redirect()->to( base_url('admin/view_contacts') )->with('msg', $msg); 
    }    
}



