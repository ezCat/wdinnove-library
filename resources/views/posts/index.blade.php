@extends('navigation')

@section('content')

    <body>
    <header class="cd-header">
        <h1><span class="text-uppercase">Sélectionnes ton exercice</span></h1>
    </header>

    <main class="cd-main-content">
        <div class="cd-tab-filter-wrapper">
            <div class="cd-tab-filter">
                <ul class="cd-filters" style="margin: 0">
                    <li class="placeholder">
                        <a class="a-link-reset" data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                    </li>
                    <li class="filter"><a class="selected a-link-reset" href="#0" data-type="all">Tous les exercices</a></li>
                    {{--<li class="filter" data-filter=".dribble"><a class="a-link-reset" href="#0" data-type="color-1">Dribble</a></li>--}}
                    {{--<li class="filter" data-filter=".footwork"><a class="a-link-reset" href="#0" data-type="color-2">Footwork</a></li>--}}
                    {{--<li class="filter" data-filter=".defense"><a class="a-link-reset" href="#0" data-type="color-2">Defense</a></li>--}}
                    {{--<li class="filter" data-filter=".shooting"><a class="a-link-reset" href="#0" data-type="color-2">Shooting</a></li>--}}
                    {{--<li class="filter" data-filter=".passing"><a class="a-link-reset" href="#0" data-type="color-2">Passing</a></li>--}}
                    {{--<li class="filter" data-filter=".moves"><a class="a-link-reset" href="#0" data-type="color-2">Offenses moves</a></li>--}}
                    {{--<li class="filter" data-filter=".rebound"><a class="a-link-reset" href="#0" data-type="color-2">Rebound</a></li>--}}
                    {{--<li class="filter" data-filter=".posting"><a class="a-link-reset" href="#0" data-type="color-2">Post plays</a></li>--}}
                </ul> <!-- cd-filters -->
            </div> <!-- cd-tab-filter -->
        </div> <!-- cd-tab-filter-wrapper -->

        <section class="cd-gallery">
            <ul>
                @foreach($posts as $post)
                    <li class="mix {{ $post->slug }}">
                        <div class="card__material">
                            <div class="card__image" style="background:{{ $post->color }};"></div>
                            <div class="card__title">{{ $post->titre }}</div>
                            <div class="card__subtitle">{{ $post->libelle_categorie }}</div>
                            <a href="{{ route('posts.show', $post->id) }}">
                                <div class="card__action__access"><i class="fa fa-reply"></i> Voir</div>
                            </a>
                            <a href="#">
                                <div class="card__action__share"><i class="fa fa-share-alt"></i> Partager</div>
                            </a>
                        </div>
                    </li>
                @endforeach
                <li class="gap"></li>
                <li class="gap"></li>
                <li class="gap"></li>
            </ul>
            <div class="cd-fail-message">No results found</div>
        </section> <!-- cd-gallery -->

        <div class="cd-filter">
            <form>

                <div class="cd-filter-block">
                    <h4>Catégories</h4>

                    <ul class="cd-filter-content cd-filters list">
                        @foreach($categories as $category)
                            <li>
                                <input class="filter" data-filter=".{{ $category->slug }}" type="checkbox" id="checkbox{{ $category->id }}">
                                <label class="checkbox-label" for="checkbox{{ $category->id }}">{{ $category->libelle_categorie }}</label>
                            </li>
                        @endforeach
                    </ul> <!-- cd-filter-content -->
                </div> <!-- cd-filter-block -->

            </form>

            <a href="#0" class="cd-close">Fermer</a>
        </div> <!-- cd-filter -->

        <a href="#0" class="cd-filter-trigger">Filtres</a>

    </main> <!-- cd-main-content -->
    <script src="{{asset('public/js/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('public/js/filter.js')}}"></script> <!-- Resource jQuery -->

@endsection