<?php

    class Aval{
    
    private $item_id;
    private $usuario_id;
    private $id;
    private $data;
    private $img;
    private $nome;
    private $msg;
    private $nota;
    private $categoria;
    
    function getID() {
        return $this->id;
    }

    function getUserid() {
        return $this->usuario_id;
    }

    function getItemid() {
        return $this->item_id;
    }

    function getData() {
        return $this->data;
    }

    function getImg() {
        return $this->img;
    }

    function getNome() {
        return $this->nome;
    }

    function getMsg() {
        return $this->msg;
    }

    function getNota() {
        return $this->nota;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function setID($id) {
        $this->id = $id;
    }

    function setUserid($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setItemid($item_id) {
        $this->item_id = $item_id;
    }

    function setData($data) {
        if($data==null){
            $dia = date('d');
            $mes = date('m');
            $ano = date('Y');
            $data = "$dia-$mes-$ano";
        }else{
            $this->data = $data;
        }
    }

    function setImg($img) {
        $this->img = $img;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMsg($msg) {
        $this->msg = $msg;
    }

    function setNota($nota) {
        $this->nota = $nota;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

}
?>