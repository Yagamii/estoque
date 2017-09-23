<div class="container-fluid">

  <div class="row row-offcanvas row-offcanvas-left">

    <?php require_once('src/template/Layouts/sidebar.php');?>
    <div class="container-fluid">
      <div class="col-sm-10 well">

        <h1 align="center">Adicionar caminha</h1>

        <form action="index.php?page=caminha&action=adicionar" class="form-horizontal" method="POST" name="adicionarCaminha">

          <div class="form-group">
            <label class="control-label col-sm-3" for="nome">Nome:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nome" id="nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" placeholder="Nome" />
              </div>
          </div>

        </form>

      </div>
    </div>

  </div>

</div>
