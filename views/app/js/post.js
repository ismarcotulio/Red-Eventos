
$(".estrella").mouseenter(function(){
    var estrellas = $(".estrellas");
    var estrella = $(".estrella");
    var estrellaEfecto = $(".estre");
    var estrellaResultado = $(".estre2");
    estrella.hide();
    estrellas.show();
    estrellaEfecto.css("z-index",15);
    estrellaEfecto.css("position","relative");
    estrellaResultado.css("z-index",10);
    estrella.css("z-index",10);
    estrellas.css("z-index",15);
    estrellas.css("position","relative");
});
$(".estre").mouseleave(function(){
    var estrellas = $(".estrellas");
    var estrella = $(".estrella");
    var estrellaEfecto = $(".estre");
    var estrellaResultado = $(".estre2");
    estrellas.hide();
    estrella.show();
    estrellaEfecto.css("z-index",10);
    estrellaResultado.css("z-index",15);
    estrella.css("z-index",15);
    estrellas.css("z-index",10);
    
});

$(".estrellas").mouseenter(function(){
	var value = $(this).attr("value");
	for (var i = 1; i <= value; i++) {
		var estrella = document.getElementById("estrella"+i);
		estrella.style.color = "#E6C808";

 }
});
$(".estrellas").mouseleave(function(){
	var value = $(this).attr("value");
	for (var i = 1; i <= value; i++) {
		var estrella = document.getElementById("estrella"+i);
		estrella.style.color = "#CECBCB";

 }

});

$(document).on("click",".estrellas",function(){
 var value = $(this).attr("value");
 var url = window.location.href;
 var split = url.split("/");
 var get = split[3];
 var split2 = get.split("=");
 var post = split2[2].split(".");
 
 var parametros = {
                "value" : value,
                "post":post[0],
        };
 $.ajax({
            type: "post",
            url:"?view=insertarCalificacion",
            data:parametros,

      
            success: function(data){
               
               
                $(".estre2").load('core/bin/functions/postCalificacion.php?value='+post[0]);


            },
            error: function(data){
                
                alert("Problemas al tratar de enviar el mensaje");
            }
        });

 for (var i = 1; i <= value; i++) {
 	document.getElementById("estrella"+i).style.color = "red";
 	$('#estrella'+i).unbind('');
 }
 });

  
