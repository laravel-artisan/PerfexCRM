<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="author" content="">
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>{{ config('app.name', 'Laravel') }}</title>
		    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!--Morris Chart CSS -->
		<link href="{!! asset('theme/plugins/morris/morris.css') !!}" rel="stylesheet">
		<link href="{!! asset('theme/css/bootstrap.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('theme/css/icons.css') !!}" rel="stylesheet">
		<link href="{!! asset('theme/css/style.css') !!}" rel="stylesheet">
		
     
</head>

<body>

 <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
			
            <div class="text-center">
                <a href="index.html" class="logo"><span>Admin<span>to</span></span></a>
                <h5 class="text-muted m-t-0 font-600">Responsive Admin Dashboard</h5>
            </div>
        	
			 @yield('content')
        </div>
        <!-- end wrapper page -->
	
        


</body>



</html>