@extends('templates.default')

@section('title')
    Home
@stop

@section('content')
    @if($posts->count())
        @foreach($posts as $post)
            <article>
                <h1><a href="{{ URL::route('fullPost', $post->slug) }}">{{ $post->title }}</a></h1>
                <p><b>Posted on {{ $post->created_at->format('l jS \\of F Y') }}</b></p>
                {!! Markdown::parse(Str::limit($post->body, 200)) !!}
                <a href="{{ URL::route('fullPost', $post->slug) }}" class="btn btn-primary">ReadMore</a>
            </article>
            <hr>
        @endforeach
    @endif
@stop