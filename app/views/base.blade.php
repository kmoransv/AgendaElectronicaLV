<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> @yield('Titulo') </title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/font-awesome.min.css') }}
		{{ HTML::style('css/ionicons.min.css') }}
		{{ HTML::style('css/morris/morris.css') }}
		{{ HTML::style('css/jvectormap/jquery-jvectormap-1.2.2.css') }}
		{{ HTML::style('css/datepicker/datepicker3.css') }}
		{{ HTML::style('css/daterangepicker/daterangepicker-bs3.css') }}
		{{ HTML::style('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}
		{{ HTML::style('css/AdminLTE.css') }}
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        	{{ HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
        	{{ HTML::style('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}
        <![endif]-->
	</head>
	<body class="skin-blue">
		@section('Contenido')
		@show
		<!-- jQuery 2.0.2 -->
		{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js') }}
                <!-- jQuery UI 1.10.3 -->
                {{ HTML::script('js/jquery-ui-1.10.3.min.js') }}
                <!-- Bootstrap -->
                {{ HTML::script('js/bootstrap.min.js') }}
                <!-- Morris.js charts -->
                {{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}
                {{ HTML::script('js/plugins/morris/morris.min.js') }}
                <!-- Sparkline -->
                {{ HTML::script('js/plugins/sparkline/jquery.sparkline.min.js') }}
                <!-- jvectormap -->
                {{ HTML::script('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
                {{ HTML::script('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}
                <!-- jQuery Knob Chart -->
                {{ HTML::script('js/plugins/jqueryKnob/jquery.knob.js') }}
                <!-- daterangepicker -->
                {{ HTML::script('js/plugins/daterangepicker/daterangepicker.js') }}
                <!-- datepicker -->
                {{ HTML::script('js/plugins/datepicker/bootstrap-datepicker.js') }}
                <!-- Bootstrap WYSIHTML5 -->
                {{ HTML::script('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}
                <!-- iCheck -->
                {{ HTML::script('js/plugins/iCheck/icheck.min.js') }}

                <!-- AdminLTE App -->
                {{ HTML::script('js/AdminLTE/app.js') }}

                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                {{ HTML::script('js/AdminLTE/dashboard.js') }}

                <!-- AdminLTE for demo purposes -->
                {{ HTML::script('js/AdminLTE/demo.js') }}

                @section('JS')
                @show
	</body>
</html>