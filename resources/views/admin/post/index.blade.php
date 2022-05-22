@extends('layouts.admin')
@section('content')
        <a href="{{route('admin.post.create')}}" class="btn btn-warning mt-1 mb-2">Add Post</a>
    @foreach($posts as $post)
            <div class="card mb-2" style="width: 18rem;">
                <img src="{{$post->image}}" class="card-img-top" alt="Image">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{route('admin.post.show', $post->id)}}">{{$post->id}}.{{$post->title}}</a></h5>
                    <p class="card-text">{{$post->content}}</p>
                </div>
            </div>
    @endforeach
    <div class="mt-2">{{$posts->withQueryString()->links()}}</div>
@endsection
