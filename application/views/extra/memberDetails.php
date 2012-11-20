<?php foreach($memberInfo as $row):?>
<a href="http://<?=$row->company_web?>" itemprop="url">Visit Website</a>
<br/>

<?=$row->description?>

<?php endforeach; ?>
