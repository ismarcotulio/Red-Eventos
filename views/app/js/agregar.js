/*------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------PRIMERA VENTANA-----------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------*/

//variables generales

var margin=0.5;
var cc=0;
var el=[];

//----------------Inicio-> mostrar mejor categoria desde el inicio---------------------------------

$('#catcont').ready(function(){
    $.post("php/mejorcategoria.php",function(datos){
   $("#catcont").html(datos);
    });
});

//----------------final-> mostrar mejor categoria desde el inicio---------------------------------

//----------------Inicio-> filtro para encontrar categorias en base de datos---------------------------------
var m=[];
var t;
$("#filtro").on("keyup",function(){
     var filtro = $("#filtro").val();
     var a = $(".mselecat").length/2;
     
     
    var parametros = {
                "value" : filtro,
                "tipo1" : t,
                "cat1" : m[0],
                "cat2" : m[1],
                "cat3" : m[2],
                "cat4" : m[3],
                "cat5" : m[4],
                "cat6" : m[5],
                "cat7" : m[6],
                "cat8" : m[7],
                "cat9" : m[8],
                "cat10" : m[9],
                "cat11" : m[10],
                "cat12" : m[11],
                "cat13" : m[12],
                "cat14" : m[13],
                "cat15" : m[14],
                "cat16" : m[15],
                "cat17" : m[16],
                "cat18" : m[17],
                "cat19" : m[18],
        };
   
     $.post("?view=categorias",parametros,function(datos){
   $("#catcont").html(datos);
    });
});

//----------------final-> filtro para encontrar categorias en base de datos---------------------------------

//----------------Inicio-> efectos de hover de las categorias-----------------------------------------------


$("#catcont").on("mouseenter","div.selecat",function(){
   var id = $(this).attr("id");
   $('#'+id+' img').animate({
    opacity:0.3
   });
   $('#des'+id).animate({
    opacity:1,
    top:"0%"
   });
});

$("#catcont").on("mouseleave","div.selecat",function(){
   var id = $(this).attr("id");
   $('#'+id+' img').animate({
    opacity:1
   });
   $('#des'+id).animate({
    opacity:0,
    top:"-70%",
    
   });
  
});
//----------------final-> efectos de hover de las categorias-----------------------------------------------

//----------------Inicio-> efectos al hacer click a las categorias-----------------------------------------------

$("#catcont").on("click","div.selecat",function(){
    
    k=$(this).find('input');
    

         $(this).find('input').prop("checked",true);
         var cid=$(this).attr('id');
         var value=$(this).find('input').attr('value');
         var nombre=$(this).attr('nombre');
         var tipo=$(this).attr('tipo');
         var codigo=$(this).attr('codigo');
         var src=$('#'+cid+' img').attr('src');
         if (tipo=='2') {
            $("div[tipo='2']").hide(1000);
            t=2;
            $('.crear').load('?view=evento'+codigo);
            $('#agregar_post').attr('action','?view=goEvento'+codigo);
            var tipoContador=2;
         }else{
            $('#'+cid).hide(1000);
             var tipoContador=1;
             if ($(".mselecat[tipo='2']").length==0) {
                 $('.crear').load("?view=editor");
                 $('#agregar_post').attr('action','?view=goPost');
             };
            
         }
         $('#categoria').append("<div class='mselecat' id='m"+cid+"' tipo='"+tipoContador+"' cc='"+cc+"' nombre='"+nombre+"' style='position:relative; left:; float:right; left:; margin-right:"+margin+"%; top:88.2%; width:6%; height:8%;'><img id='equis"+cid+"' src='http://www.drodd.com/images14/x27.png' style='position:absolute; width:100%; height:100%; opacity:0; z-index:1000; top:70%;'><input type='checkbox' checked style='position:absolute; width:100%; height:100%; ' value='"+value+"' name='otro[]'><img style='border-radius:2px; position:absolute; width:100%; height:100%;' src='"+src+"'></div>");
         el[cc]=$('#'+cid);
         
       
        var e = $(this).attr('nombre');
        m.push(e);
        cc=cc+1;
    
});

//----------------final-> efectos al hacer click a las categorias-----------------------------------------------

//----------------inicio-> efectos al hacer hover al carrito de categorias-----------------------------------------------

$('.postear').on("mouseenter","div.mselecat",function(){
    $(this).css("cursor","pointer")
    var es=$(this).find('img').attr('id');
    $('#'+es).animate({
        opacity:1,
        top:"0%"
    },200);
    $('.mselecat').on("click",function(){
        var tipom=$(this).attr('tipo');
        if (tipom=='2') {
            t=1;
            $('.crear').load("?view=editor");
        };
        var ccc=$(this).attr('cc');
        delete m[ccc];
        el[ccc].show(1000);
        k.prop("checked",false);
        $(this).hide(1000, function(){ 
            $(this).remove(); 
            

        });

    });
    
});

