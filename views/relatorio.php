<!DOCTYPE html>
<html>
<head>
    <title>Relatório STI3</title>

    <style type="text/css">
        *{

        }
        table {
            border-collapse: collapse;
            width: 100%;

        }
        th, td{
            padding: 1px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th{
            text-align: left;
        }
        th, td, tr {
            text-align: left;
            padding: 15px;
        }

        h1{
            margin-left: 350px;
        }
        h4{

        }
        .logo{
            height: 250px;
            margin-left: 360px;
        }
        tr{
            border-bottom:1px #000 solid;
            text-align: left;
        }
        p{
            text-align: right;
            margin-top: -40px;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>

</head>

<body>   

    <?php
        date_default_timezone_set('America/Sao_Paulo');
        $dat = date('d-m-Y');
        $hor = date('H:i');
    ?>

    <p>Emitido dia <?php echo $dat; ?> as <?php echo $hor; ?> horas</p>

    <h1>Relatório de Contatos</h1>

    <img src="<?php echo BASE_URL;?>assets/image/fundo.jpeg" class="logo" alt="Logo STI3">

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">Data de Cadastro</th>
        <th scope="col">Ult. Alteração</th>
        <th scope="col">Descrição</th>
        <th scope="col">número</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($info as $i):?>
            <tr>
                <th scope="row"><?php echo $i['nome']?></th>
                <td><?php echo $i['email']?></td>
                <td><?php echo date('d/m/Y', strtotime($i['dataNascimento']));?></td>
                <td><?php echo date('d/m/Y H:i', strtotime($i['dataCadastro']));?></td>
                <td><?php echo date('d/m/Y H:i', strtotime($i['dataAlteracao']));?></td>
                <td><?php echo $i['descricao']?></td>
                <td><?php echo $i['numero']?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
    </table>

</body>
