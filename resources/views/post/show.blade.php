@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{$post->image}}" class="card-img-top" alt="Image">
            <div class="card-body">
                <h5 class="card-title">{{$post->id}}.{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
                <p class="card-text">{{$post->category_id}} - Category</p>
            </div>
        </div>
        <div class="container">
            <div>
                <a href="{{route('post.edit', $post->id)}}" class="mt-2 btn btn-primary">Edit</a>
            </div>
            <div>
                <form action="{{route('post.destroy', $post->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="mt-2 btn btn-danger">
                </form>
            </div>
        </div>
@endsection
