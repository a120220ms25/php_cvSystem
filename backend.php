<?php include_once './base.php' ?>

<!doctype html>
<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/back.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@200&display=swap" rel="stylesheet">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
    <link rel="stylesheet" href="./css/css.css">
    <title>Resume System</title>
  </head>
  <body>
    <!-- <?php isset($_SESSION['account'])?"": to('./index.php') ?> -->
    <h1 class="title text-center p-2 fs-4">Resume System</h1>
    <!-- header navbar -->
    <header class="header container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light sticky-top p-2 pb-3">
          <!-- hello -->
          <span class="fs-6 navbar-brand d-none d-md-block word" target="balnk" href="https://github.com/a120220ms25">Hello! 
          <?= $_SESSION['account']?>
          </span>
        
          <a class="d-none d-lg-block logoutBtn btn me-2 " href="./?do=login">Logout</a>
          <a class="d-none d-lg-block printBtn btn" href="#">Print CV</a>
          <!-- 漢堡選單 -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" >
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- navbar link -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"> 
              </li>
            </ul>
            <div class=" d-md-flex fs-8">

               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active ms-1 ms-md-7 text-dark"  href="./backend.php?do=all">All</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=introduction">Introduction</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=contact">contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=photo">Photo</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=skills">Skills</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=project">Project</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=work">Work</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=education">Education</a>
                </li>
              </ul>
              <!-- <button class="btn btn-outline-gray text-gray ms-1 rounded-pill px-3 fw-bold" type="submit"></button> -->
            </div>
          </div>
      </nav>
    </header>

  <!-- modal -->
      <div id="cover" style="display:none; ">
        <div id="coverr" style="position:relative;" >
          <a style="position:absolute; right:15px; top:15px; cursor:pointer; z-index:9999;"
            onclick="cl(&#39;#cover&#39;)">X</a>
          <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9899;"></div>
        </div>
      </div>
  <!-- 主要區域 -->
      <div class="content">
        <div class="container">
          <div class="wrap rounded-1 my-2">
                <div class="changeArea">
                <?php
                $do = (isset($_GET['do'])) ? $_GET['do'] : 'all';
                $file = "./backend/".$do.".php";     				
                if(file_exists($file)){
                    include $file;
                }else{
                  include './backend/all.php';
                }
                ?>
                </div>            
          </div>
        </div>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>