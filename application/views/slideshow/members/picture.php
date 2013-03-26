<div class="memberBox row" >

	<?php foreach($memberInfo as $row):	?>
<div class="span4 ">
	<?php if($row->filename == NULL) {?>
		<img src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/companies/thumbs/generic.jpg" width="100%"/>
		<?php } else { ?>
<img itemprop="photo" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/companies/thumbs/<?=$row->filename?>"/>
<? } ?>
</div>

<div class="span8" style=' text-align:right;'>
	<?php $webaddress=$row->company_web;?>
<h1><a href="http://<?=$webaddress?>" target="_blank"><?=$row->company_name?></a></h1>



	<?php endforeach; ?>
	
	
	<?php $last_region = "";
	
	
foreach($addressInfo as $row):
	
 if($row->region != $last_region){?>
		<span class="lead"><?=$row->region_name?></span>
		
		<?php foreach($addressInfo as $row2):	
	
	if($row2->region == $row->region){?>
		
	<span style="color:rgb(133, 133, 133);"><?=$row2->city?></span>
	
	<?php }
	
	 endforeach; ?>
		
	<?php }?>
	
	
	<?php $last_region = $row->region?>
	<?php endforeach; ?>
	<div><a  style="color:rgb(133, 133, 133);" href="http://<?=$webaddress?>" target="_blank">visit website</a></div>
	

	</div>
	<div style="clear:both"></div>
</div>
