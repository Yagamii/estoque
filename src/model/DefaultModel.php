<?php
  //Responsavel pela administração de dados q são passados ou recebidos para o banco de dados
  class DefaultModel{

    public $connection = NULL;
    public $table = false;

    public function __construct(){
      //Passa para variavel da classe a conexão com o banco de dados
      $this->connection = App::connectToDb();

      if(!$this->table):
        $className = get_class($this);

        $table = preg_replace("/Model$/","",$className);

        $this->table = strtolower(substr(preg_replace("/([A-Z])/", "_$1", $table), 1));
      endif;

    }

    public function query(){

      return new QueryBuilder($this->connection, $this->table);

    }
  }

 ?>
