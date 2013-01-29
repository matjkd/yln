




<link rel="stylesheet" href="<?= base_url() ?>css/<?=$this->config_theme?>/chinamap.css">

	
	<div class="mapAccordion"  style="  ">
		 
                    <div class="accordion" id="accordion2">

		<?php $x=0; foreach($regions as $row):?>
			<?php $x = $x + 1;?>
			 <div class="accordion-group">
                            <div class="accordion-heading" id="regionHeading<?=$row->region_id?>">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?=$x?>">
                                    <i class="icon-plus icon-white"></i>
                                  <?=$row->region_name?><br/>
                                </a>
                            </div>
                            <div id="collapse<?=$x?>" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <ul class="icons ul-list-2">
                                    	
                                    	
                                    	<?php foreach($companies as $row2):?>
                                    		
                                    		
                                    	<?php if($row2->region == $row->region_id) { ?>	
                                        <li><a href="<?=base_url()?>laworldmembers/view_company/<?=$row2->idcompany?>"><?=$row2->company_name?></a></li>
                                       <?php } ?>
                                        
                                        <?php endforeach; ?>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
		
		<?php endforeach;?>
		</div>
		
	</div>
	

<div style="margin-left:auto; margin-right:0px" class="visible-desktop" id="chinaMap">
	
	
	
	<?php $x=0; foreach($regions as $row):?>
		<?php $x = $x + 1;?>
		
		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?=$x?>">
			<div id="region<?=$row->region_id?>" class="regionBullet"><p><?=$row->region_name?></p></div>
			</a>
		<!-- <div id="label<?=$row->region_id?>" class="bulletLabel "> <h2><?=$row->region_name?></h2></div> -->
		<?php endforeach; ?>
	
	
	
	
	

</div>






