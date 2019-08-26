@extends('layouts.navbar')

@section('content')

<section class="sec-heads mt-5 colors" >
   <!--  <div class="container-fluid "> -->
        <div class="row  txt ">
            <div class="col-md-6">
                <h1 class="display-4 txt-one">Irvs Blog</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
        </div>
    <!-- </div> -->
</section><br>

<div class="container mt-5">
    
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('register') }}" class="btn btn-primary btn-write">Tulis Artikel Mu <i class="fas fa-pencil-alt"></i></a>
            </div>
        </div>
</div>
<div class="container">

    <div class="row mt-3">
        <div class="col-md-4 col-12">
           <form action="/search" method="get" class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary rounds my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="col-md-8 col-12">
            <div class="d-flex flex-md-row justify-content-md-end">
                <button type="button" class="shadow-post btn btn-primary dropdown-toggle btn-writes colors-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Android</a>
                  <a class="dropdown-item" href="#">Web</a>
                  <a class="dropdown-item" href="#">Security</a>                                              
                </div>
            </div>
        </div>
    </div><br>
    <h2 class="bold">Course</h2>
   <hr>
    <div class="row mt-2 mb-2">
        @foreach($blogs as $blog)
        <div class="col-md-4">
            
            <div class="card cards shadow-post mb-4">
              <img src="{{asset($blog->image)}}" class="card-img-top" alt="...">
              <div class="card-body">
                
                <h1 class="card-title fonts-head-post"><a href="{{route('blog_path', ['blog' => $blog->id])}}">{!!$blog->title!!}</a></h1>
                <p class="card-text">{!!str_limit($blog->content, 150)!!}</p>
                <!-- <a href="{{route('blog_path', ['blog' => $blog->id])}}" class="btn btn-primary bords-next">baca selanjutnya</a>
 -->               <hr>
                 <span class="badge badge-primary pull-right mr-auto">web development</span>
                 <span class="badge badge-primary pull-right mr-auto">tech</span>
                 <br>
                 
              </div>
              <div class="card-footer">
                <br>
                <p class="leads mt-3">Rully Irvandi</p>
                <p class="leads">{{$blog->created_at->diffForHumans() }}</p>  
            </div>
            </div>
            
        </div>
        @endforeach

            {{$blogs->links()}}
      <!--   <div class="col-md-3">
            <h3>Artikel Terbaru</h3>
            <hr>
            @foreach($blogs as $blog)
            <p><a href="">{{$blog->title}}</a></p>
            @endforeach
        </div> -->
    </div><br><br>



</div><br><br>

 <h2 class="bold">Community</h2>
   <hr>
     <div class="card">
           
              <div class="card-body">
                @include('blog.disqus')
              </div>
            </div><br>
</div>


  <!--========== FOOTER ==========-->
 

        <!--========== END FOOTER ==========-->

@endsection
