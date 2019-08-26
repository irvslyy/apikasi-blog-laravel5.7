@extends('layouts.navbars')

@section('content')

<div class="container">
	<div class="row margin-create">
		<div class="col-md-8">
			<form action="{{route('update_blog_path', ['blog' => $blog->id])}}" method="POST">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label for="title">title</label>
					<input type="text" name="title" class="form-control" value="{{$blog->title}}">
				</div>

				<div class="form-group">
					<label for="content">content</label>
					<textarea name="content" rows="10" class="form-control texteditor" id="texteditor">{{$blog->content}}</textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">edit blog post</button>
				</div>

			</form>
		</div>
	</div>
</div>

@endsection


 @section('js')

<script>
        CKEDITOR.replace( 'content' );
 </script>

 @endsection