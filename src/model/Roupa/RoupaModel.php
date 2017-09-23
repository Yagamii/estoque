<?php

  class RoupaModel extends DefaultModel{


    function addRoupa($dados = array(), $campos = array()){

      $query = $this->query()->insert($campos, $dados)->execute();

      return $query;

    }

    function getRoupa(){

      $query = $this->query()->select()->all();

      return $query;

    }

    function getRoupaById($id){

      $query = $this->query()->select()->where(["id_roupa =" => $id])->all();

      return $query;

    }

    function updateRoupa($dados, $id){

      $query = $this->query()->update()->set($dados)->where(["roupa.id_roupa =" => $id])->execute();

    }

    function delRoupa($id){

      $query = $this->query()->delete()->where(["roupa.id_roupa =" => $id])->execute();

    }

  }

 ?>
