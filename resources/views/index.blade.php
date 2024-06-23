@include('header')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
  </head>
  <body>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="{{asset('images/nh10.jpg')}}" class="d-block w-100" height="400" alt="...">
            <div class="carousel-caption d-none d-md-block text-white">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="{{asset('images/nh10.jpg')}}" class="d-block w-100" height="400" alt="...">
            <div class="carousel-caption d-none d-md-block text-white">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/nh10.jpg')}}" class="d-block w-100" height="400" alt="...">
            <div class="carousel-caption d-none d-md-block text-white">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
     
      <br>
      {{--letast news--}}

        <div class="container text-center pt-5">
          <h2><span class="text-success">Letest</span><span>News</span></h2>
        </div>
        <div class="container pt-5">
          <div class="owl-carousel owl-theme">
            @foreach ($ldata as $lrecord )

            <div class="item"><img src="{{asset('images/'.$lrecord->limage)}}" height="200px" width="300px" alt="" >
              <p class="text-center"><a href="#">{{$lrecord->ltitale}}</a></p></div>

            @endforeach 
          </div>
        </div>

       {{--letast news end--}}

 {{--categeory start--}}
      <div class="container text-center pt-5">
        <h2><span class="text-success">News</span><span>Cetagoery</span></h2>
      </div>

      <div class="container pt-5">
        <div class="container text-center">
          <div class="row row-cols-1 row-cols-lg-5 row-cols-md-2 g-3 g-lg-4">
            @foreach ( $categeory as $c)
            <div class="col categeory-card border">
              <div class=" categeory-img ">
                <img src="{{asset('images/'.$c->cimage)}}" height="200px" width="300px" alt="" class="img-fluid">
              </div>
              <a href="">{{$c->categoery}}</a>
            </div>
            @endforeach
            
          </div>
        </div>
      </div>

      <div class="container text-center pt-5 ">
        <h2><span class="text-success">Letest</span><span>Blog</span></h2>
      </div>

      <div class="container pt-5 blog-container">
        <div class="container text-center">
          <div class="row row-cols-1 row-cols-lg-5 row-cols-md-2 g-3 g-lg-4">
            @foreach ($blog as $blogs)
            <div class="col border  blog-card"> 
              <div class="blog-img">
                <img src="{{asset('images/'.$blogs->image)}}" height="100%" width="100%" alt="" class="img-fluid" > 
              </div>
                <h3 class="blog-title">{{$blogs->btitle}}</h3>
                <p class="blog-para">{{$blogs->bpara}}</p>
                <a href="{{route('blogview',$blogs->id)}}" class="button">{{$blogs->button}}</a>
              
            </div>
            @endforeach
           
          </div>
        </div>
      </div>
    <script src="js/jquery.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    {{-- jquery code for letest news --}}
    <script>
          $(document).ready(function(){
   $('.owl-carousel').owlCarousel({
    center: true,
    items:2,
    loop:true,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }
});
$('.nonloop').owlCarousel({
    center: true,
    items:2,
    loop:false,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }
});
});
    </script>
    @include('footer')
  </body>
</html>