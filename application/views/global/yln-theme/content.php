<!--Main content page for club woodham site-->
 <?php 
$datestring = "%l %j%S %M  %Y %G:%i:%s";


?>
<div style=" ">
    <?php foreach ($content as $row):
	$unix = $row->date_added;
			$timeTrim = mdate($datestring, $unix);
			$added_by = $row->added_by;
	 $added_by = $row->added_by;
	 if($row->added_by == 'Jacqui Nash') { $added_by = "Admin";}
			if($row->added_by == '64' || $row->added_by == '62' ){ $added_by = "Admin";}
			if($row->added_by == '65') { $added_by = "Admin";}
	
	 ?>
        <!--add image if set-->

        <h2><?= $row->title ?></h2>
        
        <?php if(isset($hideDate) && $hideDate == 1) { } else { ?>
<em><?=$timeTrim ?> | by <?=$added_by?></em><br/>
<?php } ?>
        <?php
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in == true) {
            echo "<a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit this page</a>";
        }
        ?>

        <?php
        if (isset($age)) {
            $body = str_replace("[age]", "$age", "$row->content");
        } else {
            $body = $row->content;
        }
        ?>


        <?php $body = str_replace("LAWorld", "<strong>LAWorld</strong>", "$body"); ?>


        <div>

            <?= $body ?>
              
        </div>
         <?php if(isset($hideSocial) && $hideSocial == 1) { } else { ?>
         <div class="g-plusone" data-annotation="inline" data-href="<?=base_url()?>welcome/home/<?=$row->menu?>"></div>
<?php } ?>
    <?php endforeach; ?>


    <?php foreach ($content as $row): ?>
        <?php if ($row->extra != NULL) { ?>
            <?= $this->load->view('extra/' . $row->extra) ?>
        <?php } ?>
    <?php endforeach; ?>
        
        <?php if(isset($attachments) && $attachments != NULL) { ?>
<h4>Attachments</h4>
<p>
    <?php foreach($attachments as $row):?>
    
   <a href=" https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/<?=$row->filename?>" ><?=$row->name?></a><br/>
   
    <?php endforeach; ?>
    
    
</p>
<?php } ?>

</div>