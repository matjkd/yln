<div id= "featured" >
<h2>Address</h2>
<?php if($addressInfo != NULL) { foreach($addressInfo as $row): ?>
	
	<strong ><?=$row->city?> office</strong><br/>
	<?php if($row->address1 != NULL){?><?=$row->address1?><br/><?php } ?>
	<?php if($row->address2 != NULL){?><?=$row->address2?><br/><?php } ?>
	<?php if($row->address3 != NULL){?><?=$row->address3?><br/><?php } ?>
	
	<?=$row->city?><br/>
	<?php if($row->address4 != NULL){?><?=$row->address4?><br/><?php } ?>
	<?=$row->country?><br/>
	<br/>
	<?php if($row->tel != NULL){?>tel: <?=$row->tel?><br/><?php } ?>
		<?php if($row->fax != NULL){?>fax: <?=$row->fax?><br/><?php } ?>
			<?php if($row->email != NULL){?>email: <a href="mailto:<?=$row->email?>"><?=$row->email?></a><br/><?php } ?><br/>
	<?php endforeach; } ?>
	</div>
<div id= "featured" >
<h2>Contacts</h2>

<?php if($keypeople != NULL) { foreach($keypeople as $row): ?>
	<strong><a href="<?=base_url()?>laworldmembers/view_profile/<?=$row->idkeypeople?> "><?=$row->firstname?> <?=$row->lastname?></a></strong>
	
	<?php if($row->jobtitle != NULL){?> (<?=$row->jobtitle?>)<?php } ?>
	<br/>
	<?php if($row->people_tel != NULL){?>tel:<?=$row->people_tel?><br/><?php } ?>
		<?php if($row->people_email != NULL){?>email: <a href="mailto:<?=$row->people_email?>"><?=$row->people_email?></a><br/><?php } ?><br/>
	<?php endforeach; }?>
</div>
