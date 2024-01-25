<?php 

namespace App\Controllers;  

use CodeIgniter\Controller;

use App\Models\UserDashboardModel;

use App\Models\RoadmapModel;

use App\Models\CallbackModel;

use App\Models\CreditscollectionModel;

use App\Models\RaisefundingModel;

use App\Models\BookingModel;

use App\Models\FounderbookingModel;


use App\Models\TenderdocumentModel;

use App\Models\DocumentNameModel;

use App\Models\DocumentModel;





class DashboardController extends Controller

{

    public function index()

    {

        echo view('templates/admin_header');

        echo view('admin_user/dashboard');

        echo view('templates/admin_footer');

    }

    

    // -----------Document Upload -------------------------

    public function show_documenttest()
    {
        $docmodel = new DocumentModel();
        $data = [
            'master_document' => $docmodel->paginate(10),
            'pager' => $docmodel->pager
        ];

        
        return view('templates/admin_header')
        .view('admin_user/document/testlist',$data)
        .view('templates/admin_footer');
    }

    public function murge()
    {
        $docmodel = new DocumentModel();
        $files = ['file-1.pdf', 'file-2.pdf'];
        $pdf = new Fpdi();
  
        foreach ($files as $file) {
            // set the source file and get the number of pages in the document
            $pageCount =  $pdf->setSourceFile($file);
            for ($i=0; $i < $pageCount; $i++) { 
                //create a page
                $pdf->AddPage();
                //import a page then get the id and will be used in the template
                $tplId = $pdf->importPage($i+1);
                //use the template of the imporated page
                $pdf->useTemplate($tplId);
            }
        }
  
        //display the generated PDF
        return view('templates/admin_header')
        .view('admin_user/document/testlist',$data)
        .view('templates/admin_footer');
        readfile($pdf->Output());
    }


    
    public function document_technical(){

         return view('templates/admin_header')
        .view('admin_user/document/add_financial')
        .view('templates/admin_footer');
    }

    public function get_document_info(){
        $DocumentNameModel = new DocumentNameModel();
        $document_type = $this->request->getVar('docinfo');
        $data['doc_name'] = $DocumentNameModel->where('document_type',$document_type)->findAll();
        echo view('frontend/dashboard/ajax/document_name', $data);
    }

   
    public function get_document_list_data(){
        $TenderdocumentModel = new TenderdocumentModel();
        $docinfo = $this->request->getVar('docinfo');
        $document_type = $this->request->getVar('document_type');

        $data['doc_file'] = $TenderdocumentModel->where('document_type',$document_type)->where('document_list',$docinfo)->findAll();
        // print_r($data);
        // exit;

        echo view('frontend/dashboard/ajax/document_file', $data);
    }

    
    public function document_upload(){
        $docModel = new DocumentNameModel();
        
         $document_type = $this->request->getVar('document_type');

         $document_list = $this->request->getVar('document_list');
         $document_name = $this->request->getVar('document_names');

         if($document_list!='other'){
              $document_name_val = $this->request->getVar('document_list');
         }else{
              $document_name_val = $this->request->getVar('document_names');
         }

         // $tender_id = $this->request->getVar('tender_id');
        
        $workitem_document = $this->request->getFile('document_file');
        $imageCheck = $workitem_document->getClientName();
        
        if($imageCheck){
        $workitem_document = $this->request->getFile('document_file');
        $newName = $workitem_document->getClientName();

        if($document_type=='Technical'){
           $workitem_document->move(ROOTPATH . 'uploads/technical_document', $newName);
        }else if($document_type=='Financial'){
           $workitem_document->move(ROOTPATH . 'uploads/financial_document', $newName);
        }else if($document_type=='Common Document'){
           $workitem_document->move(ROOTPATH . 'uploads/common_document', $newName);
        }else if($document_type=='One time Document'){
           $workitem_document->move(ROOTPATH . 'uploads/one_time_document', $newName);
        }
                
        $workData = [
                 'name'=>$document_name_val,
                 'document_file'=>$newName,
                 'document_type'=>$document_type,
                 // 'tender_id'=>$tender_id,
                 // 'status'=>'Pending',
                 // 'submit_date'=> date('d-m-Y')
        ];

            // print_r($workData);
            // exit;
               $docModel->insert($workData);
                 
        return $this->response->redirect(site_url('/admin_user/document_shows'));
  }
 }
    

