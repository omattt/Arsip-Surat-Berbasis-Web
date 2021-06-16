<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>E-ARSIP - Login</title>

  
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>
  <body>
    
<main class="form-signin text-center">
  <form class="form-signin" method="post" action="cek_login.php">
    <div class="text-center mb-4">
      <img class="mb-4" src="assets/logo.png" alt="" width="140" height="110">
      <h1 class="h3 mb-3 fw-normal">Login E-Arsip</h1>
      <p>Silahkan masukkan Username dan Password anda, sebelum masuk ke dalam sistem E-Arsip</p>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="username" name="username" placeholder="Email address" required autofocus>
      <label for="username">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="Password"  name ="password" placeholder="Password" required>
      <label for="Password">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021-<?=date('Y')?> by. Kelompok 10 Basdat </p>
  </form>
</main>


    
  </body>
</html>
