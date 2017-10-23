<?php

  class ComedouroController extends DefaultController{

    public $loadModels = ["ComedouroModel"];

    public function index(){

      $comedouros = $this->ComedouroModel->getComedouros();

      $this->set("comedouros", $comedouros);

    }

    public function adicionar(){

      if(isset($_POST['addComedouro'])):

        try{

          if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['quantidade']) || empty($_POST['preco']) || empty($_POST['precoPromo']))
            throw new Exception("Por favor, não deixe nenhum campo em branco");

          $campos = ['nome', 'descricao', 'quantidade', 'preco', 'preco_promo', 'estoque', 'encomendas'];

          $dados =   [$_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['preco'], $_POST['precoPromo'], $_POST['estoque'], $_POST['encomendas']];

          $this->ComedouroModel->addComedouro($campos, $dados);

          MsgHandler::setSucess("Comedouro cadastrado com sucesso!");

        }catch(Exception $e){

          MsgHandler::setError($e->getMessage());

        }

      endif;

    }

    public function editar(){

      $comedouroById = $this->ComedouroModel->getComedouroById($_GET['id']);

      $this->set("comedouro", $comedouroById);

      if(isset($_POST['editComedouro'])):

        try{

          if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['quantidade']) || empty($_POST['preco']) || empty($_POST['precoPromo']))
            throw new Exception("Por favor, não deixe nenhum campo em branco!");

          $dados = ["nome" => $_POST['nome'], "descricao" => $_POST['descricao'], "quantidade" => $_POST['quantidade'], "preco" => $_POST['preco'], "preco_promo" => $_POST['precoPromo'], "estoque" => $_POST['estoque'], "encomendas" => $_POST['encomendas']];

          $this->ComedouroModel->updateComedouro($dados, $_POST['id']);

          header("Location: index.php?page=comedouro");

        }catch(Exception $e){

          MsgHandler::setError($e->getMessage());

        }

      endif;

    }

    public function apagar(){

      if(is_numeric($_GET['id'])):

        $this->ComedouroModel->delComedouro($_GET['id']);

        header("Location: index.php?page=comedouro");

      endif;

    }

  }

 ?>
