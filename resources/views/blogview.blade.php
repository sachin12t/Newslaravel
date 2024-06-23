@include('header')
<div class="container pt-5 text-center">
    <div class="row">
      <div class="col-9  p-5 view-blog">
        {{-- @foreach ($blog as $blogs) --}}
          
      
           <div class="view-image">
              <img src="{{asset('images/'.$blog->image)}}" alt="">
           </div>
           <div class="view-containt">
              <h1>{{$blog->btitle}}</h1> 
              <p>{{$blog->bpara}}</p> 
           </div>
           {{-- @endforeach --}}
           <a href="{{route('blog')}}" style="color: white; background:green; padding:10px">back to blogs</a>
      </div>
      <div class="col-3 border">releted news</div>
    </div>
  </div>
@include('footer')