<?php

  class BrinquedoController extends DefaultController{

    public $loadModels = ["BrinquedoModel"];

    public function index(){

      $brinquedo = $this->BrinquedoModel->getBrinquedo();

      $this->set("brinquedos", $brinquedo);

    }

    public function adicionar(){

      if(isset($_POST['addBrinquedo'])):

        try{

          if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['quantidade']) || empty($_POST['preco']) || empty($_POST['precoPromo']))
            throw new Exception("Por favor, não deixe nenhum campo em branco!");

          $campos = ['nome', 'descricao', 'quantidade', 'preco', 'preco_promo', 'estoque', 'encomendas'];

          $dados = [$_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['preco'], $_POST['precoPromo'], $_POST['estoque'], $_POST['encomendas']];

          $this->BrinquedoModel->addBrinquedo($campos, $dados);

          MsgHandler::setSucess("Brinquedo cadastrado com sucesso!");

        }catch(Exception $e){

          MsgHandler::setError($e->getMessage());

        }

      endif;

    }

    public function editar(){

      $brinquedoById = $this->BrinquedoModel->getBrinquedoById($_GET['id']);

      $this->set("brinquedo", $brinquedoById);

      if(isset($_POST['editBrinquedo'])):

        try{

          if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['quantidade']) || empty($_POST['preco']) || empty($_POST['precoPromo']))
            throw Exception("Por favor, não deixe nenhum campo em branco!");

          $dados = ["nome" => $_POST['nome'], "descricao" => $_POST['descricao'], "quantidade" => $_POST['quantidade'], "preco" => $_POST['preco'], "preco_promo" => $_POST['precoPromo'], "estoque" => $_POST['estoque'], "encomendas" => $_POST['encomendas']];

          $this->BrinquedoModel->updateBrinquedo($dados, $_POST['id']);

          header("Location: index.php?page=brinquedo");

        }catch(Exception $e){

          MsgHandler::setError($e->getMessage());

        }

      endif;

    }

    public function apagar(){

      if(is_numeric($_GET['id'])):

        $this->BrinquedoModel->delBrinquedo($_GET['id']);

        header("Location: index.php?page=brinquedo");

      endif;

    }

  }

 ?>
