@extends('layouts.m')

@section('container')
<h3 class="text-center">Tambah Data Post</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="" method="POST" enctype="multipart/form-data ">
                    @csrf
            
                    <div class="mb-3">
                        <label for="title_input" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="titleInput" id="title_input">
                    </div>
                    <div class="mb-3">
                        <label for="author_input" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="author_input" name="authorInput">
                    </div>
                    <div class="mb-3">
                    <label for="image_input" class="form-label">Post Image</label>
                    <input class="form-control" type="file" id="image_input" name="imageInput">
                    </div>
                    <div class="mb-3">
                        <label for="body_input" class="form-label">Blurb</label>
                        <input type="text" class="form-control" id="body_input" name="bodyInput">
                    </div>
                    
                    <div class="row mx-2">
                        <button type="submit" class="btn" style="background-color: pink;">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection