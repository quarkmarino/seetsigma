<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en">   <!--<![endif]-->  
	<head>
		<meta charset="utf-8">
		<title>Creativo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome-ie7.css">
		<![endif]-->		
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style_responsive.css" rel="stylesheet">
		<link href="assets/css/animate.css" rel="stylesheet">
		<link href="assets/css/effects.css" rel="stylesheet">
		<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet">
	</head>

	<body>
		@yield('content')
		<script src="assets/js/jquery-1.8.2.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>	
		<script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
		<script src="assets/flexslider2/jquery.flexslider-min.js"></script>
		<!--[if lt IE 9]>
		<script src="assets/js/respond.js"></script>
		<![endif]-->		
		<script src="assets/js/app.js"></script>
	</body>
</html>	
<script>
jQuery(document).ready(function() {
	App.init();
});
</script>		