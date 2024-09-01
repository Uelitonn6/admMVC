<?php

namespace App\adms\Helpers;

/**
 * Limpar URL
 * 
 * @author Ueliton <uelitonn6@gmail.com>
 */
class ClearUrl 
{
    /**
     * Limpar a URL, eliminando TAG, os espacos em branco, 
     * retirar a barra no final da URL e retirar os 
     * caracteres especiais
     * 
     * @return string
     */

     public static function clearUrl(string $url) : string
     {

        //Eliminar a barra no final da URL
        $url = rtrim($url, "/");

        //Arrays de caracteres nao aceitos
        $unaccepted_characters = [
            'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'ü', 'Ý', 'Þ', 'ß',
            'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ý', 'ý', 'þ', 'ÿ', 
            '"', "'", '!', '@', '#', '$', '%', '&', '*', '(', ')', '_', '+', '=', '{', '[', '}', ']', '?', ';', ':', '.', ',', '\\', '\'', '<', '>', '°', 'º', 'ª', ' '
        ];

        // Arrays de caracteres aceitos
        $accepted_characters = [
            'a', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'd', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'u', 'y', 'b', 's',
            'a', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'd', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'y', 'y', 'y',
            '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''
        ];

        //Substituir os caracteres nao aceitos pelos caracteres aceitos
        return str_replace(mb_convert_encoding($unaccepted_characters, 'ISO-8859-1', 'UTF-8'), 
        $accepted_characters, mb_convert_encoding($url, 'ISO-8859-1', 'UTF-8'));
     }
}