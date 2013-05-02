<div class="well ">
	                    		<a style="float: left;
margin-right: 10px; width:150px;" href="http://www.laworld.com" target="_blank"><img src="<?=base_url()?>images/logo.png"/></a>
                    		<p>YLN is closely affiliated to <a href="http://www.laworld.com" target="_blank">LAWorld</a>, an independent international legal network</p>
                    		</div>

<div class="well ">
<div class="media">
      
       <?php foreach($random_firm as $row):?>
                        <a class="pull-left" href="./blog-single.html">
                        	
                        	<?php if($row->filename == NULL) {?>
		<img width="150" class="media-object" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/companies/thumbs/generic.jpg" alt=""/>
		<?php } else { ?>
<img width="150" class="media-object" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/companies/thumbs/<?=$row->filename?>" alt=""/>
<? } ?>
                        	
                           
                            <span class="frame-overlay"></span>
                        </a>
                        <div class="media-body">
                        	 <h3  class="widget-title" style="margin-top:0px;">Featured Firm</h3>
                            <h4 class="media-heading"><a href="<?=base_url() ?>laworldmembers/view_company/<?=$row->idcompany?>"><?=$row->company_name?></a></h4>
                            <em><?=$row->country?></em>
                            <?php 
			$descriptionTrim = str_replace("/<p>\s+<\/p>/","","$row->description");
			$descriptionTrim = substr($descriptionTrim, 0, 100);
			$descriptionTrim = trim($descriptionTrim);
		?>
<p>
	<?=$row->region_name?>

	</p>
	<a href="http://<?=$row->company_web?>"><?=$row->company_web?></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
	</div>
