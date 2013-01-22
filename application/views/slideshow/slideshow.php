

    
    <?php if(isset($slideshow_active)) {?>
        <?php if($slideshow_active != NULL) {?>
        	
        	
        <section  id="slider">
	  <div class="container">	
        <?=$this->load->view("/slideshow/".$slideshow_active."/picture")?>
        </div>
        </section>
       <?php } ?>
       
       <?php if($slideshow_active == NULL) {?>
       
<?php } ?>
<?php } ?>






