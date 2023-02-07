<?php include('config/constant.php') ?>
<!doctype html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A growing collection of ready to use components for the CSS framework Bootstrap 5">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <meta name="author" content="Holger Koenemann">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>Lab Automation</title>
  <link rel="stylesheet" href="css/theme.min.css">

  <style>
    /* inter-300 - latin */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: local(''),
        url('./fonts/inter-v12-latin-300.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./fonts/inter-v12-latin-300.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local(''),
        url('./fonts/inter-v12-latin-500.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./fonts/inter-v12-latin-500.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local(''),
        url('./fonts/inter-v12-latin-700.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./fonts/inter-v12-latin-700.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }
  </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navScroll">

  <nav id="navScroll" class="navbar navbar-expand-lg navbar-light fixed-top" tabindex="0">
    <div class="container">
      <a class="navbar-brand pe-4 fs-4" href="/">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-layers-half"
          viewbox="0 0 16 16">
          <path
            d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
        </svg>
        <span class="ms-1 fw-bolder">Lab Automation</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav me-auto mb-2 mb-lg-0"></div>

          <?php

            if(isset($_SESSION['Type']))
            {
                ?>  
                    <a href="dashboard/index.php" data-splitbee-event="Click Download" aria-label="Download this template"
                    class="link-dark pb-1 link-fancy me-2">
                    Dashboard    
                    <i style="font-size:18px" class="fa">&#xf233;</i>                
                  </a>
                <?php


            }            
            else
            {
                ?>
                    <a href="register.php" data-splitbee-event="Click Download" aria-label="Download this template"
                      class="link-dark pb-1 link-fancy me-2">
                      Register                      
                    </a>
                    <a href="login.php" data-splitbee-event="Click Download" aria-label="Download this template"
                      class="link-dark pb-1 link-fancy me-2">
                        Login                      
                    </a>
                <?php
            }


          ?>

                  
      </div>
    </div>
  </nav>

  <main>
    <div class="w-100 overflow-hidden bg-gray-100" id="top">

      <div class="container position-relative">
        <div class="col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left"
          style="background-image: url(img/webp/interior11.webp);">

        </div>
        <div class="row">

          <div class="col-lg-7 py-vh-6 position-relative" data-aos="fade-right">
            <h1 class="display-1 fw-bold mt-5">We are working for testing the products</h1>
            <p class="lead mt-3">
                We are very fast tester of the products if you thinking for that the your product will late in testing process so don't worry you will take answer about your product in some of the day's process
            </p>
            <a href="login.php" class="btn btn-dark btn-xl shadow me-3 rounded-0 my-2">Login Now</a>
          </div>



        </div>
      </div>

    </div>

    <div class="py-vh-5 w-100 overflow-hidden" id="services">
      <div class="container">
      
      </div>
    </div>

    

    <div class="text-light w-100 overflow-hidden" id="workwithus">
      <div class="container bg-gray-900 py-vh-6 ">
        <div class="row d-flex justify-content-center">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8 text-center" data-aos="fade">
              <p class="text-secondary lead">Let´s start your journey together!</p>
              <h2 class="display-6 mb-5">Hello, If you want work with us click the button and our community as place your product and we will response about your product</h2>
            </div>
            <div class="col-12">
              <a href="register.php" class="btn btn-warning btn-xl shadow me-3 mt-4" data-aos="fade-down">Join our cummunity</a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="small py-vh-3 w-100 overflow-hidden">
      <div class="container">
        <div class="row">          
          <div class="col-md-6 col-lg-6 border-end" data-aos="fade-up" data-aos-delay="200">
            <div class="d-flex">
              <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                  class="bi bi-card-checklist" viewbox="0 0 16 16">
                  <path
                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                  <path
                    d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                </svg>
              </div>
              <div class="col-md-9 flex-fill">
                <h3 class="h5 my-2">Independently Checked</h3>
                <p>Maybe we would do something to ensure that you get what you ordered. But you can´t order anything
                  here, so we can give you a 100% gurantee that anything would be great!</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="d-flex">
              <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                  class="bi bi-window-sidebar" viewbox="0 0 16 16">
                  <path
                    d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                  <path
                    d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1h12zM1 13V6h4v8H2a1 1 0 0 1-1-1zm5 1V6h9v7a1 1 0 0 1-1 1H6z" />
                </svg>
              </div>
              <div class="col-md-9 flex-fill">
                <h3 class="h5 my-2">Online Support</h3>
                <p>Okay, we have this crazy online support form. Fill it out and the content will be mailed to you as
                  PDF. Print it out. Than send it via Fax to our super duper hidden Fax number.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </main>

  <footer>
    <div class="container small border-top">
    <div class="container text-center py-3 small">Made by <a class="link-fancy"
        target="_blank">A/U_Company.com</a>
    </div>
  </footer>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/aos.js"></script>
  <script>
    AOS.init({
      duration: 800, // values from 0 to 3000, with step 50ms
    });
  </script>

  <script>
    let scrollpos = window.scrollY;
    const header = document.querySelector(".navbar");
    const header_height = header.offsetHeight;

    const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm");
    const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm");

    window.addEventListener('scroll', function () {
      scrollpos = window.scrollY;

      if (scrollpos >= header_height) { add_class_on_scroll(); }
      else { remove_class_on_scroll(); }

      console.log(scrollpos);
    })
  </script>

</body>

</html>