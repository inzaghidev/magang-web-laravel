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


    @foreach($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>

            <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach

@endsection
