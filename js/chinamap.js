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
  	 
    $(this).addClass("bullethover3");
   
    $("#regionHeading" + regionID).addClass("regionHeadingHover");
    
    
   
    
    
  },
  function () {
    $(this).removeClass("bullethover3");
     $("#regionHeading" + regionID).removeClass("regionHeadingHover");
   
  }
);

$(".regionBullet").click(
  function () {
  	$(".regionBullet").removeClass("bullethover2");
  	$(".regionBullet").removeClass("bullethover3");
  	$(".accordion-heading").removeClass("regionHeadingClicked");
  	$('#mapDialog').stop().fadeOut();
  	$('#mapDialog').stop().fadeIn();
  	
  	 regionID = $(this).attr('id');
  	 regionID = regionID.replace('region', '');
  	 $("#region" + regionID).addClass("bullethover2");
  	  $("#regionHeading" + regionID).addClass("regionHeadingClicked");
  	
  	resizeImage();
  	
  	
  });
  
  
$(".accordion-heading").click(
  function () {
  	$(".regionBullet").removeClass("bullethover2");
  	$(".regionBullet").removeClass("bullethover3");
  	$(".accordion-heading").removeClass("regionHeadingClicked");
  	
  	 regionID = $(this).attr('id');
  	 regionID = regionID.replace('regionHeading', '');
  	 $("#region" + regionID).addClass("bullethover2");
  	 $("#label" + regionID).stop(true, true).fadeIn();
  	  $("#regionHeading" + regionID).addClass("regionHeadingClicked");
  
  resizeImage();
  	
  	
  	
  });
  
  $(".accordion-heading").hover(
  function () {
  	$(".regionBullet").removeClass("bullethover3");
  	
  	
  	 regionID = $(this).attr('id');
  	 regionID = regionID.replace('regionHeading', '');
  	 $("#region" + regionID).addClass("bullethover3");
  	 $("#label" + regionID).stop(true, true).fadeIn();
  
  resizeImage();
  	
  	
  	
  },
  function () {
    $("#region" + regionID).removeClass("bullethover3");
    
   
  });
  
  

$(".closeBox").click(
  function () {
  		$('#mapDialog').fadeOut();
  		$(".regionBullet").removeClass("bullethover2");
  
  });

});