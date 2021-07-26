<?php include 'base.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="./all.css">
  <title>Hello, world!</title>
</head>

<body>
 

  <div class="container">
    <div class="main my-4">
      <!-- about -->
      <div class="row section p-3 mb-3">
        <div class="col-8 border border-info">
          <h1><?=$About->find(1)['name']?></h1>
          <?php
           $rows=$Introduction->all(['sh'=>1]);
            foreach ($rows as $key => $value) {
                ?>
          <p><?=$value['content'];?></p>
          <?php
              }
              ?>
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
        <div class="col-4 border border- success row">
          <div class="col-12">
            <img src="img/<?=$Photo->find(['sh'=>1])['photo'];?>" alt="" class="w-100">
          </div>
          <div class="col-12">
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

        </div>
      </div>

      <!-- skills -->
      <div class="row section p-3 mb-3">
        <div class="col-12">
          <h2>skills</h2>
          <?php
            $rows=$Skills->all(['parent'=>0]);
            foreach ($rows as $key => $value) {
                ?>
        </div>
        <div class="col-4 border border-info">
          <h3><?=$value['title']?></h3>
          <?php
             $subrows=$Skills->all(['parent'=>$value['id']]);
             foreach ($subrows as $key => $subvalue) {
              ?>
          <span><?=$subvalue['title']?><br></span>
            <?php
              }
              ?>
          <?php
              }
              ?>
       
        </div>
      
      </div>

      <!-- project -->
      <div class="row section p-3 mb-3">
        <div class="col-12">
          <h2>project</h2>
          <?php
            $rows=$Project->all(['sh'=>1]);
            foreach ($rows as $key => $value) {
                ?>
        </div>
        <div class="col-md-4 border border-success">
       
          <h2><?=$value['title']?></h2>
          <p><?=$value['content']?></p>
        </div>

        <div class="col-md-8 border border-danger row m-0 ">
          <div class="col-6 p-0">
            <img class="w-100 border border-dark"
              src="img01/<?=$value['img01'];?>" alt="">
          </div>
          <div class="col-6 p-0">
            <img class="w-100 border border-dark"
              src="img02/<?=$value['img02'];?>" alt="">
          </div>
          <?php
              }
              ?>
        </div>
      </div>
      
      <!-- work experience-->
      <div class="row section p-3 mb-3">
        <div class="col-12 border border-info">
          <h2>work experience</h2>
          <?php
            $rows=$Work->all(['sh'=>1]);
            foreach ($rows as $key => $value) {
                ?>
        </div>
        <div class="col-12 work-list row p-0 m-0 border border-info">
          <div class="col-2 year p-0 m-0 text-center"><?=$value['time']?></div>
          <div class="col-10 even ">
            <div class="data">
              <h6>
                <div class="point"></div><?=$value['title']?>
              </h6>
              <p class="p-2 m-0"><?=$value['content']?></p>
            </div>
            <?php
              }
              ?>
          </div>
        </div>
      </div>
      <!-- education -->
      <div class="row section p-3 mb-3">
        <div class="col-12 ">
          <h2>education</h2>
          <?php
            $rows=$Education->all(['sh'=>1]);
            foreach ($rows as $key => $value) {
                ?>
        </div>
        <div class="col-12  work-list row p-0 m-0 education-list border border-danger">
        <div class="col-2 year p-0 m-0 text-center"><?=$value['content']?></div>
          <div class="col-10 even">
            <div class="data">
              <h6>
                <div class="point"></div><?=$value['title']?>
              </h6>
              <p class="p-3 m-0"></p>
            </div>
            <?php
              }
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
</body>

</html>