<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserDashboardModel;
use App\Models\DivisionModel;
use App\Models\ProductModel;
use App\Models\TenderModel;
use App\Models\DocumentModel;
use App\Models\CorrigendumModel;
use App\Models\PriceModel;
use App\Models\RFPModel;
use App\Models\TenderdocumentModel;
use App\Models\DocassignModel;
use App\Models\UserfrontModel;
use App\Models\TenderassignModel;
use App\Models\DocumentNameModel;
use App\Models\DocumentUserModel;
use App\Models\CompanyModel;
use App\Models\CircleModel;
use setasign\Fpdi\Fpdi;
class UserDashboardController extends Controller
{
    public function index()
    {   
        $user_id = session()->get('id');
        
        echo view('templates/public_dash_header');
        echo view('frontend/dashboard/index');
        echo view('templates/public_dash_footer');
    }

    public function circle_show()
    {
        $model = new CircleModel();
        $data['circl']=$model->findAll();
        return view('templates/public_dash_header')
        .view('frontend/dashboard/circle_show',$data)
        .view('templates/public_dash_footer');
    }
    public function circle(){
       $divrModel = new CircleModel();
       // $data['division_data'] = $divrModel->Select('DISTINCT(organization_name)')->findAll();

       return view('templates/public_dash_header')
        .view('frontend/dashboard/circle',)
        .view('templates/public_dash_footer');
    }

    public function add_circle()
    {        
        $divrModel = new CircleModel();
        
        $data = [
            'zone'  => $this->request->getVar('zone'),
            'state'  => $this->request->getVar('state'),
            'circle'  => $this->request->getVar('circle'),
            
        ];
        $divrModel->insert($data);
        return $this->response->redirect(site_url('/admin/show_circle'));
    
    }
    public function circle_edit($id = null){
        $divrModel = new CircleModel();
        $data['user_obj'] = $divrModel->where('id', $id)->first();
        //$data['user_obj'] = $divrModel->where('id', $id)->first();
        // $data['division_data'] = $divrModel->Select('DISTINCT(organization_name)')->findAll();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        // exit();
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/circle_edit',$data)
        .view('templates/public_dash_footer');
    }
    public function circle_update(){
        $divrModel = new CircleModel();
        $id = $this->request->getVar('id');
        $data = [
            'zone'  => $this->request->getVar('zone'),
            'state'  => $this->request->getVar('state'),
            'circle'  => $this->request->getVar('circle'),
            
        ];
        $divrModel->update($id, $data);
        return $this->response->redirect(site_url('/admin/show_circle'));
    }
    public function circle_delete($id = null){
        $divrModel = new CircleModel();
        $data['user'] = $divrModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/show_circle'));
    }

    public function company_show()
    {
        $model = new CompanyModel();
        $data['users']=$model->findAll();
        return view('templates/public_dash_header')
        .view('frontend/dashboard/company_show',$data)
        .view('templates/public_dash_footer');
    }
    public function getcomp_info()
    {
        $divmodel = new DivisionModel();
        $product = new ProductModel();
        $cirModel = new CircleModel();
        $zoneName = $this->request->getVar('getByzone');
        $data['circle_name'] = $cirModel->Select('DISTINCT(circle)')->where('state',$zoneName)->findAll();
          

        echo view('frontend/dashboard/ajax/circl', $data);
    }
    public function company(){
       $divrModel = new DivisionModel();
       $cirModel = new CircleModel();
       $data['state_data'] = $cirModel->Select('DISTINCT(state)')->findAll();
       $data['circle_data'] = $cirModel->Select('DISTINCT(circle)')->findAll();
       // print_r($data);
       // exit();

       return view('templates/public_dash_header')
        .view('frontend/dashboard/company',$data)
        .view('templates/public_dash_footer');
    }

    public function add_company()
    {        
        $divrModel = new CompanyModel();
        
        $data = [
            'zone' => $this->request->getVar('zone'),
            'company_name'  => $this->request->getVar('company_name'),
            'state'  => $this->request->getVar('state'),
            'circle'  => $this->request->getVar('circle'),
            
        ];
        $divrModel->insert($data);
        return $this->response->redirect(site_url('/admin/show_company'));
    
    }
    public function company_edit($id = null){
        $divrModel = new CompanyModel();
        $circlModel = new CircleModel();
        $data['user_obj'] = $divrModel->where('id', $id)->first();
        $data['state_data'] = $circlModel->Select('DISTINCT(state)')->findAll();
        $data['circle_data'] = $circlModel->Select('DISTINCT(circle)')->findAll();
        //$data['user_obj'] = $divrModel->where('id', $id)->first();
        // $data['division_data'] = $divrModel->Select('DISTINCT(organization_name)')->findAll();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        // exit();
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/company_edit',$data)
        .view('templates/public_dash_footer');
    }
    public function company_update(){
        $divrModel = new CompanyModel();
        $id = $this->request->getVar('id');
        $data = [
            'zone' => $this->request->getVar('zone'),
            'organization_name'  => $this->request->getVar('company_name'),
            'state'  => $this->request->getVar('state'),
            'circle'  => $this->request->getVar('circle'),
            
        ];
        $divrModel->update($id, $data);
        return $this->response->redirect(site_url('/admin/show_company'));
    }
    public function company_delete($id = null){
        $divrModel = new CompanyModel();
        $data['user'] = $divrModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/show_company'));
    }
    public function division_show()
    {
        $model = new DivisionModel();
        $data['users']=$model->findAll();
        return view('templates/public_dash_header')
        .view('frontend/dashboard/division_show',$data)
        .view('templates/public_dash_footer');
    }
    public function division(){
       $divrModel = new DivisionModel();
       $divrModel = new CircleModel();
       $data['circle_data'] = $divrModel->Select('DISTINCT(circle)')->findAll();
       $data['state_data'] = $divrModel->Select('DISTINCT(state)')->findAll();

       return view('templates/public_dash_header')
        .view('frontend/dashboard/division',$data)
        .view('templates/public_dash_footer');
    }

    public function add_division()
    {        
        $divrModel = new DivisionModel();
        
        $data = [
            'zone' => $this->request->getVar('zone'),
            'organization_name'  => $this->request->getVar('organization_name'),
            'state'  => $this->request->getVar('state'),
            'circle'  => $this->request->getVar('circle'),
            'department'  => $this->request->getVar('department'),
            'division'  => $this->request->getVar('division'),
        ];
        $divrModel->insert($data);
        return $this->response->redirect(site_url('/admin/show_division'));
    
    }

    
    
    public function division_edit($id = null){
        $divrModel = new DivisionModel();
        $circlModel = new CircleModel();
        $data['user_obj'] = $divrModel->where('id', $id)->first();
        //$data['user_obj'] = $divrModel->where('id', $id)->first();
        $data['state_data'] = $circlModel->Select('DISTINCT(state)')->findAll();
        $data['circle_data'] = $circlModel->Select('DISTINCT(circle)')->findAll();
         //echo "<pre>";
       ///  print_r($data);
        // echo "</pre>";

        // exit();
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/division_edit',$data)
        .view('templates/public_dash_footer');
    }
    public function update(){
        $divrModel = new DivisionModel();
        $id = $this->request->getVar('id');
        $data = [
            'zone' => $this->request->getVar('zone'),
            'organization_name'  => $this->request->getVar('organization_name'),
            'state'  => $this->request->getVar('state'),
            'circle'  => $this->request->getVar('circle'),
            'department'  => $this->request->getVar('department'),
            'division'  => $this->request->getVar('division'),
        ];
		
		
		echo '<pre>';
		print_r($data);
		exit();
	
        $divrModel->update($id, $data);
        return $this->response->redirect(site_url('/admin/show_division'));
    }
    public function delete($id = null){
        $divrModel = new DivisionModel();
        $data['user'] = $divrModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/show_division'));
    }
    
