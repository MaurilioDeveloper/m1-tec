$(document).ready(function () {
    


    $('form[name="form"]').submit(function () {
        jQuery(".alert-warning").hide();
        var dadosForm = jQuery(this).serialize();
        var form = jQuery(this);
        console.log(dadosForm);
        var botao = $(this).find(':button');

        //percorre todos os campos do formulario,e armazena o valor inserido no campo
        //via ajax nas determinadas variaveis
        $.ajax({
               url: 'login',
               type: "POST",
               data: dadosForm,
            beforeSend: function () {
                botao.attr('disabled', true).html('Aguarde Carregando...', true);
            },
            success: function (data) {
                console.log(data)
                botao.attr('disabled', false).html('Entrar');
                if (data == "1") {
                    form.fadeOut('fast', function () {
                        jQuery(".alert-success").show();
                        $('#load').fadeIn('slow');
                        setTimeout(function () {
                            window.location.href = 'painel/usuarios';
                        }, 3000);

                    });
                } else {
                        jQuery(".alert-warning").show().delay(2000).fadeOut();
                }



            }
        });


        //var botao = $(this).find(':button');
        //console.log($(this).serialize());

        return false;
    });
//FUNÇÕES GERAIS
    function msg(msg, tipo) {
        var retorno = $('.retorno');
        var tipo = (tipo === 'success') ? 'success' : (tipo === 'warning') ? 'warning' : (tipo === 'danger') ? 'danger' : (tipo === 'info') ? 'info' : alert('INFORME UMA MENSAGEM DE SUCESSO, ATENÇÃO, ERRO OU INFORMAÇÃO');
        retorno.empty().fadeOut('fast', function () {
            return $(this).html('<div class="alert alert-' + tipo + '">' + msg + '</div>').fadeIn('slow');

        });

        setTimeout(function () {
            retorno.fadeOut('slow').empty();
        }, 6000)
    }

});
