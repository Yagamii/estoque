<?php

  class OutrosModel extends DefaultModel{

    function getOutros(){

      $query = $this->query()->select()->all();

      return $query;

    }

    function addOutros($campos, $dados){

      $query = $this->query()->insert($campos, $dados)->execute();

    }

    function delOutros($id){

      $query = $this->query()->delete()->where(["outros.id_outros =" => $id])->execute();

    }

    function updateOutros($dados, $id){

      $query = $this->query()->update()->set($dados)->where(["outros.id_outros =" => $id])->execute();

    }

    function getOutrosById($id){

      $query = $this->query()->select()->where(["outros.id_outros =" => $id])->all();

      return $query;

    }

  }

 ?>
