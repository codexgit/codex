<?php

function div_error($mensaje){
	if ($mensaje == ""){
		echo "alert-danger display-hide";
	}
	else if ($mensaje == 1){
		echo "alert-success display";
	}
	else{
		echo "alert-danger display";
	}
}

function mostrar_error($mensaje){
	if ($mensaje == ""){
		echo "Debe ingresar un usuario y clave";
	}
	else if ($mensaje == 1){
		echo "La sesión ha sido cerrada";
	}
	else{
		echo $mensaje;
	}
}

function sesion_analista(){
    if (isset($_SESSION['perfil']) && isset($_SESSION['usuario'])){
        $perfil = $_SESSION['perfil'];
        if ($perfil != 2){
            $_SESSION["error"] = "No tiene los privilegios necesarios";
            header('Location: http://sibtra.puertoespconsultores.cl/');
            //header('Location: http://localhost:8080/');
        }
    }
    else if (isset($_COOKIE['perfilC']) && isset($_COOKIE['usuarioC'])){
    	$_SESSION['perfil'] = $_COOKIE['perfilC'];
    	$_SESSION['usuario'] = $_COOKIE['usuarioC'];
        $perfil = $_SESSION['perfil'];
        if ($perfil != 2){
            $_SESSION["error"] = "No tiene los privilegios necesarios";
            header('Location: http://sibtra.puertoespconsultores.cl/');
            //header('Location: http://localhost:8080/');
        }
    }
    else{
        $_SESSION["error"] = "Debe poseer usuario y clave para acceder al sistema";
        header('Location: http://sibtra.puertoespconsultores.cl/');
        //header('Location: http://localhost:8080/');
    }
}
