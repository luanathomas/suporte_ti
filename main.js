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
        }
    ]
};





function buscaSelect1(e) {
    document.querySelector("#select2").innerHTML = '';
    var select2 = document.querySelector("#select2");

    var num_equipamentos = json1.equipamentos.length;
    var index = -1;

    // aqui eu pego o index do equipamento dentro do JSON
    for (var x = 0; x < num_equipamentos; x++) {
        if (json1.equipamentos[x].valor == e) {
            index = x;
        }
    }


    if (index != -1) {

        // aqui eu percorro todos os problemas e crio os OPTIONS
        json1.equipamentos[index].problemas.forEach(function(problemas) {
            var problem_opts = document.createElement('option');
            problem_opts.setAttribute('value', problemas.valor)
            problem_opts.innerHTML = problemas.nome;
            select2.appendChild(problem_opts);
        });
    } else {
        document.querySelector("#select2").innerHTML = '';
    }
}

function buscaSelect2(e, f) {
    document.querySelector("#select3").innerHTML = '';
    var select3 = document.querySelector("#select3");

    var num_equipamentos = json1.equipamentos.length;
    var index_equipamento = -1;
    var index_problema = -1;

    // aqui eu pego o index do equipamento e do problema dentro do JSON
    for (var x = 0; x < num_equipamentos; x++) {
        if (json1.equipamentos[x].valor == e) {
            index_equipamento = x;
            var num_problemas = json1.equipamentos[x].problemas.length;
            for (var y = 0; y < num_problemas; y++) {
                if (json1.equipamentos[x].problemas[y].valor == f) {
                    index_problema = y;
                }
            }
        }
    }


    if (index_problema != -1) {
        // aqui eu percorro todos os problemas e crio os OPTIONS
        json1.equipamentos[index_equipamento].problemas[index_problema].problemas2.forEach(function(problemas2) {
            var problem_opts = document.createElement('option');
            problem_opts.setAttribute('value', problemas2.valor)
            problem_opts.innerHTML = problemas2.nome;
            select3.appendChild(problem_opts);
        });
    } else {
        document.querySelector("#select3").innerHTML = '';
    }
}