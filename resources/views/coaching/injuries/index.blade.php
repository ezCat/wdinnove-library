@include('coaching/default')

<input type="hidden" id="to-active" value="injuries">

<h2>Suivi des blessures</h2>

<a class="btn btn-large btn-success width100">+ Nouvelle blessure</a>

<hr>

<div class="hidden-mobile width100">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Liste des blessés</h3>
	  </div>
	  <div class="panel-body">
	  <div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Blessure</th>
					<th>Date de blessure</th>
					<th>Date de retour</th>
					<th>Gravité de la blessure</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Gaston</td>
					<td>Yohan</td>
					<td>Genou</td>
					<td>12/09/2016</td>
					<td>25/10/2016</td>
					<td><span class="label label-warning">Moyenne</span></td>
				</tr>
				<tr>
					<td>Vannha</td>
					<td>Allan</td>
					<td>Genou</td>
					<td>12/07/2016</td>
					<td>16/10/2016</td>
					<td><span class="label label-danger">Grave</span></td>
				</tr>
			</tbody>
		</table>
		</div>
	  </div>
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Blessures cette saison</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Blessure</th>
						<th>Date de blessure</th>
						<th>Date de retour</th>
						<th>Gravité de la blessure</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Roustain</td>
						<td>Tom</td>
						<td>Pied</td>
						<td>12/09/2016</td>
						<td>15/09/2016</td>
						<td><span class="label label-info">Faible</span></td>
					</tr>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
</div>

<div class="hidden-except-mobile width100">
    <h3><i class="fa fa-medkit little-margin-right"></i> Joueurs blessés</h3>
    <hr>
	    <div class="list-box">
			<h4><b>Yohan Gaston</b></h4>
			<p>Blessure : <b>Genou</b></p>
			<p>Le : <b>12/09/2016</b></p>
			<p>Retour prévu le : <b>25/10/2016</b></p>
			<p><span class="label label-warning">Moyenne</span></p>
	    </div>
	    <div class="list-box">
			<h4><b>Allan Vannha</b></h4>
			<p>Blessure : <b>Genou</b></p>
			<p>Le : <b>12/07/2016</b></p>
			<p>Retour prévu le : <b>16/10/2016</b></p>
			<p><span class="label label-danger">Grave</span></p>
	    </div>

    <hr>
    <h3><i class="fa fa-medkit little-margin-right"></i> Blessures précédentes</h3>
    <hr>
	    <div class="list-box">
			<h4><b>Yohan Gaston</b></h4>
			<p>Blessure : <b>Genou</b></p>
			<p>Le : <b>12/09/2016</b></p>
			<p>Retour prévu le : <b>25/10/2016</b></p>
			<p><span class="label label-warning">Moyenne</span></p>
	    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		var name = $('#to-active').val();
		$('#active-' + name).addClass('active');
	});
</script>