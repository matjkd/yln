<link rel="stylesheet" href="<?= base_url() ?>css/<?=$this->config_theme?>/chinamap.css">

<div class="mapBox" >
	<div class="span4" style="float:left; margin-left:0px;  ">
	<div  style=" background:rgba(0, 133, 255, 0.5); margin-left:0px; position:absolute; z-index:99999; ">
		<?php foreach($regions as $row):?>
		<?=$row->region_name?><br/>
		<?php endforeach;?>
		</div>	

	</div>
	
<div class="" >
<div style="margin-left:auto; margin-right:auto" id="chinaMap">
	
	
	
	<?php foreach($regions as $row):?>
		
		
		<div id="region<?=$row->region_id?>" class="regionBullet"><p><?=$row->region_name?></p></div>
		<div id="label<?=$row->region_id?>" class="bulletLabel "> <h2><?=$row->region_name?></h2></div>
		<?php endforeach; ?>
	
	
	
	
	
<?php foreach($regions as $row): ?>
	
<?php endforeach; ?>
</div>
<div style="clear:both;"></div>
</div>


</div>


<div id="mapDialog">
	<div class="dialogTopbar">
	
	<div class="closeBox"></div>
	</div>
	<div id="dialogContent"	>
		
		
		
	</div>
</div>
