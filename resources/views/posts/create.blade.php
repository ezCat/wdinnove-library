@extends('navigation')

@section('content')

    <div class="page-wrapper">
        <div class="container">

            <div class="row space-under text-center">
                <h1>PROPOSES TON <span class="important"> EXERCICE </span>!</h1>
            </div>

            {!! Form::open(['url' => route('posts.store')]) !!}

            <div class="row space-under">
                <span class="btn btn-circle-title" style="float: left;">1</span>
                <h3 class="with-circle">Décris l'exercice</h3>
            </div>

            <div class="row space-under">
                <div class="input-group space-under">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger xs-hidden">Titre</button>
                    </div>
                    {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => "Veuillez rentrer le titre de l'article"]) !!}
                </div>

                <div class="space-under">
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Veuillez rentrer la description de l\'article']) !!}
                </div>

                <div class="input-group space-under">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger xs-hidden">Catégorie</button>
                    </div>
                    {!! Form::select('id_categorie', $categories, null, ['class' => 'form-control']) !!}
                </div>

            </div>

            <div class="row space-under">
                <div class="col-md-12 col-ld-12 col-xs-12">
                    <span class="btn btn-circle-title" style="float: left;">2</span>
                    <h3 class="with-circle">Choisis la vidéo</h3>
                </div>
            </div>

            <div class="row space-under">
                <div class="col-md-4 col-ld-4 col-xs-12 text-center red video-box" data-video="youtube">
                    <i class="fa fa-youtube three-logo-column" style="font-size: 80px"></i>
                    <h4>YouTube</h4>
                </div>

                <div class="col-md-4 col-ld-4 col-xs-12 text-center green bordering video-box" data-video="vine">
                    <i class="fa fa-vine three-logo-column" style="font-size: 80px"></i>
                    <h4>Vine</h4>
                </div>

                <div class="col-md-4 col-ld-4 col-xs-12 text-center blue video-box" data-video="instagram">
                    <i class="fa fa-instagram three-logo-column" style="font-size: 80px"></i>
                    <h4>Instagram</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-ld-12 col-xs-12 text-center">

                    <div class="input-group space-under">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-danger xs-hidden" id="type_video-btn">URL</button>
                        </div>
                        {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Rentrer l\'URL de la vidéo ici']) !!}
                    </div>
                </div>
            </div>

            <div class="block-hidden">
                <input type="radio" name="id_type_video" value="1" id="youtube"> <i class="fa fa-youtube"></i>
                YouTube<br>
                <input type="radio" name="id_type_video" value="2" id="vine"> <i class="fa fa-vine"></i> Vine<br>
                <input type="radio" name="id_type_video" value="3" id="instagram"> <i class="fa fa-instagram"></i>
                Instagram<br>
            </div>

            <div class="row space-under">
                <span class="btn btn-circle-title" style="float: left;">3</span>
                <h3 class="with-circle">Choisis la difficulté</h3>
            </div>

            <div class="row space-under">
                <h4 class="space-under">Difficulté de l'exercice : </h4>
            </div>

            <div class="row space-under">
                <div class="col-md-12 col-ld-12 col-xs-12">
                    <div id="slider-default" class="slider-info"></div>
                </div>
            </div>

            <div class="row space-under">
                <div class="col-md-12 col-ld-12 col-xs-12">
                    <input type="hidden" name="difficulte" id="difficulte">
                    <div id="slider-value-form"></div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12 col-ld-12 col-xs-12 text-center">
                    <div class="space-under">
                        <button type="submit" class="btn btn-danger btn-submitted">Soumettre</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {!! Form::close() !!}

    <script type="text/javascript">
        $("#slider-default").slider({
            value: 10,
            orientation: "horizontal",
            range: "min",
            animate: true
        });

        $("#slider-value-form").text($("#slider-default").slider("value") + " %");

        $("#slider-default").on('slide', function (event, ui) {
            var val = ui.value;
            $('#slider-value-form').text(val + " %");
            $('#difficulte').val(val);
        });

        // Video
        $(".video-box").on('click', function () {
            var type = $(this).attr('data-video');

            $(".video-box").removeClass("youtube-color");
            $(".video-box").removeClass("vine-color");
            $(".video-box").removeClass("instagram-color");

            $(this).addClass(type + "-color");

            $("#type_video-btn").text(type.substr(0, 1).toUpperCase() + type.substr(1));

            $("#" + type).prop("checked", true);
        });
    </script>

@endsection
