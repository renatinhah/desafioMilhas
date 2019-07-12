<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Questão 1</title>
		<link rel="stylesheet" href="./style.css">
	</head>
	<body>
		<?php
			function baskhara ($a, $b, $c) {
			    if($a != 0){
			    	$delta = pow($b,2) - 4 * $a * $c;
                    if($delta < 0){
                        $raizes = "A equação " . $a . "x² + " . $b . "x + " . $c;
                        $raizes .= " não possui raízes reais";
                    } else {
                        $x1 = (-($b) + sqrt($delta))/(2*$a);
                        $x2 = (-($b) - sqrt($delta))/(2*$a);
                        $raizes = "Dada a equação " . $a . "x² + " . $b . "x + " . $c;
                        $raizes .= " <br>As raízes são X'= ". $x1 ." e X''= ".$x2;
                    }
			    } 
			    return $raizes;
			}
			$resultado = baskhara($_POST['a'], $_POST['b'], $_POST['c']);
		?>
		<section id="wp-solutions">
		  <div class="container">
		    <div class="wrapper">
		      <div class="row">
		        <div class="col-md-6 box-1">
				    <form class="sign-up" action="questao1.php" method="post">
					    <h2 class="sign-up-title">Insira os valores da equação de segundo grau</h2>
					    <input type="text" name="a" class="sign-up-input" placeholder="Valor de a" autofocus>
					    <input type="text" name="b" class="sign-up-input" placeholder="Valor de b" autofocus>
					    <input type="text" name="c" class="sign-up-input" placeholder="Valor de c" autofocus>
					    <input type="submit" value="Calcular" class="sign-up-button">
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