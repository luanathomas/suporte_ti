<!DOCTYPE html>
<html lang="en">

<head>
    <title>Central de Ajuda</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <div id="container">
        <form class="form">
            <div class="titulo">
                <h1> Olá! Seja bem vindo a nossa Central de Ajuda.  </h1>
            </div>

            <div class="descricao">
                <p> Como podemos ajudar? </p>
            </div>

            <div class="select">
                <select name="mes" id="mes" required>
                    <option value='0' aria-placeholder="selecione" >Qual equipamento apresenta problemas?</option>
                    <option value='1'>Notebook</option>
                    <option value='2'>Computador</option>
                    <option value='3'>Impressora</option>
                </select>
            </div>

            <div class="input1">
                <select name="mes" id="mes" required>
                    <option value='0' aria-placeholder="selecione" >Qual é o principal problema?</option>
                    <option value='1'>Notebook</option>
                    <option value='2'>Computador</option>
                    <option value='3'>Impressora</option>
                </select>
            </div>

            <div class="input2">
            <select name="mes" id="mes" required>
                    <option value='0' aria-placeholder="selecione" >Conte-nos mais sobre isso</option>
                    <option value='1'>Notebook</option>
                    <option value='2'>Computador</option>
                    <option value='3'>Impressora</option>
                </select>
            </div>

            <div class="botao">
                <button class="calcular"> Descubra já! </button>
            </div>

            <div class="resultado"></div>

                <!-- <div class="radio">
                    <div class="dark">
                        <input id="dark" type="radio" name="tema" value="0"> Dark
                    </div>
                    <div class="light">
                        <input id="light" type="radio" name="tema" value="1" checked> Light
                    </div>
                </div> -->

            <div class="rodape">
                <h3>Desenvolvido por Andressa Farkas, Luana Thomas e Soraia Spohr</h3>
            </div>
        </form>
    </div>

    <script src="main.js"></script>
</body>

</html>