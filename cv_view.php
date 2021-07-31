<?php include 'base.php'; ?>

<!doctype html>
<html lang="zh-tw">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/cv.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./logo.ico" type="image/x-icon">
  <title>Resume</title>
  <style>
    function print(){
      window.print();
    }
  </style>
</head>

<body>
  <!-- header -->
<header class="header bg-white"> 
    <div class="section p-3">
      <div class="container ">
        <div class="row align-items-center">
          <div class="header-title col p-0">     
          <h1 class="d-inline-block title fs-4 m-0"><a href="#">CV System</a></h1>
          </div>
          <div class="header-content col">
            <span class="word ">Hello!
              <?= $_SESSION['account']?>
              <a class="logoutBtn btn ms-2" href="./?do=login">Logout</a>        
              <a class="logoutBtn btn ms-2" href="./backend.php">Edit Page</a>  
              <a class="btn printBtn ms-2" onClick="print()">列印</a>   
            </span>
          </div>
        </div>
      </div>
    </div>
</header>


  <div class="resumePage ">
    <div class="main my-3 p-lg-2 px-lg-3">
      <!-- about -->
      <!-- mobile顯示在上 照片區塊 -->
      <div class="d-md-none main-profile col-md-4 p-0 m-0 row">
          <div class="col-12 text-center">
            <img class="mb-3 w-100 mb-1" src="img/<?=$Photo->find(['sh'=>1])['photo'];?>" alt="">
          </div>
      </div>

     <!-- 姓名 & 自我介紹 & 聯繫方式 區塊 -->
      <div class="main-section row section p-3 pt-1 ">
        <div class="col-lg-8 mb-3">
          <h1 class="fs-2 mb-3"><?=$About->find(1)['name']?></h1>
          <?php
           $rows=$Introduction->all(['sh'=>1]);
            foreach ($rows as $key => $value) {
                ?>
          <p class="mb-3"><?=$value['content'];?></p>
          <?php
              }
              ?>
              <div class="div row ">
              <div class="col-lg-6 ">
               <h3 class="fs-4 mt-3">基本資料</h3>
            <ul>
            <?php
            $rows=$Basic->all(['sh'=>1]);
            foreach ($rows as $key => $value) {
                ?>
              <li>  <?=$value['title']?>
              <span> : <?=$value['content'] ?></span></li>
              <?php
              }
              ?>
            </ul>
          </div>
          <div class="col-lg-6">
          <h3 class="mt-3 fs-4">聯繫方式</h3>
          <ul>
            <?php
            $rows=$Contact->all(['sh'=>1]);
            foreach ($rows as $key => $value) {
                ?>
            <li>
              <?=$value['title']?>
              <span> : <?=$value['content'] ?></span>
            </li>
            <?php
              }
              ?>
          </ul>
              </div>
          </div>       
        </div>
        <div class="d-none d-md-block main-profile col-lg-4 p-0 m-0 row">
          <div class="col-12">
            <img src="img/<?=$Photo->find(['sh'=>1])['photo'];?>" alt="" class="w-100 mb-1 contain" style="height:350px">
          </div>
        </div>
      </div>

      <!-- skills -->
      <div class="row section p-3 mb-4 pt-0">
        <div class="col-12 ">
          <h2 class="subSt mb-2 fs-3">Skills<span class="color01"></span></h2>
        
          <?php
            $rows=$Skills->all(['parent'=>0,'sh'=>1]);
            foreach ($rows as $key => $value) {
                ?>
        </div>
        <div class="py-2 col-lg-4 ">
          <h3 class="skillTitle fs-4"><?=$value['title']?></h3>
          <?php
             $subrows=$Skills->all(['parent'=>$value['id']]);
             foreach ($subrows as $key => $subvalue) {
              ?>
          <span ><?=$subvalue['title']?><br></span>
            <?php
              }
              ?>
          <?php
              }
              ?>
        </div>
      </div>

      <!-- project -->
      <div class="row section p-3 mb-3 pt-0">
        <div class="col-12">
          <h2 class="subSt mb-2 fs-3">Project<span class="color01"></span></h2>
          <?php
            $rows=$Project->all(['parent'=>0,'sh'=>1]);
            foreach ($rows as $key => $value) {
                ?>
        </div>
        <div class="col-lg-4 py-2 mb-lg-4 ">
          <h2 class="d-inline-block fs-4"><?=$value['title']?></h2>
          <div class="linkGroup d-inline-block ">
          <a class="link fs-5" href="<?=$value['gitlink']?>"  target="_blank" >&nbsp;<i class="fab fa-github"></i></a>
          <a class="link fs-5" href="<?=$value['demolink']?>"  target="_blank"><i class="fas fa-eye"></i></a>
          </div>
          <div class="skill mb-3">
           
              <?php
              $subskills = $Project->all(['parent'=>$value['id']]);
              foreach ($subskills as $key => $value02) {
              ?>
               <span><?=$value02['content']?></span>
            <?php
              }
              ?>
          </div>
         
          <p class="mb-1 mb-lg-3"><?=$value['content']?></p>
        </div>

        <div class="project-img col-lg-8 row m-0 ">
          <div class="col-lg-6 p-lg-3" >
            <img class="py-2 cover w-100  "
              src="img01/<?=$value['img01'];?>"  alt=""  style="height:250px">
          </div>
          <div class="col-lg-6 p-3">
            <img class="py-2 cover w-100"
              src="img02/<?=$value['img02'];?>" alt="" style="height:250px">
          </div>
          <?php
              }
              ?>
       
        </div>
      </div>
      
      <!-- work experience-->   
      <div class="row section p-3 mb-3 mx-0 pt-0 ">
       <div class="col-lg-7 workSection mb-3 ">
            <div class="col-12 mb-2 ">
              <h2 class="subSt mb-2 pb-3 fs-3">Work Experience<span class="color01"></span></h2>
              <?php
                $rows=$Work->all(['sh'=>1]);
                foreach ($rows as $key => $value) {
                    ?>
            </div>
            <div class="col-lg-12 even">
                <div class="data">
                  <h6 class="fw-bold">
                    <div class="point"></div><?=$value['title']?>&nbsp;&nbsp;<?=$value['time']?>
                  </h6>
                  <p class="experienceContent p-2 m-0 ms-2 mb-2 "><?=$value['content']?></p>
                </div>
                <?php
                  }
                  ?>
            </div>
        </div>
        <!-- education -->
        <div class="col-lg-5">
        <div class="col-12 ">
          <h2 class="subSt pb-3 mb-2 fs-3">Education / Refresher course <span class="color01"></span></h2>
          <?php
            $rows=$Education->all(['sh'=>1]);
            foreach ($rows as $key => $value) {
                ?>
          </div>
          <div class="col-12 work-list row"> 
            <div class="col-lg-12 even ">
              <div class="data">
                <h6>
                  <div class="point"></div><?=$value['title']?>
                </h6>
                <p class="experienceContent p-2 m-0 ms-2 mb-2"><?=$value['english']?></p>
              </div>
              <?php
                }
                ?>
            </div>
          </div>
        </div>
      </div> 
  </div>   
      
      </div>   
  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
</body>

</html>

 