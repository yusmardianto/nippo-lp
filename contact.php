<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" itemprop="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
    <meta name="google-site-verification" content="XXXXXXXXXXXXXXXXXXXXXXXXXXXX" />
	<meta itemprop="name" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
	
    <title>Contact</title>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Slick -->
    <link href="/assets/css/slick.css" rel="stylesheet">
    <link href="/assets/css/slick-theme.css" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css"> -->
    
	<!-- Custom Style -->
	<link href="/assets/css/style.css" rel="stylesheet">
	<link href="/assets/css/header-footer.css" rel="stylesheet">
	<link href="/assets/css/contact.css" rel="stylesheet">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-X"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-XXXXXXXXX-X');
	</script> -->

  </head>
  
  <?php $page = 'contact.php'; ?>

  <body>
    
    <?php include './layout/header.php' ?>

    <section class="contact__headline">
        <div class="container text-center">
            <h1>Contact us</h1>
            <p>For more information about Nippo, <br>please contact us by filling out the form below.</p>
        </div>
    </section>

    <section class="contact__form">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 offset-md-1 col-lg-8 col-md-10">
                    <form action="https://formspree.io/sales@dokodemo-kerja.com" method="POST" id="registration">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="contact_name">Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="contact_name" name="contact_name" >
                            </div>
                            <div class="col-md-6">
                                <label for="contact_company">Company <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="contact_company" name="contact_company" >
                            </div>
                            <div class="col-md-6">
                                <label for="contact_phone">Phone No. <span class="text-danger">*</span></label>
                                <input class="form-control" type="tel" id="contact_phone" name="contact_phone" >
                            </div>
                            <div class="col-md-6">
                                <label for="contact_email">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" id="contact_email" name="contact_email" >
                            </div>
                            <div class="col-md-12">
                                <label for="contact_message">Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="contact_message" id="contact_message" rows="4" ></textarea>
                            </div>
                            <div class="col text-center text-md-left">
                                <button class="btn btn--green btn--round btn--main" type="submit">Submit &nbsp; <img class="arrow-right arrow-right--white" src="/assets/icon/arrow-right.svg" alt="" width="15"></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="contact__footer">
        <div class="container text-center">
            <p>If you want an immediate response, get in touch with us during office hours: <br>
            <b>09.00 - 17.00 (Mon-Fri)</b></p>            
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><img src="/assets/icon/mail.svg" alt=""></a></li>
                <li class="list-inline-item"><a href="#"><img src="/assets/icon/phone.svg" alt=""></a></li>
                <li class="list-inline-item"><a href="#"><img src="/assets/icon/whatsapp.svg" alt=""></a></li>
            </ul>
        </div>
    </section>
    
    <?php include './layout/footer.php' ?>

	
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/slick.min.js"></script>		
    <script src="/assets/js/jquery.matchHeight-min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "Organization",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "XXXXXX",
			"postalCode": "XXXXXX",
			"streetAddress": "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
		},
		"logo": "XXXXXX",
		"email": "XXXXXX",
		"telephone": "XXXXXX"
	}
    </script>
    <script>    
    $(function() {
        $("form#registration").validate({
            rules: {
            contact_name: "required",
            contact_company: "required",
            contact_email: {
                required: true,
                email: true
            },
            contact_phone: {
                required: true,
                number: true
            },
            contact_message: "required"
            },
            // Specify validation error messages
            messages: {
                contact_name: "Please enter your contact name",
                contact_company: "Please enter your contact company",
                contact_email: {
                    required : "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                contact_phone: {
                    required: "Please enter your contact phone",
                    number: "Please enter your contact phone as a numerical value"
                },
                contact_message: "Please enter your contact message",
            },
            submitHandler: function(form) {
            form.submit();
            }
        });
    });
    </script>
  </body>
</html>