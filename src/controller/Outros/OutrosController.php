<?php

  class OutrosController extends DefaultController{

    public $loadModels = ["OutrosModel"];

    public function index(){

      $outros = $this->OutrosModel->getOutros();

      $this->set("outros", $outros);

    }

    public function adicionar(){

      if(isset($_POST['addOutros'])):

        try{

          if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['quantidade']) || empty($_POST['preco']) || empty($_POST['precoPromo']))
            throw new Exception("Por favor, não deixe nenhum campo em branco");

          $campos = ['nome', 'descricao', 'quantidade', 'preco', 'preco_promo', 'estoque', 'encomendas'];

          $dados = [$_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['preco'], $_POST['precoPromo'], $_POST['estoque'], $_POST['encomendas']];

          $this->OutrosModel->addOutros($campos, $dados);

          MsgHandler::setSucess("Cadastro efetuado com sucesso!");

        }catch(Exception $e){

          MsgHandler::setError($e->getMessage());

        }

      endif;

    }

    public function editar(){

      $outros = $this->OutrosModel->getOutrosById($_GET['id']);

      $this->set("outros", $outros);

      if(isset($_POST['editOutros'])):
        try{

          if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['quantidade']) || empty($_POST['preco']) || empty($_POST['precoPromo']))
            throw new Exception("Por favor, não deixe nenhum campo vazio!");

          $dados = ["nome" => $_POST['nome'], "descricao" => $_POST['descricao'], "quantidade" => $_POST['quantidade'], "preco" => $_POST['preco'], "preco_promo" => $_POST['precoPromo'], "estoque" => $_POST['estoque'], "encomendas" => $_POST['encomendas']];

          $this->OutrosModel->updateOutros($dados, $_POST['id']);

          header("Location: index.php?page=outros");

        }catch(Exception $e){

          MsgHandler::setError($e->getMessage());

        }

      endif;

    }

    public function apagar(){

      if(is_numeric($_GET['id'])):

        $this->OutrosModel->delOutros($_GET['id']);

        header("Location: index.php?page=outros");

      endif;

    }

  }

 ?>
