<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Disapex</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Pesquisar" aria-label="Search">
            <div class="navbar-nav">
              <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sair</a>
              </div>
            </div>
        </header>
          
          <div class="container-fluid">
            <div class="row">
              <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                  <ul class="nav flex-column">

                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">
                        <span data-feather="home"></span>
                        <i class="bi bi-display"></i>
                        Início
                      </a>                   
                    </li>

                  </ul>                
                </div>
             </nav>
              </div>
            </div>
          

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Início</h1>           
            </div>


            <div id="body-do-cont">
                  <form method="POST" action="edit.php">
                    <?php
                      include "conexao.php";
                      $sele = $pdo->query("SELECT * FROM conteudo");
                      while($selec = $sele->fetch(PDO::FETCH_ASSOC)) {

                    ?>
                    <div class="card" style="width: 18rem;">
                        <img src="fotos/pc.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $selec['titulo'];?></h5>
                        <p class="card-text"><?php echo $selec['descricao'];?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">Troco por: <?php echo $selec['nome'];?></li>
                        <li class="list-group-item">Localização: <?php echo $selec['localizacao'];?></li>
                        </ul>
                        <button name="btn1" type="submit" class="btn btn-warning">Editar</button>
                    </div>
                    <?php } ?>
                    </form>



                    <div class="card" style="width: 18rem;">
                        <img src="fotos/cadeira.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Cadeira</h5>
                        <p class="card-text">Cadeira que herdei de meu pai, muito nova!</p>
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">Troco por: Mesa</li>
                        <li class="list-group-item">Localização: Pelotas - RS</li>
                        </ul>
                        <button name="btn1" type="submit" class="btn btn-warning">Editar</button>
                    </div>
              </div>
                      </main>    

                      <footer>
                        <p class="footer-label">&copy;Desenvolvimento: João Vitor 2022</p>
                      </footer>                   
    </body>                   
</html>
