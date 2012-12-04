$(document).ready(function() {
	
	
	$(".regionBullet").hover(
  function () {
    $(this).addClass("bullethover");
    $('p').fadeIn();
  },
  function () {
    $(this).removeClass("bullethover");
     $('p').fadeOut();
  }
);

$(".regionBullet").click(
  function () {
  		$('#mapDialog').fadeOut();
  	$('#mapDialog').fadeIn();
  });


$(".closeBox").click(
  function () {
  		$('#mapDialog').fadeOut();
  
  });

});