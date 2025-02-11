 $(document).ready(function(){


 	var val1 = 0;

 	$('.navbar-handler').children("img").click(function(){

 		if(val1==0){
 			$(this).attr("src","images/cross.png")
 		$('.navbar-custom').slideToggle()

 		val1 = 1;
 	
 	}
 	else {
 		$('.navbar-custom').slideToggle()
 		$(this).attr("src","images/hamburger.png")
 		val1 = 0;

 	}
 	})
 })







 $(window).scroll(function() {
var $height1 = $(window).scrollTop();
if($height1 > 150) {
$('body').addClass("fixed-header")

} 

else {
$('body').removeClass("fixed-header")
}
});