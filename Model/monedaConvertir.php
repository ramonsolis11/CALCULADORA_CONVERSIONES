<?php
//monedaConvertir.php

require_once "../Controller/ConversionController.php";

/**
 * Clase para la conversión de unidades de moneda.
 */
class monedaConvertir extends ConversionController
{
    /**
     * Tabla de conversiones de moneda.
     */

    public $conversionTable = [
        'Dolar (USD)' => [
            'Lempira (HNL)' => 24.75,
            'Euro (EUR)' => 0.91,
            'Franco (Suizo)' => 0.88,
            'Yen (JPY)' => 144.91,
            'Libra (GBP)' => 0.79,
        ],
        'Euro (EUR)' => [
            'Lempira (HNL)' => 24.75,
            'Dolar (USD)' => 1.10,
            'Franco (Suizo)' => 0.96,
            'Yen (JPY)' => 158.87,
            'Libra (GBP)' => 0.86,
        ],
        'Franco (Suizo)' => [
            'Lempira (HNL)' => 24.75,
            'Dolar (USD)' => 1.14,
            'Euro (EUR)' => 1.04,
            'Yen (JPY)' => 165.25,
            'Libra (GBP)' => 0.90,
        ],
        'Lempira (HNL)' => [
            'Dolar (USD)' => 0.00025,
            'Euro (EUR)' => 0.00023,
            'Franco (Suizo)' => 0.00022,
            'Yen (JPY)' => 0.037,
            'Libra (GBP)' => 0.0022,
        ],
        'Yen (JPY)' => [
            'Lempira (HNL)' => 24.75,
            'Dolar (USD)' => 0.0069,
            'Euro (EUR)' => 0.0063,
            'Franco (Suizo)' => 0.0061,
            'Libra (GBP)' => 0.0054,
        ],
        'Libra (GBP)' => [
            'Lempira (HNL)' => 24.75,
            'Dolar (USD)' => 1.27,
            'Euro (EUR)' => 1.16,
            'Franco (Suizo)' => 1.11,
            'Yen (JPY)' => 183.94,
        ],
    ];

    /**
     * Convierte una cantidad de una moneda a otra.
     *
     * @param float $value La cantidad a convertir.
     * @param string $uni La unidad de moneda de entrada.
     * @param string $unf La unidad de moneda de salida.
     * @return float|string El resultado de la conversión o un mensaje de error.
     */
    
    public function conversion($value, $uni, $unf)
    {
        if (isset($this->conversionTable[$uni][$unf])) {
            $conversionRate = $this->conversionTable[$uni][$unf];
            $result = $value * $conversionRate;
            return $result;
        } else {
            return "Unidades de moneda no válidas.";
        }
    }
}

?>