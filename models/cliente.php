<?php
class Cliente extends model{

    public function listCliente($b=''){

        if(!empty($b)){
            $sql = 'SELECT * FROM cliente WHERE nome = :n OR email LIKE :e';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":n", '%'.$b.'%');
            $sql->bindValue(":e", '%'.$b.'%');
            $sql->execute();
        } else {
            $sql = 'SELECT * FROM cliente';
            $sql = $this->db->query($sql);
        }
        
        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll();

            return $sql;
        }
    }

    public function infoCliente($id){
        $sql = 'SELECT * FROM clientetelefone WHERE id_cliente = :id';

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll();

            return $sql;
        }
    }

    public function cadastrar($nome, $email, $dataN){
        $sql = "INSERT INTO cliente SET 
                nome = :nome,
                email = :email,
                dataNascimento = :dataN,
                dataCadastro = now(),
                dataAlteracao = now();";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":dataN", $dataN);

        $sql->execute();
    }

    public function infoClienteId($id){
        $sql = 'SELECT * FROM cliente WHERE id = :id';

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){

            $sql = $sql->fetch();
            
            return $sql;
        }
    }

    public function infoContato($id){

        $sql = 'SELECT * FROM clientetelefone WHERE id = :id';

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){

            $sql = $sql->fetch();
            
            return $sql;
        }
    }

    public function AltCliente($id, $nome, $email, $dataN){
        $sql = "UPDATE cliente SET 
                nome = :nome,
                email = :email,
                dataNascimento = :dataN,
                dataAlteracao = now()
                WHERE id = :id";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":dataN", $dataN);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function AltContato($id, $desc, $numero){
        $sql = "UPDATE clientetelefone SET 
                descricao = :descricao,
                numero = :numero
                WHERE id = :id";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":descricao", $desc);
        $sql->bindValue(":numero", $numero);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function salvContato($id, $descricao, $numero){
        $sql = 'INSERT INTO clientetelefone SET id_cliente = :id, descricao = :descricao, numero = :numero';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':numero', $numero);
        $sql->execute();
    }

    public function deletarCliente($id){

        $sql = 'SELECT * FROM clientetelefone WHERE id_cliente = :id';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){

            $sql = $sql->fetchAll();

            for($x=0; $x < count($sql); $x++){
                
                $ct = 'DELETE FROM clientetelefone WHERE id = :id_ct';
                $ct = $this->db->prepare($ct);
                $ct->bindValue(':id_ct', $sql[$x]['id']);
                $ct->execute();

            }
        }

        $sql = 'DELETE FROM cliente WHERE id = :id';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function deletarContato($id){

        $sql = 'DELETE FROM clientetelefone WHERE id = :id';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function relatorioGeral(){
        $sql = 'SELECT * FROM cliente c INNER JOIN clientetelefone ct ON(c.id = ct.id_cliente);';

        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll();

            return $sql;
        }
    }
}


?>