    // public function document_master_upload(){
    //     $docModel = new DocumentNameModel();
        
    //     $document_type = $this->request->getVar('document_type');

    //     $document_name_other = $this->request->getVar('document_name_other');
    //     $document_file_other = $this->request->getFile('document_file_other');

    //     $document_name = $this->request->getVar('document_name');
    //     $document_file = $this->request->getFile('document_file');

        

    //    // echo "<pre>";
    //    //    print_r($document_type);
    //    //    print_r($document_name);
    //    //    print_r($document_file);
    //    //     print_r($document_file_other);
    //    // echo "</pre>";
    //    // exit();
         

    //     if(!empty($document_file)){
    //         $i=0;foreach($document_file as $avatardocnit){

    //             $docCheck[] = $avatardocnit->getClientName();

    //             if (trim($document_type[$i])=='Technical'){
    //                 $avatardocnit->move(ROOTPATH . 'uploads/technical_document', $docCheck[$i]);
    //             }else if(trim($document_type[$i])=='Financial'){
    //                 $avatardocnit->move(ROOTPATH . 'uploads/financial_document', $docCheck[$i]);
    //             }else if(trim($document_type[$i])=='Common Document'){
    //                 $avatardocnit->move(ROOTPATH . 'uploads/common_document', $docCheck[$i]);
    //             }else if(trim($document_type[$i])=='One time Document'){
    //                 $avatardocnit->move(ROOTPATH . 'uploads/one_time_document', $docCheck[$i]);
    //             }
    //         $i++; }
    //     }
        
    //     if($docCheck){
    //         $nitdata = array();
    //         for($z=0; $z<count($document_type); $z++){
    //         $nitdata[]=array($document_type[$z],$docCheck[$z],$document_name[$z]);
    //         }
    //     }




    //     if(!empty($document_file_other)){
    //         $i=0;foreach($document_file_other as $avatardocnitother){

    //             $docCheck_other[] = $avatardocnitother->getClientName();
    //             if(!empty($docCheck_other)){
    //                 if (trim($document_type[$i])=='Technical'){
    //                     $avatardocnitother->move(ROOTPATH . 'uploads/technical_document', $docCheck_other[$i]);
    //                 }else if(trim($document_type[$i])=='Financial'){
    //                     $avatardocnitother->move(ROOTPATH . 'uploads/financial_document', $docCheck_other[$i]);
    //                 }else if(trim($document_type[$i])=='Common Document'){
    //                     $avatardocnitother->move(ROOTPATH . 'uploads/common_document', $docCheck_other[$i]);
    //                 }else if(trim($document_type[$i])=='One time Document'){
    //                     $avatardocnitother->move(ROOTPATH . 'uploads/one_time_document', $docCheck_other[$i]);
    //                 }
    //             }
    //         $i++; }
    //     }

    //     if($docCheck_other){
    //         $nitdata = array();
    //         for($z=0; $z<count($document_type); $z++){
    //           $nitdatass[]=array($document_type[$z],$docCheck_other[$z],$document_name_other[$z]);
    //         }
    //     }

    //     if(!empty($nitdata)){
    //         $i=0; foreach($nitdata as  $keydata){

    //             $nitData = [
    //                 'document_type'=>$keydata[0],
    //                 'document_file'=>$keydata[1],
    //                 'name'=>$keydata[2]
    //             ];
    //         // print_r($nitData);

    //            $docModel->insert($nitData);
    //              $i++; }
    //     }

    //     return $this->response->redirect(site_url('/admin_user/document_shows'));
    // }


    public function document_views($id = null){
        $docModel =new TenderdocumentModel();


        $data['pri'] = $docModel->where('id', $id)->first();        
        $data['doc'] = $docModel->where('id', $id)->findAll();

        // echo "<pre>";
        // print_r($sum);
        // echo "</pre>";

        // exit();
        
        return view('templates/admin_header')
        .view('frontend/dashboard/document_view',$data)
        .view('templates/admin_footer');
    }

