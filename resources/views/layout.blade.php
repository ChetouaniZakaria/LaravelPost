<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    <ul>
        <li><a href="/"> home</a> </li>
        <li><a href="/about"> about</a> </li>
        <li><a href="{{route('posts.index')}}"> Liste des postes</a></li>
        <li><a href="{{ route('posts.create')}}"> New post</a></li>
        
    </ul>
    @if (session()->has('status'))
    
    <h3 style="color:goldenrod"> {{session()->get('status')}}</h3>
    @endif
     @yield('content')
</body>
</html>