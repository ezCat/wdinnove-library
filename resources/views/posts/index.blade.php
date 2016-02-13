@extends('default')

@include('navigation')

@section('content')

    <div class="container">

    @foreach($posts as $post)

        <div class="row">

            <h1>{{ $post->title }}</h1><hr>

        </div>

        <div class="row">

            <div class="four columns">
                a
            </div>

            <div class="eight columns">
                {{ $post->description }}
            </div>

            <p><a href="{{ route('practice.show', $post->id) }}"><button class="button-primary">Voir</button></a></p>

        </div>

    @endforeach

    </div>

@endsection