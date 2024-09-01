<?php

namespace App\adms\Controllers\Services;

use App\adms\Helpers\ClearUrl;
use App\adms\Helpers\SlugController;

/**
 * Recebe a URL e manipula
 * 
 * @author Ueliton <uelitonn6@gmail.com>
 */
class PageController
{   
    
    //Receber a URL do .htaccess
    private string $url;
    private array $urlArray;
    private string $urlController = "";
    private string $urlMetodo;
    private string $urlParameter = "";

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

            // Chamar a classe generica Helper para limpar a URL
            $this->url = ClearUrl::clearUrl($this->url); //Resolucao de escopo de metodo estatico
            var_dump($this->url);

            $this->urlArray = explode("/", $this->url); // Converter a string da URL em Array
            var_dump($this->urlArray);

            // Verificar se existe a controller na URL
            if(isset($this->urlArray[0])) {
               // Chamar a classe helper para converter a controller enviada na URL para o formato da classe
               $this->urlController = SlugController::slugController($this->urlArray[0]);

            } else {
               $this->urlController = SlugController::slugController("Login");
            }

            // Verificar se existe o parametro na URL
            if(isset($this->urlArray[1])) {
               $this->urlParameter = $this->urlArray[1];
            } 

       } else {
            $this->urlController = "Login";
       }
       var_dump("urlController {$this->urlController}");
       var_dump("urlParameter {$this->urlParameter}");
    }
}