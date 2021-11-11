<!DOCTYPE html>
<html lang="en">

<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initialscale=1.0">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 
	 <title>Inicio</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
	 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
	 integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	 <link rel="stylesheet" href="css/style.css">
	 
	 <script src="https://code.jquery.com/jquery3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
	 crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
	 integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
	 integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	 
		<style>
		 .form-group {
			text-align: center;
		 }
		 select {
			width: 500px;
		 }
		</style>
</head>
<body>
	 <table class="table table-striped table-dark">
		 <thead>
			<tr>
				 <th scope="col">#ID</th>
				 <th scope="col">Nombre</th>
				 <th scope="col">Descripción</th>
				 <th scope="col">Precio</th>
			</tr>
		 </thead>
		 <tbody>
			<tr>
				 <th scope="row">1</th>
				 <td>Cyberpunk 2077</td>
				 <td>Acción / Aventura / RPG</td>
				 <td>43€</td>
			</tr>
			 <tr>
				 <th scope="row">2</th>
				 <td>Doom Eternal</td>
				 <td>Acción / Aventura / FPS</td>
				 <td>37€</td>
			 </tr>
			 <tr>
				 <th scope="row">3</th>
				 <td>Biomutant</td>
				 <td>Acción / Aventura / RPG</td>
				 <td>41€</td>
			 </tr>
			 <tr>
				 <th scope="row">4</th>
				 <td>Human: Fall Flat</td>
				 <td>Aventura / Simulación</td>
				 <td>3€</td>
			 </tr>
			 <tr>
				 <th scope="row">5</th>
				 <td>Monster Hunter: World</td>
				 <td>Acción / Cooperación / Multijugador</td>
				 <td>19€</td>
			 </tr>
			 <tr>
				 <th scope="row">6</th>
				 <td>No Man's Sky</td>
				 <td>Acción / Aventura / FPS</td>
				 <td>19€</td>
			 </tr>
			 <tr>
				 <th scope="row">7</th>
				 <td>The Elder Scrolls V: Skyrim</td>
				 <td>Acción / Aventura / RPG</td>
				 <td>13€</td>
			 </tr>
			 <tr>
				 <th scope="row">8</th>
				 <td>Civilization VI</td>
				 <td>Gestión / Simulación / Estrategia</td>
				 <td>10€</td>
			 </tr>
			 <tr>
				 <th scope="row">9</th>
				 <td>Planet Coaster</td>
				 <td>Acción / Aventura / Gestión</td>
				 <td>18€</td>
			 </tr>
			 <tr>
				 <th scope="row">10</th>
				 <td>Borderlands 2</td>
				 <td>Acción / RPG / Cooperación</td>
				 <td>5€</td>
			 </tr>
			 <tr>
				 <th scope="row">11</th>
				 <td>NieR: Automata</td>
				 <td>Acción / Aventura / RPG</td>
				 <td>15€</td>
			 </tr>
		 </tbody>
	 </table>
	 
	 <form action="carrito.php" method="POST">
		 <div class="form-group">
			 <h2><em>Selecciona un juego: (Se añadirá al carrito)<em></h2>
				 <select class="form-control" name="productos">
				 <option value="#1-43-Cyberpunk 2077">Cyberpunk 2077</option>
				 <option value="#2-37-Doom Eternal">Doom Eternal</option>
				 <option value="#3-41-Biomutant">Biomutant</option>
				 <option value="#4-3-Human Fall Flat">Human: Fall Flat</option>
				 <option value="#5-19-Monster Hunter World">Monster Hunter: World</option>
				 <option value="#6-19-No Man's Sky">No Man's Sky</option>
				 <option value="#7-13-The Elder Scrolls V Skyrim">The Elder Scrolls V: Skyrim</option>
				 <option value="#8-10-Civilization VI">Civilization VI</option>
				 <option value="#9-18-Planet Coaster">Planet Coaster</option>
				 <option value="#10-5-Borderlands 2">Borderlands 2</option>
				 <option value="#11-15-NieR Automata">NieR: Automata</option>
			 </select>
			 <br><br>
			 <h4><em>Cantidad:<em></h4>
			 <input type="number" class="formcontrol" name="cantidad" min="1" value="1">
			 <br>
			 <input type="submit" name="agregado" class="btn btn-dark">
		 </div>
	 </form>
	 </div>
</body>
</html>