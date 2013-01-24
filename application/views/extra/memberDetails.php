<?php foreach($memberInfo as $row):?>
<a href="http://<?=$row->company_web?>" itemprop="url">Visit Website</a>
<br/>

<?=$row->description?>

<?php endforeach; ?>

<?php foreach($econProfile as $row):?>
	<h3>Economic Profile of <?php if($row->profile_city != NULL) { echo $row->profile_city.", "; }?> <?=$row->region_name?></h3>
	<?=$row->profile_desc?>
<hr>
<?php endforeach; ?>
