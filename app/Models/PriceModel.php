<?php 

namespace App\Models;  

use CodeIgniter\Model;

  

class PriceModel extends Model{

    protected $table = 'tender_price';

    

    protected $allowedFields = [

        'tender_id',

        'price',

        'status',

        'remarks'
    ];

}