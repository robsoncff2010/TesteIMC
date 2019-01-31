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

	  <body>

	    <form id = "teste_logar" class="form-signin">

				<div class="text-center mb-4">
					<img class="mb-4" src="imagem/zap.png" alt="" width="190" height="75">
					<h1 class="h3 mb-3 font-weight-normal">Zap Grafica</h1>
					<p>A Grafica da Grafica - Sua Grafica Online</p>
				</div>

			<div class = "teste_logar1">

				<div class="form-label-group">
					<input name = "email" class="form-control" id="email" placeholder="zapgrafica@exemplo.com.br" required autofocus>
						<label for="inputEmail">Digite seu e-mail</label>
				</div>

				<div class="form-label-group">
					<input name = "senha" type="password" id="senha" class="form-control" placeholder="Digite sua senha" required>
					<label for="inputPassword">Digite sua senha</label>
				</div>

				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Lembrar meu e-mail
					</label>
				</div>

				<input type = "hidden" id="loginCadastro" value = "0">  

				<div class="text-center mb-4">
					<p>Não tenho cadastro,<a href="cadastro.php"> clique aqui!</a> </p>
				</div>
				
						<button type = "submit" class="btn btn-lg btn-primary btn-block" id = "botao_logar" form = "teste_logar" >Entrar</button>
					
					<p class="mt-5 mb-3 text-muted text-center">&copy;Robson Camilo</p>
				</div>
		</form>
	</body>

	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="login.js"></script>

</html>

