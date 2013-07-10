

    
    <?php if(isset($slideshow_active)) {?>
        <?php if($slideshow_active != NULL) {?>
        	
        	
        <div  id="slider">
	  <div class="container">	
        <?=$this->load->view("/slideshow/".$slideshow_active."/picture")?>
        </div>
        </div>
       <?php } ?>
       
       <?php if($slideshow_active == NULL) {?>
       
<?php } ?>
<?php } ?>






