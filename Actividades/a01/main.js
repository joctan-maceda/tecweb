
function getDatos()
{
    var nombre = prompt("Nombre: ", "");

    var edad = prompt("Edad: ", 0);

    var div1 = document.getElementById('nombre');
    div1.innerHTML = '<h3> Nombre: '+nombre+'</h3>';

    var div2 = document.getElementById('edad');
    div2.innerHTML = '<h3> Edad: '+edad+'</h3>';
}

function HolaMundo() {
    document.getElementById("HolaMundo").innerHTML = 'Hola Mundo';
}

function variables() {
    var nombre = 'Juan';
    var edad = 10;
    var altura = 1.92;
    var casado = false;

    var resultado = nombre + '<br>' + edad + '<br>' + altura + '<br>' + casado;
    document.getElementById("variables").innerHTML = resultado;
}

function EntradaDatos() {
    var nombre = prompt('Ingresa tu nombre:', '');
    var edad = prompt('Ingresa tu edad:', '');

    var resultado = 'Hola ' + nombre + ', así que tienes ' + edad + ' años';
    document.getElementById("EntradaDatos").innerHTML = resultado;
}

function SumayProducto() {
    var valor1 = prompt('Introducir primer número:', '');
    var valor2 = prompt('Introducir segundo número:', '');

    var suma = parseInt(valor1) + parseInt(valor2);
    var producto = parseInt(valor1) * parseInt(valor2);

    var resultado = 'La suma es ' + suma + '<br>' + 'El producto es ' + producto;
    document.getElementById("SumayProducto").innerHTML = resultado;
}

function SentenciaIf() {
    var nombre = prompt('Ingresa tu nombre:', '');
    var nota = prompt('Ingresa tu nota:', '');

    if (nota >= 4) {
        document.getElementById("IF").innerHTML = nombre + ' está aprobado con un ' + nota;
    }
}

function SentenciaIfElse() {
    var num1 = prompt('Ingresa el primer número:', '');
    var num2 = prompt('Ingresa el segundo número:', '');

    num1 = parseInt(num1);
    num2 = parseInt(num2);

    if (num1 > num2) {
        document.getElementById("IF-else").innerHTML = 'El mayor es ' + num1;
    } else {
        document.getElementById("IF-else").innerHTML = 'El mayor es ' + num2;
    }
}

function SentenciaIfElseAnidada() {
    var nota1 = parseInt(prompt('Ingresa 1ra. nota:', ''));
    var nota2 = parseInt(prompt('Ingresa 2da. nota:', ''));
    var nota3 = parseInt(prompt('Ingresa 3ra. nota:', ''));

    var pro = (nota1 + nota2 + nota3) / 3;
    var resultado;

    if (pro >= 7) {
        resultado = 'Aprobado';
    } else if (pro >= 4) {
        resultado = 'Regular';
    } else {
        resultado = 'Reprobado';
    }

    document.getElementById("IF-else-Anidada").innerHTML = resultado;
}

function Sentenciaswitch() {
    var valor = parseInt(prompt('Ingresar un valor comprendido entre 1 y 5:', ''));

    var resultado;
    switch (valor) {
        case 1: resultado = 'uno'; break;
        case 2: resultado = 'dos'; break;
        case 3: resultado = 'tres'; break;
        case 4: resultado = 'cuatro'; break;
        case 5: resultado = 'cinco'; break;
        default: resultado = 'Debe ingresar un valor comprendido entre 1 y 5.';
    }

    document.getElementById("switch").innerHTML = resultado;
}

function Sentenciaswitch2() {
    var col = prompt('Ingresa el color con que quieras pintar el fondo de la ventana (rojo, verde, azul):', '');

    switch (col) {
        case 'rojo': document.body.style.backgroundColor = '#ff0000'; break;
        case 'verde': document.body.style.backgroundColor = '#00ff00'; break;
        case 'azul': document.body.style.backgroundColor = '#0000ff'; break;
    }
}

function SentenciaWhile() {
    var x = 1;
    var resultado = '';

    while (x <= 100) {
        resultado += x + '<br>';
        x++;
    }

    document.getElementById("while").innerHTML = resultado;
}

function Acumulador() {
    var x = 1;
    var suma = 0;

    while (x <= 5) {
        var valor = parseInt(prompt('Ingresa el valor:', ''));
        suma += valor;
        x++;
    }

    document.getElementById("Acumulador").innerHTML = 'La suma de los valores es ' + suma;
}

function SentenciaDowhile() {
    var valor;
    var resultado = '';

    do {
        valor = parseInt(prompt('Ingresa un valor entre 0 y 999:', ''));
        resultado += 'El valor ' + valor + ' tiene ';

        if (valor < 10) {
            resultado += '1 dígito';
        } else if (valor < 100) {
            resultado += '2 dígitos';
        } else {
            resultado += '3 dígitos';
        }

        resultado += '<br>';
    } while (valor != 0);

    document.getElementById("doWhile").innerHTML = resultado;
}

function SentenciaFor() {
    var resultado = '';

    for (var f = 1; f <= 10; f++) {
        resultado += f + ' ';
    }

    document.getElementById("For").innerHTML = resultado;
}

function Funciones1() {
    var resultado = 'Cuidado<br>Ingresa tu documento correctamente<br>'.repeat(3);
    document.getElementById("funciones1").innerHTML = resultado;
}

function Funciones2() {
    function mostrarMensaje() {
        return 'Cuidado<br>Ingresa tu documento correctamente<br>';
    }

    document.getElementById("funciones2").innerHTML = mostrarMensaje().repeat(3);
}

function Funciones3() {
    var valor1 = parseInt(prompt('Ingresa el valor inferior:', ''));
    var valor2 = parseInt(prompt('Ingresa el valor superior:', ''));
    var resultado = '';

    for (var i = valor1; i <= valor2; i++) {
        resultado += i + ' ';
    }

    document.getElementById("funciones3").innerHTML = resultado;
}

function Retornovalor() {
    var valor = parseInt(prompt('Ingresa un valor entre 1 y 5:', ''));

    document.getElementById("retornovalor").innerHTML = convertirCastellano(valor);
}
function Retornovalor2() {
    var valor = parseInt(prompt('Ingresa un valor entre 1 y 5:', ''));

    document.getElementById("retornovalor2").innerHTML = convertirCastellano(valor);
}


function convertirCastellano(x){
    switch (x) {
        case 1: return "uno";
        case 2: return "dos";
        case 3: return "tres";
        case 4: return "cuatro";
        case 5: return "cinco";
        default: return "valor incorrecto";
        }
}