<?php
	$page_title = '404 Page Not Found';
    
	$page = '404.php';

    include($_SERVER['DOCUMENT_ROOT'].'/layout/header.php');
?>
	  
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

<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/footer.php') ?>