<div class="container-fluid">

  <div class="row row-offcanvas row-offcanvas-left">

    <?php require_once("src/template/Layouts/sidebar.php"); ?>
    <div class="container-fluid">

      <div class="col-sm-10 well">

        <h1 align="center">Editar caminha!</h1><br/>

        <form action="index.php?page=caminha&action=editar" class="form-horizontal" method="POST" name="editarCaminha">

          <div class="form-group">
            <label class="control-label col-sm-3" for="nome">Nome:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $caminha[0]['nome']; ?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="descricao">Descrição:</label>
              <div class="col-sm-6">
                <textarea class="form-control" name="descricao" id="descricao" rows="5"><?php echo $caminha[0]['descricao'];?></textarea>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="quantidade">Quantidade:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="quantidade" id="quantidade" value="<?php echo $caminha[0]['quantidade'];?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="preco">Preço:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="preco" id="preco" value="<?php echo $caminha[0]['preco'];?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="precoPromo">Preço promocional:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="precoPromo" id="precoPromo" value="<?php echo $caminha[0]['preco_promo'];?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="encomendas">Encomendas:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="encomendas" id="emcomendas" value="<?php echo $caminha[0]['encomendas'];?>" />
              </div>
          </div>

          <br/>

          <div class="form-group">
            <div class="col-sm-offset-5 col-sm-4">
              <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
              <input type="hidden" name="editCaminha" value="TRUE" />
              <button type="submit" class="btn btn-default" name="editar">Editar!</button>
            </div>
          </div>

        </form>

      </div>

    </div>

  </div>

</div>
