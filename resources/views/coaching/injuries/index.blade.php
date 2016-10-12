@include('coaching/default')

<input type="hidden" id="to-active" value="injuries">

<div class="row">
	<div class="col-xs-12">
		<h2>Suivi des blessures</h2>
	</div>
	<div class="col-xs-12">
		<hr class="hidden-except-mobile">
		<button class="btn btn-success width100">+ Nouvelle blessure</button>
	</div>			
</div>

<hr>

<div class="hidden width100">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Blessures</h3>
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
	    <h3 class="panel-title">Historique</h3>
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

<div class="width100">
    <h3><i class="fa fa-medkit little-margin-right"></i> Blessures</h3>
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
    <h3><i class="fa fa-medkit little-margin-right"></i> Historique</h3>
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