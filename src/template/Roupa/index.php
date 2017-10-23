<div class="container-fluid">
  <div class="row row-offcanvas row-offcanvas-left">
    <?php require('src/template/Layouts/sidebar.php');?>
    <div class="container-fluid">

      <div class="col-sm-10 well">
        <h1 align="center">Roupas</h1><br/>
        <table class="table table-hover" style="margin: 0 auto; width: 100%">

          <tr>
              <th>Nome:</th>
              <th>Descrição:</th>
              <th>Quantidade:</th>
              <th>Preço:</th>
              <th>Preço Promocional:</th>
              <th>Encomendas:</th>
              <th>Editar</th>
              <th>Apagar</th>
          </tr>

          <?php foreach($roupas as $row): ?>

            <tr>
              <td><?php echo $row['nome']; ?></td>
              <td><?php echo $row['descricao'];?></td>
              <td><?php echo $row['quantidade'];?></td>
              <td><?php echo $row['preco'];?></td>
              <td><?php echo $row['preco_promo'];?></td>
              <td><?php echo $row['encomendas'];?></td>
              <td>
                <a href="index.php?page=roupa&action=editar&id=<?php echo $row['id_roupa'];?>" title="Editar <?php echo $row['nome'];?>">
                  <img src="src/template/Includes/icone-editar.png" width="18" height="18" />
                </a>
              </td>
              <td>
                <a href="index.php?page=roupa&action=apagar&id=<?php echo $row['id_roupa'];?>" onclick="return confirm('Tem certeza que deseja excluir o produto: \'<?php echo $row['nome'];?>\'?')" title="Apagar <?php echo $row['nome'];?>">
                  <img src="src/template/Includes/icone-apagar.png" width="18" height="18" />
                </a>
              </td>
            </tr>

          <?php endforeach;?>

        </table>

      </div>


    </div>
  </div>
</div>
