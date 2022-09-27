<?php 

require_once('../../config/index.php');
require_once('../../dao/userDao/index.php');
require_once('../../model/user.php');

$aval = new Aval();
$avaldao = new AvalDao();


$dados = filter_input_array(INPUT_POST);

if(isset($_POST['cadastrar'])){

    $aval->setNome($dados['nome']);
    $aval->setItemid($dados['item_id']);
    $aval->setUserid($dados['user_id']);
    $aval->setData($dados['data']);
    $aval->setMsg($dados['msg']);
    $aval->setNota($dados['nota']);
    
    if($avaldao->criar($aval)) {

    echo "<script>
            alert('Usuário Cadastrado com Sucesso!!');
            location.href = '../';
          </script>";
    }

} else if(isset($_POST['alterar'])){

    $aval->setNome($dados['nome']);
    $aval->setItemid($dados['item_id']);
    $aval->setUserid($dados['user_id']);
    $aval->setData($dados['data']);
    $aval->setMsg($dados['msg']);
    $aval->setNota($dados['nota']);

    if($avaldao->alterar($aval)) {

        echo "<script>
                alert('Usuário Atualizado com Sucesso!!');
                location.href = '../views/listar/';
            </script>";
        
    }

} else if(isset($_POST['excluir'])) {

    $aval->setID($_POST['id_del']);

    if($avaldao->excluir($aval)) {

    echo "<script>
            alert('Usuário Deletado com Sucesso!!');
            location.href = '../views/listar/';
        </script>";
    }

} else {

    header("Location: ../");
}

?>