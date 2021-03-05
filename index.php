<!DOCTYPE html>
<html lang="en">

<head>
    <title>Central de Ajuda</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo.css" rel="stylesheet">
    <script src="main.js"></script>
</head>

<body>
<script src="main.js"></script>
    <div id="container">
        <form class="form">
        
        <div class="titulo">
                <h1> Olá! Seja bem vindo a nossa Central de Ajuda.  </h1>
            </div>

            <div class="descricao">
                <h3> Como podemos ajudar? </h3>
            </div>

            <div class="label1">
            <label for="select1">Selecione o equipamento: </label>
            </div>
            <div class="select1">       
                <select id="select1" aria-placeholder="selecione" required onchange="buscaSelect2(this.value)">
                    <option value=''>Selecione</option>
                    <option value=1>Notebook</option>
                    <option value=2>Computador</option>
                    <option value=3>Impressora</option>
                </select>
            </div>

            <div class="label2">
            <label for="select2">Qual é o problema? </label>
            </div>
            <div class="select2" >
                <select id="select2" required onchange="buscaSelect3(this.value)">
                </select>
            </div>
            
            <div class="label3">
            <label for="select3">Pode nos explicar melhor? </label>
            </div>
            <div class="select3">
                <select id="select3" required>  
                </select>
            </div>

            

            <div class="botao">
                <button class="calcular"> Me ajude! </button>
            </div>

            <div class="resultado"></div>

            <div class="rodape">
                <h3>Desenvolvido por Andressa Farkas, Luana Thomas e Soraia Spohr</h3>
            </div>

        </form>
    </div>

    <script src="main.js"></script>
</body>

</html>


<!--  -->