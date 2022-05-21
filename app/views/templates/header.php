<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        redirect('Users/login');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title><?=$data['title']?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="<?=ASSETS."main/"?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--

    TemplateMo 546 Sixteen Clothing

    https://templatemo.com/tm-546-sixteen-clothing

    -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?=ASSETS."main/"?>css/fontawesome.css">
    <link rel="stylesheet" href="<?=ASSETS."main/"?>css/templatemo-sixteen.css">
    <link rel="stylesheet" href="<?=ASSETS."main/"?>css/owl.css">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?=URLROOT?>home">
                    <h2>Sixteen <em>Clothing</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?=$data['active'][0]?>">
                            <a class="nav-link" href="<?=URLROOT?>home">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item <?=$data['active'][1]?>">
                            <a class="nav-link" href="<?=URLROOT?>home/products">Our Products</a>
                        </li>
                        <li class="nav-item <?=$data['active'][2]?>">
                            <a class="nav-link" href="<?=URLROOT?>home/about">About Us</a>
                        </li>
                        <li class="nav-item <?=$data['active'][3]?>">
                            <a class="nav-link" href="<?=URLROOT?>home/contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-danger" href="<?=URLROOT?>Users/logout">Logout <i
                                    class="bi bi-box-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>