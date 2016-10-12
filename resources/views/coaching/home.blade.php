@include('coaching/default')

<input type="hidden" id="to-active" value="home">

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="panel panel-default h320">
            <div class="panel-heading">
                <h3 class="panel-title">Calendrier</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Equipe</th>
                        <th>Lieu</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01/10</td>
                        <td>Décines</td>
                        <td><span class="label label-danger">Extérieur</span></td>
                    </tr>
                    <tr>
                        <td>08/10</td>
                        <td>Exempt</td>
                        <td><span class="label label-default">Exempt</span></td>
                    </tr>
                    <tr>
                        <td>15/10</td>
                        <td>Charpennes</td>
                        <td><span class="label label-danger">Extérieur</span></td>
                    </tr>
                    <tr>
                        <td>22/10</td>
                        <td>Grand Trou</td>
                        <td><span class="label label-success">Domicile</span></td>
                    </tr>
                    <tr>
                        <td>29/10</td>
                        <td>Communay</td>
                        <td><span class="label label-success">Domicile</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="panel panel-default h320">
            <div class="panel-heading">
                <h3 class="panel-title">Ajouter un rappel</h3>
            </div>
            <div class="panel-body">
                <br>
                <p>Accéder au Reminder <b><a href="{{url('/coaching/reminder')}}">ici</a></b></p>
                <form>
                    <input type="text" class="form-control" style="margin-bottom: 10px;"
                           placeholder="Titre du rappel">
                    <input type="text" class="form-control" style="margin-bottom: 10px;" placeholder="Description">
                    <input type="date" class="form-control" style="margin-bottom: 10px;"
                           placeholder="Date de clotûre">
                    <hr>
                    <button class="btn btn-success">Ajouter un rappel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Playbook</h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item disabled">Liste des documents disponibles</li>
                    <li class="list-group-item"><a href="https://drive.google.com/open?id=1JvKM4-flbMZbowMpgM6HR3g-Mr-bBiKm8noBkQ4uJxc" target="_blank">Planification saison</a></li>
                    <li class="list-group-item"><a href="https://drive.google.com/open?id=0Bwg_0Xqlmx88RGN3ZnVwMFE3bzA" target="_blank">Sideline inbound</a></li>
                    <li class="list-group-item"><a href="https://drive.google.com/open?id=0Bwg_0Xqlmx88blBCeHRCSFNVOTQ" target="_blank">Baseline inbound</a></li>
                    <li class="list-group-item"><a href="https://drive.google.com/open?id=0Bwg_0Xqlmx88eHpZMXViLUVJVmc" target="_blank">Transit - U15</a></li>
                    <li class="list-group-item"><a href="https://drive.google.com/open?id=0Bwg_0Xqlmx88cURJaGFWZy1FQWM" target="_blank">Transit Lancer Franc - U15</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>