<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!--Morris Chart CSS -->
		<link href="{!! asset('theme/plugins/morris/morris.css') !!}" rel="stylesheet">
		<link href="{!! asset('theme/css/bootstrap.min.css') !!}" rel="stylesheet">
		<link href="{!! asset('theme/css/icons.css') !!}" rel="stylesheet">
		<link href="{!! asset('theme/css/style.css') !!}" rel="stylesheet">
		<!-- App css -->
		<script src="{!! asset('theme/js/modernizr.min.js') !!}"></script>
     
</head>

<body class="fixed-left">

	<div id="wrapper">
			 @include('theme.header')
			 @include('theme.sidebar')
			<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
						 @yield('content')
					</div>
				</div>
				@include('theme.footer')
			</div>
			
			@include('theme.notification')
            
	</div>

    <!-- jQuery  -->
		<script src="{!! asset('theme/js/jquery.min.js') !!}"></script>
		<script src="{!! asset('theme/js/popper.min.js') !!}"></script>
		<script src="{!! asset('theme/js/bootstrap.min.js') !!}"></script>
		<script src="{!! asset('theme/js/detect.js') !!}"></script>
		<script src="{!! asset('theme/js/fastclick.js') !!}"></script>
		<script src="{!! asset('theme/js/jquery.blockUI.js') !!}"></script>
		<script src="{!! asset('theme/js/waves.js') !!}"></script>
		<script src="{!! asset('theme/js/jquery.nicescroll.js') !!}"></script>
		<script src="{!! asset('theme/js/jquery.slimscroll.js') !!}"></script>
		<script src="{!! asset('theme/js/jquery.scrollTo.min.js') !!}"></script>
	   
	   
       

        <!-- KNOB JS -->
        <!--[if IE]>
		<script src="{!! asset('theme/plugins/jquery-knob/excanvas.js') !!}"></script>
        <![endif]-->
		<script src="{!! asset('theme/plugins/jquery-knob/jquery.knob.js') !!}"></script>
        
        <!--Morris Chart-->
		<script src="{!! asset('theme/plugins/morris/morris.min.js') !!}"></script>
		<script src="{!! asset('theme/plugins/raphael/raphael-min.js') !!}"></script>
		
        <!-- Dashboard init -->
        <script src="{!! asset('theme/pages/jquery.dashboard.js') !!}"></script>
		
        <!-- App js -->
		<script src="{!! asset('theme/js/jquery.core.js') !!}"></script>
        <script src="{!! asset('theme/js/jquery.app.js') !!}"></script>
        


</body>



</html>