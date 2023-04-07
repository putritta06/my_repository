@extends('layouts.m')

@section('container')
<h3 class="text-center">Tambah Data Post</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
            <form action="{{ route('posts.update', $posts->id) }}" method="POST">
     @method('put')
     @csrf
     <div class="mb-3">
     		<label for="title_input" class="form-label">Judul</label>
             <input type="text" class="form-control" name="titleInput" id="title_input" value="{{ $posts->title }}">
      </div>
     <div class="mb-3">
     		<label for="author_input" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="author_input" name="authorInput" value="{{ $posts->author }}">
     </div>
     <div class="mb-3">
     		<label for="body_input" class="form-label">Blurb</label>
             <input type="text" class="form-control" id="body_input" name="bodyInput" value="{{ $posts->body }}">
     </div>
                    
     <div class="row mx-2">
         	<button type="submit" class="btn btn-primary mb-3">Tambah</button>
     </div>
</form>

            </div>
        </div>
    </div>
@endsection
