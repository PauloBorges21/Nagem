var path = 'http://localhost/nagem/'
$(document).ready(function () {


    $("#btnCliente").prop("disabled", true);
    if ($('#telefoneContato').length) {
        $('#telefoneContato').mask('(00) 0000-0000');
    }
    if ($("#cnpj").length) {
        $("#cnpj").on("blur", async function () {
            limpaCampos();
            var input = $(this);

            var cpfCnpjValue = input.val().replace(/\D/g, '');
            console.log(cpfCnpjValue.length);
            if (cpfCnpjValue.length > 13) {

                result = await verificaCnpj(cpfCnpjValue, path);
                console.log(result);
                if (!result) {
                    $("#addC").css("display", "block");
                    $("#btnCliente").prop("disabled", false);
                } else {
                    $("#addC").css("display", "none");
                    alert('CNPJ já cadastrado')
                    $("#btnCliente").prop("disabled", true);
                }
            } else {
                alert('digite todos os numeros do cnpj')
                $("#addC").css("display", "none");
                $("#btnCliente").prop("disabled", true);
            }
        });
    }

    if ($("#cpfContato").length) {
        $("#cpfContato").on("blur", async function () {
            var input = $(this);
            var cpfValue = input.val().replace(/\D/g, '');
            console.log(cpfValue.length);
            if (cpfValue.length > 10) {
                result = await verificaCpf(cpfValue, path);
                if (!result) {
                    $("#addCont").css("display", "block");
                    $("#btnContato").prop("disabled", false);
                } else {
                    $("#addCont").css("display", "none");
                    alert('CPF já cadastrado')
                    $("#btnContato").prop("disabled", true);
                }
            } else {
                alert('digite todos os numeros do cpf')
                $("#addC").css("display", "none");
                $("#btnContato").prop("disabled", true);
            }
        });
    }

    if ($("#emailContato").length) {
        $("#emailContato").on("blur", async function () {
            var input = $(this);
            // Expressão regular para validar o formato de e-mail
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            console.log(input.val());
            if (emailPattern.test(input.val())) {
                result = await verificaEmail(input.val(), path);
                if (!result) {
                    $("#addCont").css("display", "block");
                    $("#btnContato").prop("disabled", false);
                } else {
                    $("#addCont").css("display", "none");
                    alert('Email já cadastrado')
                    $("#btnContato").prop("disabled", true);
                }
            } else {
                alert('digite um email válido')
                $("#addC").css("display", "none");
                $("#btnContato").prop("disabled", true);
            }
        });
    }
});

function limpaCampos() {
    $("input[type='text']").each(function () {
        // Verifica se o campo não é o campo de CNPJ nem o campo de CPF
        if ($(this).attr("id") !== "cnpj") {
            // Limpa o valor do campo
            $(this).val("").prop("disabled", false);
        }
    });
}

$("#formC").submit(async function (event) {
    event.preventDefault(); // Impede o envio padrão do formulário
    var email = $("#emailContato").val();
    var cpfValue = $("#cpfContato").val();
    resultC = await verificaCpf(cpfValue, path);
    resultE = await verificaEmail(email, path); // Correção aqui, passando o email
    if (resultC) {
        // CPF já utilizado
        alert("CPF já Utilizado: " + cpfValue);
    } else if (resultE) {
        // E-mail já utilizado
        alert("E-mail já Utilizado: " + email);
    } else {
        // Nenhum CPF ou E-mail encontrado, você pode prosseguir com o envio do formulário
        $("#formC").unbind('submit').submit();
    }
});



async function verificaCnpj(cnpj, path) {

    return await $.ajax({
        url: path + '/ajax-verifica-cnpj.php',
        method: 'POST',
        data: {cnpj: cnpj},
        dataType: 'JSON',
        success: function (response) {
            if (response.length > 0) {
                console.log(response);
            }
        },
    });
}

async function verificaCpf(cpf, path) {
    // Verificar a URL para pegar o ID CLIENTE
    var url = window.location.href;
// Analisa a URL em busca de parâmetros
    var urlParams = new URLSearchParams(url.split('?')[1]);
// Obtém o valor da variável "proc"
    var proc = urlParams.get('proc');
    //FINAL
    return await $.ajax({
        url: path + '/ajax-verifica-cpf.php',
        method: 'POST',
        data: {
            cpf: cpf,
            proc: proc,
        },
        dataType: 'JSON',
        success: function (response) {
            if (response.length > 0) {
                console.log(response);
            }
        },
    });
}

async function verificaEmail(email, path) {
    return await $.ajax({
        url: path + '/ajax-verifica-email.php',
        method: 'POST',
        data: {email: email},
        dataType: 'JSON',
        success: function (response) {
            if (response.length > 0) {
                console.log(response);
            }
        },
    });
}

//datatables
document.addEventListener('DOMContentLoaded', function () {
    $('.listagem-tabela').DataTable({
        order: [[1, 'desc']], // Índice 1 representa a coluna "Data Cadastro"; "desc" para ordem decrescente
        lengthChange: false,
        info: false,
        language: {
            search: 'Pesquisar:',
            searchPlaceholder: 'Digite o termo de pesquisa...',
            paginate: {
                previous: 'Anterior',
                next: 'Próximo',
            },
        },
    });
});