<style type="text/css">
	.countryList {
		font-size:12px;
		line-height:14px;
	}
	.countryList li {
		margin-bottom:0px;
	}
</style>
<div id="featured" class="countryList" style="display:block">
	<h2>Countries</h2>
<ul>
<?php 
$countries = array();
$last_region = "";
foreach($allAddresses as $row): ?>
	

	<?php 
	if(in_array($row->country, $countries)) {
		
	} else {
		
		if($row->region_name != $last_region) {?>
		</ul>
		<ul id="region_<?=$row->region_id?>_country" class="countries">
		
		<li><h5><?=$row->region_name?></h5></li>
		<?php }?>
		<?php
		$countryNoSpace = str_replace(" ", "", $row -> country);
		?>
		<li class="countryControl" id="country_<?=$countryNoSpace ?>"><?=$row->country?></li>
		<?php $countries[$row->idaddress] = $row->country;
		$last_region = $row->region_name;
	}
	
	
	?>
	<?php endforeach;?>
	
</ul>
<div style="clear:both;"></div>
	</div>