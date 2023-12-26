@extends('template')

@section('content')
    <h1>Blog</h1>

    @foreach ($posts as $post)
        <p>
            <strong>{{$post['id']}}</strong>
            <a href="">{{$post['title']}}</a>
        </p>
    @endforeach
    
@endsection