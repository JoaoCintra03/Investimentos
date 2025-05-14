<?php

require_once 'Database.php';

class Usuario {
        private $db;

    public function __contruct() {
        $this->db = (new Database())->connect();
    }

    public function criarUsuario($nome, $email, $senha)
    {
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES 
        (:nome, :email, :senha)";

        $query = $this->db->prepare($sql);
        $query->execute([
            'nome' => $nome,
            'email' => $email,
            'senha' => $senhaHash
        ]);
    }
}