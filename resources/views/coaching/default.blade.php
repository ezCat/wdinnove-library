<!DOCTYPE html>
<html>
<head>
	<title>Interface Coaching</title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('public/img/Basketball-256.png') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/coaching/main.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="{{ asset('public/js/jquery-2.2.0.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/js/bootstrap.js') }}" type="text/javascript"></script>

</head>
<body>

<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-heartbeat" style="color: pink; margin-right: 10px;"></i>Coaching</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li id="active-home"><a href="{{url('coaching/home')}}"><i class="fa fa-home"></i><span class="hidden-except-mobile text-for-menu">Home</span></a></li>
        <li id="active-calendar"><a href="{{ route('coaching.calendar.index') }}"><i class="fa fa-calendar-o"></i><span class="hidden-except-mobile text-for-menu">Calendar</span></a></li>
        <li id="active-document"><a href="{{ route('coaching.document.index') }}"><i class="fa fa-file-o"></i><span class="hidden-except-mobile text-for-menu">Documents</span></a></li>        
        <li id="active-injuries"><a href="{{ route('coaching.injuries.index') }}" ><i class="fa fa-ambulance"></i><span class="hidden-except-mobile text-for-menu">Injuries</span></a></li>
        <li id="active-mailing"><a href="{{ route('coaching.mailing.index') }}"><i class="fa fa-envelope-o"></i><span class="hidden-except-mobile text-for-menu">Mailing</span></a></li>
        <li id="active-reminder"><a href="{{ route('coaching.reminder.index') }}"><i class="fa fa-bell-o"></i><span class="hidden-except-mobile text-for-menu">Reminder</span></a></li>
        <li><a href="{{ url('logout') }}"><i class="fa fa-power-off"></i><span class="hidden-except-mobile text-for-menu">Quit</span></a></li>
    </div>
  </div>
</nav>

<div style="height: 70px"></div>

<div class="container">

<script type="text/javascript">
	$(document).ready(function(){
		var name = $('#to-active').val();
		$('#active-' + name).addClass('active');
	});
</script>