@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    
    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    {{-- $post->body --}}
    {!! $post->body !!}

    <br />
    <a href="/posts" class="text-decoration-none d-block mt-3">Back to Posts</a>
@endsection