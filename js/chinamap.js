var base_url = $('#baseurl').val();

$(document).ready(function() {
	var regionID;
	
	$(".regionBullet").hover(
  function () {
  	
  	 regionID = $(this).attr('id');
  	 regionID = regionID.replace('region', '');
  	 
    $(this).addClass("bullethover");
   
    $("#label" + regionID).stop(true, true).fadeIn();
    
    
   
    
    
  },
  function () {
    $(this).removeClass("bullethover");
    
    $("#label" + regionID).stop(true, true).fadeOut('fast');
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
  	 $("#label" + regionID).stop(true, true).fadeIn();
  	$('#dialogContent').load(base_url + "laworldmembers/ajaxlistregion/" + regionID);
  	
  	
  });


$(".closeBox").click(
  function () {
  		$('#mapDialog').fadeOut();
  		$(".regionBullet").removeClass("bullethover2");
  
  });

});