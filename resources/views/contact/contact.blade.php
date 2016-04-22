@extends('default')

@include('navigation')

@section('content')

    <div class="page-wrapper">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <p>Dennis</p>
                    <p>Je réalise mes rêves en réalisant les votres.</p>
                </div>

                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                    <h1>Contactez-moi</h1>

                    <br>

                    <form>
                        <label>Votre adresse mail</label>
                        <input type="email" class="form-control" placeholder="test@mailbox.com">

                        <br>

                        <label>Raison du mail</label>
                        <select class="form-control">
                            <option value="Questions">Questions ?</option>
                            <option value="Admiration">Admiration pour le créateur ?</option>
                            <option value="Problems">Un problème sur le site ?</option>
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
    </div>

@endsection