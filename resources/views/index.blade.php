<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Dimas CV</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{ asset('css/base.css')}}">
   <link rel="stylesheet" href="{{ asset('css/main.css')}}">
   <link rel="stylesheet" href="{{ asset('css/vendor.css')}}">

   <!-- script
   ================================================== -->
	<script src="{{ asset('js/modernizr.js')}}"></script>
	<script src="{{ asset('js/pace.min.js')}}"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/svg" href="{{ asset('favicon.svg')}}">

</head>

<body id="top">

	<!-- header
   ================================================== -->
   @include('components.menu')


   @yield('contents')
	


   <!-- footer
   ================================================== -->
   @include('components.footer')
   

   <div id="preloader">
    	<div id="loader"></div>
   </div>

   <!-- Java Script
   ================================================== -->
   <script src="{{ asset('js/jquery-2.1.3.min.js')}}"></script>
   <script src="{{ asset('js/plugins.js')}}"></script>
   <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>
