@extends('default')

@include('navigation')

@section('content')

    <div class="container">

    <h1>Proposer votre exercice</h1>

    {!! Form::open() !!}
        {!! Form::label('', 'Titre') !!}
        {!! Form::text('title', null, ['class' => 'u-full-width']) !!}<br><br>

        {!! Form::label('', 'Catégorie') !!}
        {!! Form::select('id_categorie', $categories, null,['class' => 'u-full-width']) !!}<br><br>

        {!! Form::label('', 'Site d\'origine de la vidéo') !!}
        {!! Form::radio('type_video', 1) !!}YouTube<br>
        {!! Form::radio('type_video', 2) !!}Vine<br>
        {!! Form::radio('type_video', 3) !!}Instagram<br>

        <br>

        {!! Form::label('', 'URL de la vidéo') !!}
        {!! Form::text('url', null, ['class' => 'u-full-width', 'placeholder' => '']) !!}<br><br>

        {!! Form::label('', 'Schéma') !!}
        {!! Form::file('image') !!}<br><br>

        {!! Form::label('', 'Description') !!}
        {!! Form::textarea('content', null, ['class' => 'u-full-width', 'placeholder' => 'Cet exercice a pour objectif de..']) !!}<br><br>

        <button class="button-primary">Envoyer</button>

    {!! Form::close() !!}

@endsection