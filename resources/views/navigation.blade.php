@include('default')

<div id='cssmenu'>

    <ul style="float: right;">
        <li><a href="{{ url('/') }}"> Home </a></li>
        <li><a href='{{ route('posts.index') }}'> Librairie </a></li>
        <li><a href='{{ url('/posts/create') }}'> Participer </a></li>
        <li><a href='{{ url('/contact') }}'> Contact </a></li>
    </ul>

    <ul class="logo-ul" style="float: left">
        <li class="logo-ul"><a href="#" style="padding: 10px 0 0 0"> <span class="logo-wd"> WDINNOVE </span></a></li>
    </ul>

</div>

@yield('content')