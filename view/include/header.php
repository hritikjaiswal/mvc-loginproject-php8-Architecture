<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/mvc_loginproject/public/script/jquery-3.6.1.min.js"></script>
  <script src="/mvc_loginproject/public/script/index.js"></script>
  <!-- -->
</head>
<style>
  html, body {padding:0; margin:0; height:100%;}
  footer{bottom: 0; left: 0; right: 0; margin-top: 35%;}
</style>
<body>
<!-- fixed-top  -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/mvc_loginproject/index.php">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/mvc_loginproject/index.php?function=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mvc_loginproject/index.php?function=about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mvc_loginproject/index.php?function=contact">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        
        <?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        ?>
        <a href="/mvc_loginproject/index.php?function=user"><button class="btn mx-3 btn-outline-light" type="button">User</button></a>
        <a href="/mvc_loginproject/index.php?controller=logout&function=logout"><button class="btn mx-3 btn-outline-light" type="button">Logout</button></a>

        <?php } else { ?>
          <a href="/mvc_loginproject/index.php?function=login"><button class="btn mx-3 btn-outline-light" type="button">Login</button></a>
        
        <a href="/mvc_loginproject/index.php?function=register"><button class="btn btn-primary" type="button">Register</button></a>
        <?php } ?>
      </form>
    </div>
  </div>
</nav>




