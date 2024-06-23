@include('header')
<div class="container text-center pt-5">
    <h2><span class="text-success">Letest</span><span>Blog</span></h2>
  </div>

  <div class="container pt-5">
    <div class="container text-center">
      <div class="row row-cols-1 row-cols-lg-5 row-cols-md-2 g-3 g-lg-4">
        @foreach ($blog as $blogs)
        <div class="col border  blog-card"> 
          <div class="blog-img">
            <img src="{{asset('images/'.$blogs->image)}}" height="100%" width="100%" alt="" class="img-fluid" > 
          </div>
            <h3 class="blog-title">{{$blogs->btitle}}</h3>
            <p class="blog-para">{{$blogs->bpara}}</p>
            {{-- <a href="">{{$blogs->button}}</a> it is rong --}}
            <a href="{{route('blogview',$blogs->id)}}" class="button">{{$blogs->button}}</a>
        </div>
        @endforeach
       
      </div>
    </div>
  </div>
@include('footer')