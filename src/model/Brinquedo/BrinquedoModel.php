<?php

  class BrinquedoModel extends DefaultModel{

    function getBrinquedo(){

      $query = $this->query()->select()->all();

      return $query;

    }

    function addBrinquedo($campos, $dados){

      $query = $this->query()->insert($campos, $dados)->execute();

    }

    function delBrinquedo($id){

      $query = $this->query()->delete()->where(["brinquedo.id_brinquedo =" => $id])->execute();

    }

    function updateBrinquedo($dados, $id){

      $query = $this->query()->update()->set($dados)->where(["brinquedo.id_brinquedo =" => $id])->execute();

    }

    function getBrinquedoById($id){

      $query = $this->query()->select()->where(["brinquedo.id_brinquedo =" => $id])->all();

      return $query;

    }

  }

 ?>
