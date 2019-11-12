(function(){
'use strict';


    //javascript

    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function(){

        //CAMPOR DATOS USUARIOS
         
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');
        

        //CAMPOS PASES
        var pase_dia = document.getElementById('pase_dia');
        var pase_completo = document.getElementById('pase_completo');
        var pase_2dias = document.getElementById('pase_2dias');

        //BOTONES Y DIVS

        var calcular =document.getElementById('calcular');
        var btnregistro =document.getElementById('btnregistro');
        var error = document.getElementById('error');
        var lista_productos = document.getElementById('lista_productos');
        var sumatotal = document.getElementById('suma-total');

        //EXTRAS

        var etiquetas = document.getElementById('etiquetas');
        var camisa_evento = document.getElementById('camisa_evento');
       
        btnregistro.disabled = true;//desabilita el boton pagar

        ////////////////////////////////////////////////////////////////////////////////
            
        //cuando haga click sobre el boton calcular llamara a la funcion(eventos que escuchan)
        calcular.addEventListener('click',calcularmontos);
        pase_dia.addEventListener('blur',mostrardia);//el evento blur funcion cuando el usuario entra al text y sale y toma el valor
        pase_2dias.addEventListener('blur',mostrardia);
        pase_completo.addEventListener('blur',mostrardia);


        email.addEventListener('blur',validacionemail);
        

        //validacion de textbox nombre
        nombre.addEventListener('blur',function(){
            if (this.value == "") {
                error.style.display = 'block';
                error.innerHTML = 'Este Campo es Obligatorio';
            
                this.style.border = "1px solid red";
                error.style.border = '1px solid red';
            }
            else{
                error.style.display = 'none';
                this.style.border = '1px solid #cccccc'


            }
        });

        

        //funcion validacion de caracteres en la pagina
        function validacionemail()
        {
            if (this.value.indexOf("@")> -1) {//si es mayor a -1 o sea 1 existe
                error.style.display = 'none';
                this.style.border = '1px solid #cccccc'
            }
            else{//de lo contrario no existe y muestra el mensaje
                error.style.display = 'block';
                error.innerHTML = 'Por favor Inserte un correo valido';
                this.style.border = "1px solid red";
                error.style.border = '1px solid red';
            }
            
        }
        
        //si el campo apellido esta vacio, con una funcion anonima
        apellido.addEventListener('blur',function(){
            if (this.value == "") {
                error.style.display = 'block';
                error.innerHTML = 'Este Campo es Obligatorio';
                error.style.border = '1px solid red';
                this.style.border = "1px solid red";
            }
            else{
                error.style.display = 'none';
                this.style.border = '1px solid #cccccc'


            }
        });
        
        
///////////////////////////////////////////////////////////////////fin de la validacion


        function calcularmontos(event){
            //desactiva el reload de l apagina
            event.preventDefault();
        
            //si esta vacio 
            if (regalo.value === "") {
                
                alert("Debes eleigr un regalo")
                regalo.focus();
            }
            else if( pase_2dias.value == 0 && pase_completo.value == 0 && pase_dia.value == 0){//si algunos de los bolestos estan vacios
                alert('debes elegir algun boletos');
                pase_completo.focus();
            }
            //si esta lleno
            else{

                var boletosDias = Number(pase_dia.value, 10) || 0,
                 boleto2Dias = Number(pase_2dias.value,10) || 0,
                 boletoCompleto = Number(pase_completo.value,10) || 0,
                 Camisetas= Number(camisa_evento.value,10) || 0,
                 CantEtiquetas = Number(etiquetas.value,10) || 0;

                 var descuento = (Camisetas * 10) * 0.07;
                 var totalpagar = (boletosDias * 30) + (boleto2Dias * 45) + (boletoCompleto * 50) + (CantEtiquetas * 2) + (Camisetas * 10 ) - descuento; 

                
                 var listaproductos = [];

                    //condicionales
                    //#region  condicionales de push
                    if(boletosDias >= 1){
                        listaproductos.push(boletosDias + " Pase por dia");
                    }

                    if(boleto2Dias >= 1){
                        listaproductos.push(boleto2Dias + " Pase por 2 dias");
                    }

                    if(boletoCompleto >= 1){
                        listaproductos.push(boletoCompleto + " Pase Completo");
                    }

                    if(Camisetas >= 1){
                        listaproductos.push(Camisetas + " Camiseta");
                    }

                    if(CantEtiquetas >= 1){
                        listaproductos.push(CantEtiquetas + " Etiquetas");
                    }
                    //#endregion

                    //array para agregar los productos
                    lista_productos.innerHTML = "";//se declara vacio para cuando el cliente quiera cambiar algo no afecte a la operacion
                   
                    for (let index = 0; index < listaproductos.length; index++) {
                        
                        lista_productos.innerHTML += listaproductos[index] + '<br/>';
                    }
                    
                    //estilo css
                    lista_productos.style.display = "block";

                    //variable de pago, cuanto digitos despues del punto quiere
                    sumatotal.innerHTML = '$ '+totalpagar.toFixed(2);

                    
                    btnregistro.disabled = false;//abilita el boton pagar
                    document.getElementById('total_pedido').value = totalpagar;
                   
                    

            }



        }//final de la funcion click total

        
        //aqui se mostrar segun eligan los dias 

        function mostrardia(){
            var boletosDias = parseInt(pase_dia.value, 10) || 0,
            boleto2Dias = parseInt(pase_2dias.value,10) || 0,
            boletoCompleto = parseInt(pase_completo.value,10) || 0;

            var diaselegidos = [];

            if (boletosDias > 0) {
                diaselegidos.push('viernes');
                
            }

            if (boleto2Dias >0) {
                diaselegidos.push('viernes','sabado');
                

            }

            if (boletoCompleto>0) {
                diaselegidos.push('viernes','sabado','domingo')
               
            }

            for (let index = 0; index < diaselegidos.length; index++) {
                document.getElementById(diaselegidos[index]).style.display = 'block';
                
            }


        }

       








    });//DOM CONTENT LOADED
    
})();


//funcion anonima JQUERY
$(function(){

    //programa de conferencia
    $('.programa-evento .info-curso:first').show();
    $('.contenedor-programa a:first ').addClass('activo');
    //evento click
    $('.contenedor-programa  a').on('click',function(){
        $('.contenedor-programa a ').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);

        return false;
    });

    //menu fijo
    var windowhigh = $(window).height();
    var barraaltura = $('.barra').innerHeight();

    $(window).scroll(function() { 
        var scroll = $(window).scrollTop();
        if(scroll > windowhigh){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraaltura + 'px'});//se le pone px para que agrege pixeles
        }
        else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top':'0px'});
        }
       
    });

    //menu responsive

    $('.menu-mobil').on('click',function(){
    
        $('.navegacion-principal').slideToggle();

    });

    //waypoint

    var resumenlista = $('.resumen-evento');

    if(resumenlista.length > 0){

        $('.resumen-evento').waypoint(function(){
            $('.resumen-evento li:nth-child(1) p ').animateNumber({number:6},1200);//nth-child seleccoiona por posicion
            $('.resumen-evento li:nth-child(2) p ').animateNumber({number:15},1000);
            $('.resumen-evento li:nth-child(3) p ').animateNumber({number:3},1500);
            $('.resumen-evento li:nth-child(4) p ').animateNumber({number:9},1200);
        },{
            //que tanto queires que recora el mouse ante de mostrar la ejecucion
            offset:'60%'
        });
       
    }


    //lettering
    $('.nombre-sitio').lettering();

    //agregando clase
    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

    //numero animacion
    //
    $('.resumen-evento li:nth-child(1) p ').animateNumber({number:6},1200);//nth-child seleccoiona por posicion
    $('.resumen-evento li:nth-child(2) p ').animateNumber({number:15},1000);
    $('.resumen-evento li:nth-child(3) p ').animateNumber({number:3},1500);
    $('.resumen-evento li:nth-child(4) p ').animateNumber({number:9},1200);


    //temporizador

    $('.cuenta-regresiva').countdown('08/08/2019 12:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));

    });

    ////colorbox
    $('.invitado-info').colorbox({inline:true, width:"50%"});
    

});