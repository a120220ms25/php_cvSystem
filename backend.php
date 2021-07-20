<!doctype html>
<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/backend.css">
    <title>backend page</title>
  </head>
  <body>
    <div class="content">
      <div class="container">
        <div class="box p-5 py-4">
        <div class="wrap row rounded-1">
            <div class="aside col-3 border border-info p-0">
              <ul class="p-0 m-0">
                <li><a class="p-3" href="./backend.php?do=all">All Reaume</a></li>
                <li><a class="p-3" href="./backend.php?do=about">About</a></li>
                <li><a class="p-3" href="./backend.php?do=skills">Skills</a></li>
                <li><a class="p-3" href="./backend.php?do=project">Project</a></li>
                <li><a class="p-3" href="./backend.php?do=work">Work Experience</a></li>
                <li><a class="p-3" href="./backend.php?do=education">Education</a></li>
              </ul>
            </div>
            <div class="section col-9 ">
            <div class="col-12">
           <h1 class="text-center p-2 px-5 fs-5">Welcome to the resume system</h1>
           </div>
              <div class="border border-success d-flex justify-content-between">
                <span>前端工程師履歷</span>
                <div class="btn">
                    <button>登出</button>
                    <button>列印resume</button>      
                </div>
              </div>
              <div class="border border-success ">
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
      








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>