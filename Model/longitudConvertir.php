<?php
//longitudConvertir.php

/* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
*  Conversion de unidad de medida: Longitud.
*/

// Cargando las clases necesarias
require_once "../Controller/ConversionController.php";


class LongitudConversion extends ConversionController {
    /**
     * Convierte unidades de longitud de una unidad a otra.
     *
     * @param float $value El valor a convertir.
     * @param string $uni La unidad de entrada.
     * @param string $unf La unidad de salida.
     * @return float El valor convertido redondeado a 2 decimales.
     * @throws UnidadesNoValidasException Si las unidades proporcionadas no son válidas.
     */
    
    public function conversion($value, $uni, $unf) {
        // Tabla de conversión de unidades de longitud
        $tablaConversion = [
            "Metro (m)" => 1,
            "Decimetro (dm)" => 0.1, 
            "Centimetro (cm)" => 0.01,
            "Milimetro (mm)" => 0.001, 
            "Decametro (dam)" => 10,
            "Hectometro (hm)" => 100,
            "Kilometro (km)" => 1000, 
            "Pulgada (plg)" => 0.0254,
        ];
        
        // Verificar si las unidades proporcionadas son válidas
        if (!isset($tablaConversion[$uni]) || !isset($tablaConversion[$unf])) {
                throw new InvalidArgumentException("Unidades proporcionadas no válidas.");
            }
            
            // Realiza la conversión utilizando la tabla
            $valueEnMetros = $value * $tablaConversion[$uni];
            $result = $valueEnMetros / $tablaConversion[$unf];
    
            return $result;
    }
}

?>