<?php

require_once('../../config/index.php');
require_once('../../dao/itemDao/index.php');
require_once('../../model/item.php');

$user = new Item();
$userdao = new ItemDao();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="cadastro.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


  <header>

    <script> function telainicial(){
      window.location.href="../../index.php";
    } 
  
     function profile(){
      window.location.href="../login/login.html";
    }
  
    function saibamais(){
      window.location.href="../sobre/sobre.html";
    }
  
    function faleconosco(){
      window.location.href="../sobre/contato.html";
    }
  
    </script>
  </head>
  
  <body>
  
    <a name="topo"></a>
  
      <header>
  
        <section id="profile"  onclick="profile()">
  
        </section>
  
        <section id="username">
        </section>
  
          <section id="search">
  
              <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Pesquisar" id="searchbar">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"> </i></button>
                  </div>
                </div>
  
          </section>
            
          <section id="logo" onclick="telainicial()">
            
          </section>
  
          
      </header>
  
      
  
      <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../../index.php">Página Inicial</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../avaliacao/index.html">Avaliações</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../sobre/contato.html">Contato</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="./cadastro">Cadastro</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="../sobre/sobre.html">Sobre</a>
              </li>
            </ul>
      </nav>
<main>

<div class="container">
  <h2>Cadastre sua conta </h2>
  <hr width="1112" height="200" color="blue"/>
  <form action="../../controller/usercontroller/index.php" class="was-validated" name="cadastrar" method="post">
    <div class="form-group">
      <label for="uname">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" name="nome" required>
      <div class="valid-feedback">Válido</div>
      <div class="invalid-feedback">Por favor digite um nome válido</div>
    </div> 
    <div class="form-group">
      <label for="pwd">CPF/CNPJ:</label>
      <input type="text" class="form-control" id="cpf" placeholder="Digite CPF OU CNPJ" name="cpf" required>
      <div class="valid-feedback">Válido</div>
      <div class="invalid-feedback">Por favor digite um CPF válido</div>
    </div> 
    <div class="form-group">
      <label for="uname">Email:</label>
      <input type="email" class="form-control" id="mail" placeholder="Digite seu email" name="mail" required>
      <div class="valid-feedback">Válido</div>
      <div class="invalid-feedback">Por favor digite um email válido</div>
    </div>  
    <div class="form-group">
      <label for="uname">Telefone:</label>
      <input type="tel" class="form-control" id="telefone" placeholder="Digite seu Telefone" name="telefone" required>
      <div class="valid-feedback">Válido</div>
      <div class="invalid-feedback">Por favor digite um Telefone Válido</div>
    </div> 
    <div class="form-group">
      <label for="uname">Crie uma Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Crie uma senha" name="senha" required>
      <div class="valid-feedback">Válido</div>
      <div class="invalid-feedback">Por favor digite uma Senha Válida</div>
    </div> 
    <button type="submit" class="btn btn-primary" name="cadastrar">Continuar</button> 
    <div class="container">
    </div>
    
    
    
     <!-- <h2>Modal Example</h2>
     
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
      </button>
    
      
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
          
           
            <div class="modal-header">
              <h4 class="modal-title">Erro!!</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
           
            <div class="modal-body">
             Erro ao inserir dados!!!
            </div>
            
           
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
            
          </div>
        </div>
      </div>
      
    </div> -->
  </form>
</div> 
</main> 
<footer>


  <div class="container-footer">

    <section id="saibamais" onclick="saibamais()"> 
      
     <ins> Saiba mais </ins>

    </section> 

  

    <section id="faleconosco" onclick="faleconosco()">

     <ins> Fale Conosco </ins> 
    
    </section>

     <section id="socialmediaicon">

      <button class="btn btn-light" type="button"> <a href="https://instagram.com/magiadoslivro?igshid=YmMyMTA2M2Y=" target="blank">  <i class="fa-brands fa-instagram"></i> Instagram </a> </button>
     
     </section>

  </div>

  

</footer>


</body>
</html>

