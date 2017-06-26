
 <?php 
 
	include("Controllers/ItineraryManager.php");

	// Extraer segmento de la url
	if (isset($_GET['PATH_INFO']))
	    $peticion = explode('/', $_GET['PATH_INFO']);
	else
		echo "Error de Url";

	// Obtener recurso

	$recurso = array_shift($peticion);
	$recursos_existentes = array('itinerary', 'sections');

	// Comprobar si existe el recurso
	if (!in_array($recurso, $recursos_existentes)) {
	 // Respuesta error
		echo "Error en url";
	}

	$metodo = strtolower($_SERVER['REQUEST_METHOD']);

	switch ($metodo) {
	    case 'get':
	        // Procesar método get

	    	if($recurso == 'itinerary')
	    	{
	    		$itineraryManager = new ItineraryManager();

	    		$respuesta = $itineraryManager->getFullItinerary();
			
				echo $respuesta;
	    	}
	        break;
	    default:
	        // Método no aceptado
	}

 ?>
 