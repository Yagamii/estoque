<div class="container-fluid">
  <div class="row row-offcanvas row-offcanvas-left">

    <?php require_once("src/template/Layouts/sidebar.php"); ?>

    <div class="container-fluid">

      <div class="col-sm-10 well">

        <h1 align="center">Adicionar brinquedo</h1><br/>

        <form action="index.php?page=brinquedo&action=adicionar" class="form-horizontal" method="POST" name="adicionarBrinquedo">

          <div class="form-group">
            <label class="control-label col-sm-3" for="nome">Nome:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nome" id="nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" placeholder="Nome"/>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="descricao">Descrição:</label>
              <div class="col-sm-6">
                <textarea class="form-control" name="descricao" id="descricao" rows="5" placeholder="Descrição"><?php if(isset($_POST['descricao'])) echo $_POST['descricao'];?></textarea>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="quantidade">Quantidade:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="quantidade" id="quantidade" value="<?php if(isset($_POST['quantidade'])) echo $_POST['quantidade']; ?>" placeholder="Quantidade" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="preco">Preço:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="preco" id="preco" value="<?php if(isset($_POST['preco'])) echo $_POST['preco']; ?>" placeholder="Preço" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="precoPromo">Preço promocional:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="precoPromo" id="precoPromo" value="<?php if(isset($_POST['precoPromo'])) echo $_POST['precoPromo']; ?>" placeholder="Preço promocional" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="estoque">Estoque:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="estoque" id="estoque" value="<?php if(isset($_POST['estoque'])) echo $_POST['estoque']; ?>" placeholder="Estoque" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="encomendas">Encomendas:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="encomendas" id="encomendas" value="<?php if(isset($_POST['encomendas'])) echo $_POST['encomendas']; ?>" placeholder="Encomendas" />
              </div>
          </div>

          <div class="form-group">
            <div class="col-sm-4 col-sm-offset-5">
              <input type="hidden" name="addBrinquedo" value="TRUE" />
              <button type="submit" name="adicionar" class="btn btn-default">Adicionar!</button>
            </div>
          </div>

        </form>

      </div>

    </div>

  </div>
</div>
