@extends('layout')

@section('content')
    <h1>Liste des Posts</h1>
    <ul>
        @forelse ($posts as $post)
        <h2> <a href="{{route('posts.show',['post'=>$post->id])}} ">{{ $post['title'] }}</a></h2>
        <p>{{ $post->Content}}</p>
        <em>{{ $post->created_at}}</em>
        <a href="{{route('posts.edit', ['post'=>$post->id])}} ">Edit</a>
        @empty
        <p><b>No Data!!!!</b></p>
        @endforelse
      
        
    </ul>
    {{-- <ul>
        @foreach ($posts as $post)
        <h2> <a href="{{route('posts.show',['post'=>$post->id])}} ">{{ $post['title'] }}</a></h2>
        <p>{{ $post->Content}}</p>
        <em>{{ $post->created_at}}</em>
        @endforeach
        
    </ul> --}}
@endsection