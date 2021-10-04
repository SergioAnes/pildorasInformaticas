<!DOCTYPE html>
<html>
<head>
	<title>
		Probando Píldoras
	</title>
</head>
<body>



	<p> Introduce los numeros y obten el resultado de la multiplicacion </p>

	<form name="formulario" method="post" action=""> 


		<p>
			
			<label for ="numeroUno"> Introduce el primer numero:  </label>
			<input type="text" name="numeroUno" id="numeroUno">
			<label for ="numeroDos"> Introduce el segundo numero:  </label>
			<input type="text" name="numeroDos" id="numeroDos">
			<label for="operacion"> Selecciona la operacion a realizar </label>

			<select name="operacion" id="operacion"> 
				<option> Suma </option>
				<option> Resta </option>
				<option> Divide </option>
				<option> Multiplica </option>
				<option> Modulo </option>

			</select>


		</p>
		<p>
			<input type="submit" name="boton" id="boton" value="Enviar" onClick="prueba">
		</p>
	</form>

<?php 


	if(isset($_POST["boton"])) {

		$numero1=$_POST["numeroUno"];
		$numero2=$_POST["numeroDos"];
		$operacion=$_POST["operacion"];


		switch ($operacion) {
    case "Suma":
        echo $numero1+$numero2;
        break;
    case "Resta":
         echo $numero1-$numero2;
        break;
    case "Divide":
        echo $numero1/$numero2;
        break;
     case "Multiplica":
        echo $numero1*$numero2;
        break;   
      case "Modulo":
        echo $numero1%$numero2;
        break;   

}





	}




 ?>



</body>
</html>