@include('coaching/default')

<input type="hidden" id="to-active" value="reminder">

<div class="row">
    <div class="col-xs-8">
        <h2>Reminder</h2>
    </div>
    <div class="col-xs-2 center-btn-title">
        <a class="btn btn-circle btn-info btn-special-fa" href="{{route('coaching.reminder.list')}}"> <i class="fa fa-list" style="font-size: 18px;"></i> </a>
    </div>
    <div class="col-xs-2 center-btn-title">
        <a class="btn btn-circle btn-success" href="{{route('coaching.reminder.create')}}"> + </a>
    </div>
</div>

<hr>

<h3>Lundi</h3>
<div class="row">
    <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="desc-box">
                <p>Entrainement U15F1</p>
                <div class="logo"><i class="fa fa-dribbble"></i></div>
            </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="desc-box">
                <p>Renforcement musculaire</p>
                <div class="logo"><i class="fa fa-hand-rock-o"></i></div>
            </div>
    </div>
</div>

<h3>Mardi</h3>
<h3>Mercredi</h3>
<h3>Jeudi</h3>
<h3>Vendredi</h3>
<h3>Samedi</h3>
<h3>Dimanche</h3>