<div class="container-fluid">
  <div class="row row-offcanvas row-offcanvas-left">
    <?php require('src/template/Layouts/sidebar.php');?>
    <div class="container-fluid">
      <div class="col-sm-10 well">

        <h2 align="center">Adicionar Roupas</h2><br/>

        <form action="index.php?page=roupa&action=adicionar" class="form-horizontal" method="POST" name="adicionarRoupa">

          <div class="form-group">
            <label class="control-label col-sm-3" for="nome">Nome:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nome" id="nome" value="<?php if(isset($_POST['nome']))echo $_POST['nome']; ?>" placeholder="Nome"/>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="descricao">Descrição:</label>
              <div class="col-sm-6">
                <textarea class="form-control" name="descricao" id="descricao" rows="5" placeholder="Descrição"><?php if(isset($_POST['descricao']))echo $_POST['descricao'];?></textarea>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="quantidade">Quantidade:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="quantidade" id="quantidade" value="<?php if(isset($_POST['quantidade']))echo $_POST['quantidade'];?>" placeholder="Quantidade"/>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="preco">Preço:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="preco" id="preco" value="<?php if(isset($_POST['preco']))echo $_POST['preco'];?>" placeholder="Preço"/>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="precoPromo">Preço promocional:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="precoPromo" id="precoPromo" value="<?php if(isset($_POST['precoPromo']))echo $_POST['precoPromo'];?>" placeholder="Preço promocional"/>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="encomendas">Encomendas:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="encomendas" id="encomendas" value="<?php if(isset($_POST['encomendas']))echo $_POST['encomendas'];?>" placeholder="Encomendas"/>
              </div>
          </div>
<br/>
          <div class="form-group">
            <div class="col-sm-offset-5 col-sm-4">
              <input type="hidden" name="addRoupa" value="TRUE" />
              <button type="submit" class="btn btn-default" name="add">Adicionar</button>
            </div>
          </div>

        </form>

      </div>


    </div>
  </div>
</div>
