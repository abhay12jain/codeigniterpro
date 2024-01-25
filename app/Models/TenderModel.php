<?php 

namespace App\Models;  

use CodeIgniter\Model;

  

class TenderModel extends Model{

    protected $table = 'tender_upload';

    

    protected $allowedFields = [        

        'tender_id',

        'zone',

        'tender_name',

        'organization_nam',

        'circle',

        'tender_types',

        'tname',

        'company_name',

        'client_nme',

        'department',

        'address',

        'tender_refer_number',

        'tender_category',

        'general_technical_evaluation_allowed',

        'is_multi_currency',

        'multi_currency',

        'no_covers',

        'payment_mode',

        'deparment',

        'division',

        'allow_two_stages_bidding',

        'tender_fee_in',

        'fee_payable_at',

        'fee_payable_to',

        'tender_fee_exception_allowed',

        'tender_fee_exception_allowed_for',

        'tender_fee_type',

        'tender_document_number',

        'tender_payment_mode',

        'emd_amount_in',

        'emd_fee_type',

        'if_exemption_allowed',

        'emd_exemption_allowed_for',

        'emd_document_number',

        'emd_payable_to',

        'emd_payable_at',

        'emd_payment_mode',

        'emd_percentage',

        'title',

        'product_category',

        'work_description',

        'bid_validity_days',

        'remarks',

        'pre_qulifiction_details',

        'pincode',

        'pre_bid_meeting_date',

        'remarks',

        'allow_preferential_bidder',

        'tender_value_in',

        'sub_category',

        'contract_type',

        'period_of',

        'location',

        'pre_bid_meeting',

        'pre_bid_meeting_address',

        'bid_opening_place',

        'should_allowed_nda_tender',

        'tender_publish_date',

        'document_start_date',

        'document_submit_date',

        'pre_bid_date',

        'bid_submission_start_date',

        'bid_submission_end_date',

        'bid_opening_date',

        'nit_file',

        'start_date',

        'end_date',

        'emd_document_number',

        'nit_document_name',

        'nit_description',

        'work_upload_document',

        'work_add_escription',
        
        'tags',

        'tender_status',

        'approve_remarks', 

        'submit_date',     

    ];

    

}