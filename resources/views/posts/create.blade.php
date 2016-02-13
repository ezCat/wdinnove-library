@extends('default')

@include('navigation')

@section('content')

    <div class="container">

        <h1>Ajouter un exercice</h1>

        {!! Form::open(['url' => route('practice.store')]) !!}
        {!! Form::label('title', 'Titre') !!}
        {!! Form::text('title', null, ['class' => 'u-full-width']) !!}<br><br>

        {!! Form::label('categorie', 'Catégorie') !!}
        {!! Form::select('id_categorie', $categories, null,['class' => 'u-full-width']) !!}<br><br>

        {!! Form::label('sub_categorie', 'Sous-catégorie') !!}
        {!! Form::select('id_sub_categorie', $sub_categories, null,['class' => 'u-full-width']) !!}<br><br>

        {!! Form::label('url', 'URL de la vidéo (Instagram)') !!}
        {!! Form::text('url', null, ['class' => 'u-full-width', 'placeholder' => '']) !!}<br><br>

        {!! Form::label('draw', 'Schéma') !!}
        {!! Form::file('draw') !!}<br><br>

        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'u-full-width', 'placeholder' => 'Cet exercice a pour objectif de..']) !!}<br><br>

        <button class="button-primary">Envoyer</button>

    {!! Form::close() !!}

    </div>

@endsection