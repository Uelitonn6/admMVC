<?php

namespace App\adms\Controllers\Services;

/**
 * Recebe a URL e manipula
 * 
 * @author Ueliton <uelitonn6@gmail.com>
 */
class PageController
{   
    
    //Receber a URL do .htaccess
    private string $url;

    //Recebe a URL do .htaccess
    public function __construct()
    {
       echo 'Carregar a pagina <br><br>';

       // Verificar se vem valor na variavel url enviada pelo .htaccess
       if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) 
       {

            //Receber o valor da variavel url enviada pelo .htaccess
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

            echo "Acessando o endereco: {$this->url} <br><br>";
       } else {
            echo "Acessar a pagina principal.<br><br>";
       }
    }
}