<div id= "featured" style="display:block">
	<h2>Featured Firm</h2>
	<?php foreach($random_firm as $row):?>
	<div style="float:left; width:150px;">
		
		<?php if($row->filename == NULL) {?>
		<img width="150px" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/companies/thumbs/generic.jpg"/>
		<?php } else { ?>
<img width="150px" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/companies/thumbs/<?=$row->filename?>"/>
<? } ?>
		

	</div>
	<div style="float:right; width:280px; text-align:right;">
		<strong><a href="<?=base_url() ?>laworldmembers/view_company/<?=$row->idcompany?>"><?=$row->company_name?></a></strong>
		<br/>
		<em><?=$row->country?></em>
		
		<?php 
			$descriptionTrim = str_replace("/<p>\s+<\/p>/","","$row->description");
			$descriptionTrim = substr($descriptionTrim, 0, 100);
			$descriptionTrim = trim($descriptionTrim);
		?>
<p>
<?=$descriptionTrim?>...
	</p>
	<a href="http://<?=$row->company_web?>"><?=$row->company_web?></a>
	</div>
	
	<?php endforeach; ?>
	
	<div style="clear:both;"></div>
</div>