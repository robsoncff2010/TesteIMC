<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Robson Camilo">
    <title>Calcular IMC</title>

  <link href="css/bootstrap.css" rel="stylesheet">
  <script type = "text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type = "text/javascript" src="Js/jquery.mask.min.js"></script>
  <script type = "text/javascript" src="Js/calcula.js"></script>
  
  <script type = "text/javascript">	 
  $(document).ready(function(){   
  	$("#idade").mask("000");
  	$("#altura").mask("0.00");
  	$("#peso").mask("000"); 
  })	 
  </script>
  
  </head>	
	  <body class = "body_principal">
	    <form id = "envia_dados_imc">

			<div class = "controle_bloco_principal">
				<div class = "bloco_principal">	
						
					<div class="titulos_input2">
						<label class="label_titulo_principal">Calculadora de IMC</label>
					</div>

					<div class="titulos_input">	
						<label class="label_titulo"></label>
					</div>

					<div class="titulos_input">				
						<label class="label_titulo"></label>
					</div>

					<div class="titulos_input">				
						<label class="label_titulo">Sexo</label>
					</div>

					<div class="box_mulher_homem">

						<input type="radio"
							name="genero"
							id="mulher"
							value="M">	

						<label for="mulher"
							class="label_radio">Mulher</label>

						<input type="radio"
							name="genero"
							id="homem"	
							Value="H">

						<label for="homem"
								class="label_radio">Homem</label>							
					</div>

					<div class="titulos_input">	
						<label class="label_titulo"></label>
					</div>
					
					<div class="titulos_input">				
						<label class="label_titulo">Idade</label>
					</div>

					<div class="campo_idade">

						<input name="idade"
							type = "text"
							id="idade"
							autocomplete="off"						   
							placeholder="exemplo... 38" required autofocus>

						<label for="inputidade"
							class="label">Anos</label>
					</div>
					
					<div class="titulos_input">		
						<label class="label_titulo">Altura</label>
					</div>

					<div class="campo_idade">

						<input name="altura"
							type = "text"
							id="altura"
							autocomplete="off"
							placeholder="exemplo... 1,75" required autofocus>						   

						<label for="inputidade"
							class="label">Cm</label>
					</div>

					<div class="titulos_input">	
						<label class="label_titulo">Peso</label>
					</div>

					<div class="campo_idade">

						<input name="peso"
							type = "text"
							id="peso"
							autocomplete="off"
							placeholder="exemplo... 78" required autofocus>

						<label for="inputidade"
							class="label">Kg</label>
					</div>	

					<div class="titulos_input">	
						<label class="label_titulo"></label>
					</div>

					<div class="titulos_input">				
						<label class="label_titulo">Atividade Física</label>
					</div>

					<div class="box_mulher_homem">

						<input type="radio"
							name="atividade_fisica"
							id="sedentaria"
							value="SED">	

						<label for="sedentaria"
							class="label_radio">Sedentária</label>

						<input type="radio"
							name="atividade_fisica"
							id="moderada"	
							Value="MOD">

						<label for="moderada"
								class="label_radio">Moderada</label>	
								
						<input type="radio"
							name="atividade_fisica"
							id="intensa"	
							Value="INT">

						<label for="intensa"
								class="label_radio">Intensa</label>
					</div>	
					
					<div class="titulos_input">		
						<label class="label_titulo"></label>
					</div>

					<div class="campo_calcular">
											
							<button type = "submit" 
									class="botao_calcular" 
									id = "botao_calcular" 
									form = "envia_dados_imc" >Calcular</button>  <!-- botao_logar referencia -->						
					</div>

					<p class="registro">&copy;Robson Camilo</p>
				</div>

				<div class = "bloco_resultadoH">	

					<div class="titulos_input2">
						<label class="label_titulo_principal">Resultado IMC</label>
					</div>

					<div class="titulo_tabela_resultado">	
						<label class="label_CIP">Classificação</label>
						<label class="label_CIP">IMC</label>
						<label class="label_CIP">Peso</label>
					</div>

					<div class="magreza">	
						<label class="label_magreza">Magreza</label>
						<label class="label_magreza">0 a 18.5</label>
						<label class="label_magreza">0 a 56.7 Kg</label>
					</div>

					<div class="normal">	
						<label class="label_normal">Normal</label>
						<label class="label_normal">18.5 a 24.9</label>
						<label class="label_normal">56.7 a 76.3 Kg</label>
					</div>

					<div class="sobrepeso">	
						<label class="label_sobrepeso">Sobrepeso</label>
						<label class="label_sobrepeso">25 a 30</label>
						<label class="label_sobrepeso">76.3 a 91.9 Kg</label>
					</div>

					<div class="obesidade">	
						<label class="label_obesidade">Obesidade</label>
						<label class="label_obesidade">Acima de 30</label>
						<label class="label_obesidade">Acima de 91.9 Kg</label>
					</div>

					<div class="resultado_bloco_resultado">	
						<label class="valor_bloco_resultado"></label>
					</div>
					
					<div class="resultado_bloco_resultado2">	
						<label class="texto_bloco_resultado">Seu IMC é de risco (Consultar o Médico)</label>
					</div>
				</div>

				<div class = "bloco_resultadoM">	

					<div class="titulos_input2">
						<label class="label_titulo_principal">Resultado IMC</label>
					</div>

					<div class="titulo_tabela_resultado">	
						<label class="label_CIP">Classificação</label>
						<label class="label_CIP">IMC</label>
						<label class="label_CIP">Peso</label>
					</div>

					<div class="magreza">	
						<label class="label_magreza">Magreza</label>
						<label class="label_magreza">0 a 18.5</label>
						<label class="label_magreza">0 a 41.6 Kg</label>
					</div>

					<div class="normal">	
						<label class="label_normal">Normal</label>
						<label class="label_normal">18.5 a 24.9</label>
						<label class="label_normal">41.6 a 56 Kg</label>
					</div>

					<div class="sobrepeso">	
						<label class="label_sobrepeso">Sobrepeso</label>
						<label class="label_sobrepeso">24.9 a 30</label>
						<label class="label_sobrepeso">56 a 67.5 Kg</label>
					</div>

					<div class="obesidade">	
						<label class="label_obesidade">Obesidade</label>
						<label class="label_obesidade">Acima de 30</label>
						<label class="label_obesidade">Acima de 67.5 Kg</label>
					</div>

					<div class="resultado_bloco_resultado">	
						<label class="valor_bloco_resultado"></label>
					</div>
					
					<div class="resultado_bloco_resultado2">	
						<label class="texto_bloco_resultado">Seu IMC é de risco (Consultar o Médico)</label>
					</div>
				</div>
			</div>	
		</form>
	</body>
</html>

