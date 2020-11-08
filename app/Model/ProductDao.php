<?php

namespace app\Model;

class ProductDao{
    public function create(Product $p){

        $sql = 'INSERT INTO produtos(name, description) VALUES (?,?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getName());
        $stmt->bindvalue(2, $p->getDescription());
        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM produtos';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        else:
            return [];
        endif;

    }

    public function update(Product $p){

        $sql = 'UPDATE produtos SET name = ?, description = ? WHERE id = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getName());
        $stmt->bindvalue(2, $p->getDescription());
        $stmt->bindValue(3, $p->getId());
        $stmt->execute();

    }

    public function delete($id){

        $sql = 'DELETE FROM produtos WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

    }
}