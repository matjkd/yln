		<?php if($linked_gallery != NULL) {?>

<?=$this->load->view('sidebox/sideGallery')?>

<?php } ?>
		
		
		<?php 
		
		
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{?>
		<div class='adminBar'>	
			<?= form_open("admin/assign_gallery_to_event/".$eventID) ?> 
			<h4>Link Event to Gallery</h4>
				<select name="gallery">
				        <?php
				       		foreach($galleries as $row):?>
				          <?php if($linked_gallery == $row->gallery_id) {
				          	 $selected = "selected";
						  } else {
						  	 $selected = "";}
						  ?>
				 			<option <?=$selected?> value="<?=$row->gallery_id?>" ><?=$row->gallery_title?></option>
						<?endforeach;
				        ?>
				       </select>
				       <input type="submit" name="submit" />
				     <?= form_close() ?> 
       </div>
			<div class='adminBar'>	
			<?= form_open("admin/create_gallery_for_event/".$eventID) ?> 
		<h4>Create New Gallery</h4>
				<input name="galleryname"/><br/>
				       <input type="submit" name="submit" />
				     <?= form_close() ?> 
       </div>
		<?php }	

?>