function limpa_formulario_cep() {
    // Limpa valores do formulário de cep.
    $("#endereco").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#estado").val("");
    $("#ibge").val("");
}
document.addEventListener('DOMContentLoaded', function () {
    const cepInput = document.getElementById('cep');

    // Verifica se o elemento "cep" existe antes de adicionar o ouvinte de eventos
    if (cepInput) {
        // Aplicar a máscara de CEP usando a biblioteca inputmask
        $('#cep').inputmask('99999-999');

        cepInput.addEventListener('blur', function () {
            const cep = cepInput.value.replace(/\D/g, ''); // Remove caracteres não numéricos do CEP

            console.log(cep);

            if (cep.length === 8) {
                // Aqui você deve realizar a requisição à API que retorna os dados do CEP
                // Substitua a URL da API pelo endereço correto
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                    if (!("erro" in dados)) {
                        //                     //Atualiza os campos com os valores da consulta.
                        $("#endereco").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                    } else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulario_cep();
                        alert("CEP não encontrado.");
                    }
                });
            }
        });
    }
});
