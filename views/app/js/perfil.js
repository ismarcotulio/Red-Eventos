$(".muroContenedor").on("swipeleft",function(){
  alert("hola");
});
function orden(value) {
    
    if (window.XMLHttpRequest) {
        xmlhttp3 = new XMLHttpRequest();
        } else { 
        xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp3.onreadystatechange=function() {
        if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
            document.getElementById("listaorden").innerHTML=xmlhttp3.responseText;
        }
    }
    
    xmlhttp3.open("GET","?view=perfilPostOrden&value="+value,true);
    xmlhttp3.send();
};
$('#listaorden').on("mouseenter",".post",function(){
    var id = $(this).attr("id");
   $('#img'+id).animate({
    opacity:0.09
   });
   $('#des'+id).animate({
    opacity:1,
    top:"0%"
   });

});
$('#listaorden').on("mouseleave",".post",function(){
   var id = $(this).attr("id");
   $('#img'+id).animate({
    opacity:1
   });
  $('#des'+id).animate({
    opacity:0,
    top:"-70%"
   });
});

/*---------------------------------------------------------------------------------------------------
--------------------------------------------INICIO SWIPE EFFECT---------------------------------------
-----------------------------------------------------------------------------------------------------*/


p1=document.getElementById("page1");
p2=document.getElementById("page2");
p3=document.getElementById("page3");
var startingX; 

function p1swipestart(evt){
startingX=evt.touches[0].clientX;
};

function p1swipemove(evt){
var touch = evt.touches[0];
var change = startingX-touch.clientX;

var change2 =touch.clientX-startingX;

if(change<0){
  change2=touch.clientX-startingX;
  p3.style.display="block";
  p3.style.left=(change2-screen.width)+"px";
  p1.style.left=change2+"px";
}else{
  p1.style.left="-"+change+"px";
p2.style.display="block";
p2.style.left=(screen.width-change)+"px";
}




evt.preventDefault();
};

function p1swipeend(evt){
var change = startingX-evt.changedTouches[0].clientX;
var diff = screen.width/4;
if(change < 0){
  var change2 = evt.changedTouches[0].clientX-startingX;
  if (change2<diff) {
    p1.style.left="0";
    p3.style.left="-100%";
    p3.style.display="none";
  }else{
    p3.style.left="0";
    p1.style.left="100%";
    p1.style.display="none";
  }
}else{
  if (change<diff) {
    p1.style.left='0';
  p2.style.left='100%';
  p2.style.display='none';
}else{
  p1.style.left="-100%";
  p2.style.left='0';
  p2.style.display="block";
}
  
}
};

function p2swipestart(evt){
startingX=evt.touches[0].clientX;
};

function p2swipemove(evt){
var touch = evt.touches[0];
var change = touch.clientX-startingX;
if(change<0){
  return;
}

p2.style.left=change+"px";
p1.style.display="block";
p1.style.left=(change-screen.width)+"px";
evt.preventDefault();
};

function p2swipeend(evt){
var change = evt.changedTouches[0].clientX-startingX;
var diff = screen.width/4;
if(change < diff){
  
  p2.style.left='0';
  p1.style.left='-100%';
  p1.style.display='none';
}else{
  
  p2.style.left="100%";
  p1.style.left='0';
  p2.style.display="block";
}
};

function p3swipestart(evt){
startingX=evt.touches[0].clientX;
};

function p3swipemove(evt){
var touch = evt.touches[0];
var change = startingX-touch.clientX;
if(change<0){
  return;
}

p3.style.left="-"+change+"px";
p1.style.left=(screen.width-change)+"px";
p1.style.display="block";
evt.preventDefault();
};

function p3swipeend(evt){
var change = startingX-evt.changedTouches[0].clientX;
var diff = screen.width/4;
if(change < diff){
  
  p3.style.left='0';
  p1.style.left='100%';
  p1.style.display='none';
}else{
  
  p3.style.left="-100%";
  p1.style.left='0';
  p3.style.display="none";
}
};

/*---------------------------------------------------------------------------------------------------
--------------------------------------------FINAL SWIPE EFFECT---------------------------------------
-----------------------------------------------------------------------------------------------------*/


           