    public function logout()
    {
        $session = session();
        unset($_SESSION['pitchUserLogged']);
        return redirect()->to('/signin');
    }
    //------------Tender Info-------------------------
    public function tender_show()
    {
       $session = session();
        
        $model = new TenderModel();
        $tpd = $this->request->getVar('tpd');
        $bsd = $this->request->getVar('bsd');
        $status_filter = $this->request->getVar('status_filter');

         $circle =  $session->get('circle');
         $organization = $session->get('organization');
         $role = $session->get('role');
        
        if(($circle && $organization) && $role!='admin'){

        $search_data = $this->request->getVar('search_data');

        if($search_data){
        $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($tpd){
        $data['tend']=$model->like('tender_publish_date',$tpd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($bsd){
        $data['tend']=$model->like('bid_submission_end_date',$bsd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($status_filter){
        $data['tend']=$model->like('tender_status',$status_filter)->where('zone',$circle)->where('client_nme', $organization)->findAll();  
                                
        }else{
        $data['tend']=$model->orderBy('id', 'DESC')->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }


        }else{


        $search_data = $this->request->getVar('search_data');

        if($search_data){
            $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->findAll();
        }else if($tpd){
                     $data['tend']=$model->like('tender_publish_date',$tpd)->findAll();
        }else if($bsd){
                     $data['tend']=$model->like('bid_submission_end_date',$bsd)->findAll();
        }else if($status_filter){
                     $data['tend']=$model->like('tender_status',$status_filter)->findAll();  
                                
        }else{
            $data['tend']=$model->orderBy('id', 'DESC')->findAll();
        }


      }

        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/tender_view',$data)
        .view('templates/public_dash_footer');


    }
    
    public function tender_info()
    {
        $divmodel = new DivisionModel();
        $product = new ProductModel();
        $divrModel = new CompanyModel();
        $cirModel = new CircleModel();

        $data['zone'] = $divmodel->select('DISTINCT(zone)')->findAll();
        $data['category'] = $divmodel->findAll();  
        $data['p_category'] = $product->findAll();
        $data['company'] = $divrModel->select('DISTINCT(company_name)')->findAll();
        $data['circl'] = $cirModel->select('DISTINCT(circle)')->findAll();
        // print_r($sum);
        // exit();   

        echo view('templates/public_dash_header');
        echo view('frontend/dashboard/tender_data',$data);
        echo view('templates/public_dash_footer');
    }

   public function getzone_info()
    {
        $divmodel = new DivisionModel();
        $product = new ProductModel();
        $zoneName = $this->request->getVar('getByzone');
        $data['zone_name'] = $divmodel->Select('DISTINCT(organization_name)')->where('zone',$zoneName)->findAll();
          

        echo view('frontend/dashboard/ajax/zone', $data);
    }

    public function get_division_info()
    {
        $divmodel = new DivisionModel();
        $product = new ProductModel();
        $zoneName = $this->request->getVar('getByzone');
        $data['division_name'] = $divmodel->Select('DISTINCT(division)')->where('department',$zoneName)->findAll();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit();

        echo view('frontend/dashboard/ajax/div', $data);
    }



    public function get_category_info()
    {
        $divmodel = new DivisionModel();
        $product = new ProductModel();
        $zoneName = $this->request->getVar('getByzone');
        $data['category_name'] = $product->Select('DISTINCT(sub_category)')->where('product_category',$zoneName)->findAll();
        
        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();

        echo view('frontend/dashboard/ajax/cat', $data);
    }

    public function add_tender()
    {
        $ssModel = new TenderModel();
        $DocumentModel = new DocumentModel();
        $CorrigendumModel = new CorrigendumModel();
        $companyName =  $this->request->getVar('company_nam');
        $companyVal = implode(',',$companyName);

        $circleName =  $this->request->getVar('circle');
        $circleVal = implode(',',$circleName);

        $data = [

            'zone'=> $this->request->getVar('zone'),
            'client_nme' => $this->request->getVar('client_nme'),
            'tender_refer_number'  => $this->request->getVar('tender_refer_number'),
            'tender_id'  => $this->request->getVar('tender_id'),
            'tender_types'  => $this->request->getVar('tender_types'),
            'tender_category'  => $this->request->getVar('tender_category'),
            'general_technical_evaluation_allowed' => $this->request->getVar('general_technical_evaluation_allowed'),
            'is_multi_currency'  => $this->request->getVar('is_multi_currency'),
            'no_covers'  => $this->request->getVar('no_covers'),
            'payment_mode'  => $this->request->getVar('payment_mode'),
            'deparment' => $this->request->getVar('deparment'),
            'allow_two_stages_bidding'  => $this->request->getVar('allow_two_stages_bidding'),
            'division'  => $this->request->getVar('division'),
            'tender_fee_in'  => $this->request->getVar('tender_fee_in'),
            'fee_payable_at' => $this->request->getVar('fee_payable_at'),
            'fee_payable_to'  => $this->request->getVar('fee_payable_to'),
            'tender_fee_exception_allowed'  => $this->request->getVar('tender_fee_exception_allowed'),
            'tender_fee_exception_allowed_for'  => $this->request->getVar('tender_fee_exception_allowed_for'),
            'tender_fee_type'  => $this->request->getVar('tender_fee_type'),
            'tender_document_number'  => $this->request->getVar('tender_document_number'),
            'tender_payment_mode'  => $this->request->getVar('tender_payment_mode'),
            'emd_amount_in' => $this->request->getVar('emd_amount_in'),
            'emd_fee_type'  => $this->request->getVar('emd_fee_type'),
            'if_exemption_allowed'  => $this->request->getVar('if_exemption_allowed'),
            'emd_exemption_allowed_for'  => $this->request->getVar('emd_exemption_allowed_for'),
            'emd_document_number' => $this->request->getVar('emd_document_number'),
            'emd_payable_to'  => $this->request->getVar('emd_payable_to'),
            'emd_payable_at'  => $this->request->getVar('emd_payable_at'),
            'emd_payment_mode'  => $this->request->getVar('emd_payment_mode'),
            'emd_percentage'  => $this->request->getVar('emd_percentage'),
            'title'  => $this->request->getVar('title'),
            'product_category' => $this->request->getVar('product_category'),
            'work_description'  => $this->request->getVar('work_description'),
            'bid_validity_days'  => $this->request->getVar('bid_validity_days'),
            'pre_qulifiction_details'  => $this->request->getVar('pre_qulifiction_details'),
            'pincode' => $this->request->getVar('pincode'),
            'pre_bid_meeting_date'  => $this->request->getVar('pre_bid_meating_date'),
            'remarks'  => $this->request->getVar('remarks'),
            'allow_preferential_bidder'  => $this->request->getVar('allow_preferential_bidder'),
            'tender_value_in'  => $this->request->getVar('tender_value_in'),
            'sub_category'  => $this->request->getVar('sub_category'),
            'contract_type'  => $this->request->getVar('contract_type'),
            'period_of'  => $this->request->getVar('period_of'),
            'location'  => $this->request->getVar('location'),
            'pre_bid_meeting'  => $this->request->getVar('pre_bid_meeting'),
            'pre_bid_meeting_address'  => $this->request->getVar('pre_bid_meeting_address'),
            'bid_opening_place'  => $this->request->getVar('bid_opening_place'),
            'should_allowed_nda_tender'  => $this->request->getVar('should_allowed_nda_tender'),
            'tender_publish_date'  => $this->request->getVar('tender_publish_date'),
            'pre_bid_date'  => $this->request->getVar('pre_bid_date'),
            'document_start_date'  => $this->request->getVar('document_start_date'),
            'document_submit_date'  => $this->request->getVar('document_submit_date'),
            'bid_submission_start_date'  => $this->request->getVar('bid_submission_start_date'),
            'bid_opening_date'  => $this->request->getVar('bid_opening_date'),
            'bid_submission_end_date'  => $this->request->getVar('bid_submission_end_date'),
            'tname'  => $this->request->getVar('tname'),
            'address'  => $this->request->getVar('address'),
            'tags'  => $this->request->getVar('tags'),
            'organization_nam' => $companyVal,
            'circle' => $circleVal,
            'tender_status'  => 'Pending',
            'submit_date'=> date('d-m-Y')          
            

        ];

        $ssModel->insert($data);

       

       

        /**
      * 
      * -----------------------------------
      * -----------------------------------
      * 
      * Add NIT Document Files.
      * 
      */ 
    
        $nit_description = $this->request->getVar('nit_description');
        $nit_name = $this->request->getVar('nit_name');
        $nit_document = $this->request->getFileMultiple('nit_document');

        if(!empty($nit_document)){
        $i=0;foreach($nit_document as $avatardocnit){
            $docCheck[] = $avatardocnit->getRandomName();
            $avatardocnit->move(ROOTPATH . 'uploads/nit_document',$docCheck[$i]);
        $i++; }}
        
        if($docCheck){
            $nitdata = array();
            for($z=0; $z<count($nit_description); $z++){
            $nitdata[]=array($nit_description[$z],$docCheck[$z],$nit_name[$z]);
            }
        }


        if(!empty($nitdata)){
            $i=0; foreach($nitdata as  $keydata){
              

             $nitData = [
                 'document_description'=>$keydata[0],
                 'document_name'=>$keydata[1],
                 'document_name_val'=>$keydata[2],
                 'tender_id'  => $this->request->getVar('tender_id'),
                 'document_type'=>'nit_document'
            ];
               $DocumentModel->insert($nitData);
                 $i++; }
        }

        /**
      * 
      * -----------------------------------
      * -----------------------------------
      * 
      * Add Workitem Document Files.
      * 
      */ 
        $workitem_name = $this->request->getVar('workitem_name');
        $workitem_description = $this->request->getVar('workitem_description');
        $workitem_document = $this->request->getFileMultiple('workitem_document');
        
        if($workitem_document){
        $i=0;foreach($workitem_document as $avatardoc){
            $workCheck[] = $avatardoc->getRandomName();
            $avatardoc->move(ROOTPATH . 'uploads/workitem_document',$workCheck[$i]);
        $i++; }}

        if($workitem_description){
            $workitem = array();
            for($z=0; $z<count($workitem_description); $z++){
            $workitem[]=array($workitem_description[$z],$workCheck[$z],$workitem_name[$z]);
            }
        }

        
        if(!empty($workitem)){
            $i=0; foreach($workitem as  $keydata){
             $workData = [
                 'document_description'=>$keydata[0],
                 'document_name'=>$keydata[1],
                 'document_name_val'=>$keydata[2],
                 'tender_id'  => $this->request->getVar('tender_id'),
                 'document_type'=>'workitem_document'
            ];
               $DocumentModel->insert($workData);
                 $i++; }
        }

        /**
      * -----------------------------------
      * -----------------------------------
      * Add Corrigendum Files.
      * 
      */ 
        $dataval = $this->request->getVar('cor_description');
        $avatar = $this->request->getFileMultiple('cor_upload_document');
         
       $i=0;foreach($avatar as $avatarval){

            $imageCheck[] = $avatarval->getRandomName();
            $avatarval->move(ROOTPATH . 'uploads/corrigendum',$imageCheck[$i]);

        $i++; }


        $arrval = array_combine($imageCheck,$dataval);
        if(!empty($arrval)){
            $i=0;foreach($arrval as  $key=>$val){
            $corData = [
                 'tender_id'  => $this->request->getVar('tender_id'),
                 'upload_document'=>$key,
                 'add_description'=>$val
            ];
                $CorrigendumModel->insert($corData);
                $i++; }

        }

        return $this->response->redirect(site_url('/admin/tender_show'));



    }     

    

    public function tender_view()
    {       
        
        echo view('templates/public_dash_header');
        echo view('frontend/dashboard/tender_show');
        echo view('templates/public_dash_footer');
    }
    public function tender_edit($id = null){
        $tenModel = new TenderModel();
        $DocumentModel = new DocumentModel();
        $CorrigendumModel = new CorrigendumModel();

        $divmodel = new DivisionModel();
        $product = new ProductModel();
        $divrModel = new CompanyModel();
        $cirModel = new CircleModel();
        $data['zone'] = $divmodel->select('DISTINCT(zone)')->findAll();
        $data['company'] = $divrModel->select('DISTINCT(company_name)')->findAll();
        $data['circl'] = $cirModel->select('DISTINCT(circle)')->findAll();

        $data['organization'] = $tenModel->where('id', $id)->select('circle,organization_nam')->findAll();
        // print_r($sum);
        // exit();
        


        $data['category'] = $divmodel->findAll();
        $data['p_category'] = $product->findAll(); 

        

        $data['tend'] = $tenModel->where('id', $id)->first();

       
        $get_id = $tenModel->Select('tender_id')->where('id', $id)->first();
        $data['tend_nit'] = $DocumentModel->where('tender_id', $get_id)->where('document_type', 'nit_document')->findAll();
        $data['tend_work'] = $DocumentModel->where('tender_id', $get_id)->where('document_type', 'workitem_document')->findAll();
        $data['tend_coringdum'] = $CorrigendumModel->where('tender_id', $get_id)->findAll();

        // echo "<pre>";
        // print_r($workData);
        // echo "</pre>";

        // exit();

        
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/tender_edit',$data)
        .view('templates/public_dash_footer');
    }

    public function get_division_org_Edit()
    {
        $divmodel = new DivisionModel();
        $product = new ProductModel();
        
        $zoneName = $this->request->getVar('getByzone');
        $data['zone_name'] = $divmodel->Select('DISTINCT(organization_name)')->where('zone',$zoneName)->findAll();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit();

        echo view('frontend/dashboard/ajax/tendorg', $data);
    }


    public function tender_update(){
        $tenModel = new TenderModel();
        $DocumentModel = new DocumentModel();
        $CorrigendumModel = new CorrigendumModel();
        $id = $this->request->getVar('id');


        $companyName =  $this->request->getVar('company_nam');
        // $companyVal = implode(',',$companyName);
        $orgnaiztionVal = array_push($companyName,$org);



        $circleName =  $this->request->getVar('circle');
        $circleVal = implode(',',$circleName);
        // echo "<pre>";
        // print_r($companyName);
        // print_r($circleName);
        // echo "</pre>";
        // exit();
        $data = [
            'zone'=> $this->request->getVar('zone'),
            'client_nme' => $this->request->getVar('client_nme'),
            'tender_refer_number'  => $this->request->getVar('tender_refer_number'),
            'tender_id'  => $this->request->getVar('tender_id'),
            'tender_types'  => $this->request->getVar('tender_types'),
            'tender_category'  => $this->request->getVar('tender_category'),
            'general_technical_evaluation_allowed' => $this->request->getVar('general_technical_evaluation_allowed'),
            'is_multi_currency'  => $this->request->getVar('is_multi_currency'),
            'no_covers'  => $this->request->getVar('no_covers'),
            'payment_mode'  => $this->request->getVar('payment_mode'),
            'deparment' => $this->request->getVar('deparment'),
            'allow_two_stages_bidding'  => $this->request->getVar('allow_two_stages_bidding'),
            'division'  => $this->request->getVar('division'),
            'tender_fee_in'  => $this->request->getVar('tender_fee_in'),
            'fee_payable_at' => $this->request->getVar('fee_payable_at'),
            'fee_payable_to'  => $this->request->getVar('fee_payable_to'),
            'tender_fee_exception_allowed'  => $this->request->getVar('tender_fee_exception_allowed'),
            'tender_fee_exception_allowed_for'  => $this->request->getVar('tender_fee_exception_allowed_for'),
            'tender_fee_type'  => $this->request->getVar('tender_fee_type'),
            'tender_document_number'  => $this->request->getVar('tender_document_number'),
            'tender_payment_mode'  => $this->request->getVar('tender_payment_mode'),
            'emd_amount_in' => $this->request->getVar('emd_amount_in'),
            'emd_fee_type'  => $this->request->getVar('emd_fee_type'),
            'if_exemption_allowed'  => $this->request->getVar('if_exemption_allowed'),
            'emd_exemption_allowed_for'  => $this->request->getVar('emd_exemption_allowed_for'),
            'emd_document_number' => $this->request->getVar('emd_document_number'),
            'emd_payable_to'  => $this->request->getVar('emd_payable_to'),
            'emd_payable_at'  => $this->request->getVar('emd_payable_at'),
            'emd_payment_mode'  => $this->request->getVar('emd_payment_mode'),
            'emd_percentage'  => $this->request->getVar('emd_percentage'),
            'title'  => $this->request->getVar('title'),
            'product_category' => $this->request->getVar('product_category'),
            'work_description'  => $this->request->getVar('work_description'),
            'bid_validity_days'  => $this->request->getVar('bid_validity_days'),
            'pre_qulifiction_details'  => $this->request->getVar('pre_qulifiction_details'),
            'pincode' => $this->request->getVar('pincode'),
            'pre_bid_meeting_date'  => $this->request->getVar('pre_bid_meeting_date'),
            'remarks'  => $this->request->getVar('remarks'),
            'allow_preferential_bidder'  => $this->request->getVar('allow_preferential_bidder'),
            'tender_value_in'  => $this->request->getVar('tender_value_in'),
            'sub_category'  => $this->request->getVar('sub_category'),
            'contract_type'  => $this->request->getVar('contract_type'),
            'period_of'  => $this->request->getVar('period_of'),
            'location'  => $this->request->getVar('location'),
            'pre_bid_meeting'  => $this->request->getVar('pre_bid_meeting'),
            'pre_bid_meeting_address'  => $this->request->getVar('pre_bid_meeting_address'),
            'bid_opening_place'  => $this->request->getVar('bid_opening_place'),
            'should_allowed_nda_tender'  => $this->request->getVar('should_allowed_nda_tender'),
            'tender_publish_date'  => $this->request->getVar('tender_publish_date'),
            'pre_bid_date'  => $this->request->getVar('pre_bid_date'),
            'document_start_date'  => $this->request->getVar('document_start_date'),
            'document_submit_date'  => $this->request->getVar('document_submit_date'),
            'bid_submission_start_date'  => $this->request->getVar('bid_submission_start_date'),
            'bid_opening_date'  => $this->request->getVar('bid_opening_date'),
            'bid_submission_end_date'  => $this->request->getVar('bid_submission_end_date'),
            'tname'  => $this->request->getVar('tname'),
            'address'  => $this->request->getVar('address'),
            'organization_nam' => $orgnaiztionVal,
            'circle' => $circleVal,
            'submit_date'=> date('d-m-Y')
        ];
        // print_r($data);
        // exit();

        // Add NIT Document Files.//



        $avatar = $this->request->getFile('nit_document');
        $nit_name = $this->request->getVar('nit_name');
        $nit_description = $this->request->getVar('nit_description');
        // $nit_document = $this->request->getFile('nit_document');
        
        
        $imageCheck = $avatar->getClientName();
        // echo $imageCheck;
        // exit();
        if($imageCheck) {
             
            $validated = $this->validate([
                    'nit_document' => 'uploaded[nit_document]|max_size[nit_document,2048]|ext_in[nit_document,jpg,jpeg,pdf,png,doc]'
            ]);            
        
 
        if (!$validated){
            $msg = 'Only allow file type [xls,xlsx] and image size should be less than 2 MB';
        }else{
            $avatar = $this->request->getFile('nit_document');
            $newName = $avatar->getRandomName();
            $avatar->move(ROOTPATH . 'uploads/nit_document', $newName);

            $data = [
                'document_description'=>$nit_description,
                'document_name'=>$newName,
                'document_name_val'=>$nit_name,                
                'tender_id'  => $this->request->getVar('tender_id'),
                'document_type'=>'nit_document',
                'submit_date'=> date('d-m-Y')

                


           ];

           if($data==null){
            return redirect()->to( base_url('/admin/tender_edit?action=success'));
        }else{
            $save = $DocumentModel->insert($data);
        }

        

        
    

    }
    
    }
    
        // Add WORK Document Files.//

        $avatar = $this->request->getFile('workitem_document');
        $workitem_name = $this->request->getVar('workitem_name');
        $workitem_description = $this->request->getVar('workitem_description');
        // $nit_document = $this->request->getFile('nit_document');
        
        // print_r($workitem_name);
        // print_r($workitem_description);
        // print_r($avatar);
        // exit();
        $imageCheck = $avatar->getClientName();
        // echo $imageCheck;
        // exit();
        if($imageCheck) {
             
            $validated = $this->validate([
                    'workitem_document' => 'uploaded[workitem_document]|max_size[workitem_document,2048]|ext_in[workitem_document,jpg,jpeg,pdf,png,doc]'
            ]);            
        
 
        if (!$validated){
            $msg = 'Only allow file type [xls,xlsx] and image size should be less than 2 MB';
        }else{
            $avatar = $this->request->getFile('workitem_document');
            $newName = $avatar->getRandomName();
            $avatar->move(ROOTPATH . 'uploads/workitem_document', $newName);

            $data = [
                'document_description'=>$workitem_description,
                'document_name'=>$newName,
                'document_name_val'=>$workitem_name,                
                'tender_id'  => $this->request->getVar('tender_id'),
                'document_type'=>'workitem_document',
                'submit_date'=> date('d-m-Y')
             ];

           
           if($data==null){
            return redirect()->to( base_url('/admin/tender_edit?action=success'));
        }else{
            $save = $DocumentModel->insert($data);
        }
        

        
    

    }
    
   }
       // corrigndum//
        $avatar = $this->request->getFile('cor_upload_document');
        
        $workitem_description = $this->request->getVar('cor_description');
        // $nit_document = $this->request->getFile('nit_document');
        
        // print_r($workitem_name);
        // print_r($workitem_description);
        // print_r($avatar);
        // exit();
        $imageCheck = $avatar->getClientName();
        // echo $imageCheck;
        // exit();
        if($imageCheck) {
             
            $validated = $this->validate([
                    'cor_upload_document' => 'uploaded[cor_upload_document]|max_size[cor_upload_document,2048]|ext_in[cor_upload_document,jpg,jpeg,pdf,png,doc]'
            ]);            
        
 
        if (!$validated){
            $msg = 'Only allow file type [xls,xlsx] and image size should be less than 2 MB';
        }else{
            $avatar = $this->request->getFile('cor_upload_document');
            $newName = $avatar->getRandomName();
            $avatar->move(ROOTPATH . 'uploads/corrigendum', $newName);

            $data = [
                'add_description'=>$workitem_description,
                'upload_document'=>$newName,
                                
                'tender_id'  => $this->request->getVar('tender_id'),
                'submit_date'=> date('d-m-Y')
                

                


           ];

           
            $save = $CorrigendumModel->insert($data);
        
        

        
    

    }
    
   }




       // $dataval = $this->request->getVar('cor_description');
       //  $avatar = $this->request->getFileMultiple('cor_upload_document');
       //   // print_r($avatar);
       //   // exit;
       // $i=0;foreach($avatar as $avatarval){

       //      $imageCheck[] = $avatarval->getRandomName();
       //      $avatarval->move(ROOTPATH . 'uploads/corrigendum',$imageCheck[$i]);

       //  $i++; }


       //  $arrval = array_combine($imageCheck,$dataval);
       //  if(!empty($arrval)){
       //      $i=0;foreach($arrval as  $key=>$val){
       //      $corData = [
       //           'tender_id'  => $this->request->getVar('tender_id'),
       //           'upload_document'=>$key,
       //           'add_description'=>$val
       //      ];
       //          $CorrigendumModel->insert($corData);
       //          $i++; }

       //      }



        $tenModel->update($id,$data);
        return $this->response->redirect(site_url('/admin/tender_show'));
    }

    public function tender_view_show($id = null){
        $tenModel = new TenderModel();
        $DocumentModel = new DocumentModel();
        $CorrigendumModel = new CorrigendumModel();

        $data['pri'] = $tenModel->where('id', $id)->first();
        $get_id = $tenModel->Select('tender_id')->where('id', $id)->first();
        $data['pri_nit'] = $DocumentModel->where('tender_id', $get_id)->where('document_type', 'nit_document')->findAll();
        $data['pri_work'] = $DocumentModel->where('tender_id', $get_id)->where('document_type', 'workitem_document')->findAll();
        $data['coria'] = $CorrigendumModel->where('tender_id', $get_id)->findAll();
        return view('templates/public_dash_header')
        .view('frontend/dashboard/tender_show',$data)
        .view('templates/public_dash_footer');
    }

    public function tender_view_document($id = null){
        $tenModel = new TenderModel();
        $DocumentModel = new DocumentModel();
        $CorrigendumModel = new CorrigendumModel();
        $DocassignModel = new DocassignModel();

        $data['pri'] = $tenModel->where('id', $id)->first();
        $get_id = $tenModel->Select('tender_id')->where('id', $id)->first();
        $data['technical'] = $DocassignModel->where('tender_id', $get_id)->where('document_type', 'Technical')->findAll();
        $data['financial'] = $DocassignModel->where('tender_id', $get_id)->where('document_type', 'Financial')->findAll();
        $data['common'] = $DocassignModel->where('tender_id', $get_id)->where('document_type', 'Common Document')->findAll();
        $data['one'] = $DocassignModel->where('tender_id', $get_id)->where('document_type', 'One time Document')->findAll();
        

        // print_r($dum); exit();
        return view('templates/public_dash_header')
        .view('frontend/dashboard/tender_view_document_assign',$data)
        .view('templates/public_dash_footer');
    }

    public function tender_doc_approve() {

        
        $docModel = new DocassignModel();
        // $nmid = $this->post('id');
        $id = $this->request->getVar('id');
        $data = [
            // 'status'=>$this->request->getVar('status'),
            'remarks'=>$this->request->getVar('tender_doc_remarks'),
        ];

        // print_r($data); exit();

        $docModel->update($id, $data);

        return $this->response->redirect(site_url('/admin/tender_show'));

    }
        
    public function tend_delete($id = null){
        $divrModel = new TenderModel();

        $data['user'] = $divrModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/tender_show'));
    }
   
    public function cor_delete($id = null){
        $CorrigendumModel = new CorrigendumModel();
        $DocumentModel = new DocumentModel();

                

        $data['user'] = $CorrigendumModel->where('id', $id)->delete($id);
        $data['user'] = $DocumentModel->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/admin/tender_edit/'));
    }


   // -----------Document Upload -------------------------
    public function document_info($id=null){

       $data['id_val'] = $id;
          
        return view('templates/public_dash_header')
        .view('frontend/dashboard/document_upload',$data)
        .view('templates/public_dash_footer');
    }

    public function get_document_info(){
        $DocumentNameModel = new DocumentNameModel();
        $document_type = $this->request->getVar('docinfo');
        $data['doc_name'] = $DocumentNameModel->where('document_type',$document_type)->findAll();
        echo view('frontend/dashboard/ajax/document_name', $data);
    }
    

    public function get_document_list_data(){
        $DocumentNameModel = new DocumentNameModel();
        $docinfo = $this->request->getVar('docinfo');
        $document_type = $this->request->getVar('document_type');

        $data['doc_file'] = $DocumentNameModel->where('document_type',$document_type)->where('name',$docinfo)->findAll();
        echo view('frontend/dashboard/ajax/document_file', $data);
    }

    public function document_upload(){
        $docModel = new TenderdocumentModel();
        
        $document_type = $this->request->getVar('document_type');
        $document_list = $this->request->getVar('document_list');
        $document_name = $this->request->getVar('document_name');
        $tenderdocfile = $this->request->getVar('tenderdocfile');
        $tenderdocfiledoc = implode(',', $tenderdocfile);
        
        $tender_id = $this->request->getVar('tender_id');

        $workitem_document = $this->request->getFile('document_file');
         $imageCheck = $workitem_document->getClientName();
        
        if($imageCheck){
        $workitem_document = $this->request->getFile('document_file');
        $newName = $workitem_document->getRandomName();

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
                 'document_list'=>$document_list,
                 'document_name'=>$document_name,
                 'document_file'=>$newName,
                 'document_type'=>$document_type,
                 'tender_id'=>$tender_id,
                 'status'=>'Pending',
                 'submit_date'=> date('d-m-Y')
        ];

               $docModel->insert($workData);
                 
        return $this->response->redirect(site_url('/admin/show_document'));
  }else{

    $workData = [
                 'document_list'=>$document_list,
                 'document_file'=>$tenderdocfiledoc,
                 'document_type'=>$document_type,
                 'tender_id'=>$tender_id,
                 'status'=>'Pending',
                 'submit_date'=> date('d-m-Y')
        ];

               $docModel->insert($workData);
                 
        return $this->response->redirect(site_url('/admin/show_document'));

  }
}

    public function document_views($id = null){
        $docModel =new TenderdocumentModel();

        $data['pri'] = $docModel->where('id', $id)->first();        
        $data['doc'] = $docModel->where('id', $id)->findAll();

        // echo "<pre>";
        // print_r($sum);
        // echo "</pre>";

        // exit();
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/document_view',$data)
        .view('templates/public_dash_footer');
    }

    public function document_filter()
    {
       $session = session();
        
        $model = new TenderModel();
        $tpd = $this->request->getVar('tpd');
        $bsd = $this->request->getVar('bsd');
        $status_filter = $this->request->getVar('status_filter');
        

         $circle =  $session->get('circle');
         $organization = $session->get('organization');
         $role = $session->get('role');
        
        if(($circle && $organization) && $role!='admin'){

        $search_data = $this->request->getVar('search_data');

        if($search_data){
        $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($tpd){
        $data['tend']=$model->like('tender_publish_date',$tpd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($bsd){
        $data['tend']=$model->like('bid_submission_end_date',$bsd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($status_filter){
        $data['tend']=$model->like('tender_status',$status_filter)->where('zone',$circle)->where('client_nme', $organization)->findAll();  
                                
        }else{
        $data['tend']=$model->orderBy('id', 'DESC')->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }


        }else{


        $search_data = $this->request->getVar('search_data');

        if($search_data){
            $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->findAll();
        }else if($tpd){
                     $data['tend']=$model->like('tender_publish_date',$tpd)->findAll();
        }else if($bsd){
                     $data['tend']=$model->like('bid_submission_end_date',$bsd)->findAll();
        }else if($status_filter){
                     $data['tend']=$model->like('tender_status',$status_filter)->findAll();  
                                
        }else{
            $data['tend']=$model->orderBy('id', 'DESC')->findAll();
        }


      }

        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/document_show',$data)
        .view('templates/public_dash_footer');


    }

    public function show_document()
    {
        $docmodel = new TenderModel();
        
        $data['tend']=$docmodel->findAll();

      return view('templates/public_dash_header')
        .view('frontend/dashboard/document_show',$data)
        .view('templates/public_dash_footer');
    }

    public function document_edit($id = null){
        $docmodel = new TenderdocumentModel();
        $data['doc'] = $docmodel->where('id', $id)->first();
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/document_edit',$data)
        .view('templates/public_dash_footer');
    }
    public function document_update(){
        $docmodel = new TenderdocumentModel();
        $id = $this->request->getVar('id');

        $data = [
            'document_name' => $this->request->getVar('document_name'),
            'document_type'  => $this->request->getVar('document_type'),
            'document_file'  => $this->request->getVar('document_file'),
            
        ];


        $workitem_name = $this->request->getVar('workitem_name');
        $workitem_description = $this->request->getVar('workitem_description');
        $workitem_document = $this->request->getFileMultiple('workitem_file');

        print_r($workitem_document); exit();
        
        if($workitem_document){
        $i=0;foreach($workitem_document as $avatardoc){
            $workCheck[] = $avatardoc->getRandomName();
            $avatardoc->move(ROOTPATH . 'uploads/tender_document',$workCheck[$i]);
        $i++; }}

        if($workitem_description){
            $workitem = array();
            for($z=0; $z<count($workitem_description); $z++){
            $workitem[]=array($workitem_description[$z],$workCheck[$z],$workitem_name[$z]);
            }
        }

        
        if(!empty($workitem)){
            $i=0; foreach($workitem as  $keydata){
             $workData = [
                 'document_name'=>$keydata[0],
                 'document_file'=>$keydata[1],
                 'document_type'=>$keydata[2],
                 // 'tender_id'  => $this->request->getVar('tender_id'),
                 // 'document_type'=>'workitem_document'
            ];
               $docModel->insert($workData);
                 $i++; }
        }

        $docmodel->update($id, $data);
        return $this->response->redirect(site_url('/admin/show_document'));
    }
    public function  document_delete($id = null){
        $docmodel = new TenderdocumentModel();
        $data['doc'] = $docmodel->where('id', $id)->delete($id);
        if($data){

                $msg = 'Data Deleted Successfully.';

              }else{

                $msg = 'Data Not Updated.';

              }
        return redirect()->to( site_url('/admin/show_document') )->with('msg', $msg); 
        // return $this->response->redirect(site_url('/admin/show_document'))->with('msg', $msg);
    }
     

    public function document_edit_delete($id = null){
        $docmodel = new TenderdocumentModel();
        $data['doc'] = $docmodel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/show_document'));
    }

    public function document_approve($id=null)
    {
        $model = new TenderdocumentModel();
        
        $data['doc']=$model->where('tender_id',$id)->findAll();
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/document_approve',$data)
        .view('templates/public_dash_footer');
    }

    public function document_ap_views($id = null){
        $docModel =new TenderdocumentModel();

        $data['pri'] = $docModel->where('id', $id)->first();        
        $data['doc'] = $docModel->where('id', $id)->findAll();

        // echo "<pre>";
        // print_r($sum);
        // echo "</pre>";

        // exit();
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/document_ap_view',$data)
        .view('templates/public_dash_footer');
    }

    public function doc_approve() {

        
        $docModel = new TenderdocumentModel();
        // $nmid = $this->post('id');
         $id = $this->request->getVar('id');
        $tender_id = $docModel->select('tender_id')->where('id',$id)->first();
       
        $data = [
            'status'=>$this->request->getVar('status'),
            'remarks'=>$this->request->getVar('remarks'),
        ];

        $docModel->update($id, $data);

        return $this->response->redirect(site_url('/admin/documents-approver/'.$tender_id['tender_id']));

    }

    // Document Check

    public function document_check_filter()
    {
       $session = session();
        
        $model = new TenderModel();
        $tpd = $this->request->getVar('tpd');
        $bsd = $this->request->getVar('bsd');
        $status_filter = $this->request->getVar('status_filter');
        

          $circle =  $session->get('circle');
         $organization = $session->get('organization');
         $role = $session->get('role');
        
        if(($circle && $organization) && $role!='admin'){

        $search_data = $this->request->getVar('search_data');

        if($search_data){
        $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($tpd){
        $data['tend']=$model->like('tender_publish_date',$tpd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($bsd){
        $data['tend']=$model->like('bid_submission_end_date',$bsd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($status_filter){
        $data['tend']=$model->like('tender_status',$status_filter)->where('zone',$circle)->where('client_nme', $organization)->findAll();  
                                
        }else{
        $data['tend']=$model->orderBy('id', 'DESC')->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }


        }else{


        $search_data = $this->request->getVar('search_data');

        if($search_data){
            $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->findAll();
        }else if($tpd){
                     $data['tend']=$model->like('tender_publish_date',$tpd)->findAll();
        }else if($bsd){
                     $data['tend']=$model->like('bid_submission_end_date',$bsd)->findAll();
        }else if($status_filter){
                     $data['tend']=$model->like('tender_status',$status_filter)->findAll();  
                                
        }else{
            $data['tend']=$model->orderBy('id', 'DESC')->findAll();
        }


      }

        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/document_show_check',$data)
        .view('templates/public_dash_footer');


    }

    public function document_ch_show()
    
    {
        $model = new TenderModel();
        
        $data['tend']=$model->findAll();
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/document_show_check',$data)
        .view('templates/public_dash_footer');
    }

    public function document_checkr_assign_view($id=null)
    {
       // $tenModel = new TenderModel();
        // $model = new TenderdocumentModel();
        // $data['price_data'] = $tenModel->Select('tname')->where('tname', $id)->first(); 
        // $data['coria'] = $tenModel->where('tender_id', $id)->findAll();

        // $data['sum']=$model->findAll();


        $tenModel = new TenderModel();
        $DocumentModel = new DocumentModel();
        $CorrigendumModel = new CorrigendumModel();
        $DocassignModel = new DocassignModel();

        $data['pri'] = $DocassignModel->where('tender_id', $id)->first();
        $get_id = $DocassignModel->Select('tender_id')->where('id', $id)->first();
        print_r($get_id); exit();
        
        
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/document_assign_view',$data)
        .view('templates/public_dash_footer');
    }

    public function tender_checkrs($id = null)
    {
        $tenModel = new TenderModel();
        $model = new TenderdocumentModel();
        $DocassignModel = new DocassignModel();
        $data['pri'] = $tenModel->where('tender_id', $id)->first(); 
        
        $data['pr']=$DocassignModel->where('tender_id',$id)->first();
        $get_id = $DocassignModel->Select('tender_id')->where('tender_id', $id)->first();
        $data['sum'] = $DocassignModel->where('tender_id', $get_id)->where('document_type', 'Technical')->findAll();
        $data['fin'] = $DocassignModel->where('tender_id', $get_id)->where('document_type', 'Financial')->findAll();
        $data['com'] = $DocassignModel->where('tender_id', $get_id)->where('document_type', 'Common Document')->findAll();
        $data['one'] = $DocassignModel->where('tender_id', $get_id)->where('document_type', 'One time Document')->findAll();

        $data['rem']=$DocassignModel->first();

        return view('templates/public_dash_header')
        .view('frontend/dashboard/document_assign_view',$data)
        .view('templates/public_dash_footer');
    }


    public function document_checkrs($id = null)
    {
        $tenModel = new TenderModel();
        $model = new TenderdocumentModel();
        $data['pri'] = $tenModel->where('tender_id', $id)->first(); 
        $data['coria'] = $tenModel->where('tender_id', $id)->findAll();
        $data['technical'] = $model->where('document_type', 'Technical')->where('tender_id',$id)->where('status','Checked')->findAll();
        $data['financial'] = $model->where('document_type', 'Financial')->where('tender_id',$id)->where('status','Checked')->findAll();
        $data['common'] = $model->where('document_type', 'Common Document')->where('tender_id',$id)->where('status','Checked')->findAll();
        $data['one'] = $model->where('document_type', 'One time Document')->where('tender_id',$id)->where('status','Checked')->findAll();

        $data['sum']=$model->findAll();

        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/document_check',$data)
        .view('templates/public_dash_footer');
    }


public function document_status_update()
    {
        $model = new TenderdocumentModel();

        $idnum = $this->request->getVar('num');
        $stat = $this->request->getVar('status');

        $data = [
            'final_status'=>$stat
        ];

        $model->update($idnum,$data);
    }

  
     public function document_assign(){
        $docModel =new DocassignModel();
        

        $workitem_name = $this->request->getVar('workitem_name');
        $workitem_description = $this->request->getVar('workitem_description');
        $workitem_document = $this->request->getFileMultiple('workitem_document');

        // echo "<pre>";
        // print_r($workitem_name);
        // echo "</pre>";

        // exit();
        
        if($workitem_document){
        $i=0;foreach($workitem_document as $avatardoc){
            $workCheck[] = $avatardoc->getRandomName();
            $avatardoc->move(ROOTPATH . 'uploads/assign_document',$workCheck[$i]);
        $i++; }}

        if($workitem_description){
            $workitem = array();
            for($z=0; $z<count($workitem_description); $z++){
            $workitem[]=array($workitem_description[$z],$workCheck[$z],$workitem_name[$z]);
            }
        }

        
        if(!empty($workitem)){
            $i=0; foreach($workitem as  $keydata){
             $workData = [
                 'document_name'=>$keydata[0],
                 'document'=>$keydata[1],
                 'document_type'=>$keydata[2],
                 'tender_id'  => $this->request->getVar('tender_id'),
                 'submit_date'=> date('d-m-Y')
                 // 'document_type'=>'workitem_document'
            ];

        
               $docModel->insert($workData);
                 $i++; }
        }

        // echo "<pre>";
        // print_r($workData);
        // echo "</pre>";

        // exit();

        
        return $this->response->redirect(site_url('/admin/document_tender'));
    }


    //-------------Tender Document Upload----------------------

    public function document_uploader()
    {
        $docmodel = new DocumentModel();
        $data['doc']=$docmodel->findAll();

        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/tender_document',$data)
        .view('templates/public_dash_footer');
    }
    

    //---------------Product Category--------------------
    public function product_info(){
        $model = new ProductModel();
        $data['pro']=$model->findAll();
        return view('templates/public_dash_header')
        .view('frontend/dashboard/product_show',$data)
        .view('templates/public_dash_footer');
    }
    public function product(){
        return view('templates/public_dash_header')
        .view('frontend/dashboard/product_add')
        .view('templates/public_dash_footer');
    }
    public function add_product()
    {        
        $divrModel = new ProductModel();
        $data = [
            'product_category' => $this->request->getVar('product_category'),
            'sub_category'  => $this->request->getVar('sub_category'),
            'submit_date'=> date('d-m-Y')
            
        ];
        $divrModel->insert($data);
        return $this->response->redirect(site_url('/admin/show_product'));
    
    }
    public function product_edit($id = null){
        $divrModel = new ProductModel();
        $data['user_obj'] = $divrModel->where('id', $id)->first();
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/product_edit',$data)
        .view('templates/public_dash_footer');
    }
    public function p_update(){
        $divrModel = new ProductModel();
        $id = $this->request->getVar('id');
        $data = [
            'product_category' => $this->request->getVar('product_category'),
            'sub_category'  => $this->request->getVar('sub_category'),
            'submit_date'=> date('d-m-Y')
        ];
        $divrModel->update($id, $data);
        return $this->response->redirect(site_url('/admin/show_product'));
    }
    public function p_delete($id = null){
        $divrModel = new ProductModel();
        $data['user'] = $divrModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/show_product'));
    }

    //*************** tender_approve ***************************
    
    public function tender_apu()
    {
       $session = session();
        
        $model = new TenderModel();
        $tpd = $this->request->getVar('tpd');
        $bsd = $this->request->getVar('bsd');
        $status_filter = $this->request->getVar('status_filter');


         $circle =  $session->get('circle');
         $organization = $session->get('organization');
         $role = $session->get('role');
        
        if(($circle && $organization) && $role!='admin'){

        $search_data = $this->request->getVar('search_data');

        if($search_data){
        $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($tpd){
        $data['tend']=$model->like('tender_publish_date',$tpd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($bsd){
        $data['tend']=$model->like('bid_submission_end_date',$bsd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($status_filter){
        $data['tend']=$model->like('tender_status',$status_filter)->where('zone',$circle)->where('client_nme', $organization)->findAll();  
                                
        }else{
        $data['tend']=$model->orderBy('id', 'DESC')->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }


        }else{


        $search_data = $this->request->getVar('search_data');

        if($search_data){
            $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->findAll();
        }else if($tpd){
                     $data['tend']=$model->like('tender_publish_date',$tpd)->findAll();
        }else if($bsd){
                     $data['tend']=$model->like('bid_submission_end_date',$bsd)->findAll();
        }else if($status_filter){
                     $data['tend']=$model->like('tender_status',$status_filter)->findAll();  
                                
        }else{
            $data['tend']=$model->orderBy('id', 'DESC')->findAll();
        }


      }

        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/tender_approve',$data)
        .view('templates/public_dash_footer');


    }

    public function tender_approve()
    {
        $model = new TenderModel();
        
        $data['tend']=$model->findAll();
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/tender_approve',$data)
        .view('templates/public_dash_footer');
    }

    public function tender_approve_show($id = null){
        $tenModel = new TenderModel();
        $DocumentModel = new DocumentModel();
        $CorrigendumModel = new CorrigendumModel();


        $data['pri'] = $tenModel->where('id', $id)->first();
        $get_id = $tenModel->Select('tender_id')->where('id', $id)->first();
        $data['pri_nit'] = $DocumentModel->where('tender_id', $get_id)->where('document_type', 'nit_document')->findAll();
        $data['pri_work'] = $DocumentModel->where('tender_id', $get_id)->where('document_type', 'workitem_document')->findAll();
        $data['coria'] = $CorrigendumModel->where('tender_id', $get_id)->findAll();

       
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/tender_approve_show',$data)
        .view('templates/public_dash_footer');
    }


public function tender_assigned_users($id = null){
        $tenModel = new TenderModel();
        $TenderassignModel = new TenderassignModel();
        

        $data['pri'] = $tenModel->where('tender_id', $id)->first();
        $data['technical_user'] = $TenderassignModel->where('tender_id', $id)->where('user_type','Technical')->first();
        $data['financial_user'] = $TenderassignModel->where('tender_id', $id)->where('user_type','Financial')->first();
        $data['onetime_user'] = $TenderassignModel->where('tender_id', $id)->where('user_type','One Time')->first();
        $data['common_user'] = $TenderassignModel->where('tender_id', $id)->where('user_type','common')->first();
       
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/tender_assign_users',$data)
        .view('templates/public_dash_footer');
    }




    public function approve() {

        
        $apModel = new TenderModel();
        // $nmid = $this->post('id');
        echo $id = $this->request->getVar('id');

        $data = [
            'tender_status'=>$this->request->getVar('tender_status'),
            'approve_remarks'=>$this->request->getVar('approve_remarks')
        ];

        $apModel->update($id, $data);

        return $this->response->redirect(site_url('/admin/tender_approve'));

    }

    public function tender_assign($id = null)
    {
        $divmodel = new UserfrontModel();
        $tenModel = new TenderModel();
        $docUser = new DocumentUserModel();
         
        $data['tend'] = $tenModel->where('tender_id', $id)->first();       
        $get_id = $tenModel->Select('tender_id')->where('id', $id)->first();


        // $data['users'] = $divmodel->findAll();

        $data['userstec'] = $docUser->where('role','Technical')->findAll();
        $data['usersfin'] = $docUser->where('role','Financial')->findAll();
        $data['userscom'] = $docUser->where('role','Comman')->findAll();
        $data['usersone'] = $docUser->where('role','One time')->findAll();
        

        echo view('templates/public_dash_header');
        echo view('frontend/dashboard/tender_assign',$data);
        echo view('templates/public_dash_footer');
    }

   

    public function assign()
    {
        
        $divrModel = new TenderassignModel();
        $data = [
            'tender_id' => $this->request->getVar('tender_id'),
            'assing_user'  => $this->request->getVar('assing_user'),
            'user_type'  => $this->request->getVar('user_type'),
            'user_id'  => $this->request->getVar('user_id'),
            
        ];

        
        
        
        $divrModel->insert($data);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        // exit();
        
        return $this->response->redirect(site_url('/admin/tender_approve'));
    }




    /************************Price Upload*******************/

    public function price_filter()
    {
       $session = session();
        
        $model = new TenderModel();
        $tpd = $this->request->getVar('tpd');
        $bsd = $this->request->getVar('bsd');
        $status_filter = $this->request->getVar('status_filter');

        $circle =  $session->get('circle');
        $organization = $session->get('organization');
        $role = $session->get('role');
        
        if(($circle && $organization) && $role!='admin'){

        $search_data = $this->request->getVar('search_data');

        if($search_data){
        $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($tpd){
        $data['tend']=$model->like('tender_publish_date',$tpd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($bsd){
        $data['tend']=$model->like('bid_submission_end_date',$bsd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($status_filter){
        $data['tend']=$model->like('tender_status',$status_filter)->where('zone',$circle)->where('client_nme', $organization)->findAll();  
                                
        }else{
        $data['tend']=$model->orderBy('id', 'DESC')->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }


        }else{


        $search_data = $this->request->getVar('search_data');

        if($search_data){
            $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->findAll();
        }else if($tpd){
                     $data['tend']=$model->like('tender_publish_date',$tpd)->findAll();
        }else if($bsd){
                     $data['tend']=$model->like('bid_submission_end_date',$bsd)->findAll();
        }else if($status_filter){
                     $data['tend']=$model->like('tender_status',$status_filter)->findAll();  
                                
        }else{
            $data['tend']=$model->orderBy('id', 'DESC')->findAll();
        }


      }

        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/price_maker',$data)
        .view('templates/public_dash_footer');


    }

    public function price_maker()
    {
        $model = new TenderModel();
        $tpModel = new PriceModel();
        
        $data['tend']=$model->findAll();
        $sum['ps']=$tpModel->findAll();       

        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/price_maker',$data)
        .view('templates/public_dash_footer');
    }

    public function tender_price()
    {
        $model = new TenderModel();

        $get_id = $model->Select('tender_id')->where('id', $id)->first();
        // echo "<pre>";
        // print_r($get_id);
        // echo "</pre>";

        // exit();


        return view('templates/public_dash_header')
        .view('frontend/dashboard/price_data')
        .view('templates/public_dash_footer');
    }

    public function price_edit($id = null)
    {
        $tenModel = new TenderModel();
        $tpModel = new PriceModel();
        // $data['price_data'] = $tenModel->Select('tname')->where('tname', $id)->first(); 
        $data['tend'] = $tenModel->where('tender_id', $id)->first();       
        //$get_id = $tenModel->Select('tender_id')->where('tender_id', $id)->first();

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        // exit();

        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/price_data',$data)
        .view('templates/public_dash_footer');
    }

   

    

    public function add_price()
    {
        helper(['form', 'url']);
        $tpModel = new PriceModel();
        $model = new TenderModel();

        $avatar = $this->request->getFile('price_file');
        $tend  = $this->request->getVar('tender_id');

        // echo "$tend";
        // exit();
        $imageCheck = $avatar->getClientName();
        if($imageCheck) {
             
            $validated = $this->validate([
                    'price_file' => 'uploaded[price_file]|max_size[price_file,2048]|ext_in[price_file,jpg,jpeg,pdf,png,doc],'
            ]);            
        
 
        if (!$validated){
            $msg = 'Only allow file type [xls,xlsx] and image size should be less than 2 MB';
        }else{
            $avatar = $this->request->getFile('price_file');
            $newName = $avatar->getRandomName();
            $avatar->move(ROOTPATH . 'uploads/price_document', $newName);

            $data = [
                'price'=>$newName,
                'tender_id'=>$tend,
                'status'=>'Pending',
                'submit_date'=> date('d-m-Y')
           ];

        $save = $tpModel->insert($data);

        if($save){
            return redirect()->to( base_url('/admin/price_maker'));
        }else{
            $msg ="Data Not Added.";
            return redirect()->to( base_url('/admin/price_maker'))->with('msg', $msg);
        }
    

    }
    
    }
        return redirect()->to( base_url('/admin/price_maker'))->with('msg', $msg);
    }



   
    

    public function price_approve($id=null) {

        
        $prModel = new PriceModel();
        // $nmid = $this->post('id');
         $id = $this->request->getVar('id');

        $data = [
            'status'=>$this->request->getVar('price_status'),
            'remarks'=>$this->request->getVar('remarks')
        ];
        
        $prModel->update($id, $data);

        return $this->response->redirect(site_url('/admin/price_checker'));

    }

    public function price_check_filter()
    {
       $session = session();
        
        $model = new TenderModel();
        $tpd = $this->request->getVar('tpd');
        $bsd = $this->request->getVar('bsd');
        $status_filter = $this->request->getVar('status_filter');


          $circle =  $session->get('circle');
         $organization = $session->get('organization');
         $role = $session->get('role');
        
        if(($circle && $organization) && $role!='admin'){

        $search_data = $this->request->getVar('search_data');

        if($search_data){
        $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($tpd){
        $data['tend']=$model->like('tender_publish_date',$tpd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($bsd){
        $data['tend']=$model->like('bid_submission_end_date',$bsd)->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }else if($status_filter){
        $data['tend']=$model->like('tender_status',$status_filter)->where('zone',$circle)->where('client_nme', $organization)->findAll();  
                                
        }else{
        $data['tend']=$model->orderBy('id', 'DESC')->where('zone',$circle)->where('client_nme', $organization)->findAll();
        }


        }else{


        $search_data = $this->request->getVar('search_data');

        if($search_data){
            $data['tend']=$model->like('tags',$search_data)->orLike('client_nme',$search_data)->orLike('tender_refer_number',$search_data)->orLike('location',$search_data)->orLike('tender_id',$search_data)->findAll();
        }else if($tpd){
                     $data['tend']=$model->like('tender_publish_date',$tpd)->findAll();
        }else if($bsd){
                     $data['tend']=$model->like('bid_submission_end_date',$bsd)->findAll();
        }else if($status_filter){
                     $data['tend']=$model->like('tender_status',$status_filter)->findAll();  
                                
        }else{
            $data['tend']=$model->orderBy('id', 'DESC')->findAll();
        }


      }

        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/price_approver',$data)
        .view('templates/public_dash_footer');


    }


    public function price_app_view()
    {
        $model = new TenderModel();
        $prModel = new PriceModel();
        $data['tend'] = $prModel->findAll();
        
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/price_approver',$data)
        .view('templates/public_dash_footer');
    }

    


    public function tender_price_show($id = null){
        $prModel = new PriceModel();
        $data['coria'] = $prModel->where('tender_id', $id)->findAll();
        return view('templates/public_dash_header')
        .view('frontend/dashboard/price_show',$data)
        .view('templates/public_dash_footer');
    }

    public function price_delete($id = null){
        $divrModel = new PriceModel();

        $data['pri'] = $divrModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/price_maker'));
    }

    public function price_views($id = null){
        $docModel =new PriceModel();

        $data['coria'] = $docModel->where('tender_id', $id)->findAll();

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        // exit();
        
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/price_view',$data)
        .view('templates/public_dash_footer');
    }

    


    public function rfp_search_show()
    {
        $PriceModel = new PriceModel();

        
        $search_data = $this->request->getVar('search_data');
        if($search_data){
            $data['tend']=$PriceModel->like('tender_id',$search_data)->findAll();
        }else{
            $data['tend']=$PriceModel->findAll();
        }
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/rfp_extrctor',$data)
        .view('templates/public_dash_footer');
    }
    
    

    public function rfp_extractor($id = null)
    {
        $docmodel = new TenderdocumentModel();
        $PriceModel = new PriceModel();

        
        $data['doc'] = $docmodel->where('tender_id',$id)->where('final_status','Approved')->findAll();
        $data['bid'] = $PriceModel->where('tender_id',$id)->where('status','Approved')->findAll();


        return view('templates/public_dash_header')
        .view('frontend/dashboard/rfp_extrctor',$data)
        .view('templates/public_dash_footer');
    }

    public function rfp_document_info(){

        return view('templates/public_dash_header')
        .view('frontend/dashboard/rfp_add')
        .view('templates/public_dash_footer');
    }


    

    public function rfp_document_upload(){
        $docModel =new TenderdocumentModel();
        

        $workitem_name = $this->request->getVar('workitem_name');
        $workitem_description = $this->request->getVar('workitem_description');
        $workitem_document = $this->request->getFileMultiple('document_file');
        
        if($workitem_document){
        $i=0;foreach($workitem_document as $avatardoc){
            $workCheck[] = $avatardoc->getRandomName();
            $avatardoc->move(ROOTPATH . 'uploads/tender_document',$workCheck[$i]);
        $i++; }}

        if($workitem_description){
            $workitem = array();
            for($z=0; $z<count($workitem_description); $z++){
            $workitem[]=array($workitem_description[$z],$workCheck[$z],$workitem_name[$z]);
            }
        }

        
        if(!empty($workitem)){
            $i=0; foreach($workitem as  $keydata){
             $workData = [
                 'document_name'=>$keydata[0],
                 'document_file'=>$keydata[1],
                 'document_type'=>$keydata[2],
                 // 'tender_id'  => $this->request->getVar('tender_id'),
                 // 'document_type'=>'workitem_document'
            ];
               $docModel->insert($workData);
                 $i++; }
        }

        // echo "<pre>";
        // print_r($workData);
        // echo "</pre>";

        // exit();

        
        return $this->response->redirect(site_url('/admin/rfp'));
    }

    public function rfp_document_edit($id = null){
        $docmodel = new TenderdocumentModel();
        $data['doc'] = $docmodel->where('id', $id)->first();
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/rfp_edit',$data)
        .view('templates/public_dash_footer');
    }
    public function rfp_document_update(){
        $docmodel = new TenderdocumentModel();
        $id = $this->request->getVar('id');

        $data = [
            'document_name' => $this->request->getVar('document_name'),
            'document_type'  => $this->request->getVar('document_type'),
            'document_file'  => $this->request->getVar('document_file'),
            
        ];


        $workitem_name = $this->request->getVar('workitem_name');
        $workitem_description = $this->request->getVar('workitem_description');
        $workitem_document = $this->request->getFileMultiple('document_file');
        
        if($workitem_document){
        $i=0;foreach($workitem_document as $avatardoc){
            $workCheck[] = $avatardoc->getRandomName();
            $avatardoc->move(ROOTPATH . 'uploads/tender_document',$workCheck[$i]);
        $i++; }}

        if($workitem_description){
            $workitem = array();
            for($z=0; $z<count($workitem_description); $z++){
            $workitem[]=array($workitem_description[$z],$workCheck[$z],$workitem_name[$z]);
            }
        }

        
        if(!empty($workitem)){
            $i=0; foreach($workitem as  $keydata){
             $workData = [
                 'document_name'=>$keydata[0],
                 'document_file'=>$keydata[1],
                 'document_type'=>$keydata[2],
                 // 'tender_id'  => $this->request->getVar('tender_id'),
                 // 'document_type'=>'workitem_document'
            ];
               $docModel->insert($workData);
                 $i++; }
        }

        $docmodel->update($id, $data);
        return $this->response->redirect(site_url('/admin/rfp'));
    }

    public function  rfp_document_delete($id = null){
        $docmodel = new TenderdocumentModel();
        $data['doc'] = $docmodel->where('id', $id)->delete($id);
        if($data){

                $msg = 'Data Deleted Successfully.';

              }else{

                $msg = 'Data Not Updated.';

              }
        return redirect()->to( site_url('/admin/rfp') )->with('msg', $msg); 
        // return $this->response->redirect(site_url('/admin/show_document'))->with('msg', $msg);
    }
     

    public function rfp_document_edit_delete($id = null){
        $docmodel = new TenderdocumentModel();
        $data['doc'] = $docmodel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/rfp'));
    }

    public function rfp_tender_price_show($id = null){
        $prModel = new PriceModel();

        $data['coria'] = $prModel->where('tender_id', $id)->findAll();
        
        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/rfp_price_show',$data)
        .view('templates/public_dash_footer');
    }

    public function rfp_price_edit($id = null)
    {
        $tenModel = new TenderModel();
        $tpModel = new PriceModel();
        // $data['price_data'] = $tenModel->Select('tname')->where('tname', $id)->first(); 
        $data['tend'] = $tenModel->where('id', $id)->first();       
        $get_id = $tenModel->Select('tender_id')->where('id', $id)->first();

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        // exit();

        
        return view('templates/public_dash_header')
        .view('frontend/dashboard/price_data',$data)
        .view('templates/public_dash_footer');
    }

    public function rfp_price_delete($id = null){
        $divrModel = new PriceModel();

        $data['pri'] = $divrModel->where('id', $id)->delete($id);
        if($data){

                $msg = 'Data Deleted Successfully.';

              }else{

                $msg = 'Data Not Updated.';

              }
        return redirect()->to( site_url('/admin/rfp') )->with('msg', $msg); 
        // return $this->response->redirect(site_url('/admin/rfp'));
    }

    public function rfp_special_info(){

        return view('templates/public_dash_header')
        .view('frontend/dashboard/rfp_special')
        .view('templates/public_dash_footer');
    }


    

    public function rfp_special_upload(){
        $docModel =new TenderdocumentModel();
        

        $workitem_name = $this->request->getVar('workitem_name');
        $workitem_description = $this->request->getVar('workitem_description');
        $workitem_document = $this->request->getFileMultiple('document_file');
        
        if($workitem_document){
        $i=0;foreach($workitem_document as $avatardoc){
            $workCheck[] = $avatardoc->getRandomName();
            $avatardoc->move(ROOTPATH . 'uploads/tender_document',$workCheck[$i]);
        $i++; }}

        if($workitem_description){
            $workitem = array();
            for($z=0; $z<count($workitem_description); $z++){
            $workitem[]=array($workitem_description[$z],$workCheck[$z],$workitem_name[$z]);
            }
        }

        
        if(!empty($workitem)){
            $i=0; foreach($workitem as  $keydata){
             $workData = [
                 'document_name'=>$keydata[0],
                 'document_file'=>$keydata[1],
                 'document_type'=>$keydata[2],
                 // 'tender_id'  => $this->request->getVar('tender_id'),
                 // 'document_type'=>'workitem_document'
            ];
               $docModel->insert($workData);
                 $i++; }
        }

        // echo "<pre>";
        // print_r($workData);
        // echo "</pre>";

        // exit();

        
        return $this->response->redirect(site_url('/admin/rfp'));
    }


    public function add_report_rfp(){
        $docModel =new RFPModel();
        $data =[
            'document_type' => $this->request->getVar('document_type'),
            'document_file'  => $this->request->getVar('document_file'),
            
        ];
        $docModel->insert($data);
        $user_id=$docModel->getInsertID();
        return $this->response->redirect(site_url('/admin/rfp'));
    }

    public function pdfMargeDoc(){
        $pdf = new Fpdi();
        $files = ['sample.pdf', 'dd12-13_0.pdf','Howtoaceyourresume.pdf','1661360587_597cd0ee2061c87f4551.pdf'];
        foreach ($files as $file) {
            $finalpath='/home/linuxmilcl/public_html/projects/pratap/uploads/'.$file;
            // set the source file and get the number of pages in the document
            $pageCount =  $pdf->setSourceFile($finalpath);
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
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        readfile($pdf->Output());
    

    } 
}