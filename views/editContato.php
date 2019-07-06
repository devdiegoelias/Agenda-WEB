<div class="container">
<h1>Editar Contato</h1>

    <form method="POST" action="#">

        <div class="form-group">
            <label for="descricao">Selecione</label>

            <select class="form-control" name="descricao">
                <option echo($info['descricao'] == 'CASA')?'selected=selected':''; value="CASA">CASA</option>
                <option echo($info['descricao'] == 'TRABALHO')?'selected=selected':''; value="TRABALHO">TRABALHO</option>
                <option echo($info['descricao'] == 'CELULAR')?'selected=selected':''; value="CELULAR">CELULAR</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nome">Contato</label>
            <input type="text" name="contato" class="form-control" id="numeroContato" value="<?php echo $info['numero'];?>" required>
        </div>

        <a href="<?php echo BASE_URL;?>" class="btn btn-secondary">Voltar</a>
        <button class="btn btn-success">Salvar alteração</button>

    </form>
</div>