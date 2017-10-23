<?php

  class CaminhaController extends DefaultController{
    //Model carregada na controller
    public $loadModels = ["CaminhaModel"];

    //função principal que sera carregada na pagina principal
    public function index(){
      //utiliza função da model para receber e armazenar todas caminhas do banco de dados
      $caminhas = $this->CaminhaModel->getCaminhas();
      //Define a variavel para o template utilizar os dados
      $this->set("caminhas", $caminhas);

    }

    public function adicionar(){
      //caso seja definido a variavel
      if(isset($_POST['addCaminha'])):
        try{
          //Verifica se tem campo vazio
          if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['quantidade']) || empty($_POST['preco']) || empty($_POST['precoPromo']))
            throw new Exception("Por favor, não deixe nenhum campo vazio");
            //campos do banco de dados no qual serão inseridos dados
          $campos = ['nome', 'descricao', 'quantidade', 'preco', 'preco_promo', 'encomendas'];
          //Variavel com os dados que foram inseridos no formulario
          $dados = [$_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['preco'], $_POST['precoPromo'], $_POST['encomendas']];
          //chama função da model parar inserir dados no banco de dados
          $this->CaminhaModel->addCaminha($campos, $dados);

          MsgHandler::setSucess("Caminha cadastrada com sucesso!");

        }catch(Exception $e){
          //Função statica para apresentar mensagem de erro
          MsgHandler::setError($e->getMessage());

        }

        endif;

    }

    public function editar(){

      $caminha = $this->CaminhaModel->getCaminhaById($_GET['id']);

      $this->set("caminha", $caminha);

      if(isset($_POST['editCaminha'])):

        try{

          if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['quantidade']) || empty($_POST['preco']) || empty($_POST['precoPromo']))
            throw new Exception("Não deixe nenhum campo vazio.");

          $dados = ["nome" => $_POST['nome'], "descricao" => $_POST['descricao'], "quantidade" => $_POST['quantidade'], "preco" => $_POST['preco'], "preco_promo" => $_POST['precoPromo'], "encomendas" => $_POST['encomendas']];

          $this->CaminhaModel->updateCaminha($dados, $_POST['id']);

          header("Location: index.php?page=caminha");

        }catch(Exception $e){

          MsgHandler::setError($e->getMessage());

        }

      endif;

    }

    public function apagar(){

      if(is_numeric($_GET['id'])):

        $this->CaminhaModel->delCaminha($_GET['id']);

        header("Location: index.php?page=caminha");

      endif;

    }

  }

?>
