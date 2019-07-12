<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Questão 3</title>
		<link rel="stylesheet" href="./style.css">
	</head>
	<body>
		<?php

			function formataNumeros($number){
				return number_format($number, 2, '.', '');
			}

			function melhorPreco () {
				$str = "Melhor preço sem escalas R$ 1367(1)
						Melhor preço com escalas R$ 994 (1)

						1 - Incluindo todas as taxas.";
			    $regex = '/([\d]+[\.]?[\d]+)/';
			    preg_match_all($regex, $str, $matches);
			
				$array = array_map(formataNumeros, $matches[0]);;

			    return min($array);
			}
			$resultado = is_null($_POST["campo"]) ? "" : melhorPreco();

		?>
		<section id="wp-solutions">
		  <div class="container">
		    <div class="wrapper">
		      <div class="row">
		        <div class="col-md-6 box-1">
				    <form class="sign-up" action="questao3.php" method="post">
					    <h2 class="sign-up-title">Localize o melhor preço </h2>
					    <h3 class="string-entrada">"Melhor preço sem escalas R$ 1.367(1) <br>
												   Melhor preço com escalas R$ 994 (1) <br><br>

												   1 - Incluindo todas as taxas."
						</h3>
					    <input type="submit" value="Enviar string de exemplo" class="sign-up-button">
					    <input name="campo" type="hidden" id="campo">
					</form>
		        </div>
		        <div class="col-md-6 box-2">
		          <div class="raizes">
		          	<h2><?php echo $resultado?></h2>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		  </div>
		</section>
	</body>
</html>