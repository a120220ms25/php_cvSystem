

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
    <style>
     .btn{
      background: linear-gradient(to right, #1488cc, #2b32b2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        color: white;
        width: 100%;
            }
      .login a {
          text-decoration: none;
          color:#1488cc
        }
        .content-block{
          position: relative;
          background: linear-gradient(to left, #1488cc, #2b32b2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          color: white;

        }
      .content-block{
          border-radius:0px;
          border-top-left-radius: 10px;
          border-bottom-left-radius: 10px;

        }
      .content-login{
        border-radius:0px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
      }

      .form-control:focus {
          color: #212529;
          background-color: #fff;
          border-color:#2b32b2!important;
          outline: 0;
          box-shadow: 0 0 0 0.25rem#2b32b269 !important;
        }
        .btn-check:focus+.btn, .btn:focus {
          outline: 0;
          box-shadow: 0 0 0 0.25rem #2b32b269 !important;
        }
        .login{
          float: right;
        }
    </style>
    <title>signUpPage</title>
  </head>
  <body>
    
          <div class="wrap d-flex justify-content-center py-1 ">
            <div class="row wrap-content w-75 justify-content-center p-0 m-0">
            <div class="content-block d-none d-md-block p-5 col-md-4">
                <div class="content-block-text text-center ">
                  If you think you are too small to make a difference, try sleeping with a mosquito.
                </div>
              </div>
              <div class="col-md-4 content-login p-4 bg-white">
                <h1 class="fs-3 fw-bold text-center">User SignUp</h1>
                <div class="account mb-4 fs-6 text-center">Please input to your account</div>

                  <form class="text-lg-start mb-5" method="POST" action="./api/edit_member.php">
                    <div class="mb-2">
                      <label for="exampleInputEmail1" class="form-label">Account</label>
                      <input name="account" type="text" class="form-control w-100" id="exampleInputAccount">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input name="password" type="password" class="form-control w-100" id="exampleInputPassword1">
                    </div>
                    <input type="submit" value="SIGNUP" class="btn w-100">
                    <input type="hidden" name="member" value="signup">
                    
                  </form>
                  <div class="login">
                    <a href="./?do=login">or login</a>
                  </div>
              </div>
            
            </div>
          </div>
     

  
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>