@extends('default')

@include('navigation')

@section('content')

    <div class="container">

    <h1>Proposer votre exercice</h1>

    {!! Form::open() !!}
        {!! Form::label('title', 'Titre') !!}
        {!! Form::text('title', null, ['class' => 'u-full-width']) !!}<br><br>

        {!! Form::label('categorie', 'Catégorie') !!}
        {!! Form::select('id_categorie', $categories, null,['class' => 'u-full-width']) !!}<br><br>

        {!! Form::label('url', 'URL de la vidéo (Instagram)') !!}
        {!! Form::text('url', null, ['class' => 'u-full-width', 'placeholder' => '']) !!}<br><br>

        {!! Form::label('image', 'Schéma') !!}
        {!! Form::file('image') !!}<br><br>

        {!! Form::label('desc', 'Description') !!}
        {!! Form::textarea('content', null, ['class' => 'u-full-width', 'placeholder' => 'Cet exercice a pour objectif de..']) !!}<br><br>

        <button class="button-primary">Envoyer</button>

    {!! Form::close() !!}

@endsection