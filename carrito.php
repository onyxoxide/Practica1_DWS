<?php
session_start();
//Cuando enviemos el producto deseado, guardaremos los valores en unas variables.
if (isset($_POST['agregado'])) {
	$producto = $_POST['productos'];
	$cantidad = $_POST['cantidad'];
}
if (isset($_POST['agregado'])) {
 //En caso de que exista la sesión carrito, guardaremos los valores en un array.
	if (isset($_SESSION['carrito'])) {
	$carritoJuegos = explode(':', $_SESSION['carrito']);
	$existe = false;
	
	//Realizamos un bucle que acabará cuando hayamos recorrido el carrito.
		for ($i = 0; $i < count($carritoJuegos) && $existe == false; $i++) {
			
	//Comprobamos que el valor del carrito en la posición $i es igual al nombre del producto.
			$existe = comprobar(getProducto($carritoJuegos[$i]), getProducto($producto));
			
	//En caso de que sean iguales, guardaremos en el carrito los valores de dicho producto.
			if ($existe == true) {
				$carritoJuegos[$i] = getId($carritoJuegos[$i]) . '-' . 
				getPrecio($carritoJuegos[$i]) . '-' . getProducto($carritoJuegos[$i]) . 
				'-' . editCantidad($carritoJuegos[$i], $cantidad);
				$existe = true;
			}
		}
		//Del mismo modo, almacenaremos los valores guardados en el carrito dentro de una sesión.
		if ($existe == true) {
			for ($i = 0; $i < count($carritoJuegos); $i++) {
				//Primera posición.
				if ($i == 0) {
					$_SESSION['carrito'] = $carritoJuegos[$i];
				} else {
					$_SESSION['carrito'] .= ':' . $carritoJuegos[$i];
				}
			}
			$existe = false;
		} else {
			
		//Establecemos la variable $producto y $cantidad en la sesiónde carrito.
		$_SESSION['carrito'] .= ':' . $producto . '-' . $cantidad;
		}
	} else {
		//Creamos la sesión carrito.
		$_SESSION['carrito'] = $producto . '-' . $cantidad;
	}
}

		//Realización de funciones que se utilizarán, devolviendo valores concretos de un array.
	function getId($array) {
		$info = explode('-', $array);
		return $info[0];
	}
	function getPrecio($array) {
		$info = explode('-', $array);
		return $info[1];
	}
	function getProducto($array) {
		$info = explode('-', $array);
		return $info[2];
	}
	function editCantidad($valor1, $valor2) {
		$info = explode('-', $valor1);
		return ($info[3] + $valor2);
	}
	function comprobar($valor1, $valor2) {
		$existe = false;
		if ($valor1 == $valor2) {
			$existe = true;
		}
		return $existe;
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initialscale=1.0">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <title>Document</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boots
trap/4.1.3/css/bootstrap.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/
umd/popper.min.js" integrity="sha384-
ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bo
otstrap.min.js" integrity="sha384-
ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
crossorigin="anonymous"></script>


	<style>
		div {
			text-align: center; 
		}
		hr {
			border: 1px solid magenta;
		}
	</style>
</head>

<body>

	 <div class='card-header'>
		<h1>Carrito de Compra</h1>
	 </div>
	 <div class='card-body card-text'>
		<table class='table table-striped table-dark'>
			<thead class='thead-dark'>
				 <tr>
					 <th>ID</th>
					 <th>Producto</th>
					 <th>Precio</th>
					 <th>Cantidad</th>
					 <th>Total</th>
				 </tr>
			 </thead>
			 
			<hr>
			
	 <?php
	 if (isset($_SESSION['carrito'])) {
		$carritoJuegos = explode(':', $_SESSION['carrito']);
		for ($i = 0; $i < count($carritoJuegos); $i++) {
			$info = explode('-', $carritoJuegos[$i]);
			if ($i == 0) {	
				//Primer valor que obtendremos.
				$_SESSION['total'] = ($info[1] * $info[3]);
			} else {
				//Sumaremos a ella misma la sesión. 
				$_SESSION['total'] += ($info[1] * $info[3]);
			}
			 echo "<tr>";
			 echo "<td>" . $info[0] . "</td>";
			 echo "<td>" . $info[2] . "</td>";
			 echo "<td>" . $info[1] . "€</td>";
			 echo "<td>" . $info[3] . "</td>";
			 echo "<td>" . ($info[1] * $info[3]) . "€</td>";
			 echo "</tr>"; 
			}
		}
		?>
	 </table>
	 
	 </hr>
	 
	 </div>
	<div class='card-footer'>
		<?php
		if (isset($_SESSION['carrito'])) {
			echo '<h3><em>' . 'Total: ' . $_SESSION['total'] . '€' . '</em></h3>';
		}
		?>
	 <br><br>
	 
	 <a href='inicio.php' class='btn btn-dark'>Seguir comprando</a>
	 <a href='pedidos.php' class='btn btn-dark'>Realizar pedido</a>
	</div>
</body>
</html>

