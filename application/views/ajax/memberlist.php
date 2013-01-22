<?php foreach($region as $row1): ?>
	
	<h2><?=$row1->region_name?></h2>
	
	<?php endforeach; ?>

<?php foreach($regionmembers as $row): ?>
	
	<a href="<?=base_url()?>laworldmembers/view_company/<?=$row->idcompany?>"><?=$row->company_name?></a><br/>
	
	<?php endforeach; ?>
