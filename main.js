var select_equipamento = document.querySelector("#select_equipamento");
var input_equipamento = document.querySelector("#input_equipamento");
// var problema_primario_select
// var problema_primario_input
// var problema_secundario_select
// var problema_secundario_input

function equipamento(){
    input_equipamento.hide();

    


}
$(function() {
    $('#meuDiv').hide();

    $('#select').change(function() {
        if ($(this).val() === 'outro') {
            $('#meuDiv').show();
            $('#select').hide();
        }
    });

    $('#cancel').click(function () {
        $('#select').show();
        $('#select').val('');
        $('#meuDiv').hide();
    });
});




onchange="buscaSelect1(this.value)"