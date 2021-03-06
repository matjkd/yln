
<style type="text/css" >
    /* the overlayed element */
.simple_overlay {
	
	/* must be initially hidden */
	display:none;
	
	/* place overlay on top of other elements */
	z-index:10000;
	
	/* styling */
	background-color:#333;
	margin:0 auto;
	width:675px;	
	min-height:200px;
	border:1px solid #666;
	
	/* CSS3 styling for latest browsers */
	-moz-box-shadow:0 0 90px 5px #000;
	-webkit-box-shadow: 0 0 90px #000;	
}

/* close button positioned on upper right corner */
.simple_overlay .close {
	background-image:url(<?=base_url()?>/images/overlay/close.png);
	position:absolute;
	right:-15px;
	top:-15px;
	cursor:pointer;
	height:35px;
	width:35px;
}

/* styling for elements inside overlay */
	.details {
		position:relative;
		margin:5px;
		font-size:11px;
		color:#fff;
		width:675px;
	}
	
	.details h3 {
		
		font-size:15px;
		margin:0 0 0px 0px;
        }
	
                
                #triggers img{
                
                float:left;
                margin-left:6px;
        }
 .sortable { list-style-type: none; margin: 0; padding: 0; }
	.sortable li {  float: left; }
        
         .notsortable { list-style-type: none; margin: 0; padding: 0; }
	.notsortable li {  float: left; }
	</style>
<?php 
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			$sortclass = "sortable";
		}	else {
                    $sortclass = "notsortable";
                }
                
if($content != NULL )  {                

?>
<?php $imageCount = count($galleryImages); 
	
	if($imageCount < 7) {
		$imageWidth = "221px";
		$imageHeight = "135px";
	}
	if($imageCount > 6 && $imageCount < 13) {
		$imageWidth = "146px";
		$imageHeight = "100px";
	}
	if($imageCount > 12) {
		$imageWidth = "85px";
		$imageHeight = "65px";
	}


?>
<div id="triggers" >
    <ul class="<?=$sortclass?>">
<?php if($galleryImages != NULL) { foreach($galleryImages as $row):?>
	
        <li id="gallery_<?=$row->content_id?>">
        	<a href="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/gallery/<?=$row->news_image?>" data-rel="prettyPhoto" rel="prettyPhoto">
<img  class="thumbnails"  style="width:<?=$imageWidth?>; height: <?=$imageHeight?>" alt="<?=$row->title?>"
src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/gallery/thumbs/thumb_<?=$row->news_image?>" rel="#img_<?=$row->content_id?>"/>
      </a>
        </li>
<?php endforeach;  }?>
</ul>
</div>
<div style="clear:both;">
</div>

<?php  if($galleryImages != NULL) { foreach($galleryImages as $row):?>
<div class="simple_overlay" id="img_<?=$row->content_id?>">

	<!-- large image -->
	<img style="width:675px;" alt="<?=$row->title?>" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/gallery/<?=$row->news_image?>" />

	<!-- image details -->
	<div class="details">
		<h3><?=$row->title?></h3>

		<?php 
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			echo "<a href='".base_url()."admin/edit/".$row->content_id."'>Edit this page</a><br/>";
		}	

?>

		<p><?=$row->content?></p>
	</div>

</div>
<?php endforeach; } ?>


<?php } ?>

		<?php 
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			echo "<div class='adminBar'><a href='".base_url()."admin/add_gallery_content/".$linked_gallery."'>Add image</a></div>";
		}	

?>




