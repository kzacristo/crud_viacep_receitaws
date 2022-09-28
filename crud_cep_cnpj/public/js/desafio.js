
document.getElementById('cnpj').addEventListener('input', function (e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/);
    e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + '.' + x[3] + '/' + x[4] + (x[5] ? '-' + x[5] : '');
});



$(document).ready(function () {
    $("#cpf_1,#cpf_2,#cpf_3,#cpf_4,#cpf_5").hide();
});

$("input[type=radio]").on("change", function () {
    if ($(this).val() == "pf") {
        $("#cpf_1,#cpf_2,#cpf_3,#cpf_4,#cpf_5").show();
        $("#cnpj_1,#cnpj_2,#cnpj_3,#cnpj_4,#cnpj_5,#cnpj_6,#cnpj_7,#cnpj_8,#cnpj_9").hide();
    } else if ($(this).val() == "pj") {
        $("#cnpj_1,#cnpj_2,#cnpj_3,#cnpj_4,#cnpj_5,#cnpj_6,#cnpj_7,#cnpj_8,#cnpj_9").show();
        $("#cpf_1,#cpf_2,#cpf_3,#cpf_4,#cpf_5").hide();
    }
});



function getCNPJ() {

    var cnpjObj = ({ "cnpj": $("#cnpj").val().replace(/[^\d]+/g, '') });

    var url = window.location;

    $.ajax({
        url: url.origin + '/buscar_cnpj',
        method: 'GET',
        data: { cnpj: cnpjObj.cnpj },
        // dataType: 'json',
        success: function (data) {
            dados = JSON.parse(data)
            $(document).ready(function () {
                $("input[name='razao_social']").val(dados['razao_social']);
                $("input[name='nome_fantasia']").val(dados['nome_fantasia']);
            })
        }
    });

}

function getCPF() {

    var cnpjObj = ({ "cnpj": $("#cnpj").val().replace(/[^\d]+/g, '') });

    var url = window.location;

    $.ajax({
        url: url.origin + '/buscar_cnpj',
        method: 'GET',
        data: { cnpj: cnpjObj.cnpj },
        dataType: 'json',
        success: function (data) {
            console.log(data)
        }
    });

}