
<!doctype html>
<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
    <title>loginPage</title>
  </head>
  <body>
    <div class="body login-bg">
      <div class="bg-filter align-items-center justify-content-center row align-content-center  m-0 h-100">
          <h1 class="title fs-3 fs-md-1 text-center text-light fw-bold mt-2">Welcome to the resume system <small class="fs-6 text-center text-light d-block mb-2"> Please login or register first</small></h1>
            <?php
              $do = (isset($_GET['do'])) ? $_GET['do'] : 'login';
              $file = "".$do.".php";     				
              if(file_exists($file)){
                  include $file;
              }else{
                include 'login.php';
              }
              ?>
            
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>