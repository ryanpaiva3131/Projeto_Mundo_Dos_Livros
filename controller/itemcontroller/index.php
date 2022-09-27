<?php 

require_once('../../config/index.php');
require_once('../../dao/itemDao/index.php');
require_once('../../model/item.php');

$item = new Item();
$itemdao = new ItemDao();


$dados = filter_input_array(INPUT_POST);

if(isset($_POST['cadastrar'])){

    $item->setNome($dados['nome']);
    $item->setLoja($dados['loja']);
    $item->setLink($dados['link']);
    $item->setCategoria($dados['categoria']);
    $item->setDesc($dados['desc']);
    $item->setAutor($dados['autor']);
    $item->setImg($_FILES['img']);

    if($itemdao->criar($item)) {

    echo "<script>
            alert('item Cadastrado com Sucesso!!');
            location.href = '../';
          </script>";
    }

// se a requisição for alterar
} else if(isset($_POST['alterar'])){

    $item->setID($dados['id_alter']);
    $item->setNome($dados['nome']);
    $item->setLoja($dados['loja']);
    $item->setLink($dados['link']);
    $item->setCategoria($dados['categoria']);
    $item->setDesc($dados['desc']);
    $item->setAutor($dados['autor']);
    $item->setImg($_FILES['img']);

      $img = $_POST['del_img'];

      if($itemdao->alterar($item)) {

        $del_img = "../img/$img";
        unlink($del_img);

          if(!is_file($del_img)){  
              echo "<script>
                      alert('item Atualizado com Sucesso!!');
                      location.href = '../views/produto/listar_admin.php';
                  </script>";
          }
      }

// se a requisição for deletar
} else if(isset($_POST['excluir'])) {
  
      $item->setID($_POST['id_del']);
      $img = $_POST['del_img'];

      if($itemdao->excluir($item)) {
        
        $del_img = "../img/$img";
        unlink($del_img);
  
      echo "<script>
              alert('item Deletado com Sucesso!!');
              location.href = '../views/produto/listar.php';
          </script>";
      }
}

?>