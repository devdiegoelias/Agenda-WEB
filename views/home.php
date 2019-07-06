
<div class="container">

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#adicionarCliente">
  Novo Cliente
</button>

<form class="">
  <input class="form-control" autofocus type="search" class="mx-auto" name="busca" placeholder="DIGITE O NOME OU E-MAIL DO CONTATO E PRESSIONE ENTER" aria-label="Search" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:'';?>">
</form>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Identificação</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php if(isset($listCliente) && !empty($listCliente)):?>
      <?php foreach($listCliente as $list):?>

          <tr>
          <th scope="row"><?php echo $list['id'];?></th>
          <td><?php echo $list['nome'];?></td>
          <td><?php echo $list['email'];?></td>
          <td>
              <a href="<?php echo BASE_URL.'informacao/buscar/'.$list['id'];?>" class="btn btn-info">Visualizar Detalhes</a>
              <a href="<?php echo BASE_URL.'home/editar/'.$list['id'];?>" class="btn btn-warning">Editar</a>
              <a href="javascript:;" class="btn btn-danger"  onclick="DeleteCliente(<?php echo $list['id'];?>)">Deletar</a>
          </td>
          </tr>

      <?php endforeach;?>
    <?php endif;?>


  </tbody>
</table>

</div>





<div class="modal fade" id="adicionarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Adicionar novo cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="<?php echo BASE_URL;?>home/cadastro">

          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome Sobrenome" required=>
          </div>

          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
          </div>

          <div class="form-group">
            <label for="data de nascimento">Data de Nascimento</label>
            <input type="date" name="dataNascimento" class="form-control">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary" >Salvar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Deletar Cliete-->
<div class="modal fade" id="excluirCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmar Exclusão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este cliente e seus números ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="confExclusaoCliente" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>