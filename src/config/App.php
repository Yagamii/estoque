<?php

  class App{

    //Onde sera armazenado o diretorio completo do site
    private static $app_path = "htdocs/estoque";

    public static function init(){
      //Recebe o diretório atual
      self::$app_path = dirname(dirname(__DIR__));

      session_start();

      self::defineConstants();
      self::includeMVC();

    }

    //Define as constantes q serão utilizadas no site, como Fuseaction e action
    private static function defineConstants(){

      define("Fuseaction", @$_GET['page']?$_GET['page']:"home");
      define("action", @$_GET['action']?$_GET['action']:"index");

    }

    //Faz a inclusão do MVC ao código
    private static function includeMVC(){

      $classes = [ "src/controller/DefaultController.php",
                  "src/model/DefaultModel.php",
                  "src/view/DefaultView.php",
                  "src/route/Dispatcher.php",
                  "src/model/QueryBuilder.php",
                  "src/view/MsgHandler.php"];

      //Requisição de cada arquivo padrão do MVC e outras funções
      foreach($classes as $class):
        require_once(self::$app_path."/".$class);
      endforeach;

      //Faz a requisição da controller e da view da pagina atual
      require_once(self::$app_path."/src/controller/".ucfirst(Fuseaction)."/".ucfirst(Fuseaction)."Controller.php");
      require_once(self::$app_path."/src/view/".ucfirst(Fuseaction)."/".ucfirst(Fuseaction)."View.php");
    }
    //função para efetuar conexão ao banco de dados por PDO
    public static function connectToDb(){

      $host = 'localhost';
      $db = 'estoque';
      $user = 'root';
      $pass = '';
      //$charset = 'utf8';

      $dsn = "mysql:host=$host;dbname=$db";

      $conexão = new PDO($dsn, $user, $pass);

      return $conexão;

    }

  }

 ?>
