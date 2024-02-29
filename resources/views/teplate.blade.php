<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title>Document</title>
    @yield('style')

</head>
<body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SCRIPTQUBE</a>
          <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Align menu items to the right -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('service')}}">SERVICE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('portfolio')}}">PORTFOLIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('pricing')}}">PRICING</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('contents')

    @yield('script')
</body>
</html>