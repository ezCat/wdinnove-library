@extends('default')

@include('navigation')

@section('content')

    <div class="container">

        <h1>Editer</h1>

        {!! Form::open(['method' => 'put', 'url' => route('practice.update', $post) ]) !!}

        {!! Form::label('title', 'Titre') !!}
        {!! Form::text('title', $post->title, ['class' => 'u-full-width']) !!}<br><br>

        {!! Form::label('url', 'URL de la vidéo (Instagram)') !!}
        {!! Form::text('url', $post->url, ['class' => 'u-full-width', 'placeholder' => '']) !!}<br><br>

        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', $post->description, ['class' => 'u-full-width', 'placeholder' => 'Cet exercice a pour objectif de..']) !!}
        <br><br>


        <label>
            {!! Form::checkbox('online', $post->online) !!}
            Online
        </label>
        <br>

        <button class="button-primary">Envoyer</button>

        {!! Form::close() !!}

    </div>

@endsection