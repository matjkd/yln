<div class="memberBox" >

	<?php foreach($memberInfo as $row):	?>
<div class="five columns " style='float:left'>
	<?php if($row->filename == NULL) {?>
		<img src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/companies/thumbs/generic.jpg"/>
		<?php } else { ?>
<img itemprop="photo" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/companies/thumbs/<?=$row->filename?>"/>
<? } ?>
</div>

<div class="ten columns" style='float:right; padding-right:20px; text-align:right;'>
	<?php $webaddress=$row->company_web;?>
<h1><a href="http://<?=$webaddress?>" target="_blank"><?=$row->company_name?></a></h1>



	<?php endforeach; ?>
	
	
	<?php $last_country = "";
foreach($addressInfo as $row):
	
 if($row->country != $last_country){?>
		<h3><?=$row->country?></h3>
		<ul id="taglist">
		<?php foreach($addressInfo as $row2):	
	
	if($row2->country == $row->country){?>
		
	<li><?=$row2->city?></li>
	
	<?php }
	 endforeach; ?>
		</ul>
	<?php }?>
	
	
	<?php $last_country = $row->country?>
	<?php endforeach; ?>
	
	

	</div>
	<div style="clear:both"></div>
</div>
