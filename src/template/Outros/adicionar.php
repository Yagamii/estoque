<div class="container-fluid">

  <div class="row row-offcanvas row-offcanvas-left">

    <?php require_once("src/template/Layouts/sidebar.php"); ?>
    <div class="container-fluid">

      <div class="col-sm-10 well">

        <h1 align="center">Adicionar outros</h1><br/>

        <form action="index.php?page=outros&action=adicionar" method="POST" class="form-horizontal" name="adicionarOutros">

          <div class="form-group">
            <label class="control-label col-sm-3" for="nome">Nome:</label>
              <div class="col-sm-6">
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome'];?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="descricao">Descrição:</label>
              <div class="col-sm-6">
                <textarea name="descricao" rows="5" class="form-control" id="descricao" placeholder="Descrição"><?php if(isset($_POST['descricao'])) echo $_POST['descricao']; ?></textarea>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="quantidade">Quantidade:</label>
              <div class="col-sm-6">
                <input type="text" name="quantidade" id="quantidade" class="form-control" placeholder="Quantidade" value="<?php if(isset($_POST['quantidade'])) echo $_POST['quantidade'];?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="preco">Preço:</label>
              <div class="col-sm-6">
                <input type="text" name="preco" id="preco" class="form-control" placeholder="Preço" value="<?php if(isset($_POST['preco'])) echo $_POST['preco']; ?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="precoPromo">Preço promocional:</label>
              <div class="col-sm-6">
                <input type="text" name="precoPromo" id="precoPromo" class="form-control" placeholder="Preço promocional" value="<?php if(isset($_POST['precoPromo'])) echo $_POST['precoPromo']; ?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="estoque">Estoque:</label>
              <div class="col-sm-6">
                <input type="text" name="estoque" id="estoque" class="form-control" placeholder="Estoque" value="<?php if(isset($_POST['estoque'])) echo $_POST['estoque']; ?>" />
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="encomendas">Encomendas:</label>
              <div class="col-sm-6">
                <input type="text" name="encomendas" id="encomendas" class="form-control" placeholder="Encomendas" value="<?php if(isset($_POST['encomendas'])) echo $_POST['encomendas']; ?>" />
              </div>
          </div>

          <br/>
          <div class="form-group">
            <div class="col-sm-4 col-sm-offset-5">
              <input type="hidden" name="addOutros" value="TRUE" />
              <button type="submit" class="btn btn-default" name="adicionar">Adicionar!</button>
            </div>
          </div>

        </form>

      </div>

    </div>

  </div>

</div>
