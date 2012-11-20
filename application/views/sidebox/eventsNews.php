<div id= "featured" style="display:block">
<h2>Event Related News</h2>
<?php foreach($events_news as $row):?>
	
	
	<?php 
		 
			$unix = $row->date_added;
			$timeTrim = mdate($this->datestring, $unix);
			$added_by = $row->added_by;
			if($row->added_by == 'Jacqui Nash') { $added_by = "Admin";}
			if($row->added_by == '64') { $added_by = "Admin";}
			if($row->added_by == '62') { $added_by = "Admin";}
			if($row->added_by == '65') { $added_by = "Admin";}
			 	$descriptionTrim = str_replace("/<p>\s+<\/p>/","",$row->content);
			$descriptionTrim = trim(substr($descriptionTrim, 0, 300));
				
			
			?>

	
	<?php if ($row->news_image != NULL) {?>
        <div class="newsImage">
            <img  src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/<?= $row->news_image ?>"/>
        </div>
   <?php } ?>     

        <div class="newsContent">
        	<h5><a href="<?=base_url()?>welcome/home/<?=$row->menu?>"><?=$row->title?></a>
            
            <?php
            $is_logged_in = $this->session->userdata('is_logged_in');
            if (!isset($is_logged_in) || $is_logged_in == true) {
                echo " - <a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit</a><br/>";
            }
            ?></h5>
            <em><?=$timeTrim ?></em> | by <?=$added_by?>
            
            <p><?= $descriptionTrim ?>...</p>
            <a href="<?=base_url()?>welcome/home/<?=$row->menu?>"><em>Read More</em></a>
            
        </div>
        <div style="clear:both">
        </div>
<hr/>

	
	<?php endforeach;?>
</div>