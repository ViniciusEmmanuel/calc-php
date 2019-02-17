<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <title>Vinicius Calculadora</title>
</head>
<body>
<div class="contaneir">

    <h3>Calculadora</h3>
    <input type="number" id="valorA" PLACEHOLDER="Insira um Valor" autofocus>
    <input type="hidden" id="operation" readonly>
    <input type="number" id="valorB" PLACEHOLDER="Insira um Valor">

    <div class="button">
        <button onclick="soma()">+</button>
        <button onclick="subtrair()">-</button>
        <button onclick="multiplicar()">*</button>
        <button onclick="dividir()">/</button>
    </div>
    <div class="button">
        <button onclick="mMais()">M+</button>
        <button onclick="mMenos()">M-</button>
        <button onclick="mr()">MR</button>
        <button onclick="mc()">MC</button>
    </div>
    <div>
        <input type="text" id="result" readonly>

    </div>
</div>


</body>
</html>
<script>
    document.onkeypress = function (evt) {
        keyPressed(evt);

    };

    function keyPressed(evt) {
        evt = evt || window.event;
        var key = evt.which;

        switch (key) {
            case 43:
                soma();
                break;

            case 45:
                subtrair();
                break;
            case 47:
                dividir();
                break;
            case 42:
                multiplicar();
                break;

        }


    }


    function getElement() {
        if (document.getElementById("valorA").value !== '' && document.getElementById("valorB").value !== '') {
            var valorA = document.getElementById("valorA").value;
            var valorB = document.getElementById("valorB").value;
            var result = document.getElementById("result");
            var operation = document.getElementById("operation");


            return {
                valorA,
                valorB,
                result,
                operation
            }
        }
    }

    function soma() {

        val = new getElement();

        var result = parseFloat(val.valorA) + parseFloat(val.valorB);
        val.result.value = ' = ' + result;
        val.operation.setAttribute("type", "text");
        val.operation.value = ' MAIS ';
    }

    function subtrair() {

        val = new getElement();
        var result = parseFloat(val.valorA) - parseFloat(val.valorB);
        val.result.value = ' = ' + result;
        val.operation.setAttribute("type", "text");
        val.operation.value = ' MENOS ';
    }

    function dividir() {

        val = new getElement();
        var result = parseFloat(val.valorA) / parseFloat(val.valorB);
        val.result.value = ' = ' + result;
        val.operation.setAttribute("type", "text");
        val.operation.value = ' DIVIDO ';
    }

    function multiplicar() {

        val = new getElement();
        var result = parseFloat(val.valorA) * parseFloat(val.valorB);
        val.result.value = ' = ' + result;
        val.operation.setAttribute("type", "text");
        val.operation.value = ' MULTIPLICADO ';
    }


    // Funções de memoria da calculadora

    var memoria = 0;
    function mMais() {

        memoria += parseFloat(document.getElementById("valorA").value);

    }


    function mMenos() {

        memoria -= parseFloat(document.getElementById("valorA").value);

    }

    function mc() {
        memoria = 0;
        var result = document.getElementById("result");
        result.value = ' = ' + parseFloat(memoria);

    }

    function mr() {

        var result = document.getElementById("result");
        if(result === ''){
            memoria = 0;
        }
        result.value = ' = ' + parseFloat(memoria);


    }


</script>