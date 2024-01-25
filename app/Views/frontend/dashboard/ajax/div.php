<?php if(!empty($division_name)){

    echo '<option value="">Select Division</option>';

foreach ($division_name as $divs) {?>

    <option value="<?php echo $divs['division']; ?>"><?php echo $divs['division']; ?></option>

<?php }}?>


