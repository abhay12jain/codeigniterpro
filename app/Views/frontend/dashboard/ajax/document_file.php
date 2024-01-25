<?php if(!empty($doc_file)){
	//print_r($doc_file);
	//echo '<option value="">Select document</option>';
foreach ($doc_file as $doc_name_val) {if(!empty($doc_name_val['document_file'])){?>
	<!-- <option value="<?php //echo $doc_name_val['document_file']; ?>"><?php //echo $doc_name_val['document_file']; ?></option> -->
	<li>
		<input type="checkbox" class="checkbox" name="tenderdocfile[]" value="<?php echo $doc_name_val['document_file']; ?>"><?php echo $doc_name_val['document_file']; ?>
	</li>
<?php }}

 }?>
