<?php foreach($event as $key => $row):
// Format date here
$start = ($row->startdate);
 $end = ($row->enddate);
$startdate = date('ga \o\n l \t\h\e jS \o\f F, Y', $start);
$enddate = date('ga \o\n l \t\h\e jS \o\f F, Y', $end);


?>

<?php


if(now() < $start){  ?>



<div id="frontend" >
 <?php } else { ?>
    <div id="frontend" style="color:#999999;">

 <?php } ?>
<p>
<h3><?=$row->event_title?>(<?=$row->location_title?>)</h3>



Location:  <?=$row->location_title?>
</p>
</div>
<?php endforeach ?>

<br/>
<br/>
<?php if(isset($gallery_images)){ foreach($gallery_images as $row):?>

<div style="float:left; width:100px;"?>
<img width="90px" src="https://s3-eu-west-1.amazonaws.com/laworld/events/<?=$row['image_folder']?>/<?=$row['image_filename']?>"/><br/>
 
</div>
<?php endforeach; } ?>
