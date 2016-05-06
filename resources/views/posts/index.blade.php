@extends('navigation')

@section('content')

    <div class="page-wrapper">

        <div class="row">
            <h1><span class="important"></span></h1>
            <h1><img src="{{asset('public/img/retina-ready.png')}}" style="width: 11%;"> &nbsp; <span
                        class="text-uppercase">Résultat de la recherche</span></h1>
            <hr>
        </div>

        @foreach($posts as $post)
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card__material">
                        <div class="card__title">{{ $post->titre }}</div>
                        <div class="card__subtitle">{{ $post->id_categorie }}</div>
                        <div class="card__image"></div>
                        <a href="{{ route('posts.show', $post->id) }}">
                            <div class="card__action__access"><i class="fa fa-reply"></i> Voir</div>
                        </a>
                        <a href="#">
                            <div class="card__action__share"><i class="fa fa-share-alt"></i> Partager</div>
                        </a>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endsection