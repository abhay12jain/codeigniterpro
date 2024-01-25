<?php if(!empty($category_name)){
echo '<option value="">Select Sub Category</option>';
foreach ($category_name as $category) {?>
<?php if($category['sub_category']){?>
    <option value="<?php echo $category['sub_category']; ?>"><?php echo $category['sub_category']; ?></option>
<?php }else{?>
    <option value="NA">NA</option>
<?php }}} ?>
                  

    




