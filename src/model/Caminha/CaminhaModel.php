<?php

  class CaminhaModel extends DefaultModel{

      function getCaminhas(){

        $query = $this->query()->select()->all();

        return $query;

      }

      function addCaminha($campos = array(), $dados = array()){

        $query = $this->query()->insert($campos, $dados)->execute();

      }

      function getCaminhaById($id){

        $query = $this->query()->select()->where(["caminha.id_caminha =" => $id])->all();

        return $query;

      }

      function updateCaminha($dados, $id){

        $query = $this->query()->update()->set($dados)->where(["caminha.id_caminha =" => $id])->execute();

      }

      function delCaminha($id){

        $query = $this->query()->delete()->where(["caminha.id_caminha =" => $id])->execute();

      }

  }

?>
