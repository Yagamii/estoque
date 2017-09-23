<?php
  //Monta o caminho dos dados da pagina q serão exibidos
  class Dispatcher{

    public function dispatch(){
      //Define o valor das constantes q serão utilizadas no site
      $action = action;
      $Fuseaction = Fuseaction;

      try{
        //Armazena nomes da Controller e da View de acordo com Fuseaction
        $controllerName = $Fuseaction."Controller";
        $viewName = $Fuseaction."View";

        //Instancia a controller e view q foram carregadas
        $View = new $viewName();
        $Controller = new $controllerName();

        //Caso não consiga chamar a função da action, exibe mensagem
        if(!is_callable([ $Controller, $action]))
          throw new Exception("O método ".$action."() não existe.");
        //Chama a função da action q esta na controller
        $Controller->$action();
        //Caso o nome de template esteja vazio, da a ele o nome da action
        if($Controller->template_name === NULL):
          $template = $action;
          //Senão define o template como nome do template contido na controller
        else:
          $template = $Controller->template_name;
        endif;
        //armazena o caminho do layout e template, de acordo com o Fuseaction chamado
        $layout_file = "src/template/Layouts/".$View->getLayout().".php";
        $template_file = "src/template/".ucfirst($Fuseaction)."/".$template.".php";

        //Verifica a existencia do arquivo de layout
        if(!file_exists($layout_file))
          throw new Exception("O arquivo ".$layout_file." de layout não existe.");
        //Verifica a existencia do arquivo de template
        if(!file_exists($template_file))
          throw new Exception("O arquivo ".$template_file." de template não existe.");

        //Renderiza as paginas, fazendo rodas os códigos, html e variaveis contidas nele
        echo $View->render($layout_file, [ "content" => $View->render($template_file, $Controller->getTemplateVars()) ]);

      }catch(Exception $e){
        //Caso encontre algum erro, renderiza a pagina de erro, exibindo qual o motivo para o mesmo
        echo $View->render("src/template/Layouts/404.php", ["error" => $e->getMessage()]);
      }

    }


  }

 ?>
