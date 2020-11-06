@extends('layouts.default')
@section('title', 'Blog' )
@section('content')
    <div class="card-columns">
        @foreach ($posts as $post)
            <div class="card shadow border-0 mb-4">
                <div class="card-body">
                    <h1 class="h4 mb-3">
                        <a href="{{ route('blog.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                    </h1>
                    <p>{{ $post->content }}</p>
                    <a href="{{ route('blog.post', ['slug' => $post->slug]) }}"
                       class="btn btn-sm btn-primary">{{__('View more')}}</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection