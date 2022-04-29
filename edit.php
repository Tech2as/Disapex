<?php
include 'conexao.php';
?>
<html>

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

    <main class="edit-form">
        <form class="form-edit" method="POST" align="center">

        <?php
        $sele = $pdo->query("SELECT * FROM conteudo");
        while($selec = $sele->fetch(PDO::FETCH_ASSOC)) {
        ?>

        <label class="label-form">Título:</label>
        <input class="input-form" name="titulo" type="text" value="<?php echo $selec['titulo'];?>">

        <label class="label-form">Descrição:</label>
        <textarea class="input-form"  name="descricao" value="<?php echo $selec['descricao'];?>"></textarea>

        <label class="label-form">Troca por:</label>
        <input class="input-form" name="nome" type="text" value="<?php echo $selec['nome'];?>">
        
        <label class="label-form">Localização:</label>
        <input class="input-form"  name="localizacao" type="text" value="<?php echo $selec['localizacao'];?>">
            <br><br>
        <input class="button-form" name="submit" type="submit" value="Salvar">
        <?php } ?>
        </form>
    </main>

        <footer>
            <p class="footer-label">&copy;Desenvolvimento: João Vitor 2022</p>
        </footer>
</body>
</html>

<?php
if(isset($_POST['submit'])){

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $nome = $_POST['nome'];
    $localizacao = $_POST['localizacao'];

    $inserir = $pdo->prepare("UPDATE conteudo SET titulo='$titulo', descricao='$descricao', nome='$nome', localizacao='$localizacao'
    WHERE id=1");
    $inserir->execute();
    header('location: index.php');
}
?>