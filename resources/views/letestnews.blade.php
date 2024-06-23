@include('header')
<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<div class="search">
  <form action="">
    <input type="search" placeholder="Search.." name="search">
    <button class="search-btn">Search</button>
  </form>
 
</div>

<div class="container text-center mt-5">
    <h2><span class="text-success">Letest</span><span>News</span></h2>
  </div>
  <div class="container text-center mt-5">
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
      @foreach ($ldata as $lrecord )
      <div class="col ">
        <div class="p-3 " style="height: 300px; with:400px">
          <img src="{{asset('images/'.$lrecord->limage)}}" alt="" style="height: 100%; with:100%" class="img-fluid ">
        </div>
            <a href=" ">{{$lrecord->ltitale}}</a>
      </div>
      @endforeach 
    </div>
  </div>
@include('footer')