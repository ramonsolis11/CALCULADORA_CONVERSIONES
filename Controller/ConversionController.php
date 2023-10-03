<?php
// ConversionController.php

// Clase abstracta para implementar los principios de Responsabilidad Única y Abierto/Cerrado
abstract class ConversionController {
    // Método abstracto para implementar en las clases hijas
    abstract public function conversion($value, $uni, $unf);
    // El método 'conversion' toma tres argumentos:
    // - $value: El valor que se desea convertir.
    // - $uni: La unidad de medida de entrada.
    // - $unf: La unidad de medida de salida.
    // Este método será implementado en las clases hijas para realizar la conversión.
}

?>
