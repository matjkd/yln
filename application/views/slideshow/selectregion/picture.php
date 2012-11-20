
<div class="memberBox" >
<div class="five columns " style='float:left'>
	<div style="padding-left:5px;">
<?php foreach($regions as $row): ?>
	
	<div class="regionControl" id="region_<?=$row -> region_id ?>"><?=$row -> region_name ?></div>
<?php endforeach; ?>
</div>
</div>


<div class="ten columns" style='float:right;  padding-right:20px; text-align:right;'>
	<h1>Select a Region</h1>
	<h3>or country</h3>
	</div>
	
<div style="clear:both"></div>
</div>