$('.postear').on("mouseleave","div.mselecat",function(){
    var es=$(this).find('img').attr('id');
    $('#'+es).animate({
        opacity:0,
        top:"70%"
    },200);
    
});

//----------------final-> efectos al hacer hover al carrito de categorias-----------------------------------------------

/*------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------EDITOR DE TEXTO-----------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------*/

//----------------inicio-> funciones de seleccion de texto-------------------------------------------------------

function ma(){
    url_imagen=$("#url_imagem").val();
  $("#imagem").modal("hide");
  sel=document.getSelection();

    document.execCommand("insertImage",false,url_imagen);

};

$(document).on("click","#bold",function(){
    selection=window.getSelection();
    document.execCommand("bold");
});

$(document).on("click","#fontname",function(){
    $("fontnamem").modal('show');
});

$(document).on("click","#fontsize",function(){
    sel=document.getSelection();
    document.execCommand("bold");
});

$(document).on("click","#image",function(){
    sel=document.getSelection();
    document.execCommand("bold");
});

$(document).on("click","#list",function(){
    sel=document.getSelection();
    document.execCommand("insertOrderedList");
});

$(document).on("click","#italic",function(){
    sel=document.getSelection();
    document.execCommand("italic");
});

$(document).on("click","#justifycenter",function(){
    sel=document.getSelection();
    document.execCommand("justifyCenter");
});


$(document).on("click","#justifyleft",function(){
    sel=document.getSelection();
    document.execCommand("justifyLeft");
});

$(document).on("click","#justifyright",function(){
    sel=document.getSelection();
    document.execCommand("justifyRight");
});

$(document).on("click","#underline",function(){
    sel=document.getSelection();
    document.execCommand("underline");
});

$(document).on("click","#justifyfull",function(){
    sel=document.getSelection();
    document.execCommand("justifyFull");
});

function fontnames(){
    var font = document.getElementsByName('font');
    var font_value;
for(var i = 0; i < font.length; i++){
    if(font[i].checked){
        font_value = font[i].value;
    }
}
sel=document.getSelection();
     document.execCommand("fontName", false, font_value);
    $("#fontnamem").modal("hide");

};

$(document).on("change","#fontsize",function(){
    size_value=$("#fontsize").val();
    sel=document.getSelection();
    document.execCommand("fontSize",false,size_value);
});

//----------------final-> funciones de seleccion de texto-------------------------------------------------------

/*------------------------------------------------------------------------------------------------------------*/
/*------------------------------------INTERACCION DE FORMULARIO-----------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------*/


//----------------inicio-> botones de animacion-------------------------------------------------------

$('#listo').on("click",function(){
    $('.mselecat').animate({opacity:0},1500);
     $('#categoria').animate({
            left:'-100%'
         },2000);
         $('#crear').animate({
            left:'15%'
         },2000);
     
});

$('#volver').on("click",function(){
     $('.mselecat').animate({opacity:1},3000);
     $('#categoria').animate({
            left:'15%'
         },2000);
         $('#crear').animate({
            left:'115%'
         },2000);
     
});

//----------------final-> botones de animacion-------------------------------------------------------

//----------------inicio-> boton para crear el post y validacion de datos-------------------------------------------------------

$('#submit').on("click",function(){
    if ($(".mselecat[tipo='2']").length>=1) {
        
    }else{

    }

});

$("#submit").click(function(event) {
    
    var titulo = $("input[name='agregar_titulo']").val();
    if(titulo == ""){
        $("#error").html("Debe introducir un titulo valido");
        $("input[name='agregar_titulo']").focus();
        return false;
    }

    var descripcion = $("textarea[name='agregar_descripcion']").val();
    if(descripcion == ""){
        $("#error").html("Debe introducir una descripcion valida");
        $("textarea[name='agregar_descripcion']").focus();
        return false;
    };

    var poster = $("input[name='agregar_url']").val();
    if(poster == ""){
        $("input[name='agregar_url']").val("");
        
    };
    var imagen = $("input[name='agregar_url']").val();
    if(imagen == ""){
        $("#error").html("Debe introducir una Imagen valida");
        $("textarea[name='agregar_url']").focus();
        return false;
        
    };

    var contenido = $("div[name='agregar_contenido']").html();
    if(contenido == ""){
        $("#error").html("Debe introducir un contenido");
        $("div[name='agregar_contenido']").focus();
        return false;
    };

  $("#a").val($("#agregar_contenido").html());
});

//----------------final-> boton para crear el post-------------------------------------------------------












