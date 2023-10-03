<?php
//masaConvertir.php

/* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
*  Conversion de unidad de medida: Masa.
*/

require_once "../Controller/ConversionController.php";

class masaConvertir extends ConversionController {
    /**
     * Convierte unidades de masa de una unidad a otra.
     *
     * @param float $value El valor a convertir.
     * @param string $uni La unidad de entrada.
     * @param string $unf La unidad de salida.
     * @return float El valor convertido redondeado a 4 decimales.
     * @throws UnidadesNoValidasException Si las unidades proporcionadas no son válidas.
     */
    
    public function conversion($value, $uni, $unf) {
        $factoresConversion = [
            'Gramo (g)' => 1,
            'Kilogramo (kg)' => 1000,
            'Libra (lb)' => 453.59237,
            'Tonelada (Ton)' => 1000000,
            'Onza (oz)' => 28.349523125,
        ];

        if (!isset($factoresConversion[$uni]) || !isset($factoresConversion[$unf])) {
            throw new UnidadesNoValidasException("Unidades '$uni' y '$unf' no válidas para la conversión de masa.");
        }

        $factorUni = $factoresConversion[$uni];
        $factorUnf = $factoresConversion[$unf];

        $result = ($value * $factorUni) / $factorUnf;

        return round($result, 4);
    }
}

?>

