<?php 
if(!empty($doc_name)){
	echo '<option value="">Select document</option>';
foreach ($doc_name as $doc_name_val) { if(!empty($doc_name_val['name'])){?>
	<option value="<?php echo $doc_name_val['name']; ?>"><?php echo $doc_name_val['name']; ?></option>
<?php }}
echo '<option value="other">Other</option>';
 }?>
