<?php include('config/constant.php'); ?>
<!doctype html>
<html class="h-100" lang="en">

  <head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A growing collection of ready to use components for the CSS framework Bootstrap 5">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <meta name="author" content="Holger Koenemann">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>Login Now</title>
  <link rel="stylesheet" href="css/theme.min.css">

<style>

@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local(''),
       url('./fonts/inter-v12-latin-300.woff2') format('woff2'),
       url('./fonts/inter-v12-latin-300.woff') format('woff');
}

@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local(''),
       url('./fonts/inter-v12-latin-500.woff2') format('woff2'),
       url('./fonts/inter-v12-latin-500.woff') format('woff');
}
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local(''),
       url('./fonts/inter-v12-latin-700.woff2') format('woff2'), 
       url('./fonts/inter-v12-latin-700.woff') format('woff'); 
}

</style>

  </head>

  <body class="d-flex h-100 w-100" data-bs-spy="scroll" data-bs-target="#navScroll">

    <div class="h-100 container-fluid">
      <div class="h-100 row d-flex align-items-stretch">
        
          <div class="col-12 col-md-7 col-lg-6 d-flex align-items-start flex-column px-vw-5">
          
            <header class="mb-auto col-12">
              <a class="navbar-brand pe-4 fs-4" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-layers-half" viewbox="0 0 16 16">
                  <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
                </svg>
                <span class="ms-1 fw-bolder">Lab Automation</span>
              </a>

            </header>
            <main class="mb-auto col-12">
              <h1 class="display-6">Login with your account</h1>
              
                  <form class="row" action="" method="POST">
                  <div class="col-12 col-lg-10 col-xl-8">
                  <div class="mb-3">                  
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email Address</label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputPassword1" name="Email">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="Password">
                  </div>                  
                  
                  <p class="small text-muted">If you are not a part of our community register your company and work with us <a href="register.php">Register now</a> </p>
                  <button type="submit" name="submit" class="btn btn-primary btn-xl">SignIn</button>
                  </div>
                  </form>

            </main>
          </div>
          
            <div class="col-12 col-md-5 col-lg-6 bg-cover" style="background-image: url('./img/webp/colorful.webp');"></div>
          
        </div>
        <footer>
          <div class="container text-center py-3 small">Made by <a class="link-fancy"
              target="_blank">A/U_Company.com</a>
          </div>
        </footer>
      </div>
    </body>
    </html>

<?php

      if(isset($_POST['submit']))
      {    
          $Email = $_POST['Email'];
          $Password = md5($_POST['Password']);
          // $Password = $_POST['Password'];
          

          $sql = "SELECT * FROM `user` WHERE `Email`='$Email' AND `Password`='$Password'";
          $res = mysqli_query($conn, $sql);
          $run = mysqli_num_rows($res);

          if($run>0)
          {
            while($row = mysqli_fetch_assoc($res))
            {
              $_SESSION['ID'] = $row['ID'];
              $_SESSION['UserName'] = $row['UserName'];
              $_SESSION['Email'] = $row['Email'];
              $_SESSION['UniqueC'] = $row['UniqueC'];
              $_SESSION['Type'] = $row['Type'];

                    echo "<script>                        
                          window.location.href='dashboard/index.php';
                    </script>";
            }          
          }
          else
          {
            echo "<script>
                  alert('Email or password is invalid!')
                  window.location.href='login.php';
            </script>";
          }
      }

?>