    public function show_document()
    {
        $docmodel = new DocumentNameModel();
        $data = [
            'master_document' => $docmodel->paginate(10),
            'pager' => $docmodel->pager
        ];

        $dum['doc'] = $docmodel->findall();

        // echo "<pre>";
        // print_r($dum);
        // echo "</pre>";

        // exit();

        return view('templates/admin_header')
        .view('admin_user/document/document_shows',$data)
        .view('templates/admin_footer');
    }

    

    public function document_master_edit($id = null){
        $docmodel = new TenderdocumentModel();
        $docModels = new DocumentNameModel();
        $data['doc'] = $docModels->where('id', $id)->first();
        
        return view('templates/admin_header')
        .view('admin_user/document/document_edits',$data)
        .view('templates/admin_footer');
    }

    public function document_master_update(){
        $docModels = new DocumentNameModel();
        $id = $this->request->getVar('id');


        // $data = [
        //     'document_type'  => $this->request->getVar('document_type'),
        //     'name' => $this->request->getVar('document_name'),
            
            
        // ];
        $document_name = $this->request->getVar('document_name');
        $workitem_document = $this->request->getFile('document_file');
        $document_type = $this->request->getVar('document_type');
        // print_r($document_type);
        // exit();
        
        if($workitem_document){
        $workitem_document = $this->request->getFile('document_file');
        $newName = $workitem_document->getClientName();

        if($document_type=='Technical'){
           $workitem_document->move(ROOTPATH . 'uploads/technical_document', $newName);
        }else if($document_type=='Financial'){
           $workitem_document->move(ROOTPATH . 'uploads/financial_document', $newName);
        }else if($document_type=='Common Document'){
           $workitem_document->move(ROOTPATH . 'uploads/common_document', $newName);
        }else if($document_type=='One time Document'){
           $workitem_document->move(ROOTPATH . 'uploads/one_time_document', $newName);
        }
                
        $workData = [
                 'name'=>$document_name,
                 'document_file'=>$newName,
                 'document_type'=>$document_type,
                 // 'tender_id'=>$tender_id,
                 // 'status'=>'Pending',
                 // 'submit_date'=> date('d-m-Y')
        ];

            // print_r($workData);
            // exit;
               // $docModel->insert($workData);
        $docModels->update($id, $workData);
        return $this->response->redirect(site_url('/admin_user/document_shows'));
    }
}

    public function document_master_delete($id = null){

         $docmodel = new DocumentNameModel();

        $data['data_delete'] = $docmodel->where('id', $id)->delete($id);

             if($data){

                $msg = 'Data Deleted Successfully.';

              }else{

                $msg = 'Data Not Updated.';

              }



        return redirect()->to( base_url('/admin_user/document_shows') )->with('msg', $msg); 

    } 
    

    public function document_edits($id = null){
        $docmodel = new TenderdocumentModel();
        $data['doc'] = $docmodel->where('id', $id)->first();
        
        return view('templates/admin_header')
        .view('admin_user/document/document_edits',$data)
        .view('templates/admin_footer');
    }
    public function document_update(){
        $docmodel = new TenderdocumentModel();
        $id = $this->request->getVar('id');

        $data = [
            'document_name' => $this->request->getVar('document_name'),
            'document_type'  => $this->request->getVar('document_type'),
            'document_file'  => $this->request->getVar('document_file'),
            
        ];
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        // exit();
        $docmodel->update($id, $data);
        return $this->response->redirect(site_url('/admin_user/document_shows'));
    }
    // public function  document_delete($id = null){
    //     $docmodel = new TenderdocumentModel();
    //     $data['doc'] = $docmodel->where('id', $id)->delete($id);
    //     return $this->response->redirect(site_url('/admin_user/document_shows'));
    // }

    // public function document_delete($id = null){

    //      $docmodel = new TenderdocumentModel();

    //     $data['pd_users_data_delete'] = $docmodel->where('id', $id)->delete($id);

    //          if($data){

    //             $msg = 'Data Deleted Successfully.';

    //           }else{

    //             $msg = 'Data Not Updated.';

    //           }

    // return redirect()->to( base_url('/admin_user/document_shows')
    

}