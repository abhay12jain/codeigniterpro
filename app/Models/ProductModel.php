<?php 

namespace App\Models;  

use CodeIgniter\Model;

  

class ProductModel extends Model{

    protected $table = 'product_category';

    

    protected $allowedFields = [

        

        'product_category',

        'sub_category'

                

    ];

}