<?php foreach($content as $row):?>


<?php  $id = $row->content_id;?>


<?=form_open_multipart("admin/edit_content/$row->content_id")?> 
<p>
Title* <br/><?=form_input('title', $row->title)?><br/>

By* <br/><?=form_input('added_by', $row->added_by)?><br/>
</p>

<?=form_hidden('menu', $row->menu)?>


 <?php if($row->news_image != NULL) { ?>
<img src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/gallery/<?=$row->news_image?>" style="padding:10px 10px 10px 0;" width="150px">
<?php } ?>
<p class="Image">
    <?= form_label('Image') ?> (not required field)<br/>

<?= form_upload('file') ?>
</p>

<?php if ($row->category == "gallery") { ?>

    <p>
   <select name="gallery">
        <?php
       		foreach($galleries as $row2):?>
          <?php if($row->gallery == $row2->gallery_id) {
          	 $selected = "selected";
		  } else {
		  	 $selected = "";}
		  ?>
 <option <?=$selected?> value="<?=$row2->gallery_id?>" ><?=$row2->gallery_title?></option>
		<?endforeach;
        ?>
       </select>
    </p>

<?php } ?>




<br/>
<textarea cols=65 rows=20 name="content" id="content" class='wymeditor'><?=$row->content?></textarea>
<br/>


<strong>None of the fields below are required</strong>
<hr/>
Meta Description<br/>
<textarea  cols=65 rows=2 name="meta_desc"><?=$row->meta_desc?></textarea>
<br/>
Meta Keywords<br/>
<textarea  cols=65 rows=2 name="meta_keywords"><?=$row->meta_keywords?></textarea>
<br/>
Meta Title<br/>
<textarea  cols=65 rows=2 name="meta_title"><?=$row->meta_title?></textarea>
<br/>

Extra: 
<br/><?=form_input('extra', $row->extra)?><br/>
slideshow:
<br/><?=form_input('slideshow', $row->slideshow)?><br/>

Hide Date (put 1 to hide, 0 to show):
<br/><?=form_input('hideDate', $row->hideDate)?><br/>

Hide Social links (put 1 to hide, 0 to show):
<br/><?=form_input('hideSocial', $row->hideSocial)?><br/>

Sidebox:
<br/><?=form_input('sidebox', $row->sidebox)?> - to display a gallery, enter "pageSideGallery" here<br/>

<strong>Link Content to Event</strong><br/>
				<select name="linked_event">
					<option value="0" >None</option>
				        <?php
				       		foreach($events as $row2):?>
				          <?php if($row->linked_event == $row2->event_id) {
				          	 $selected = "selected";
						  } else {
						  	 $selected = "";}
						  ?>
				 			<option <?=$selected?> value="<?=$row2->event_id?>" ><?=$row2->event_title?>, <?=$row2->location_title?></option>
						<?endforeach;
				        ?>
				       </select>

<br/><br/>
<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;?>