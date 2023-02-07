<?php include('../config/constant.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">  
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Lab Autoomation | Dashboard</title>
</head>
<body class="bg-gray-100">


<!-- start navbar -->
<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
    
    <!-- logo -->
    <div class="flex-none w-56 flex flex-row items-center">
      <img src="img/logo.png" class="w-10 flex-none">
      <strong class="capitalize ml-1 flex-1">Lab Automation</strong>

      <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
        <i class="fad fa-list-ul"></i>
      </button>
    </div>
    <!-- end logo -->   
    
    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
      <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
      <!-- left -->
      <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
            
      </div>
      <!-- end left -->      

      <!-- right -->
      <div class="flex flex-row-reverse items-center"> 

        <!-- user -->
        <div class="dropdown relative md:static">

          <button class="menu-btn focus:outline-none  flex flex-wrap items-center">
            <div class="w-8 h-8 overflow-hidden rounded-full">
              <img class="w-full h-full object-cover" src="img/user.svg" >
            </div> 

            <div class="ml-2 capitalize flex">
              <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none"><?php echo $_SESSION['UserName'] ?></h1>
              <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
            </div>                        
          </button>

          <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

          <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

            <!-- item -->
            <a class="px-3 py-2 block capitalize text-dark text-decoration-none font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="../index.php">
              <i class="fad fa-badge-check text-xs mr-1"></i> 
                Go To Website
            </a>     
            <!-- end item -->

            <hr>

            <!-- item -->
            <a class="px-4 py-2 block capitalize text-dark text-decoration-none font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="../config/logout.php">
              <i class="fad fa-user-times text-xs mr-1"></i> 
              log out
            </a>     
            <!-- end item -->

          </div>
        </div>
        <!-- end user -->

        <!-- notifcation -->
        
        <div class="dropdown relative mr-5 md:static">        

          <button class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
            <i class="fad fa-comments"></i>               
          </button>

          <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

        </div>
        <!-- end notifcation -->

        <!-- messages -->
        <form action="" method="GET">
        <div class="dropdown relative mr-5 md:static">
        <div class="input-group rounded">                
          <input type="search" class="form-control rounded" placeholder="Search" name="Code" aria-label="Search" aria-describedby="search-addon" />          
            <span class="input-group-text border-0" id="search-addon">
              <button type="submit">
                  <i class="fas fa-search"></i>
              </button>
            </span>
            
          
        </div>                    
          
        </div>
        </form>
        <!-- end messages -->               


      </div>
      <!-- end right -->
    </div>
    <!-- end navbar content -->

  </div>
<!-- end navbar -->


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  
    <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>


      <?php 
      
          if(isset($_SESSION['Type']))
          {

            if($_SESSION['Type']=='User')
            {

              ?>

                  <!-- end sidebar toggle -->

                  <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Product analyics</p>

                  <!-- link -->
                  <a href="index.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fad fa-chart-pie text-xs mr-2"></i>                
                    Dashboard
                  </a>
                  <!-- end link -->

                  <!-- link -->
                  <a href="addproduct.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fad fa-chart-pie text-xs mr-2"></i>                
                    Add Product
                  </a>
                  <!-- end link -->

                  <!-- link -->
                  <a href="productprocess.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fad fa-shopping-cart text-xs mr-2"></i>
                  Products
                  </a>
                  <!-- end link -->

                  <!-- link -->
                  <a href="publishproduct.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fad fa-envelope-open-text text-xs mr-2"></i>
                    Publish Products
                  </a>
                  <!-- end link -->

                  <!-- link -->
                  <a href="rejectproduct.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fad fa-comments text-xs mr-2"></i>
                    Product Re-Manufacture 
                  </a>
                  <!-- end link -->

              <?php

            }
            elseif($_SESSION['Type']=='Srs')
            {
                ?>

                  <!-- link -->
                  <a href="index.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fad fa-chart-pie text-xs mr-2"></i>                
                    Dashboard
                  </a>
                  <!-- end link -->

                    <!-- link -->
                  <a href="Srsproducts.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fad fa-shopping-cart text-xs mr-2"></i>
                    Products
                  </a>
                  <!-- end link -->

                    <!-- link -->
                    <a href="sendedtocpri.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fad fa-shopping-cart text-xs mr-2"></i>
                    Sended Product CPRI
                  </a>
                  <!-- end link -->

                  <!-- link -->
                  <a href="Cdetapprove.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fad fa-envelope-open-text text-xs mr-2"></i>
                    Publish Products CPRI
                  </a>
                  <!-- end link -->

                  <!-- link -->
                  <a href="re-manufacture.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fad fa-comments text-xs mr-2"></i>
                    Re-Manufacture CPRI
                  </a>
                  <!-- end link -->
                <?php
            }
            elseif($_SESSION['Type']=='Cpri')
            {
                ?>

                    <!-- link -->
                    <a href="index.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-chart-pie text-xs mr-2"></i>                
                      Dashboard
                    </a>
                    <!-- end link -->

                    <!-- link -->
                    <a href="Cproducts.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-shopping-cart text-xs mr-2"></i>
                      SRS Products
                    </a>
                    <!-- end link -->

                    <!-- link -->
                    <a href="Cdetapprove.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-envelope-open-text text-xs mr-2"></i>
                      Our Publish Products
                    </a>
                    <!-- end link -->

                    <!-- link -->
                    <a href="re-manufacture.php" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-comments text-xs mr-2"></i>
                      Our Re-Manufacture
                    </a>
                    <!-- end link -->
                
                <?php
            }
            else
            {
              ?>

                  <a href="#" class="mb-3 capitalize text-dark text-decoration-none font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="fad fa-comments text-xs mr-2"></i>
                    Chech your Roletype 
                  </a>

              <?php
            }

          }



      ?>

    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->

  