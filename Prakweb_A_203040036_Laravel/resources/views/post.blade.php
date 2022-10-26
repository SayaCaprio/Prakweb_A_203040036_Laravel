@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post->title }}</h1>

        <p>By. Caprio Sinaga in <a href="/categories/{{ $post->category->slug }}">
            {{ $post->category->name }}</a></p>
        
        {!! $post->body !!} 
    </article>
    
    <a href="/blog">Back to Post</a>
@endsection