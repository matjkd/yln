<section class="row portfolio filtrable clearfix">
            
      <?php if($galleryImages != NULL) { foreach($galleryImages as $row):?>      
            
            <article data-id="id-1" data-type="javascript html" class="span3">
                <div class="inner-image ">
                    <a href="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/gallery/<?=$row->news_image?>" data-rel="prettyPhoto" rel="prettyPhoto">
                        <img class="shadow" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/gallery/thumbs/thumb_<?=$row->news_image?>" rel="#img_<?=$row->content_id?>" alt="photo">
                        <span class="frame-overlay"></span>
                    </a>
                </div>
                
            </article>
            
           <?php endforeach; } ?>
            
        </section>