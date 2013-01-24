var base_url = $('#baseurl').val();
var accordionHeight = $('#accordion2').height();
var imageresize = accordionHeight + 20;

function resizeImage() {
	
	
	setTimeout(function() {
		accordionHeight = $('#accordion2').height();
		imageresize = accordionHeight + 20;
	
	$('#chinaMap').animate({
    	height: imageresize
  });
	}, 500);
	
	
};

$(document).ready(function() {
	var regionID;
	
	
   resizeImage();

	

	
	$(".regionBullet").hover(
  function () {
  	
  	 regionID = $(this).attr('id');
  	 regionID = regionID.replace('region', '');
  	 
    $(this).addClass("bullethover");
   
    $("#label" + regionID).stop(true, true).fadeIn();
    
    
   
    
    
  },
  function () {
    $(this).removeClass("bullethover");
    
   
  }
);

$(".regionBullet").click(
  function () {
  	$(".regionBullet").removeClass("bullethover2");
  	$('#mapDialog').stop().fadeOut();
  	$('#mapDialog').stop().fadeIn();
  	
  	 regionID = $(this).attr('id');
  	 regionID = regionID.replace('region', '');
  	 $("#region" + regionID).addClass("bullethover2");
  	
  	resizeImage();
  	
  	
  });
  
  
$(".accordion-heading").click(
  function () {
  	$(".regionBullet").removeClass("bullethover2");
  	
  	
  	 regionID = $(this).attr('id');
  	 regionID = regionID.replace('regionHeading', '');
  	 $("#region" + regionID).addClass("bullethover2");
  	 $("#label" + regionID).stop(true, true).fadeIn();
  
  resizeImage();
  	
  	
  	
  });

$(".closeBox").click(
  function () {
  		$('#mapDialog').fadeOut();
  		$(".regionBullet").removeClass("bullethover2");
  
  });

});