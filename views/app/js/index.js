
$(document).ready(function(){
  $('.carrusel').slick({
    slidesToShow: 5,
  slidesToScroll: 5,

  
  });
});
$('#poster1').on("mouseenter",function(){
    $('.icon1').css("opacity",0.6);
});
$('#poster1').on("mouseleave",function(){
    $('.icon1').css("opacity",0);
});
$('.icon1').on("mouseenter",function(){
    $('.icon1').css("opacity","0.3");
    $('.icon1').css("cursor","pointer");
    $('.icon1').animate({
        opacity:"1"
    },1000);
});
$('.icon1').on("mouseleave",function(){
    $('.icon1').css("opacity",0);
});
p=1;
$('.icon1 .right').on("click",function(){
    if(p!=16){
      for (var i = p; i < p+5; i++) {
         $('#post'+i).hide(1000);
     };  
     p=p+5;  
    }
   
});
$('.icon1 .left').on("click",function(){
    if(p!=1){
      for (var i = p-5; i < p; i++) {
         $('#post'+i).show(1000);
     }; 
     p=p-5;  
    }
    
});




$('#poster2').on("mouseenter",function(){
    $('.icon2').css("opacity",0.6);
});
$('#poster2').on("mouseleave",function(){
    $('.icon2').css("opacity",0);
});
$('.icon2').on("mouseenter",function(){
    $('.icon2').css("opacity","0.3");
    $('.icon2').css("cursor","pointer");
    $('.icon2').animate({
        opacity:"1"
    },1000);
});
$('.icon2').on("mouseleave",function(){
    $('.icon2').css("opacity",0);
});
p2=21;
$('.icon2 .right').on("click",function(){
     if(p2!=36){
        for (var i = p2; i < p2+5; i++) {
            $('#post'+i).hide(1000);
        };  
     p2=p2+5;  
    }
      
});
$('.icon2 .left').on("click",function(){
      if(p2!=21){
      for (var i = p2-5; i < p2; i++) {
         $('#post'+i).show(1000);
     }; 
     p2=p2-5;  
    }
     
});






$('#poster3').on("mouseenter",function(){
    $('.icon3').css("opacity",0.6);
});
$('#poster3').on("mouseleave",function(){
    $('.icon3').css("opacity",0);
});
$('.icon3').on("mouseenter",function(){
    $('.icon3').css("opacity","0.3");
    $('.icon3').css("cursor","pointer");
    $('.icon3').animate({
        opacity:"1"
    },1000);
});
p3=41
$('.icon3').on("mouseleave",function(){
    $('.icon3').css("opacity",0);
});
$('.icon3 .right').on("click",function(){
     if(p3!=56){
        for (var i = p3; i < p3+5; i++) {
            $('#post'+i).hide(1000);
        };  
     p3=p3+5;  
    }
     
});
$('.icon3 .left').on("click",function(){
     if(p3!=41){
      for (var i = p3-5; i < p3; i++) {
         $('#post'+i).show(1000);
     }; 
     p3=p3-5;  
    }
     
});

$('.post').on("mouseenter",function(){
    var id = $(this).attr("id");
   $('#img'+id).animate({
    opacity:0.09
   });
   $('#des'+id).animate({
    opacity:1,
    top:"0%"
   });

});
$('.post').on("mouseleave",function(){
   var id = $(this).attr("id");
   $('#img'+id).animate({
    opacity:1
   });
  $('#des'+id).animate({
    opacity:0,
    top:"-70%"
   });
});
