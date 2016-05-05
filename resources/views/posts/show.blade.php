@extends('navigation')

@section('content')

    <div class="page-wrapper">
        
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                {{--Titre--}}
                <div class="row">
                    <h2 class="show-title">{{ $post->titre }}</h2>
                </div>
                <hr>
                {{--Catégorie--}}
                <div class="row">
                    <span><h3 class="show-categorie"><img class="icon-basketball" src="{{asset('public/img/basketball-256.png')}}"> &nbsp; {{ $post->libelle_categorie }}</h3></span>
                </div>
                <hr>
                {{--Description--}}
                <div class="row">
                    <p class="show-description"><?php echo $post->description; ?></p>
                </div>
            </div>


            {{--Vidéo--}}
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6">
                @if($post->id_type_video == 3)
                    <?php echo $post->bloc_embed; ?>
                @endif
            </div>

        </div>

    </div>

@endsection