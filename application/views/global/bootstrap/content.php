<!--Main content page for club woodham site-->
 <?php 
$datestring = "%l %j%S %M  %Y %G:%i:%s";


?>
<div>
    

        <?php
        foreach ($content as $row):
        if (isset($age)) {
            $body = str_replace("[age]", "$age", "$row->content");
        } else {
            $body = $row->content;
        }
        ?>


        <?php $body = str_replace("LAWorld", "<strong>LAWorld</strong>", "$body"); ?>


        <div>

            <?= $body ?>
              
        </div>
         <?php if(isset($hideSocial) && $hideSocial == 1) { } else { ?>
         <div class="g-plusone" data-annotation="inline" data-href="<?=base_url()?>welcome/home/<?=$row->menu?>"></div>
<?php } ?>
    <?php endforeach; ?>


    <?php foreach ($content as $row): ?>
        <?php if ($row->extra != NULL) { ?>
            <?= $this->load->view('extra/' . $row->extra) ?>
        <?php } ?>
    <?php endforeach; ?>
        
        <?php if(isset($attachments) && $attachments != NULL) { ?>
<h4>Attachments</h4>
<p>
    <?php foreach($attachments as $row):?>
    
   <a href=" https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/<?=$row->filename?>" ><?=$row->name?></a><br/>
   
    <?php endforeach; ?>
    
    
</p>
<?php } ?>

</div>