<?php
//volumenConvertir.php

// Cargando las clases necesarias
require_once "../Controller/ConversionController.php";

/* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
*  VolumenConvertir de unidad de medida: Volumen.
*/

class volumenConvertir extends ConversionController
{
    public function conversion($value, $uni, $unf)
    {
        $unidades = [
            'Galon (gal)' => 3.78541,
            'Litro (l)' => 1,
            'Mililitro (ml)' => 0.001,
            'Metro Cubico (m3)' => 1000,
            'Pie Cubico (ft3)' => 28.3168
        ];

        if (!isset($unidades[$uni]) || !isset($unidades[$unf])) {
            throw new Exception('Unidades no válidas para la conversión de volumen');
        }

        // Realizar la conversión
        $result = $value * ($unidades[$unf] / $unidades[$uni]);

        return $result;
    }
}

?>