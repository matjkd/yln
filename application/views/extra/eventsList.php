<div ><?php if(isset($events)) { foreach($events as $key => $row):
// Format date here
$start = ($row->startdate);
 $end = ($row->enddate);
$startdate = date('ga \o\n l \t\h\e jS \o\f F, Y', $start);
$enddate = date('ga \o\n l \t\h\e jS \o\f F, Y', $end);


?>

    <div id="frontend" >
<?php


if(now() < $start){  ?>

<p>
<strong><a  href="<?=base_url()?>welcome/view_event/<?=$row->event_id?>" target="_top"><?=$row->event_title?> (<?=$row->location_title?>)</a></strong>
from <?=$startdate?> to <?=$enddate?>
</p>


 <?php } else { ?>
    

 <?php } ?>

</div>

<?php endforeach; } ?>
</div>

<a href="<?=base_url()?>events">See All Events</a>