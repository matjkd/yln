<?php 
$datestring = "%l %j%S %M  %Y %G:%i:%s";

foreach ($content as $row):
	$unix = $row->date_added;
			$timeTrim = mdate($datestring, $unix);
			$added_by = $row->added_by;
	 $added_by = $row->added_by;
	 if($row->added_by == 'Jacqui Nash') { $added_by = "Admin";}
			if($row->added_by == '64' || $row->added_by == '62' ){ $added_by = "Admin";}
			if($row->added_by == '65') { $added_by = "Admin";}
	
	 ?>
        
       <?= $row->title ?>
        
        <?php if(isset($hideDate) && $hideDate == 1) { } else { ?>
<small><?=$timeTrim ?> | by <?=$added_by?></small>
<?php } ?>

        <?php
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in == true) {
            echo "<small><a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit this page</a></small>";
        }
        ?>
        

 <?php endforeach; ?>
    