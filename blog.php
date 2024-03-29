<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" itemprop="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="PT. LOGIQUE Digital Indonesia">
    <meta name="google-site-verification" content="vA3R6dl4jXfUVzsjkNcL_3BRHXnpoR1v6PZH_OMi4AY" />
	<meta itemprop="name" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nippo">
    <meta property="og:url" content="https://nippo.id">
    <meta property="og:image" content="https://nippo.id/assets/img/ogp/">
    <meta property="og:description" content="">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	
    <title>Blog</title>

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
	<link href="/assets/css/blog.css" rel="stylesheet">
	
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172657169-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-172657169-1');
    </script>
    <!-- End Global site tag (gtag.js) - Google Analytics -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KBWKGBV');</script>
    <!-- End Google Tag Manager -->

  </head>
  
  <?php $page = 'blog.php'; ?>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBWKGBV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <?php include './layout/header.php' ?>
    
    <section class="blog-headline">
        <div class="container">
            <div class="form-row">
                <div class="col-lg-8 mb-3 mb-lg-0">
                    <div class="blog-headline__news">
                        <img src="/assets/img/dummy-image.jpg" class="img-fluid mb-3 mb-md-0" alt="">
                        <div class="news__text">
                            <p>Web Marketing</p>
                            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quibusdam ullam </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <span class="text__info info--date">22 June 2020</span>
                            <span class="text__info info--time">4 Min Ago</span>                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-headline__recommend">
                        <h4>Recommended</h4>

                        <ul class="recommend__list">
                            <li>
                                <img src="/assets/img/blog/recommend.png" class="img-fluid" alt="">
                                <div class="list__text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime omnis illum dolore corporis nulla rerum voluptatum! Possimus odio facilis harum.</p>
                                </div>
                            </li>
                            <li>
                                <img src="/assets/img/blog/recommend.png" class="img-fluid" alt="">
                                <div class="list__text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime omnis illum dolore corporis nulla rerum voluptatum! Possimus odio facilis harum.</p>
                                </div>
                            </li>
                            <li>
                                <img src="/assets/img/blog/recommend.png" class="img-fluid" alt="">
                                <div class="list__text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime omnis illum dolore corporis nulla rerum voluptatum! Possimus odio facilis harum.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-1.png" class="img-fluid" alt="">
                        <small class="text--green">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-2.png" class="img-fluid" alt="">
                        <small class="text--blue">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-3.png" class="img-fluid" alt="">
                        <small class="text--orange">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-4.png" class="img-fluid" alt="">
                        <small class="text--red">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-1.png" class="img-fluid" alt="">
                        <small class="text--green">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-2.png" class="img-fluid" alt="">
                        <small class="text--blue">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-3.png" class="img-fluid" alt="">
                        <small class="text--orange">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-4.png" class="img-fluid" alt="">
                        <small class="text--red">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-1.png" class="img-fluid" alt="">
                        <small class="text--green">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-2.png" class="img-fluid" alt="">
                        <small class="text--blue">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-3.png" class="img-fluid" alt="">
                        <small class="text--orange">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-4.png" class="img-fluid" alt="">
                        <small class="text--red">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-1.png" class="img-fluid" alt="">
                        <small class="text--green">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-2.png" class="img-fluid" alt="">
                        <small class="text--blue">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-3.png" class="img-fluid" alt="">
                        <small class="text--orange">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="blogs__item">
                        <img src="/assets/img/blog/blog-4.png" class="img-fluid" alt="">
                        <small class="text--red">Web Marketing</small>
                        <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                        <span class="item__info info--date">21 June 2020</span>
                        <span class="item__info info--time">10.34 WIB</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="blog-footer">
        <div class="container">
            <ul class="blog-footer__pagination list-inline">
                <li class="list-inline-item"><a href="#"><</a></li>
                <li class="list-inline-item active"><a href="#">1</a></li>
                <li class="list-inline-item"><a href="#">2</a></li>
                <li class="list-inline-item"><a href="#">3</a></li>
                <li class="list-inline-item"><a href="#">4</a></li>
                <li class="list-inline-item"><a href="#">5</a></li>
                <li class="list-inline-item"><a href="#">></a></li>
            </ul>
            <select class="blog-footer__length" name="" id="">
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
            <div class="blog-footer__info">1-24 of 250</div>
        </div>
    </section>
    
    <?php include './layout/online-meeting.php' ?>
    <?php include './layout/footer.php' ?>

	
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/slick.min.js"></script>		
    <script src="/assets/js/jquery.matchHeight-min.js"></script>
    <script src="/assets/js/main.js"></script>
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
  </body>
</html>