@extends('layout')

@section('content')

<form method="POST" action="{{route('posts.update',['post'=>$post->id])}}">
    @method('PUT')
    @csrf  
    {{-- les enjeux de la sécurité (Token)--}}
    <div>
        <label for="title"> The Title</label>
        <input name="title" id="title" type="text" value="{{old('title', $post->title)}} ">
    </div>
    <div>
        <label for="content"> The Content</label>
        <input name="content" id="content" type="text" value="{{old('title', $post->Content)}} ">
    </div>
    <div>
        <label for="slug"> The Slug</label>
        <input name="slug" id="slug" type="text" value="{{old('title', $post->slug)}} ">
    </div>

 
        @if ($errors->any())
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}} </li>
        @endforeach
        </ul>
        @endif
  

    <button type="submit">update un post</button>
</form>
    
@endsection