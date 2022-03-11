$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                nome: {
                    required: true,
                    minlength: 3
                },
                telefone: {
                    required: true,
                    minlength: 15
                },
                email: {
                    required: true,
                    email: true
                },
                assunto: {
                    required: true,
                    minlength: 5
                },
                mensagem: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                nome: {
                    required: "vamos, você tem um nome, não é?",
                    minlength: "seu nome deve ter pelo menos 3 caracteres"
                },
                telefone: {
                    required: "vamos lá, você tem um número, não é?",
                    minlength: "seu número deve ter em pelo menos 9 caracteres"
                },
                email: {
                    required: "sem e-mail sem mensagem"
                },
                assunto: {
                    required: "hum ... sim, você tem que informar um assunto.",
                    minlength: "sem assunto, sem mensagem"
                },
                mensagem: {
                    required: "hum ... sim, você tem que escrever algo para enviar este formulário.",
                    minlength: "isso é tudo? Mesmo?"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"envia_email.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})