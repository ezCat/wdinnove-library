@include('coaching/default')

<input type="hidden" id="to-active" value="reminder">

<h2>Editer un rappel</h2>
<hr>

{{ Form::open() }}

<input type="text" class="form-control" style="margin-bottom: 10px;" placeholder="Titre du rappel">
<select name="" id="" class="form-control">
    <option value="">Lundi</option>
    <option value="">Mardi</option>
    <option value="">Mercredi</option>
    <option value="">Jeudi</option>
    <option value="">Vendredi</option>
    <option value="">Samedi</option>
    <option value="">Dimanche</option>
</select>
<select name="" id="" class="form-control">
    {{--https://gist.github.com/zulfu/3c56e6d95008c1b7c8cb--}}
    <option value="">fa-hand-o</option>
    <option value="">fa-twitter</option>
    <option value="">fa-facebook</option>
</select>
<textarea name="" id="" class="form-control" cols="30" rows="10" placeholder="Description.."></textarea>
<hr>
<button class="btn btn-info">Modifier le rappel</button>

{{ Form::close() }}