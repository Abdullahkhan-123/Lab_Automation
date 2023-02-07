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
  <title>Register a new account</title>
  <link rel="stylesheet" href="css/theme.min.css">

   <style>

@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local(''),
       url('./fonts/inter-v12-latin-300.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('./fonts/inter-v12-latin-300.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}

@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local(''),
       url('./fonts/inter-v12-latin-500.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('./fonts/inter-v12-latin-500.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local(''),
       url('./fonts/inter-v12-latin-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('./fonts/inter-v12-latin-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}

</style>

  </head>

  <body class="d-flex h-100 w-100" data-bs-spy="scroll" data-bs-target="#navScroll">

    <div class="h-100 container-fluid">
      <div class="h-100 row d-flex align-items-stretch">
        
          <div class="col-12 col-md-7 col-lg-6 d-flex align-items-start flex-column px-vw-5">
          
            <header class="mb-auto col-12"> <!--py-vh-2-->
              <a class="navbar-brand pe-4 fs-4" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-layers-half" viewbox="0 0 16 16">
                  <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
                </svg>
                <span class="ms-1 fw-bolder">Lab Automation</span>
              </a>

            </header>
            <main class="mb-auto col-12">              
              <h1 class="display-6">Register a new company</h1>
              
                  <form class="row" action="" method="POST">
                  <div class="col-12 col-lg-10 col-xl-8">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Company Name</label>
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="UserName" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email Address</label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputPassword1" name="Email" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="Password" required>
                  </div>                                    
                  <p class="small text-muted">If you are also part of our community please login and we are thanking to you for working with us <a href="login.php">Login</a> </p>
                  <button type="submit" name="submit" class="btn btn-primary btn-xl">SignUp</button>
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
      $UserName = $_POST['UserName'];
      $Email = $_POST['Email'];
      $Password = md5($_POST['Password']);      
      $Unique = bin2hex(random_bytes(3));
      $Type = 'User';

      $sql = "INSERT INTO `user`(`UserName`, `Email`, `Password`, `UniqueC`, `Type`) VALUES ('$UserName','$Email','$Password','$Unique','$Type')";
      $res = mysqli_query($conn, $sql);

      if($res==TRUE)
      {
        echo "<script>
              alert('User register succesfully')
              window.location.href='login.php';
        </script>";
      }
      else
      {
        echo "<script>
              alert('User not register')
              window.location.href='register.php';
        </script>";
      }




  }


?>
