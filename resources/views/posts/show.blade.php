{{-- @extends('layout')

@section('content')
   <h1>Salamm</h1>
   <h2>{{$data['title']}}</h2>
   <p>{{$auteur}} </p>
@endsection --}}

@extends('layout')

@section('content')
         <h3>{{$post->title}}</h3>
         <p>{{$post['Content']}}</p> 
         <em>{{ $post->created_at->DiffForHumans()}} </em>
         {{-- <p>Section : 
            {{ $post->active }}
         </p> --}}
         <p>Status : 
       
         
         @if ($post->active)
         Enabled 
         @else
         Disabled 
         @endif
      </p>
@endsection