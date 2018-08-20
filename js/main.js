$(document).ready(function(){
	$('#herobutton').on('click', function() {
  $.scrollTo('#herobutton', 800);
});
  $('#svc-link').on('click', function(){
    $.scrollTo('#herobutton', 800);
  })

$(window).scroll(function(){
  var sticky = $('.menu-row'),
      scroll = $(window).scrollTop();

  if (scroll >= 100){
  sticky.addClass('fixa');
  var a = "images/stoxlogotipo.svg";
  document.getElementById('logo').src=a;
}
  else{ 
    sticky.removeClass('fixa');
    var b = "images/LogoStox.png";
    document.getElementById('logo').src=b;
}
});

$('.hero-text').addClass('herotext-animation');
        
$("#svc1").inViewport(function(px) {
	console.log( px ); // px = height visível do conteúdo
	if(px > 0) {
		$("#svc1").addClass('svc-slideleft');
	}
	}); // fim

$("#svc2").inViewport(function(px){
  console.log(px);
  if(px > 0){
    $("#svc2").addClass('svc-slideright')
  }
});

$("#svc3").inViewport(function(px){
  console.log(px);
  if(px > 0){
    $("#svc3").addClass('svc-slideleft')
  }
});  

})
