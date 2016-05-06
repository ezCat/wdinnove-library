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
                    <li class="filter"><a class="selected a-link-reset" href="#0" data-type="all">Tous</a></li>
                    <li class="filter" data-filter=".dribble"><a class="a-link-reset" href="#0" data-type="color-1">Dribble</a></li>
                    <li class="filter" data-filter=".footwork"><a class="a-link-reset" href="#0" data-type="color-2">Footwork</a></li>
                    <li class="filter" data-filter=".defense"><a class="a-link-reset" href="#0" data-type="color-2">Defense</a></li>
                    <li class="filter" data-filter=".shooting"><a class="a-link-reset" href="#0" data-type="color-2">Shooting</a></li>
                    <li class="filter" data-filter=".passing"><a class="a-link-reset" href="#0" data-type="color-2">Passing</a></li>
                    <li class="filter" data-filter=".moves"><a class="a-link-reset" href="#0" data-type="color-2">Offenses moves</a></li>
                    <li class="filter" data-filter=".rebound"><a class="a-link-reset" href="#0" data-type="color-2">Rebound</a></li>
                    <li class="filter" data-filter=".posting"><a class="a-link-reset" href="#0" data-type="color-2">Post plays</a></li>
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
                {{--<div class="cd-filter-block">--}}
                {{--<h4>Search</h4>--}}

                {{--<div class="cd-filter-content">--}}
                {{--<input type="search" placeholder="Try color-1...">--}}
                {{--</div> <!-- cd-filter-content -->--}}
                {{--</div> <!-- cd-filter-block -->--}}

                <div class="cd-filter-block">
                    <h4>Check boxes</h4>

                    <ul class="cd-filter-content cd-filters list">
                        @foreach($categories as $category)
                            <li>
                                <input class="filter" data-filter=".{{ $category->slug }}" type="checkbox" id="checkbox{{ $category->id }}">
                                <label class="checkbox-label" for="checkbox{{ $category->id }}">{{ $category->libelle_categorie }}</label>
                            </li>
                        @endforeach
                    </ul> <!-- cd-filter-content -->
                </div> <!-- cd-filter-block -->

                {{--<div class="cd-filter-block">--}}
                {{--<h4>Select</h4>--}}

                {{--<div class="cd-filter-content">--}}
                {{--<div class="cd-select cd-filters">--}}
                {{--<select class="filter" name="selectThis" id="selectThis">--}}
                {{--<option value="">Choose an option</option>--}}
                {{--<option value=".option1">Option 1</option>--}}
                {{--<option value=".option2">Option 2</option>--}}
                {{--<option value=".option3">Option 3</option>--}}
                {{--<option value=".option4">Option 4</option>--}}
                {{--</select>--}}
                {{--</div> <!-- cd-select -->--}}
                {{--</div> <!-- cd-filter-content -->--}}
                {{--</div> <!-- cd-filter-block -->--}}

                {{--<div class="cd-filter-block">--}}
                {{--<h4>Radio buttons</h4>--}}

                {{--<ul class="cd-filter-content cd-filters list">--}}
                {{--<li>--}}
                {{--<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>--}}
                {{--<label class="radio-label" for="radio1">All</label>--}}
                {{--</li>--}}

                {{--<li>--}}
                {{--<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">--}}
                {{--<label class="radio-label" for="radio2">Choice 2</label>--}}
                {{--</li>--}}

                {{--<li>--}}
                {{--<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">--}}
                {{--<label class="radio-label" for="radio3">Choice 3</label>--}}
                {{--</li>--}}
                {{--</ul> <!-- cd-filter-content -->--}}
                {{--</div> <!-- cd-filter-block -->--}}
            </form>

            <a href="#0" class="cd-close">Close</a>
        </div> <!-- cd-filter -->

        <a href="#0" class="cd-filter-trigger">Filters</a>

    </main> <!-- cd-main-content -->
    <script src="{{asset('public/js/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('public/js/filter.js')}}"></script> <!-- Resource jQuery -->

@endsection