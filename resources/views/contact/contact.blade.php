@extends('navigation')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('public/css/card-contact.css') }}">
    </head>

    <div class="page-wrapper">
        <div class="container">

            <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 border-right">
                <div class="portfoliocard">
                    <div class="coverphoto"></div>
                    <div class="profile_picture"></div>
                    <div class="left_col">
                        <div class="followers">
                            <div class="follow_count">
                                100%
                            </div>
                            Passionate
                        </div>
                        <div class="followers">
                            <div class="follow_count">
                                100%
                            </div>
                            Determined
                        </div>
                        <div class="followers">
                            <div class="follow_count">
                                100%
                            </div>
                            Autodidact
                        </div>
                    </div>
                    <div class="right_col">
                        <h2 class="name">Dennis Wittmer</h2>
                        <h3 class="location">Lyon, France</h3>
                        <ul class="contact_information">
                            <li class="work">Basketball Coach</li>
                            <li class="flag"><a class="nostyle" href="http://www.almbasket.com" target="_blank">AL
                                    Meyzieu</a></li>
                            <li class="work">Personal Trainer</li>
                            <li class="website"><a class="nostyle" href="#">www.wdinnove.com</a></li>
                            <li class="mail">wdinnove@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12" style="margin-top: 5%; padding-left: 50px">
                <h1>CONTACTEZ-MOI</h1>

                <br>

                <form>
                    <label>Votre adresse mail</label>
                    <input type="email" class="form-control" placeholder="test@mailbox.com">

                    <br>

                    <label>Raison du mail</label>
                    <select class="form-control">
                        <option value="Questions">Questions</option>
                        <option value="Ameliorations">Améliorations</option>
                        <option value="Problems">Problèmes</option>
                    </select>

                    <br>

                    <label>Message</label>
                    <textarea class="form-control" placeholder="Bonjour cher Admin.."></textarea>

                    <br>

                    <input type="submit" class="btn btn-danger" value="Soumettre">
                </form>

            </div>
        </div>
    </div>

@endsection