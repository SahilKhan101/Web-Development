@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            {{-- <div class="well" style = 'padding:12px; margin:12px; margin-left:0px; background-color:#dddbdb; border-radius:10px;'> --}}
            <div class="card p-3 mt-3 mb-3" style = 'padding:12px; margin:12px; margin-left:0px; background-color:#e7e7e7; border-radius:10px;'>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%;">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h2 ><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>    {{-- <a href="{{route('posts.show', $post->id)}}"></a> --}}
                        <p>Written on {{$post->created_at}} by {{$post->user->name}}</p>
                    </div>      
                </div>

            </div>
        @endforeach
    @else
        <p>No Posts Found</p>
    @endif
    {{-- {{$posts->links()}} --}}
@endsection