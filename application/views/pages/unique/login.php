<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ManySales | Login</title>
  <!-- Required styles -->
  <?php $this->load->view("partials/styles") ?>

  <style>
    body {
			background-image: url('<?=base_url()?>assets/custom/img/background-login.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
  </style>
</head>

<!-- Required scripts -->
<?php $this->load->view("partials/scripts") ?>

<body class="hold-transition login-page dark-mode">
  <div class="login-box" style="opacity:0.9">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Many</b>Sales</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Realize o login para iniciar sua sessão</p>

        <form action="" method="post" id="form-login" novalidate="novalidate">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="E-mail" name="email">
            <span></span>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Senha" name="senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <!-- /.social-auth-links -->

        <p class="mb-1 mt-2">
          <a href="register.html" class="text-center">Cadastre-se</a>
        </p>
        <p class="mb-0">
          <a href="forgot-password.html">Esqueci minha senha</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <script>

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

  </script>

</body>

</html>