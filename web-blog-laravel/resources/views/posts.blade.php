{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    {{-- <h2>Judul</h2>
    <h5>Inzaghi</h5>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum explicabo
        totam quod et adipisci deleniti iusto dolorem temporibus debitis vero
        asperiores dolore eligendi voluptates accusamus eos cum, dolorum a
        tenetur.
    </p> --}}

    <article class="mb-5">
        @foreach($posts as $post)
            <h2>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
        @endforeach
    </article>

@endsection
