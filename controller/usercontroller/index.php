<?php 

require_once('../../config/index.php');
require_once('../../dao/userDao/index.php');
require_once('../../model/user.php');

$usuario = new Usuario();
$userdao = new UserDao();


$dados = filter_input_array(INPUT_POST);


if(isset($_POST['cadastrar'])){

    $usuario->setNome($dados['nome']);
    $usuario->setCPF($dados['cpf']);
    $usuario->setEmail($dados['mail']);
    $usuario->setTelefone($dados['telefone']);
    $usuario->setSenha(password_hash($dados['senha'], PASSWORD_DEFAULT)); 

    if($userdao->criar($usuario)) {

    echo "<script>
            alert('Usuário Cadastrado com Sucesso!!');
            location.href = '../../index.php';
          </script>";
    }

} else if(isset($_POST['alterar'])){

    $usuario->setID($dados['id_alter']);
    $usuario->setNome($dados['nome']);
    $usuario->setCPF($dados['cpf']);
    $usuario->setEmail($dados['mail']);
    $usuario->setTelefone($dados['telefone']);
    $usuario->setSenha(password_hash($dados['senha'], PASSWORD_DEFAULT)); 


    if($userdao->alterar($usuario)) {
 
        echo "<script>
                alert('Usuário Atualizado com Sucesso!!');
                location.href = '../views/listar/';
            </script>";
        }
    

// se a requisição for deletar
} else if(isset($_POST['excluir'])) {

    $usuario->setID($_POST['id_del']);
;

    if($userdao->excluir($usuario)) {

    echo "<script>
            alert('Usuário Deletado com Sucesso!!');
            location.href = '../views/listar/';
        </script>";
    }
       
} else if(isset($_POST['login'])) {

	$usuario->setEmail(strip_tags($dados['mail']));
	$usuario->setSenha(strip_tags($dados['senha'])); 

    $userdao->login($usuario);

	if($userdao->login($usuario)) {

     echo "<script>
            alert('Usuário logado com Sucesso!!');
            location.href = '../../index.php';
           </script>";

	} else {
        echo "<script>
                alert('Acesso inválido! login ou senha incorretos!');
                location.href = '../../Views/login/login.html';
            </script>";
	}	
      
} else if(isset($_GET['logout'])) {

    $userdao->logout();

    header("Location: ../views/login/");


} else {

    header("Location: ../");
}

?>