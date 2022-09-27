<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style_home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <script> function telainicial(){
    window.location.href="./home.html";
  } 

   function profile(){
    window.location.href="./Views/login/login.html";
  }

  function saibamais(){
    window.location.href="./home.html";
  }

  function faleconosco(){
    window.location.href="./home.html";
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
              <a class="nav-link active" href="./index.php">Página Inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./Views/avaliacao/index.html">Avaliações</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Views/sobre/contato.html">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Views/cadastro/index.php">Cadastro</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="./Views/sobre/sobre.html">Sobre</a>
            </li>
          </ul>
    </nav>
        
        
    <main>    

        <article>
            <div id="demo" class="carousel slide" data-ride="carousel" style="width: 100%;">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                </ul>
            
                <!-- The slideshow -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img_SA/photo1.jpg" style="width:100%;" alt="Livros">
                </div>
                <div class="carousel-item">
                    <img src="./img_SA/photo2.webp" style="width:100%;" alt="Biblioteca">
                </div>
                </div>
            
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>

            </div>

        </article>


      <article class="articlegenero">

        <h1 id="titlegenre"> Generos </h1>

       

        <section class="genero1">

          <img src="./img_SA/drama.png" alt="Drama" class="rounded-circle">

          <p> Drama </p>

        </section>


      

          <section class="genero2">

            <img src="./img_SA/romance.png" alt="Romance" class="rounded-circle">

            <p> Romance </p>

          </section>
 


          <section class="genero3">

          <img src="./img_SA/terror.png" alt="Terror" class="rounded-circle">

          <p> Terror </p>

          </section>



          <section class="genero4">

            <img src="./img_SA/ficçãocientifica.png" alt="Ficção científica" class="rounded-circle">
            <p> Ficção Científica </p>

          </section>


          <section class="genero5">

            <img src="./img_SA/aventura.png" alt="Ação e aventura" class="rounded-circle">
            <p> Ação e aventura </p>

          </section>


          <section class="genero6">

            <img src="./img_SA/fantasia.png" alt="Fantasia" class="rounded-circle">
            <p> Fantasia </p>

          </section>


          <section class="genero7">

            <img src="./img_SA/infantil.png" alt="Infantil" class="rounded-circle">
            <p> Infantil </p>

          </section>


          <section class="genero8">

            <img src="./img_SA/biografia.png" alt="Biografia" class="rounded-circle">
            <p> Biografia </p>

          </section>


          

      </article>

      <div id="return1"> 

      <div id="return2">
        <a href="#topo"> <i class="fa-solid fa-circle-up"></i> Retornar ao topo</a>
      </div>

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