<?php 
$datestring = "%l %j%S %M  %Y %G:%i:%s";
$randomSelector =  rand(1,5);
$x = 1;

?>

<?php if(isset($newsLimit) && $newsLimit != NULL) { foreach($newsLimit as $row):?>
	<?php if($x==$randomSelector) {
		 
			$unix = $row->date_added;
			$timeTrim = mdate($datestring, $unix);
			$added_by = $row->added_by;
			if($row->added_by == 'Jacqui Nash') { $added_by = "Admin";}
			if($row->added_by == '64') { $added_by = "Admin";}
			if($row->added_by == '65') { $added_by = "Admin";}
			
				
			
			?>
	<h3><a href="<?=base_url()?>welcome/home/<?=$row->menu?>"><?=$row->title?></a></h3>
	
	
	
	<em><?=$timeTrim ?></em> | by <?=$added_by?>
	
	 <?php $content = preg_replace("/<img[^>]+\>/i", "",$row->content); ?> 
	<?=$content?>
	<?php } ?>
	<?php $x = $x + 1;?>
	<?php endforeach;  }?>
