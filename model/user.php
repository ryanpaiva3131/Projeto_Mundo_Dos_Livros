<?php

class Usuario{
    
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $senha;
    private $img;
    private $perm;
    private $cont;
    
    function getID() {
        return $this->id;
    }
    
    function getImg() {
        return $this->img;
    }
    
    function getPerm() {
        return $this->perm;
    }
    
    function getCont() {
        return $this->cont;
    }

    function getNome() {
        return $this->nome;
    }

    function getCPF() {
        return $this->cpf;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSenha() {
        return $this->senha;
    }

    function setID($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setImg($img) {
        if($img == null){
        $this->img = 'não definido';
        }else{
        $this->img = $img;
        }
    }

    function setPerm($perm) {
        if($perm == null){
        $this->perm = 'comum';
        }else{
        $this->perm = $perm;
        }
    }

    function setCont($cont) {
        if($cont == null){
        $this->cont = 0;
        }else{
        $this->cont = $cont;
        }
    }

    function setCPF($cpf) {
        if($cpf == null){
            $this->cpf = 'não definido';
            }else{
            $this->cpf = $cpf;
            }
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        if($telefone == null){
        $this->telefone = 'não definido';
        }else{
        $this->telefone = $telefone;
        }
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
    
}
?>