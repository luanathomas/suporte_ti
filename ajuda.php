<?php

include_once getcwd() . "\src\Caso.php";
include_once getcwd() . "\src\Equipamento.php";
include_once getcwd() . "\src\Problema_Primario.php";
include_once getcwd() . "\src\Problema_Secundario.php";
include_once getcwd() . "\src\Solucao.php";

?>


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
        <form class="form" method="post" action='processa.php'>

            <div class="titulo">
                <h1> Olá! Seja bem vindo a nossa Central de Ajuda. </h1>
            </div>

            <div class="descricao">
                <h2> Como utilizar o sistema </h2>
            </div>

            <div>
                <center><u>
                        <h2> Usuário </h2>
                    </u></center>
            </div>

            <div class="explicacao">
                <center>
                    <h4> Esse sistema tem o objetivo de auxiliá-lo em seus problemas com equipamentos de
                        informática. Para utilizá-lo, primeiramente selecione qual o equipamento que não
                        está funcionando corretamente. Após, selecione o problema principal,
                        utilizando uma frase. Na última opção, selecione o problema com o máximo
                        de detalhes que puder e que melhor se enquadra ao seu problema, para que as
                        opções de resposta sejam as mais próximas possíveis. Quando finalizar, clique no
                        botão "Me mostre uma solução" e o sistema apresentará possíveis soluções para seu
                        problema. Se uma das soluções apresentadas funcionar, selecione-a e clique em
                        enviar. Caso contrário, selecione a opção "Nenhuma solução me ajudou! :("
                        e contate o administrador do sistema. </h4>
                </center>
            </div>

            <div>
                <center><u>
                        <h2> Administrador </h2>
                    </u></center>
            </div>

            <div class="explicacao">
                <center>
                    <h4> Este sistema de recomendação com RBC possui o intuito de auxiliar o usuário
                        com os problemas de seus equipamentos de informática. O sistema tem um visual bastante
                        didático e de fácil utilização. Na tela inicial, é solicitado por meio de select que
                        o usuário escolha para qual equipamento deseja assistência e qual o problema que está
                        tendo; após é solicitado que descreva seu problema detalhadamente. Ao finalizar, o sistema
                        oferece soluções, primeiramente baseado em casos exatamente iguais que são encontrados no
                        banco de dados. Se não existir nenhum caso igual no banco de dados, são mostradas soluções
                        baseadas em casos com o mesmo equipamento e problema principal; se mesmo assim não existirem
                        casos cadastrados no banco de dados, o sistema procura casos com o mesmo equipamento relatado.
                        Se o problema for resolvido, o programa verifica se aquele caso já existe no banco de dados.
                        Se não, o caso será cadastrado. Se não for encontrada solução para o problema, será
                        exibida a mensagem "Desculpe, mas não encontramos nenhuma solução para o seu problema!
                        Contate o administrador.". O administrador poderá cadastrar novos equipamentos, problemas
                        primários, problemas secundários e soluções. </h4>
                </center>
            </div>

            <div>
                <br>
                <center><button name="botao" id="voltar" value="voltar" class="voltar"> Voltar! </button></center>
            </div>


            <div class="rodape">
                <h3>Desenvolvido por Andressa Farkas, Luana Thomas e Soraia Spohr</h3>
            </div>



        </form>
    </div>

    <script src="main.js"></script>
</body>

</html>