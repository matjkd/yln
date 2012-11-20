

 <?php $newsfeed = file_get_contents('http://feeds.reuters.com/reuters/businessNews');
    $xml = simplexml_load_string($newsfeed); 
  
    $limit =4;
	$counter = 0;
   foreach($xml->channel->item as $row):
	   
	   if($counter < $limit) {
           	$descriptionTrim = str_replace("/<p>\s+<\/p>/","","$row->description");
		   	$descriptionTrim = strip_tags($descriptionTrim);
		   
			$descriptionTrim = substr($descriptionTrim, 0, 100);
					
			$datestring = "%l %j%S %M  %Y %G:%i:%s";
			
			$unix = human_to_unix($row -> pubDate);
			$timeTrim = mdate($datestring, $unix);

           ?>
			 <div class="feedItem" style="clear:both;"> 
			   <strong><a href="<?=$row -> link ?>"><?=$row -> title ?></a></strong>
			   <br/><em><?=$row -> pubDate ?></em>    <div style="clear:both; padding-top:0px;"><?=$descriptionTrim ?>...</div>
			    
			   
			 </div>  
			
			 <?php  } $counter=$counter + 1;?> 
		   <?php endforeach; ?>

	
       