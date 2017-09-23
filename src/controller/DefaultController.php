<?php

    class DefaultController{
      //Armazena nome de models especificas que serão carregadas
      public $loadModels = [];
      //Armazena variaveis do template
      public $template_vars = [];
      public $template_name = NULL;

      public function __construct(){

        $this->DefaultModel = new DefaultModel();
        //Verifica se o q esta contido é uma array
        if(is_array($this->loadModels)):
          //Repete o loop pra cada nome contido na array
          foreach($this->loadModels as $modelName):
            //Remove o nome Model da model carregada, caso tenha
            $className = preg_replace("/Model$/", "", $modelName);
            include("src/model/".$className."/".$className."Model.php");
            //Instancia a model desejada
            $this->{$modelName} = new $modelName();

          endforeach;

        endif;

      }

      //define variaveis q serão utilizadas no template
      public function set($var, $value){

        $this->template_vars[$var] = $value;

      }

      //Recupera variaveis do template
      public function getTemplateVars(){
        return $this->template_vars;
      }

    }

 ?>
