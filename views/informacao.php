<div class="container">

    <a href="" class="btn btn-success" data-toggle="modal" data-target="#adicionarContato">Novo Número</a>
    <a href="<?php echo BASE_URL;?>" class="btn btn-secondary">Voltar</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Identificação</th>
                <th scope="col">Descrição</th>
                <th scope="col">Numeto</th>
                <th score="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($info)):?>
                <?php foreach($info as $in):?>
                    <tr>
                        <th scope="row"><?php echo $in['id'];?></th>
                        <td><?php echo $in['descricao'];?></td>
                        <td><?php echo $in['numero'];?></td>
                        <td>
                            <a href="<?php echo BASE_URL;?>informacao/editContato/<?php echo $in['id'];?>" class="btn btn-warning">Editar</a>
                            <a href="javascript:;" onclick="DeleteContato(<?php echo $in['id'];?>)" class="btn btn-danger">Deletar</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            <?php endif;?>
        </tbody>
    </table>

    <div class="modal fade" id="adicionarContato" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Adicionar novo contato</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        
            <form method="POST" action="<?php echo BASE_URL;?>informacao/cadastroContato/<?php echo $id_cli;?>">

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <select class="form-control" name="descricao">
                    <option value="CASA">CASA</option>
                    <option value="TRABALHO">TRABALHO</option>
                    <option value="CELULAR">CELULAR</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nome">Contato</label>
                <input type="text" name="contato" class="form-control" id="numeroContato" required=>
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
<div class="modal fade" id="excluirContato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmar Exclusão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este contato e seu respectivo número ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="confExclusaoContato" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

</div>