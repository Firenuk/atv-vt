<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8" />
        <link rel="stylesheet" type="text/css" href="../public/assets/bootstrap/css/bootstrap.min.css" />
        
        

        <title>pagina inicial</title>
    </head>
    <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- logotipo da barra de navegação -->
    <a class="navbar-brand" href="../index.php">
        <img src="..\public\assets\img\logo_busao.jpeg" alt="Logo" height="100px" />
    </a>
    <!-- Botão para mostrar itens em telas menores -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../public/qrcode.php">
            Como usar o QRCode?
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../public/recarga.php">
            Minha recarga
          </a>
        </li>
        
      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>