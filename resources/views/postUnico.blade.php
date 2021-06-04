@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row align-items-center h-100">
        <div class="card col-md-8 mx-auto">
            <img src="{{ asset($post->image) }}" alt="..." class="card-img-top">
            <div class="card-body ">
                <h5 class="card-title">
                    {{ $post->title }}
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{ $post->created_at }}
                </h6>
                <p class="card-text">
                    {{ $post->content }}
                </p>
                <a href="{{ url('/') }}" class="card-link">
                    Todas las publicaciones
                </a>
            </div>
        </div>
    </div>
</div>

@endsection