@include('coaching/default')

<input type="hidden" id="to-active" value="mailing">

<div class="row">
    <div class="col-xs-9">
        <h2>Boite d'envoi</h2>
    </div>
    <div class="col-xs-3 center-btn-title">
        <a class="btn btn-circle btn-success" href="{{route('coaching.mailing.create')}}"> + </a>
    </div>
</div>

<hr>

<div class="list-group">
    <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">To: U15M2</h4>
        <p class="list-group-item-text">
            Bonjour,<br>

            Ce weekend nous jouons à Charpennes à 15h30.<br>

            Cordialement.
        </p>
    </a>
    <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">To: U15F1</h4>
        <p class="list-group-item-text">
            Bonjour,<br>

            Ce weekend nous jouons à St Chamond à 16h30.<br>

            Cordialement.
        </p>
    </a>
    <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">To: U15F1</h4>
        <p class="list-group-item-text">
            Bonjour,<br>

            Ce weekend nous jouons à Villeurbanne à 17h30.<br>

            Cordialement.
        </p>
    </a>
</div>