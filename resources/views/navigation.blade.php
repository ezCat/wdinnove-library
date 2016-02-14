<?php

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

$categories = DB::table('categories')->get();
$sous_categories = DB::table('sous_categories')->get();

?>

<head>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.css') }}">

    <style>
        .marginBottom-0 {
            margin-bottom: 0;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu > .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
            margin-left: -1px;
            -webkit-border-radius: 0 6px 6px 6px;
            -moz-border-radius: 0 6px 6px 6px;
            border-radius: 0 6px 6px 6px;
        }

        .dropdown-submenu > a:after {
            display: block;
            content: " ";
            float: right;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 5px 0 5px 5px;
            border-left-color: #cccccc;
            margin-top: 5px;
            margin-right: -10px;
        }

        .dropdown-submenu:hover > a:after {
            border-left-color: #555;
        }

        .dropdown-submenu.pull-left {
            float: none;
        }

        .dropdown-submenu.pull-left > .dropdown-menu {
            left: -100%;
            margin-left: 10px;
            -webkit-border-radius: 6px 0 6px 6px;
            -moz-border-radius: 6px 0 6px 6px;
            border-radius: 6px 0 6px 6px;
        }
    </style>

    <script src="{{asset('js/jquery-2.2.0.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script>
        (function ($) {
            $(document).ready(function () {
                $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                    $(this).parent().siblings().removeClass('open');
                    $(this).parent().toggleClass('open');
                });
            });
        })(jQuery);
    </script>
</head>

<nav class="navbar navbar-inverse navbar-static-top marginBottom-0" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" target="_blank"><span><img width="30px" src="{{asset('img/dribble3.png')}}"></span></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href='{{ route('home') }}'>Home</a></li>

            {{--<li class='has-sub'><a href='{{ route('practice.index') }}'>Bibliothèque</a>--}}
            {{--<ul>--}}
            {{--@foreach($categories as $categorie)--}}
            {{--<li class='has-sub'><a href='#'>{{ $categorie->name }}</a>--}}
            {{--<ul>--}}
            {{--@foreach($sub_categories as $sub_categorie)--}}
            {{--<li><a href='{{ route('practice.index') }}'>{{ $sub_categorie->name }}</a></li>--}}
            {{--@endforeach--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--@endforeach--}}
            {{--</ul>--}}


            <li class="dropdown"><a href="{{ route('practice.index') }}" class="dropdown-toggle" data-toggle="dropdown">Bibliothèque <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    @foreach($categories as $categorie)
                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $categorie->libelle_categorie }}</a>
                        <ul class="dropdown-menu">
                            @foreach($sous_categories as $sous_categorie)
                                <li><a href="#">{{ $sous_categorie->libelle_sous_categorie }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </li>


            <li><a href='{{ route('prop_exo') }}'>Proposer un exercice</a></li>
            {{--<li><a href='{{ route('about') }}'>A propos</a></li>--}}
            <li><a href='{{ route('contactus') }}'>Contact</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Adminsitration <b
                            class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href='{{ route('practice.create') }}'>Ajouter un exercice</a></li>
                    <li><a href='{{ route('admin.list') }}'>Modifier un exercice</a></li>
                    <li><a href='#'>Valider un exercice</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse --></nav>

<!--Ancien menu responsive -->

{{--<div id='cssmenu' style="margin-bottom: 30px;">--}}
{{--<ul>--}}
{{--<li style="margin-right: 40px"><a href='{{ route('home') }}' style="padding-top: 0; padding-left: 10px; padding-bottom: 10px"><img src="{{ asset('/img/dribble.png') }}"></a></li>--}}
{{--<li><a href='{{ route('home') }}'>Home</a></li>--}}


{{--<li class='has-sub'><a href='{{ route('practice.index') }}'>Bibliothèque</a>--}}
{{--<ul>--}}
{{--@foreach($categories as $categorie)--}}
{{--<li class='has-sub'><a href='#'>{{ $categorie->name }}</a>--}}
{{--<ul>--}}
{{--@foreach($sub_categories as $sub_categorie)--}}
{{--<li><a href='{{ route('practice.index') }}'>{{ $sub_categorie->name }}</a></li>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--</li>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--</li>--}}

{{--<li><a href='{{ route('prop_exo') }}'>Proposer un exercice</a></li>--}}
{{--<li><a href='{{ route('about') }}'>A propos</a></li>--}}
{{--<li><a href='{{ route('contactus') }}'>Contact</a></li>--}}
{{--<li class="has-sub"><a href=''>Adminsitration</a>--}}
{{--<ul>--}}
{{--<li><a href='{{ route('practice.create') }}'>Ajouter un exercice</a></li>--}}
{{--<li><a href='{{ route('admin.list') }}'>Modifier un exercice</a></li>--}}
{{--<li><a href='#'>Valider un exercice</a></li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}

