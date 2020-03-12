@extends('layout')

@section('content')

<form method="POST" action="{{route('posts.store')}}">
    @csrf  
    {{-- les enjeux de la sécurité (Token)--}}
    <div>
        <label for="title"> The Title</label>
        <input name="title" id="title" type="text">
    </div>
    <div>
        <label for="content"> The Content</label>
        <input name="content" id="content" type="text">
    </div>
    <div>
        <label for="slug"> The Slug</label>
        <input name="slug" id="slug" type="text">
    </div>

 
        @if ($errors->any())
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}} </li>
        @endforeach
        </ul>
        @endif
  

    <button type="submit">Ajouter un post</button>
</form>
    
@endsection