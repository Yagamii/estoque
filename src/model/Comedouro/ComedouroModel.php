<?php

  class ComedouroModel extends DefaultModel{

    function getComedouros(){

      $query = $this->query()->select()->all();

      return $query;

    }

    function addComedouro($campos = array(), $dados = array()){

      $query = $this->query()->insert($campos, $dados)->execute();

    }

    function delComedouro($id){

      $query = $this->query()->delete()->where(["comedouro.id_comedouro =" => $id])->execute();

    }

    function getComedouroById($id){

      $query = $this->query()->select()->where(["comedouro.id_comedouro =" => $id])->all();

      return $query;

    }

    function updateComedouro($dados, $id){

      $query = $this->query()->update()->set($dados)->where(["comedouro.id_comedouro =" => $id])->execute();

    }

  }

 ?>
