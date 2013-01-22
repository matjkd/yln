



    
    <?php if(isset($hero_active)) {?>
        <?php if($hero_active != NULL) {?>
        	<div class="row">
            <div class="span12">
                <div class="hero-unit">
        <?=$this->load->view("/slideshow/".$hero_active."/picture")?>
        </div>
        </div>
        </div>
       <?php } ?>
       
       <?php if($hero_active == NULL) {?>
       
<?php } ?>
<?php } ?>






