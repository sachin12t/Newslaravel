<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link
    rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
</head>
<body>
     <div class="top-logo">
        <h1  class="animate__animated animate__heartBeat  animate__infinite"><span style="color: red">Tech</span><span style="color: green">News</span></h1>
     </div>
    
     <header>
        <div class="bar-img">
            <img src="{{asset('images/bar.png')}}" alt="" height="50" width="50">
        </div>
      
        <div class="logo">
            <a href="{{route('index')}}" style="color:green;font-size:1.7rem">TechCordy</a>
        </div>
      
        <nav>

            <ul>
                <li><a href="{{route('index')}}" style="color: red">Home</a></li>
                <li><a href="{{route('letestnews')}}">LetestNews</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ( $categeory as $c)
                      <li><a class="dropdown-item" href="#">{{$c->categoery}}</a></li>
                      @endforeach
                    </ul>
                  </li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('about')}}">About</a></li>
            </ul>
        </nav>
     </header>
    
     <script src="js/jquery.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/owl.carousel.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>