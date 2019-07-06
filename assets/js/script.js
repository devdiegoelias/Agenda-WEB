$(document).ready(function(){
    $('#numeroContato').mask('(00) 00000-0000');
});

function DeleteCliente(id){
    $('#confExclusaoCliente').after('<button type="button" class="btn btn-danger" onclick="confExclusaoCliente('+id+')">Excluir</button>');
    $('#excluirCliente').modal('show');
}

function confExclusaoCliente(id){

    $.ajax({
        url:'http://localhost/STI3/home/deletar',
        type:'POST',
        data:{id:id},
        beforeSend:function(){
            $('#excluirCliente').find('.modal-body').html("Carregando...");
            $('#excluirCliente').modal('show');
        },
        success:function(){
           window.location.href=window.location.href;
           $('#excluirCliente').modal('hide');
        },
        error:function(){
            alert('Error ao deletar Cliente');
        }
    });
}

function DeleteContato(id){
    $('#confExclusaoContato').after('<button type="button" class="btn btn-danger" onclick="confExclusaoContato('+id+')">Excluir</button>');
    $('#excluirContato').modal('show');
}

function confExclusaoContato(id){

    $.ajax({
        url:'http://localhost/STI3/informacao/deletar',
        type:'POST',
        data:{id:id},
        beforeSend:function(){
            $('#excluirContato').find('.modal-body').html("Carregando...");
            $('#excluirContato').modal('show');
        },
        success:function(){
           window.location.href=window.location.href;
           $('#excluirContato').modal('hide');
        },
        error:function(){
            alert('Error ao deletar Contato');
        }
    });
}
