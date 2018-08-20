$(window).scroll(function(){
  var sticky = $('.menu'),
      scroll = $(window).scrollTop();

  if (scroll >= 100){
  sticky.addClass('fixa');
}
  else{ 
    sticky.removeClass('fixa');
}
});
