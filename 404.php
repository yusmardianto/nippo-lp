<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="PT. LOGIQUE Digital Indonesia">
    
    <title>404 Page Not Found</title>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Slick -->
    <link href="/assets/css/slick.css" rel="stylesheet">
    <link href="/assets/css/slick-theme.css" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/assets/fonts/font-awesome/css/font-awesome.min.css">
    
	<!-- Custom Style -->
	<link href="/assets/css/style.css" rel="stylesheet">
	<link href="/assets/css/header-footer.css" rel="stylesheet">
   
  </head>
  
  <?php $page = '404.php'; ?>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBWKGBV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
	  
	<?php include './layout/header.php' ?>
	  
	<section class="not-found">
		<div class="container d-flex align-items-center" style="margin-top: 0; min-height: 75vh;">
			<div class="w-100 text-center">
				<h1><b>404</b></h1>
				<p><i>Sorry, the page you tried cannot be found.</i></p>
				<div class="text-center my-5">
					<a href="/" class="btn btn--green btn--round btn--main">Go Home</a>
				</div>
			</div>
		</div>
	</section>
	
    <?php include './layout/footer.php' ?>
	
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/slick.min.js"></script>		
	<script src="/assets/js/jquery.matchHeight-min.js"></script>
  </body>
</html>