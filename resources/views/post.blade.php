@extends('layouts.default')
@section('title', $post->title)
@section('content')
    <div class="card shadow border-0">
        <div class="card-body">
            <h1 class="h3 mb-3 text-muted">{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
            <a href="{{ route('blog.home') }}" class="btn btn-primary">← {{__('Back')}}</a>
        </div>
    </div>
@endsection