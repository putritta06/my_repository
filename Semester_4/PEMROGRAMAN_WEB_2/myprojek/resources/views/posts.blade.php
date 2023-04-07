@extends('layouts.main')

@section('container')

<h1 class='mb-3 text-center'>Halaman Posts</h1>

<div class='row justify-content-center mb-3'>
    <div class='col-md-6'>
        <form action='http://localhost/myprojek/public/posts?'>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name='search' value="{{ request('search') }}">
                <button class='btn' style="background-color:pink;" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
<div style="max-height:200: overflow:hidden;">
  <img src="img/9.jpg" class="card-img-top" alt="..." style="max-height:200: overflow:hidden;">
        </div>
  <div class="card-body text-center">
    <h3 class="card-title">{{ $posts[0]->title }}</h3>
    <p class="card-text">{{ $posts[0]->body }}</p>
    <p class="card-text">
        <small class="text-muted">By {{ $posts[0]->author }}
        </small>
    </p>
    <p><a href="https://www.wattpad.com/story/298308046-asing-ft-huang-renjun%E2%9C%93" class="text-decoration-none btn" style="background-color: pink">Baca Cerita</a></p>    
  </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
            <img src="img/3.jpg" class="card-img-top" alt="..."> 
            <div class="card-body p-0">
                <h5 class="card-title flex-fill p-10 fs-4" style="background-color: pink">{{ $post['title'] }}</h5>
                <p class="card-text">{{ $post['body'] }}</p>
                <p class="card-text">
                    <small class="text-muted">By {{ $post->author }}
                    </small>
                    
                </p>
                <p>
                <a href="https://www.wattpad.com/story/149068541-this-is-what-it-takes-1-%E2%9C%93-terbit" class="btn " style="background-color: pink">Baca Cerita</a></p>
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">Tidak ada postingan</p>
@endif

@endsection