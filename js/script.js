//nota javascript es case sensitive es sensibles a las letras

//innerhtml muestra en html lo que hay en javascript

//lo estaremos utilizando mucho
var total,numero1,numero2;

function totalapagar(numero,numero2) {
    total = numero + numero2;
    return total;
}

var grantotal = totalapagar(50,100);

var mostrar = document.getElementById("resultado").innerHTML = grantotal + "  total";






//scope
//se tratar de usar variables que no estan a alcanze
//usar varaibles que no estan el el scope de esa funcion
/*
function scope1() {
    var a = 20;
    console.log(a);
}

function scope2(){
    var b = 10;
    console.log(b);
}

scope1();
scope2();

*/


//funciones que retornan valores
/*
var numero1;
function multiplicarx0(numero) {
    numero += numero * 20;
    return numero;
}


numero1  = multiplicarx0(2)
console.log("el resultado de la multiplicacion es ",numero1);


const impuesto = 0.18;
var total = 0;

function comprar(numero) {
    numero += (numero * impuesto);
    return numero;
}

total =comprar(20);
console.log(total);
*/

/*
//funciones con argumentos

function suma(numero1,numero2) {
    console.log(numero1+numero2)
}

suma(5,5);
suma(6,5);

var frutas = [];
function arreglo(fruta) {
    frutas.push(fruta);//push agrega un elemento al final del array
    console.log(frutas);
}

arreglo('manzana');
arreglo('pera');

//carrito

const impuesto = 0.18;
var total = 0;
//la funcion tofixed se utiliza para reducir los digitos despues del punto
function comprar(item,precio) {
    console.log("el articulo: "+item+" tiene un precio de : "+precio);
    total = precio+ (precio*impuesto);
    
    console.log("el impuesto a pagar es: ",(precio*impuesto).toFixed(3));
    console.log("total a pagar : ",total.toFixed(2));
}

comprar("coca cola",20)

*/






//funciones
/*
function suma() {
    console.log(2+2);
}
suma();

function array_fruta()
{
    var fruta = ['mango','pera','aguacate','guineo'];
    var comida = ['arroz','habicuela','aguacate','carne'];
    console.log(fruta);//hay que imprimirlo para cuando la llame aparezca la informacion
}

array_fruta();//llamamos la funcion

var frutas = array_fruta();//se puede agregar una funcion a una variable
console.log(frutas);

//tiene propiedades
var auto={
    color:'azul',
    motor: 5.5,
    marca: 'mustang',
    año:1995,
    clasico:true
    
 }

 function imprimir(automovil) {
     console.log(auto.año);
     console.log(auto.clasico);
     console.log(auto.color);
     console.log(auto.motor);
     console.log(auto.marca);

 }

auto.mostraobjeto = imprimir;//no se le puso parentesis
auto.mostraobjeto();
*/

/*//ciclo do while
/*
var numero = 0;

var comida = ['arroz','habicuela','aguacate','carne'];
while (numero < 20) {
    numero++;
    console.log(numero);
    console.log(comida[numero]);
    
}

*/

/*
//ciclo for

for (var index = 0; index < 20; index++) {
   console.log(index);

}
var comida = ['arroz','habicuela','aguacate','carne'];

for (var i = 0 ; i < comida.length ;i++) {
    console.log(comida[i]);
    
}
*/
/*
//operadores 
var numero1 = 20;
var numero2 = 30;
//suma
console.log(numero1+numero2);
//resta
console.log(numero1-numero2);
//multiplicacion
console.log(numero1*numero2);
//division
console.log(numero1/numero2);
///////////////////////////////////
console.log(numero1+=numero2);

console.log(numero1-=numero2);

console.log(numero1*=numero2);

console.log(numero1/=numero2);
*/



//////swict
/*
var pago = "tarjeta";

switch (pago) {
    case "efectivo":
        console.log("Pago en efectivo");
        break;
    case "cheque":
            console.log("Pago en cheque");
        break;
        case "tarjeta":
            console.log("Pago en tarjeta");
        break;
        
        
    default:
        console.log("no existe esa forma de pago");
        break;
}
*/



//condicinales

/*
var numero = 20;
var numero1 = '20';
// si utlizamos === es de una forma mas estricta a diferencia de ==
if (numero === numero1) {
    console.log('son iguales');
}

else{
    console.log('no son iguales');
}



*/
//javascript es sensible con los texto
/*
var texto = 'hola mundo';
var text1='Hola Mundo';

if (texto.toLowerCase() == text1.toLowerCase()) {
    console.log('son iguales');
 
}
else {
    console.log('no son iguales');
}*/



/*
//string
var texto = 'esto es una cadena de texto';
console.log(texto);
console.log(texto.toUpperCase());
console.log(texto.split());
console.log(texto.slice(0,11));//lee en el texto desde la posicion 0 a 11 hasta ahi
*/




/*
//fecha
var fecha = new Date();
console.log(fecha);
console.log('el ano es '+fecha.getFullYear());//son funciones van entre parentesis
//y hay mas get aparte de ese

*/



/*
//numeros
var numero1 = "15";
var numero2 = -20;
var numero3 = 21.5;
var numero4 = 20;
var numero5 = "3.14";
var numero6=-30.5;

console.log(numero1 + 20);

var numero7 = parseInt(numero1);//para convertir de letra a numero
var numero8 = parseFloat(numero5);

console.log((numero8 + 10).toFixed(1));//este metodo lo utilizamos para que se controles cuantos digitos aparecen despues del punto
console.log(numero7 + 10);
*/


/**los arreglos en js se declaran con var
 * casi siempre qe se vea una variable con corchetes
 * es un arreglo
 */

/*var comida = ['arroz','habicuela','aguacate','carne'];
var ropa = new Array('camisa','pantalon','poloche','media');
comida.push('calor');//con el metodo push se agrega al array
console.log(ropa.indexOf('camisa'));//para saber en que posicion esta localizada
ropa.pop();//elimina el ultimo elemento del array
 
ropa.splice(1,1);//elimina posicion expesificas del arreglo, la posicion 1 hasta el
//indice 1
console.log('con splice ' + ropa);
*/
/*
//con filtro 
console.log('filtro');
var comida = ['arroz','habicuela','aguacate','carne'];

var nuevoarreglo = comida.filter(function(equipo) {//hay que poner el mismo nombre de la funcion para que funcione
   return (equipo !== "habicuela")
});
console.log(nuevoarreglo);
 

*/
/*var auto={
    color:'azul',
    motor: 5.5,
    marca: 'mustang',
    año:1995,
    clasico:true

*/

/**para crear objetos, si una variable tienes
 * muchos atributos es mejor utilizar un objeto 
 
var auto={
color:'azul',
motor: 5.5,
marca: 'mustang',
año:1995,
clasico:true

}*/

/*var nombre = 'wady';
console.log(nombre);
*/
/*
var nombre = prompt("como te llamas?");
var lugar = prompt("de donde eres") ;
alert("Bienvenidos " + nombre+" de "+lugar);
*/