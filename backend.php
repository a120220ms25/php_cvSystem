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
    <h1 class="title text-center p-2 fs-5">Resume System</h1>
    <div class="container-fluid">
        <div class="main row  m-0 ">
          <!-- 選單區域 -->
           <div class="col-lg-2  p-0 ">
            <!-- hello -->
            <div class="memberinfo col-12 row py-2 m-0">
                <span class="col-6 col-lg-12  word mb-2" target="balnk" href="https://github.com/a120220ms25">Hello! 
                <?= $_SESSION['account']?>
                </span>
                <div class="col-6 col-lg-12  memberinfo-btn row justify-content-between ">
                  <a class="col-5 logoutBtn btn " href="./?do=login">Logout</a>
                  <a class=" col-5 printBtn btn" href="#">Print cv</a>
                </div>
            </div>
            <ul class="col-12 navbar-nav me-auto p-0 m-0 row ">
                  <li class="nav-item col-12 p-0">
                    <a class="py-2 nav-link active ms-1 ms-md-7 text-dark"  href="./backend.php?do=all">All</a>
                  </li>
                  <li class="nav-item p-0">
                    <a class="py-2 nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=about">About</a>
                  </li>
                  <li class="nav-item p-0">
                    <a class="py-2 nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=introduction">Introduction</a>
                  </li>
                  <li class="nav-item p-0">
                    <a class="py-2 nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=contact">contact</a>
                  </li>
                  <li class="nav-item p-0">
                    <a class="py-2 nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=photo">Photo</a>
                  </li>
                  <li class="nav-item p-0">
                    <a class="py-2 nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=skills">Skills</a>
                  </li>
                  <li class="nav-item p-0">
                    <a class="nav-link  py-2 ms-1 ms-md-7 text-dark" href="./backend.php?do=project">Project</a>
                  </li>
                  <li class="nav-item p-0">
                    <a class="py-2 nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=work">Work</a>
                  </li>
                  <li class="nav-item p-0">
                    <a class="py-2 nav-link  ms-1 ms-md-7 text-dark" href="./backend.php?do=education">Education</a>
                  </li>
            </ul>           
         </div>
         
          <div class="col-lg-10 bg-transparent">
            <div class="content">
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
        </div>
    </div>
   


  <!-- modal -->
      <div id="cover" style="display:none; ">
        <div id="coverr" style="position:relative;" >
          <a style="position:absolute; right:15px; top:15px; cursor:pointer; z-index:9999;"
            onclick="cl(&#39;#cover&#39;)">X</a>
          <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9899;"></div>
        </div>
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>