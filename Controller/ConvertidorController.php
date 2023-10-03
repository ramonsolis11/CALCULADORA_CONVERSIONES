<?php
// ConvertidorController.php
// Clase para procesar los datos del formulario y realizar las conversiones

// Cargando las clases necesarias
require_once "../Controller/ConversionController.php";
require_once "../Model/longitudConvertir.php";
require_once "../Model/masaConvertir.php";
require_once "../Model/volumenConvertir.php";
require_once "../Model/datosConvertir.php";
require_once "../Model/tiempoConvertir.php";
require_once "../Model/monedaConvertir.php";

// Verificando la respuesta del Metodo usado en el form, obteniendo los valores del form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoria = $_POST['categoria'] ;
    $value = $_POST['value'] ;
    $uni = $_POST['uni'] ;
    $unf = $_POST['unf'] ;


    if (!empty($categoria) && !empty($value) && !empty($uni) && !empty($unf)) {
        // Crear el conversor adecuado en función de la categoría seleccionada
$convertir = null; // Inicializar la variable de conversión

switch ($categoria) {
    case 'longitud':
        $convertir = new LongitudConversion();
        break;
    case 'masa':
        $convertir = new masaConvertir();
        break;
    case 'volumen':
        $convertir = new volumenConvertir();
        break;
    case 'datos':
        $convertir = new datosConvertir();
        break;
    case 'tiempo':
        $convertir = new tiempoConvertir();
        break;
    case 'moneda':
        $convertir = new monedaConvertir();
        break;
    default:
        // Si la categoría no es válida, puedes manejarlo de alguna manera, por ejemplo, mostrar un mensaje de error
        echo "Categoría de unidad no válida";
        exit;
}

// Verificar si $convertir se inicializó correctamente antes de llamar al método conversion()
if ($convertir !== null) {
    // Convertir el valor
    $result = $convertir->conversion($value, $uni, $unf);
    // Mostrar el resultado
    // ...
} else {
    // Manejar el caso en el que $convertir no se inicializó correctamente
    echo "No se pudo inicializar el conversor.";
    exit;
}

?>

<html>  
    <div id="result">   
        <h2 class="fw-bold fs-3 text-center resut">RESULTADO:</h2>                    
        <h3 class="text-center fw-bold justify-content-center fs-3 resul" > <?php echo "{$value} {$uni}  es igual a {$result} {$unf}" ?></h3>
    </div>
</html>
<?php       
    }
}


?>


