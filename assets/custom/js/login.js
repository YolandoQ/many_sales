$(function () {
    $.validator.setDefaults({
        submitHandler: function () {
            alert("Form successful submitted!");
        }
    });
    $('#form-login').validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            senha: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            email: {
                required: "Por favor, informe um e-mail para continuar",
                email: "Por favor, informe um e-mail válido para continuar"
            },
            senha: {
                required: "Por favor, informe uma senha",
                minlength: "Sua senha precisa conter no mínimo 5 caracteres"
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.input-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
