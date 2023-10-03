<?php
//datosConvertir.php

/* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
*  Conversion de unidad de medida: Datos.
*/

require_once "../Controller/ConversionController.php";



class UnidadesNoValidasException extends Exception {
    public function __construct($message = "Unidades no válidas para la conversión de datos", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

class datosConvertir extends ConversionController {
    /**
     * Convierte unidades de datos de una unidad a otra.
     *
     * @param float $value El valor a convertir.
     * @param string $uni La unidad de entrada.
     * @param string $unf La unidad de salida.
     * @return float El valor convertido.
     * @throws UnidadesNoValidasException Si las unidades proporcionadas no son válidas.
     */

    public function conversion($value, $uni, $unf) {
        $unidades = [
            'Bit' => 1,
            'Bytes' => 8,
            'Kilobytes (KB)' => 8 * 1024,
            'Megabytes (MB)' => 8 * 1024 * 1024,
            'Gigabytes (GB)' => 8 * 1024 * 1024 * 1024,
            'Terabytes (TB)' => 8 * 1024 * 1024 * 1024 * 1024
        ];

        if (!isset($unidades[$uni]) || !isset($unidades[$unf])) {
            throw new UnidadesNoValidasException();
        }

        $conver = $unidades[$unf] / $unidades[$uni];
        $result = $value * $conver;

        return $result;
    }
}

?>