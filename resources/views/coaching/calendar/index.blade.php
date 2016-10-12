@include('coaching/default')

<input type="hidden" id="to-active" value="calendar">

<div class="row">
	<div class="col-xs-9">
		<h2>Calendrier</h2>
	</div>
	<div class="col-xs-3 center-btn-title">
		<a class="btn btn-circle btn-success" href="{{route('coaching.calendar.create')}}"> + </a>
	</div>
</div>

<?php

	for ($i=0; $i < 14; $i++) { 
		echo "<div class='day' id=".date('d-m-y', strtotime("now + $i day"))."><h3>";
		echo date('l j F', strtotime("now + $i day")), "</h3><br>";

		if ($i == 2) {
			echo "Aucune donnée à afficher";
		}else{
			echo '<div class="alert alert-info">Evenement</div>';
		}

		echo "</div>";
	}

	## BOUCLE POUR LES 14J
		## Ecrit la date
		## Check si dans le tableau il y a des éléments à la date
		## Si oui, Affiche la div avec le contenu
		## Si non, affiche message "Aucune donnée"
	## Fin de boucle 

?>

