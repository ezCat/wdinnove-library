@include('coaching/default')

<input type="hidden" id="to-active" value="calendar">

<div class="row">
    <div class="col-xs-12">
        <h2>Ajouter un événement</h2>
    </div>
</div>

<hr>

<form>
    <input type="text" class="form-control" placeholder="Titre de l'événement">
    <input type="date" class="form-control">
    <input type="text" class="form-control" placeholder="Ajouter un lieu">
    <input type="text" class="form-control" placeholder="Ajouter une note">
    <select class="form-control">
        <option>Rouge</option>
        <option>Bleu</option>
    </select>
    <button class="btn btn-success">Ajouter l'événement</button>
</form>