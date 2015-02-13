<?php

		$error="";
			if(!empty($nombre)){
					if(preg_match("/[0-9]+$/",$nombre )){
						$error.="-El nombre solo permite letras</br>";
						//echo "Error,el nombre solo permite letras</br>";
					}
						
			}else {
						$error.="-El campo nombre esta vacio</br>";
						//echo "Error, el campo nombre esta vacio </br>";
			}

			if(!empty($apellido)){
					if(preg_match("/[0-9]+$/",$apellido )){
						$error.="-El apellido solo permite letras</br>";
						//echo "Error,el nombre solo permite letras</br>";
					}
						
			}else {
						$error.="-El campo apellido esta vacio</br>";
						//echo "Error, el campo nombre esta vacio </br>";
			}


			if(!empty($edad)){
					if(preg_match("/[a-zA-Z]+$/",$edad )){
						$error.="-La edad solo permite numeros</br>";
					}
			}else {
						$error.="-El campo edad esta vacio</br>";
			}

        	if (!empty ($error)) {
				echo "Existen uno o varios errores</br>".$error;
				include "form.php";
			}
            else {
                include "form.php";
                    echo "<h5>Los datos se han salvado correctamente</h5>";
	                $insertar = "INSERT INTO datos (nombre, apellido, edad) 
                    VALUES ('".$_POST['nombre']."', '".$_POST['apellido']."', '".$_POST['edad']."')";
                    mysql_query($insertar,$conn);}

?>
