<!DOCTYPE html>
<html lang="id">
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
	
    <title>About</title>

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
	<link href="/assets/css/about.css" rel="stylesheet">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-X"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-XXXXXXXXX-X');
	</script> -->

  </head>
  
  <?php $page = 'about.php'; ?>

  <body>
    
    <?php include './layout/header.php' ?>

    <section class="about">
        <div class="container">
            <div class="text-center">
                <img src="/assets/icon/about.svg" width="75" alt="">
                <h1 class="about__title">Nippo adalah alat manajemen cloud laporan harian.</h1>
            </div>

            <div class="row about__text">
                <div class="col-md-6">
                    <p>Melalui Nippo, manajer SDM dan supervisor di setiap departemen dapat memeriksa bagaimana karyawan menghabiskan jam kerjanya. Mengizinkan rekan kerja untuk saling menandai dan mengevaluasi pekerjaan satu sama lain, sehingga membuat komunikasi internal menjadi lebih aktif.</p>
                </div>
                <div class="col-md-6">
                    <p>Alat ini berguna untuk SDM untuk menghitung biaya jam kerja dari setiap tugas yang dilakukan oleh setiap karyawan. Melalui Nippo, evaluasi dan penilaian mandiri dapat dilakukan secara metodis setiap hari.</p>
                </div>
            </div>

            <div class="row about__img-wrapper">
                <div class="offset-md-1 col-md-10">
                    <div class="row">
                        <div class="col-md-5 mb-4 mb-lg-0">
                            <div class="img-wrapper">
                                <img src="/assets/img/about-1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="offset-md-2 col-md-5 mb-4 mb-lg-0">
                            <div class="img-wrapper">
                                <img src="/assets/img/about-2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about__summary text-center">
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <p><span class="font-weight-bold">"Nippo" (日報)</span> artinya Laporan Harian dalam bahasa Jepang. Nippo dikembangkan oleh PT. LOGIQUE Digital Indonesia, perusahaan solusi digital yang berpusat di Jakarta, Indonesia. Nippo dibuat dengan harapan dapat membantu mempromosikan budaya kerja yang lebih sehat, produktif, dan juga fleksibel, yang menguntungkan pihak karyawan dan perusahaan.</p>
                    </div>
                </div>

                <div class="green-circle">
                    <a href="https://dokodemo-kerja.com/ind" target="_blank" class="mx-auto green-circle__link"><img class="arrow-right" src="/assets/icon/arrow-right.svg" alt="" width="15"> Lihat alat pemantauan kinerja kami yang lain: <span class="font-weight-bold">Dokodemo-Kerja</span></a>
                </div>
            </div>
        </div>
    </section>

    <?php include './layout/interest.php' ?>
    <?php include '../layout/online-meeting.php' ?>
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