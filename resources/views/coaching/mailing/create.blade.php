@include('coaching/default')

<input type="hidden" id="to-active" value="mailing">

<div class="row">
    <div class="col-xs-9">
        <h2>Envoyer un mail</h2>
    </div>
    <div class="col-xs-3 center-btn-title">
        <a class="btn btn-circle btn-info btn-special-fa" href="{{route('coaching.mailing.index')}}"> <i class="fa fa-list" style="font-size: 18px;"></i> </a>
    </div>
</div>

<hr>

<form>
    <select class="form-control" placeholder="Destinataires">
        <option disabled>Choisir dans les listes</option>
        <option>U15M2</option>
        <option>U15F1</option>
    </select>
    <input class="form-control" placeholder="Destinataires"></input>
    <input type="email" class="form-control" placeholder="CC"></input>
    <input type="text" class="form-control" placeholder="Objet"></input>
    <textarea class="form-control" placeholder="Rédigez votre mail ici" rows="20"></textarea>
    <button class="btn btn-lg btn-primary">Envoyer</button>
</form>