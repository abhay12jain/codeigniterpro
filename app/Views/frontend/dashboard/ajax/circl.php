<?php if(!empty($circle_name)){

  echo '<option value="">Select Circle</option>';

foreach ($circle_name as $zone) {?>
     <?php print_r($zone);?>
  <option value="<?php echo $zone['circle']; ?>"><?php echo $zone['circle']; ?></option>

<?php }}?>