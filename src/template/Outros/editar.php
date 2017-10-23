<div class="container-fluid">

  <div class="row row-offcanvas row-offcanvas-left">

    <?php require_once("src/template/Layouts/sidebar.php"); ?>

    <div class="container-fluid">

      <div class="col-sm-10 well">

        <h1 align="center">Editar!</h1><br/>

        <form action="index.php?page=outros&action=editar" method="POST" class="form-horizontal" name="editOutros">

          <div class="form-group">
            <label class="control-label col-sm-3" for="nome">Nome:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $outros[0]['nome'];?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="descricao">Descrição:</label>
              <div class="col-sm-6">
                <textarea class="form-control" name="descricao" id="descricao" rows="5"><?php echo $outros[0]['descricao']; ?></textarea>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="quantidade">Quantidade:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="quantidade" id="quantidade" value="<?php echo $outros[0]['quantidade'];?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="preco">Preço:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="preco" id="preco" value="<?php echo $outros[0]['preco']; ?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="precoPromo">Preço promocional:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="precoPromo" id="precoPromo" value="<?php echo $outros[0]['preco_promo']; ?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="estoque">Estoque:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="estoque" id="estoque" value="<?php echo $outros[0]['estoque']; ?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="encomendas">Encomendas:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="encomendas" id="encomendas" value="<?php echo $outros[0]['encomendas']; ?>" />
              </div>
          </div>

          <br/>
          <div class="form-group">
            <div class="col-sm-offset-5 col-sm-4">
              <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
              <input type="hidden" name="editOutros" value="TRUE" />
              <button type="submit" name="editar" class="btn btn-default">Editar!</button>
            </div>
          </div>

        </form>

      </div>

    </div>

  </div>

</div>
