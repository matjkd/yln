<div class="memberBox" >

	<?php foreach($profileInfo as $row2):	?>
		<?php foreach($memberInfo as $row):	?>
<div class="five columns " style='float:left'>
	<?php if($row2->profile_photo == NULL) {?>
		<img src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/profiles/thumbs/noprofile.jpg"/>
		<?php } else { ?>
<img itemprop="photo" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/profiles/thumbs/<?=$row2->profile_photo?>"/>
<? } ?>
	


</div>

<div class="ten columns" style='float:right; padding-right:20px; text-align:right;'>
	<?php $webaddress=$row->company_web;?>
<h1><a itemprop="name" href="http://<?=$webaddress?>" target="_blank"><?=$row2->firstname?> <?=$row2->lastname?></a></h1>
<h3><a itemprop="organization" href="<?=base_url()?>laworldmembers/view_company/<?=$row->idcompany?>"><?=$row->company_name?></a></h3>
<span  style="display:none" itemprop="location"><?=$row->city?></span>

	<?php endforeach; ?>
	<?php endforeach; ?>
	
	

	
	

	</div>
	<div style="clear:both"></div>
</div>
