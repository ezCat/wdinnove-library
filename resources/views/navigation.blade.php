<?php

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

$categories = DB::table('categories')->get();
$sub_categories = DB::table('sub_categories')->get();

?>

<div id='cssmenu' style="margin-bottom: 30px;">
    <ul>
        <li style="margin-right: 40px"><a href='{{ route('home') }}' style="padding-top: 0; padding-left: 10px; padding-bottom: 10px"><img src="{{ asset('/img/dribble.png') }}"></a></li>
        <li><a href='{{ route('home') }}'>Home</a></li>
        <li class='has-sub'><a href='{{ route('practice.index') }}'>Bibliothèque</a>
            <ul>
                @foreach($categories as $categorie)
                    <li class='has-sub'><a href='#'>{{ $categorie->name }}</a>
                        <ul>
                            @foreach($sub_categories as $sub_categorie)
                                <li><a href='{{ route('practice.index') }}'>{{ $sub_categorie->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </li>
        <li><a href='{{ route('prop_exo') }}'>Proposer un exercice</a></li>
        <li><a href='{{ route('about') }}'>A propos</a></li>
        <li><a href='{{ route('contactus') }}'>Contact</a></li>
        <li class="has-sub"><a href=''>Adminsitration</a>
        <ul>
            <li><a href='{{ route('practice.create') }}'>Ajouter un exercice</a></li>
            <li><a href='{{ route('admin.list') }}'>Modifier un exercice</a></li>
        </ul>
        </li>
    </ul>
</div>