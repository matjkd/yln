



<div class="sixteen columns " style="margin-bottom:10px; " >
    
    <?php if(isset($slideshow_active)) {?>
        <?php if($slideshow_active != NULL) {?>
        <?=$this->load->view("/slideshow/".$slideshow_active."/picture")?>
       <?php } ?>
       
       <?php if($slideshow_active == NULL) {?>
       
<?php } ?>
<?php } ?>
</div>





