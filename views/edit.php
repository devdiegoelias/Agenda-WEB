<div class="container">
<h1>Editar Cliente</h1>

<form method="POST" action="#">

    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" value="<?php echo $infoCliente['nome']?>" required=>
    </div>

    <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" name="email" class="form-control" value="<?php echo $infoCliente['email']?>" required>
    </div>

    <div class="form-group">
    <label for="data de nascimento">Data de Nascimento</label>
    <input type="date" name="dataNascimento" class="form-control" value="<?php echo $infoCliente['dataNascimento']?>">
    </div>

    <div class="modal-footer">
    <a href="<?php echo BASE_URL;?>" class="btn btn-secondary">Voltar</a>
    <button type="submit" class="btn btn-primary" >Salvar</button>
    </div>

</form>
</div>