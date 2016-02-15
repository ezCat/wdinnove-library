@extends('default')

@include('navigation')

@section('content')

<div class="jumbo">
    <div class="container">
        <div class="row">
            <div class="u-full-width">
               <h1 class="quote">' YOU MUST DO THE THING YOU THINK YOU CANNOT DO. '<br> - Eleanore Roosevelt</h1>
            </div>
        </div>
    </div>

</div>

<br>

<div class="container">
    <div class="row">
        <div class="one-third column alignc" style="margin-bottom: 30px">
            <img src="{{ asset('/img/chronometers.svg') }}" style="width: 150px;"><br><br>
            Gagnez du temps sur le contenu de vos entrainements grâce à cette bibliothèque mobile.
        </div>
        <div class="one-third column alignc" style="margin-bottom: 30px">
            <img src="{{ asset('/img/search.svg') }}" style="width: 150px;"><br><br>
            Recherchez rapidement des exercices atypiques à l'aide de catégorie typique.
        </div>
        <div class="one-third column alignc" style="margin-bottom: 30px">
            <img src="{{ asset('/img/filming.svg') }}" style="width: 150px;"><br><br>
            Les exercices sont accompagnés d'un schéma ou d'une vidéo courte illustrant la situation.
        </div>
    </div>
</div>

{{--<div class="section values" style="margin-top: -30px;">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="one-third column value">--}}
                {{--<h2 class="value-multiplier">67%</h2>--}}
                {{--<h5 class="value-heading">Purchase Increase</h5>--}}
                {{--<p class="value-description">Percentage of users more likely to purchase on mobile friendly site.</p>--}}
            {{--</div>--}}
            {{--<div class="one-third column value">--}}
                {{--<h2 class="value-multiplier">90%</h2>--}}
                {{--<h5 class="value-heading">Multi-device Users</h5>--}}
                {{--<p class="value-description">Most of the world accesses the internet on multiple devices.</p>--}}
            {{--</div>--}}
            {{--<div class="one-third column value">--}}
                {{--<h2 class="value-multiplier">66%</h2>--}}
                {{--<h5 class="value-heading">Sad Users</h5>--}}
                {{--<p class="value-description">Percentage of users that are frustrated with page load times.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

@endsection