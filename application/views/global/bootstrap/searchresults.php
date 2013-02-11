<div class="row">
	<div class="span8  pull-left service">Searching for: <?=$search?> </div>
	<hr>
	</div>

<div class="row">
<?php if($results != NULL) { foreach($results as $row): ?>


	
	
	<div class="span8 service  pull-left">
                        
                        	
                        <div class="row">
                        	<div class="span1">
                        	<?php if($row->filename == NULL) {?>
								<img  src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/companies/thumbs/generic.jpg" width="100%" alt="<?=$row->company_name?>"/>
								<?php } else { ?>
								<img  width="100%" itemprop="photo" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/companies/thumbs/<?=$row->filename?>" alt="<?=$row->company_name?>"/>
								<? } ?>
							</div>
                          
                           
                       
                     		<div class="span5">
                            <h4 class="media-heading"><a href="<?=base_url()?>ylnmembers/view_company/<?=$row->idcompany?>"><?=$row->company_name?></a></h4>
                            <p><?=$row->city?>, <?=$row->region_name?></p>
                           </div>
                           
                           <div class="span2">
                           	<a href="<?=base_url()?>ylnmembers/view_company/<?=$row->idcompany?>" class="btn btn-large">View Company</a>
                           </div>
                      </div>
                        
                    
    </div>
    

	<?php endforeach; } else {?>
		
		<div class="span8  ">
		<p>Sorry, your search returned no results</p>
		</div>
		
		<?php }?>
		
	
		
	</div>
		
		

