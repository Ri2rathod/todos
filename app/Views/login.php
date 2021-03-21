<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body >
    <div class="container">
        <div class="row">
            <div class="col-4  mx-auto bg-light shadow my-5">
                <h1 class="mx-auto py-2 text-center display-5">Login</h1>
                <hr class="w-50 mx-auto">
                <form class="py-3" method="POST" action="./login">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" placeholder="Enter Your Email" class="form-control <?= session('msg')?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
                      <div class="invalid-feedback">
                        Please enter a valid email address and Password.
                      </div>
                    </div>
                    <div class="mb-0">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" placeholder="Enter Your Password" class="form-control <?= session('msg')?>" id="exampleInputPassword1">
                      
                    </div>
                    <div class="mb-3">
                      <span class=""><a href="/forget-password" class="link-primary"> Forget Password?</a></span>
                    </div>                   
                    <div class="d-grid">
                        <button type="submit" class="btn  btn-primary">Login</button>
                    </div>
                  </form>
                  <div class="py-1">
                    <div class="my-2">
                      <hr class="mx-auto w-25">
                      <div class="d-grid">
                        <a href="/SignUp" class="btn btn-success">Sign Up</a>
                      </div>
                    </div>
                  </div>
                
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
   
  
  </body>
</html>