<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    <script src="javascript/responsive_javascript.js"></script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- this cdn is google fafa icon  -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title>Master</title>
    @yield('style')

    <style>
       body{
           background: #f2f2f2;
      }
        .borders {
            border: 1px solid red;
        }
        .bg-blue{
            background-color: #042954;
        }
        .capitalize{
          text-transform: capitalize;}
       
        
        .script-font-family{
            /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
            /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            /* font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; */
            /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
            /* font-family: Arial, Helvetica, sans-serif; */
            /* font-family: Arial, Helvetica, sans-serif; */
            /* font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif */
        }
    </style>
    
</head>
<body>
<div class="jumbotron bg-blue">
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand text-white ms-2 " style="font-size: 40px; font-weight: 500;" href="{{route('home')}}">ScriptQube</a>
            <div class="me-1 pe-3">
                <button class="navbar-toggler bg-white" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav gap-1 script-font-family ms-auto" style="font-size:25px;">
                    <li class="nav-item ">
                      <a class="nav-link text-white h-100" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item "><a href="{{route('about')}}" class="nav-link text-white h-100" >About</a></li>
                    <li class="nav-item "><a href="{{route('service')}}" class="nav-link text-white h-100" >Service</a></li>
                    <li class="nav-item "><a href="{{route('portfolio')}}" class="nav-link text-white h-100" >Portfolio</a></li>
                    <li class="nav-item "><a href="{{route('pricing')}}" class="nav-link text-white h-100" >Pricing</a></li>
                    <li class="nav-item "><a href="{{route('contact')}}"class="nav-link text-white h-100" >Contact</a></li>
                    <li class="nav-item "><a href="https://demo.scriptqube.com/account-login"class="nav-link text-white h-100" >Demo</a></li>
                </ul>
            </div>
            
        </nav>
      </div>
      </div>
      @yield('contents')

      @yield('footer')
        <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="jumbotron mt-5" style="height:400px;background-color: ">

<!-- Footer -->
<footer class="text-center text-lg-start text-white " style="background-color: #1c2331">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-between p-4 bg-blue" style="">
    <!-- Left -->
    <div class="me-5">
      <span class="capitalize" >Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold">Script Qube</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
          At Script Qube, we're more than just a software company; we're your trusted partner in navigating the ever-evolving landscape of technology.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Products</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">School ERP</a>
          </p>
          <p>
            <a href="#!" class="text-white">Whatsapp Clone</a>
          </p>
          <p>
            <a href="#!" class="text-white">Teck Skill</a>
          </p>
          <p>
            <a href="#!" class="text-white">News Portal</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Useful links</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">Your Account</a>
          </p>
          <p>
            <a href="#!" class="text-white">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!" class="text-white">Shipping Rates</a>
          </p>
          <p>
            <a href="#!" class="text-white">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Contact</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p><i class="fas fa-home mr-3"></i>Head Office <br>Bharampura Chowk, Janakpur</p>
          <p><i class="fas fa-home mr-3">www.scriptqube.com</i></p>
          <p><i class="fas fa-envelope mr-3"></i> info@scriptqube.com</p>
          <p><i class="fas fa-phone mr-3"></i> +977-9816878592 , 9744207141</p>
        
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: rgba(0, 0, 0, 0.2)"
       >
    © 2024 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/"
       >ScriptQube.com</a
      >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<!-- End of .container -->

    
    @yield('script')
</body>
</html>
