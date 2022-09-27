<?php

class Item{
    
    private $id;
    private $nome;
    private $loja;
    private $link;
    private $img;
    private $status;
    private $cont;
    private $categoria;
    private $desc;
    private $autor;
    private $media;
    
    function getID() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getLoja() {
        return $this->loja;
    }

    function getLink() {
        return $this->link;
    }

    function getImg() {
        return $this->img;
    }

    function getStatus() {
        return $this->status;
    }

    function getCont() {
        return $this->cont;
    }
    
    function getCategoria() {
        return $this->categoria;
    }

    function getDesc() {
        return $this->desc;
    }

    function getAutor() {
        return $this->autor;
    }

    function getMedia() {
        return $this->media;
    }

    function setID($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setLoja($loja) {
        $this->loja = $loja;
    }
    
    function setLink($link) {
        $this->link = $link;
    }

    function setImg($img) {
        $this->img = $img;
    }
    
    function setStatus($status) {
        $this->status = $status;
    }
    
    function setCont($cont) {
        $this->cont = $cont;
    }
    
    function setDesc($desc) {
        $this->desc = $desc;
    }
    
    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
    
    function setAutor($autor) {
        $this->autor = $autor;
    }
    
    function setMedia($media) {
        $this->media = $media;
    }
    
}