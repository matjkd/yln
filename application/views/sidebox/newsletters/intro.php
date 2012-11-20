<style type="text/css">
	
	#selectform form {
		margin-bottom:1px;
	}
	#selectform input[type="submit"] {
	height:22px;
	
	margin-bottom:0px;
	padding-top:2px;
}
	.newsletterbox {
		width:100%; height:30px; padding:3px 0; margin-bottom:0px; margin-top:3px; 
	}
	.newsletterbox form {
		margin-bottom:1px;
	}
	
	.newsletterbox input[type="submit"] {
	height:32px;
	width:200px;
	
	margin-bottom:0px;
	padding-top:2px;
}
	.newsletterItem {
		color:#00478F; font-size:1.3em; font-weight:bold; float:left; padding-top:7px; padding-left:20px;
	}
</style>
<h2>Select Country</h2>
<div id="featured" style="padding-top:5px;">


<?php foreach ($countries as $row): ?>


<div class="newsletterbox" style="">
	<?= form_open('newsletters') ?>
	<?= form_hidden('country', $row->country) ?>
	
	<div style="">
		<?= form_submit('Submit', $row->country) ?>
		
	</div>

<?= form_close() ?>

</div>
<div style="clear:both"></div>


<?php endforeach; ?>

</div>