<style type="text/css">
	
	
	.eventsList a {
		color:#333;
		text-decoration:none;
	}
	.eventsList a:hover {
		
		color:#F99000
		
	}
	
	.eventsList h3 {
		border-bottom:solid 3px #ddd;
	}
	
</style>
<div class="eventsList">
<?php 

$datestringYear = "Y";
 		$x = 0;
		$oldyear = 0;

foreach($events as $key2 =>$row2):
	//$row2->startdate;
	$year1 = date($datestringYear, $row2->startdate);
	
	if($oldyear != $year1) {
		
		echo "<h3>".$year1."</h3>";
		$oldyear = $year1;
		
		foreach($events as $key => $row):
		// Format date here
		$start = ($row->startdate);
		 $end = ($row->enddate);
		$startdate = date('l \t\h\e jS \o\f F, Y \a\t ga', $start);
		$enddate = date('l \t\h\e jS \o\f F, Y \a\t ga', $end);
		$eventYear = date($datestringYear, $start);
		
		
		
		if($eventYear == $year1){
		if(now() < $start){  ?>
			<div id="frontend" class="futureEvent" style="border-bottom:1px solid #ddd;">
			 <?php } else { ?>
			    <div id="frontend" class="pastEvent" style="border-bottom:1px solid #ddd;">
			
			 <?php } ?>
			
			<p>
<h5><a href="<?=base_url()?>welcome/view_event/<?=$row->event_id?>"><?=$row->event_title?>(<?=$row->location_title?>)</a></h5>
<em>Starts:</em> <?=$startdate?> <br/> <em>Ends:</em> <?=$enddate?>
</p>

</div>
		
		<?php } endforeach;
			}
	//echo $year."<br/>";
endforeach; ?>
</div>

