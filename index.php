<?php
use App\Clases\Facultad as Facultad;
include_once "includes/autoload.php";

include_once "App/vistas/layout/header.php";

 $request = $_SERVER["QUERY_STRING"];

 switch ($request) {
 	case 'bienvenido':
 	     include_once "App/vistas/bienvenido.php";
 	     break;
 	case 'crear-usuario':
 		 include_once "App/vistas/uCrear.php";
 		break;
    case 'crear-plan-estudio';
        include_once "App/vistas/planCrear.php";
 	    break;
 	case 'asignar-cursos';
        include_once "App/vistas/cursosAsignar.php";
		 break;
		 		 //post//
	/*case "Login":
		include_once "App/vistas/uLogin.php";
		break;
	case "guardar-usuario";
		include_once "App/vistas/uCrear.php";
		break;*/
 	default:
 		include_once "App/vistas/uLogin.php";
 		break;
 }

include_once "App/vistas/layout/footer.php";






