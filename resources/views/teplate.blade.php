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

    <title>ScriptQube</title>
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
                </ul>
            </div>
            
        </nav>
      </div>
      </div>
      @yield('contents')

    @yield('script')
</body>
</html>
