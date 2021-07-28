<?php include_once './base.php' ?>

<!doctype html>
<html lang="zh-tw">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/back.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@200&display=swap" rel="stylesheet">
  <script src="./js/jquery-1.9.1.min.js"></script>
  <script src="./js/js.js"></script>
  <link rel="stylesheet" href="./css/css.css">
  <link rel="stylesheet" href="./css/back.css">
  <title>Resume System</title>
</head>

<body>
  <!-- <?php isset($_SESSION['account'])?"": to('./index.php') ?> -->
  <header class="header bg-white">
    <div class="section p-3">
      <div class="container ">
        <div class="row align-items-center">
          <div class="col p-0">
            <h1 class="title fs-4 m-0">ResumeSystem</h1>
          </div>
          <div class="col">
            <span class="word " target="balnk" href="https://github.com/a120220ms25">Hello!
              <?= $_SESSION['account']?>
              <a class="logoutBtn btn ms-2" href="./?do=login">Logout</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>
<!-- section 選項 -->
  <div class="section pt-2">
    <div class="container nav p-0 justify-content-center">
      <div class="navbar">
        <span class=" "><a href="./backend.php?do=all">All</a></span>
          <span class=" dropdown">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-bs-toggle="dropdown" aria-expanded="false">
                關於我
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="./backend.php?do=about">姓名</a></li>
                <li><a class="dropdown-item"  href="./backend.php?do=introduction">自我介紹</a></li>
                <li><a class="dropdown-item"href="./backend.php?do=contact">聯絡方式</a></li>
                <li><a class="dropdown-item" href="./backend.php?do=photo">照片</a></li>
                <li><a class="dropdown-item" href="./backend.php?do=basic">基本資料</a></li>
              </ul>
          </span>
          <span class=""><a href="./backend.php?do=skills">技能</a></span>
          <span class=""><a href="./backend.php?do=project">作品集</a></span>
          <span class=""><a href="./backend.php?do=work">工作經歷</a></span>
          <span class=""><a href="./backend.php?do=education">學歷</a></span>
          <span class=""><a target="_blank" href="cv_view.php">預覽</a></span>
      </div>
    </div>
  </div>
<!-- 主要顯示區域 -->
<div class="section  pt-2">
  <div class="container">
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

 


  <!-- modal -->
  <div id="cover" style="display:none; ">
    <div id="coverr" style="position:relative;">
      <a style="position:absolute; right:15px; top:15px; cursor:pointer; z-index:9999;"
        onclick="cl(&#39;#cover&#39;)">X</a>
      <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9899;"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
</body>

</html>