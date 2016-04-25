@extends('navigation')

@section('content')

    <div class="page-wrapper" style="min-height: 95%">

        <?php $compteur = false; ?>

        @foreach($posts as $post)

            @if($compteur == false)
                <div class="row">
                    <a class="clickable-a-desc-box" href="{{ route('posts.show', $post->id) }}">
                        <div class="col-md-6 col-ld-6 col-xs-12">
                            <div class="desc-box">
                                <div class="icon-box">
                                    <div class="btn btn-circle-index">
                                        <i class="fa fa-inbox"></i>
                                    </div>
                                </div>
                                <div class="desc-content">
                                    {{ $post->titre }}<br>
                                    @if($post->id_etat == 1)
                                        <a href="{{ route('admin.posts.edit', $post->id) }}">
                                            <button class="btn btn-success">Valider</button>
                                        </a>
                                    @else
                                        <a href="{{ route('admin.posts.edit', $post->id) }}">
                                            <button class="btn btn-info">Editer</button>
                                        </a>
                                    @endif
                                    <a href="{{ route('admin.posts.show', $post->id) }}">
                                        <button class="btn">Voir</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php $compteur = true; ?>

                    @else
                        <a class="clickable-a-desc-box" href="{{ route('posts.show', $post->id) }}">
                            <div class="col-md-6 col-ld-6 col-xs-12">
                                <div class="desc-box">
                                    <div class="icon-box">
                                        <div class="btn btn-circle-index">
                                            <i class="fa fa-inbox"></i>
                                        </div>
                                    </div>
                                    <div class="desc-content">
                                        {{ $post->titre }}<br>
                                        @if($post->id_etat == 1)
                                            <a href="{{ route('admin.posts.edit', $post->id) }}">
                                                <button class="btn btn-success">Valider</button>
                                            </a>
                                        @else
                                            <a href="{{ route('admin.posts.edit', $post->id) }}">
                                                <button class="btn btn-info">Editer</button>
                                            </a>
                                        @endif
                                        <a href="{{ route('admin.posts.show', $post->id) }}">
                                            <button class="btn">Voir</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>
                <?php $compteur = false; ?>

            @endif

        @endforeach

    </div>

@endsection