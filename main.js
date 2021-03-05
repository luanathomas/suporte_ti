// ESTE SERIA O CONTEÚDO DO .js
var json1 = {
    "equipamentos": [{
            "nome": "Notebook",
            "valor": 1,
            "problemas": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {
                    "nome": "O notebook não liga",
                    "valor": 1
                },
                {
                    "nome": "A internet do notebook não funciona",
                    "valor": 2
                },
                {
                    "nome": "Áudio e câmera não funcionam",
                    "valor": 3
                }
            ]
        },
        {
            "nome": "Computador",
            "valor": 2,
            "problemas": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {

                    "nome": "Problemas com o mouse ou teclado",
                    "valor": 1
                },
                {
                    "nome": "A internet do computador não funciona",
                    "valor": 2
                },
                {
                    "nome": "A tela não liga",
                    "valor": 3
                }
            ]
        },
        {
            "nome": "Impressora",
            "valor": 3,
            "problemas": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {
                    "nome": "Impressão fraca",
                    "valor": 1
                },
                {
                    "nome": "Não consigo imprimir",
                    "valor": 2
                },
                {
                    "nome": "O scanner não funciona",
                    "valor": 3
                }
            ]
        }
    ]
};

var json2 = {
    "problemas": [{
            "equipamento": "Notebook",
            "nome": "O notebook não liga",
            "valor": 1,
            "problemas2": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {
                    "nome": "Problema com o cabo",
                    "valor": 1
                },
                {
                    "nome": "Está com cheiro de queimado",
                    "valor": 2
                },
                {
                    "nome": "Estava ligado e desligou sozinho",
                    "valor": 3
                }
            ]
        },
        {
            "equipamento": "Notebook",
            "nome": "A internet do notebook não funciona",
            "valor": 2,
            "problemas2": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {
                    "nome": "bbb",
                    "valor": 1
                },
                {
                    "nome": "bbb",
                    "valor": 2
                },
                {
                    "nome": "bbb",
                    "valor": 3
                }

            ]
        },
        {
            "equipamento": "Notebook",
            "nome": "Áudio e câmera não funcionam",
            "valor": 3,
            "problemas2": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {
                    "nome": "ccc",
                    "valor": 1
                },
                {
                    "nome": "ccc",
                    "valor": 2
                },
                {
                    "nome": "ccc",
                    "valor": 3
                }
            ]
        },
        {
            "equipamento": "Computador",
            "nome": "Problemas com o mouse ou teclado",
            "valor": 1,
            "problemas2": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {
                    "nome": "ddd",
                    "valor": 1
                },
                {
                    "nome": "ddd",
                    "valor": 2
                },
                {
                    "nome": "ddd",
                    "valor": 3
                }
            ]
        },
        {
            "equipamento": "Computador",
            "nome": "A internet do computador não funciona",
            "valor": 2,
            "problemas2": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {
                    "nome": "eee",
                    "valor": 1
                },
                {
                    "nome": "eee",
                    "valor": 2
                },
                {
                    "nome": "eee",
                    "valor": 3
                }
            ]
        },
        {
            "equipamento": "Computador",
            "nome": "A tela não liga",
            "valor": 3,
            "problemas2": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {
                    "nome": "fff",
                    "valor": 1
                },
                {
                    "nome": "fff",
                    "valor": 2
                },
                {
                    "nome": "fff",
                    "valor": 3
                }
            ]
        },
        {
            "equipamento": "Impressora",
            "nome": "Impressão fraca",
            "valor": 1,
            "problemas2": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {
                    "nome": "ggg",
                    "valor": 1
                },
                {
                    "nome": "ggg",
                    "valor": 2
                },
                {
                    "nome": "ggg",
                    "valor": 3
                }
            ]
        },
        {
            "equipamento": "Impressora",
            "nome": "Não consigo imprimir",
            "valor": 2,
            "problemas2": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {
                    "nome": "hhh",
                    "valor": 1
                },
                {
                    "nome": "hhh",
                    "valor": 2
                },
                {
                    "nome": "hhh",
                    "valor": 3
                }
            ]
        },
        {
            "equipamento": "Impressora",
            "nome": "O scanner não funciona",
            "valor": 3,
            "problemas2": [{
                    "nome": "Selecione:",
                    "valor": 0
                },
                {
                    "nome": "iii",
                    "valor": 1
                },
                {
                    "nome": "iii",
                    "valor": 2
                },
                {
                    "nome": "iii",
                    "valor": 3
                }
            ]
        }
    ]
};
// FIM DO .js

function buscaSelect2(e) {
    document.querySelector("#select2").innerHTML = '';
    var select2 = document.querySelector("#select2");

    var num_equipamentos = json1.equipamentos.length;
    var j_index = -1;

    // aqui eu pego o index do equipamento dentro do JSON
    for (var x = 0; x < num_equipamentos; x++) {
        if (json1.equipamentos[x].valor == e) {
            j_index = x;
        }
    }

    if (j_index != -1) {

        // aqui eu percorro todos os problemas e crio os OPTIONS
        json1.equipamentos[j_index].problemas.forEach(function(problemas) {
            var problem_opts = document.createElement('option');
            problem_opts.setAttribute('value', problemas.valor)
            problem_opts.innerHTML = problemas.nome;
            select2.appendChild(problem_opts);
        });
    } else {
        document.querySelector("#select2").innerHTML = '';
    }
}

function buscaSelect3(e) {
    document.querySelector("#select3").innerHTML = '';
    var select3 = document.querySelector("#select3");

    var num_problemas = json2.problemas.length;
    var j_index = -1;

    // aqui eu pego o index do problema dentro do JSON
    for (var x = 0; x < num_problemas; x++) {
        if (json2.problemas[x].nome == e) {
            j_index = x;
        }
    }

    if (j_index != -1) {

        // aqui eu percorro todos os problemas e crio os OPTIONS
        json2.problemas[j_index].problemas2.forEach(function(problemas2) {
            var problem_opts = document.createElement('option');
            problem_opts.setAttribute('value', problemas2.valor)
            problem_opts.innerHTML = problemas2.nome;
            select3.appendChild(problem_opts);
        });
    } else {
        document.querySelector("#select3").innerHTML = '';
    }
}