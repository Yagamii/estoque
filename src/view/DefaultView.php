<?php

  class DefaultView{
    //Define o arquivo do layout a ser carregado
    public $layout = "layout";

    //Utiliza do buffer para chamar o layout e ler as variaveis contidas nele
    public function render($file, $vars){
      //importa os valores de uma array para variaveis
      extract($vars);
      //Inicia o buffer
      ob_start();
      //Chama o arquivo de pagina a ser renderizado
      include($file);
      //Recebe os dados q foram chamados dentro do buffer
      $renderedHTML = ob_get_contents();
      //encerra e limpa o buffer
      ob_end_clean();

      return $renderedHTML;

    }
    //Recebe o nome do layout
    public function getLayout(){

      return $this->layout;

    }

  }

 ?>
