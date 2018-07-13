<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A web based healthcare record keeping system">
	<meta name="author" content="Angella Obiero">
	<title>MEDICS SYSTEM | WELCOME</title>
	<link rel="stylesheet" href="http://localhost/hrks/assets/css/index.css">


	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</head>
<body>

<!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--scroll" style="background-color: #35424a">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title" style="color: #66cdaa">MEDICS SYSTEM</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
      <!-- Navigation -->
      <!-- <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="http://localhost/hrks/index.html" style="color: #66cdaa">Home</a>
        <a class="mdl-navigation__link" href="http://localhost/hrks/pages/aboutUs.html">About</a>
        <a class="mdl-navigation__link" href="http://localhost/hrks/pages/services.html">Sevices</a>
        <a class="mdl-navigation__link" href="http://localhost/hrks/pages/contact.html">Contact</a>
        <a class="mdl-navigation__link" href="http://localhost/hrks/pages/login.php">Log in</a>
      </nav> -->
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title" style="color: #66cdaa">MEDICS SYSTEM</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="{{ route('welcome') }}" style="color: #66cdaa">Home</a>
      <a class="mdl-navigation__link" href="{{ route('aboutus') }}">About Us</a>
      <a class="mdl-navigation__link" href="http://localhost/hrks/pages/contact.php">Contact</a>
			@can('med_manage')
			<hr>
			<a class="mdl-navigation__link" href="">Medical reports</a>
			<a class="mdl-navigation__link" href="{{ url('/medrecord') }}">Add Records</a>
			<a class="mdl-navigation__link" href="{{ url('/medrecords') }}">View records</a>
			@endcan



      @if (Auth::guest())
      <a class="mdl-navigation__link" href="{{ url('/login') }}">Login</a>
      <a class="mdl-navigation__link" href="{{ url('/register') }}">Register</a></li>
          @else
					<hr>
					<a class="mdl-navigation__link" href="">Appointments</a>
					<a class="mdl-navigation__link" href="{{ url('/appointment') }}">Add Appointment</a>
					<a class="mdl-navigation__link" href="{{ url('/appointments') }}">View Appointment</a>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li><a href="#logout" onclick="$('#logout').submit();"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                  </ul>
              </li>
          @endif

					{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
  <button type="submit">@lang('global.logout')</button>
  {!! Form::close() !!}

    </nav>
  </div>
  <main class="mdl-layout__content">

		@yield('content')

    <footer>
    <p>MEDICS SYSTEM, copyright &copy; 2018</p>
    </footer>
  </main>
</div>

</body>
</html>
