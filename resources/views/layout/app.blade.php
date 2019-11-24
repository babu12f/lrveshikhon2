<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700' rel='stylesheet' type='text/css'/>
	<link href="{{ asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
<div class="page-container">
	@include('header')

	@yield('content')
	
	<div class="footer black">
		<div class="container">
		    <div class="row">
				<div class="col-md-12 social">
					<div class="copy">Copyright &copy; nicole_89</div>
				</div>
		    </div>	
		</div>
	</div>	
</div>

<script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/sapphire.js') }}"></script>

</body>
</html>