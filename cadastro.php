
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Zap Grafica</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">    
    <link href="css/bootstrap2.css" rel="stylesheet">

  </head>
    <body class="bg-light">

      <div class="preloader">
					<div class="lds-ripple">
							<div class="lds-pos"></div>
							<div class="lds-pos"></div>
					</div>
			</div>

      <form id = "teste_cadastro" class="container">
        <div class="container">
          <div class="py-5 text-center">
          <h2>Novo Cadastro</h2>
          <p class="lead">Preencha os dados para realizar o seu cadastro</p>
        </div>
      
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Dados Completos</h4>

          <div class = "teste">

            <div class="mb-3">
              <label for="nome">Nome Completo</label>
              <input class="form-control" id="nome" placeholder="Nome Completo" required autofocus>            
            </div>          

            <div class="mb-3">
              <label for="email">Email</label>
              <input class="form-control" id="email" placeholder="zapgrafica@exemplo.com.br" required>          
            </div>

            <div class="mb-3">
              <label for="senha">Senha</label>
              <input type="password" class="form-control" id="senha" placeholder="Digite sua Senha" required>          
            </div>    
                    
            <hr class="mb-4">
            <button type = "submit" class="btn btn-primary btn-lg btn-block" id = "botao_cadastro" form = "teste_cadastro">Finalizar cadastro</button>

            <input type = "hidden" id="loginCadastro" value = "1">            
          
          </div>      
        </div>
      </form>      
    </body>

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="login.js"></script>

</html>
