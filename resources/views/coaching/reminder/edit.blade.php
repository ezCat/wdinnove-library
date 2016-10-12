@include('coaching/default')

<input type="hidden" id="to-active" value="reminder">

<h2>Edit Reminder</h2>

{{ Form::open() }}

	<label>Element 1</label>
	<input type="text" class="form-control"></input>

{{ Form::close() }}