<?php if(!empty($zone_name)){

  echo '<option value="">Select Company / Client Name</option>';

foreach ($zone_name as $zone) {?>

  <option value="<?php echo $zone['organization_name']; ?>"><?php echo $zone['organization_name']; ?></option>

<?php }}?>
