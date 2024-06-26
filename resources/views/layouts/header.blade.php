<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IUT FIS</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- own css and js --}}
    <link rel="stylesheet" href="{{ url('css/util.css') }}">

    {{-- icons --}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    {{-- Math --}}
    <script defer type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"> </script>


</head>
<body>

    <nav class="navbar navbar-dark navbar-expand-lg bgd fixed-top bs" id="boss_navbar">
        <div class="container">
          <a class="navbar-brand" href="/" style="font-family: poppins, sans-sherif"><img src="/rsx/logo.svg" alt="" style="width: 80px; margin-top:-5px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/announcements">Announcements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/workshop">Workshops</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/news">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/activities">Activities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Executives</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Workshops
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> --}}
              {{-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> --}}
            </ul>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

      <style>
        .bgd{
          background-color: rgba(0, 14, 24, 0.5);
          transition: background-color ease-in-out 0.3s;
        }

        .bg-body-tertiary{
          transition: background-color ease-in-out 0.3s;
        }
      </style>
    
</body>
</html>