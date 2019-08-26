@extends('layouts.navbar')

@section('content')
<section class="sec-heads mt-5 colors"  >
	<div class="container-fluid mt-5 justify-content-center">
		<div class="row mt-5 justify-content-center txt text-center">
			<div class="col-md-12">
				<h1 class="display-4 txt-one">{!!$blog->title!!}</h1>
			</div>
		</div>
	</div>
</section><br>

<div class="container">

     <div class="row mt-2 justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-posted">
              <img src="{{asset($blog->image)}}" class="card-img-top" alt="..." width="50%">
              <div class="card-body">
                <h1 class="card-title fonts-head-post">{!!$blog->title!!}</h1>
                <p class="card-text">{!!$blog->content!!}</p>
              </div>
            </div><br>

            <div class="card">
           
              <div class="card-body">
                @include('blog.disqus')
              </div>
            </div><br>

       
        </div>
        <div class="col-md-3">
           
        </div>
    </div><br><br>


</div><br><br>



  <!--========== FOOTER ==========-->

        <!--========== END FOOTER ==========-->

@endsection
