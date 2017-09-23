<?php

  class RoupaController extends DefaultController{
    //Carrega a model necessaria na pagina
    public $loadModels = ["RoupaModel"];

    public function index(){

        $roupas = $this->RoupaModel->getRoupa();

        $this->set("roupas", $roupas);

    }

    //controle da seção de adicionar
    public function adicionar(){
      //Caso foi definido a variavel de adicionar roupa
      if(isset($_POST['addRoupa'])){

        try{

          //Verifica se algum campo esta vazio
          if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['quantidade']) || empty($_POST['preco']) || empty($_POST['precoPromo']))
            throw new Exception("Por favor, não deixe nenhum campo em branco.");

          //Armazena dados em array
          $dados = [$_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['preco'], $_POST['precoPromo'], $_POST['encomendas']];
          //Campos do banco que dados em que os dados serão inseridos na sua devida ordem
          $campos = ['nome', 'descricao', 'quantidade', 'preco', 'preco_promo', 'encomendas'];
          //Função para add o arquivo
          $this->RoupaModel->addRoupa($dados, $campos);

          MsgHandler::setSucess("Roupa cadastrada com sucesso!");

        }catch(Exception $e){
          MsgHandler::setError($e->getMessage());
        }

      }

    }

    public function editar(){

      $roupaById = $this->RoupaModel->getRoupaById($_GET['id']);

      $this->set("roupa", $roupaById);

      if(isset($_POST['editarRoupa'])){

        try{

          if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['quantidade']) || empty($_POST['preco']) || empty($_POST['precoPromo']) || empty($_POST['encomendas']))
            throw new Exception("Não deixe nenhum campo vazio");

          $dados = ["nome" => $_POST['nome'], "descricao" => $_POST['descricao'], "preco" => $_POST['preco'], "preco_promo" => $_POST['precoPromo'], "encomendas" => $_POST['encomendas']];

          $this->RoupaModel->updateRoupa($dados, $_POST['id']);

          header("Location: index.php?page=roupa");

        }catch(Exception $e){
          MsgHandler::setError($e->getMessage());
        }

      }

    }

    public function apagar(){

      if(is_numeric($_GET['id'])):

        $this->RoupaModel->delRoupa($_GET['id']);

        header("Location: index.php?page=roupa");

      endif;

    }

  }

 ?>
