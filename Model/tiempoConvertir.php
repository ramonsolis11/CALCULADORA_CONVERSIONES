<?php
//tiempoConvertir.php

require_once "../Controller/ConversionController.php";

/* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
*  Conversion de unidad de medida: Tiempo.
*/

class tiempoConvertir extends ConversionController
{
    public function conversion($value, $uni, $unf)
    {
        $unidades = [
            'Segundo' => 1,
            'Minuto' => 60,
            'Hora' => 3600,
            'Dia' => 86400,
            'Semana' => 604800,
            'Mes' => 2592000,
        ];

        if (!isset($unidades[$uni]) || !isset($unidades[$unf])) {
            throw new Exception('Unidades no válidas para la conversión de tiempo');
        }

        // Calcula el resultado de la conversión
        $conversionFactor = $unidades[$unf] / $unidades[$uni];
        $result = $value * $conversionFactor;

        return $result;
    }
}

?>
