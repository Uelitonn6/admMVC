<?php

namespace App\adms\Helpers;

/**
 * Converter a controller enviada na URL para o formato da classe
 * 
 * @author Ueliton <uelitonn6@gmail.com>
 */
class SlugController
{
    public static function slugController(string $slugController) : string
    {
        // Converter para minusculo
        $slugController = strtolower($slugController);

        // Converter o traco para espaco em branco
        $slugController = str_replace("-", ' ', $slugController);

        //Converter a primeira letra de cada palavra para maisculo
        $slugController = ucwords($slugController);

        //Retirar espaco em branco
        $slugController = str_replace(" ", "", $slugController);

        //Retornar a controller convertida
        
        return $slugController;
    }
}