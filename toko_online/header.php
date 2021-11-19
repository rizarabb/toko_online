<?php 

session_start();

    if($_SESSION['status_login']!=true){

        header('location: login.php');

    }

?>

<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="box-shadow: 4px 4px 5px -4px;">

      <div class="container-fluid">

        <a class="navbar-brand" href="home.php">Toko Onlen</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav">

            <li class="nav-item">

              <a class="nav-link active" aria-current="page" href="home.php">Home</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" aria-current="page" href="produk.php">Produk</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" aria-current="page" href="tambah_produk.php">Jual Produk</a>

            </li>

            
            

          </ul>

        
    



      </div>
      <div class="d-flex align-items-center">
        <form class="w-100 me-3">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="foto/png-transparent-computer-icons-user-profile-login-user-heroes-sphere-black-thumbnail.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="profil.php">profil</a></li>
            <li><a class="dropdown-item" href="logout.php">logout</a></li>
            
          </ul>
        </div>
    </div>

    </nav>

  <div class="container bg-light rounded" style="margin-top:10px">