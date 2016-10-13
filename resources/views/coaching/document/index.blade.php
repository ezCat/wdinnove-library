@include('coaching/default')

<input type="hidden" id="to-active" value="document">

<div class="row">
    <div class="col-xs-9">
        <h2>Liste des docs</h2>
    </div>
    <div class="col-xs-3 center-btn-title">
        <a class="btn btn-circle btn-success" href="{{route('coaching.document.create')}}"> + </a>
    </div>
</div>

<hr>

<div class="card hovercard">
   <img class="imgback" src="http://placehold.it/300x200/000000/&text=Header" alt=""/>
   <div class="avatar">
      <img src="http://placehold.it/80X80/333333/&text=Head" alt="" />
   </div>

   <div class="info">
      <div class="title">
         Planification saison
      </div>
      <div class="desc"><span class="label label-info">Document PDF</span></div>
   </div>

   <div class="bottom">
      <a href="https://drive.google.com/open?id=1JvKM4-flbMZbowMpgM6HR3g-Mr-bBiKm8noBkQ4uJxc" class="btn btn-default"><i class="fa fa-arrows-alt"></i></a>
      <a href="{{route('coaching.document.edit', 1)}}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
      <a href="{{route('coaching.document.destroy', 1)}}" class="btn btn-default"><i class="fa fa-trash"></i></a>
   </div>
</div>

<div class="card hovercard">
   <img class="imgback" src="http://placehold.it/300x200/000000/&text=Header" alt=""/>
   <div class="avatar">
      <img src="http://placehold.it/80X80/333333/&text=Head" alt="" />
   </div>

   <div class="info">
      <div class="title">
         Planification saison
      </div>
      <div class="desc"><span class="label label-info">Document PDF</span></div>
   </div>

   <div class="bottom">
      <a href="https://drive.google.com/open?id=1JvKM4-flbMZbowMpgM6HR3g-Mr-bBiKm8noBkQ4uJxc" class="btn btn-default">Voir</a>
      <a href="{{route('coaching.document.edit', 1)}}" class="btn btn-default">Editer</a>
      <a href="{{route('coaching.document.destroy', 1)}}" class="btn btn-default">Supprimer</a>
   </div>
</div>

<div class="card hovercard">
   <img class="imgback" src="http://placehold.it/300x200/000000/&text=Header" alt=""/>
   <div class="avatar">
      <img src="http://placehold.it/80X80/333333/&text=Head" alt="" />
   </div>

   <div class="info">
      <div class="title">
         Planification saison
      </div>
      <div class="desc"><span class="label label-info">Document PDF</span></div>
   </div>

   <div class="bottom">
      <a href="https://drive.google.com/open?id=1JvKM4-flbMZbowMpgM6HR3g-Mr-bBiKm8noBkQ4uJxc" class="btn btn-default">Voir</a>
      <a href="{{route('coaching.document.edit', 1)}}" class="btn btn-default">Editer</a>
      <a href="{{route('coaching.document.destroy', 1)}}" class="btn btn-default">Supprimer</a>
   </div>
</div>