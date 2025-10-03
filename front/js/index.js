document.writeln("Hola mundo en javaScript");
document.getElementById("mensaje1").innerText = "Este es mi mensaje 1";
document.getElementById("mensaje2").innerText = "Este es mi mensaje 2";
document.getElementById("mensaje3").innerText = "Esta es mi mensaje 3";

const Mifecha = new Date();
document.getElementById("fecha").innerText = Mifecha.toLocaleDateString();
//Saludo();
//Adios();
function Saludo() {
    alert("Hola Adrián, eres la puta ostia");
}

function Adios(){
    alert("BYEEEEEEEEE");
}

var Numero1 = 56;
var Numero2 = 78;
var resultado = Numero1 +  Numero2;
if(resultado > 75){
    document.getElementById("resultado").innerText="El resultado de la operacion es superior a 150";
}else{
    document.getElementById("resultado").innerText="El resultado de la operación es inferior a 75";
}

let nombre="Adrián";
let apellido1="Álvarez";
let apellido2="Cotta";
let saludo= "Bienvenido"

const PI=3.14;

console.log(PI);
console.log(nombre);
console.log(apellido1);
console.log(apellido2);

let fruta =["manzana", "pera","melocotones","sandía"];

milog(fruta[0]);
milog(fruta[1]);
milog(fruta[2]);

let alumno={
    nombre:"Adrián",
    apellido1: "Álvarez",
    apellido2: "Cotta",
    edad:20,
    estudios: "Ingeniero informático"
}

document.writeln("Hola Mundo");
    