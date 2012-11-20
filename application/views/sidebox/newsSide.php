<?=$this->load->view('sidebox/featured')?>
<h2>News Archive</h2>
 <?php $datestringYear = "%Y";
 		$x = 0;
		$oldyear = 0;
 ?>
<?php foreach($oldNews as $row1):?>
	<?php $unix1 = $row1->date_added;
			
	$year1= mdate($datestringYear, $unix1); ?>
		
		<?php if($oldyear != $year1) {?>	
		<h5><?=$year1?></h5>
		
		<ul>
<?php foreach($oldNews as $row):?>
	
	 <?php 
		 
			$unix = $row->date_added;
			$timeTrim = mdate($this->datestring, $unix);
			$year= mdate($datestringYear, $unix);
			$added_by = $row->added_by;
			if($row->added_by == 'Jacqui Nash') { $added_by = "Admin";}
			if($row->added_by == '64' || $row->added_by == '62' ) { $added_by = "Admin";}
			if($row->added_by == '65') { $added_by = "Admin";}
			
				
			
			?>
			<?php if($year == $year1) {?>	
			<li>
			<a href="<?=base_url()?>welcome/home/<?=$row->menu?>"><?=$row->title?></a><br/>
			<em><?=$timeTrim ?></em> | by <?=$added_by?> <?=$year?>
			</li>
			<?php } ?>	
	<?php endforeach;?>
</ul>
		
			
		<?php } ?>	
			
			
		<?php $oldyear = $year1;?>	
		<?php endforeach;?>
