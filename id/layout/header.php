<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" itemprop="description" content=<?php if (isset($meta_description)) echo '"'.$meta_description.'"' ?>>
        <meta name="keywords" content=<?php if (isset($meta_keyword)) echo '"'.$meta_keyword.'"' ?> >
        <meta name="author" content="PT. LOGIQUE Digital Indonesia">
        <meta name="google-site-verification" content="vA3R6dl4jXfUVzsjkNcL_3BRHXnpoR1v6PZH_OMi4AY" />
        <meta itemprop="name" content="">
        <meta property="og:title" content=<?php if (isset($og_title)) echo '"'.$og_title.'"' ?> >
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Nippo">
        <meta property="og:url" content=<?php if (isset($og_url)) echo '"'.$og_url.'"' ?> >
        <meta property="og:image" content=<?php if (isset($og_image)) echo '"'.$og_image.'"' ?> >
        <meta property="og:description" content=<?php if (isset($og_description)) echo '"'.$og_description.'"' ?> >
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        
        <title><?php echo $page_title ?></title>

        <!-- Canonical -->
        <link rel="canonical" href=<?php if (isset($og_image)) echo '"'.$link_canonical.'"' ?> />   

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

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
        <?php if (isset($add_css)) echo $add_css ?>
        
        <?php if ($_SERVER['HTTP_HOST'] == 'nippo.id') { ?>
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
        <?php } ?>

    </head>
  
    <body>
        <?php if ($_SERVER['HTTP_HOST'] == 'nippo.id') { ?>
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBWKGBV"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        <?php } ?>

<?php
    function active($current_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        if($current_page == $url){
            echo 'active'; 
        }
    }
    function lang_active($lang_page) {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
        $lang_url = $url_array[1];
        if($lang_page == $lang_url){
            echo 'active'; 
        }
    }
?>

<section class="header">
    <div class="container">
        <div class="d-flex justify-content-between header__top">
            <a href="/ina"><img src="/assets/img/nippo.png" alt="Nippo" width="200"></a>
            
            <div class="navbar-expand-lg navbar-light">
                <ul class="header__lang d-none d-lg-block">
                    <li class="<?php lang_active('id') ?>"><a href="/ina/<?php echo $page;?>">ID</a></li>
                    <li class="<?php lang_active('') ?>"><a href="/<?php echo $page;?>">EN</a></li>
                    <li class="<?php lang_active('jpn') ?>"><a href="/jp/<?php echo $page;?>">JP</a></li>
                </ul>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        
        <nav class="navbar navbar-expand-lg p-lg-0">
            <div class="collapse navbar-collapse pb-3 pb-lg-0" id="navbarHeader">
                <ul class="navbar-nav justify-content-between w-100">
                    <li class="nav-item <?php active('') ?>">
                        <a class="nav-link" href="/ina/">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php active('about.php') ?>">
                        <a class="nav-link" href="/ina/about.php">TENTANG NIPPO</a>
                    </li>
                    <li class="nav-item <?php active('features.php') ?>">
                        <a class="nav-link" href="/ina/features.php">FITUR</a>
                    </li>
                    <li class="nav-item <?php active('pricing.php') ?>">
                        <a class="nav-link" href="/ina/pricing.php">HARGA</a>
                    </li>
                    <!-- <li class="nav-item <//?php active('blog.php') ?>">
                        <a class="nav-link" href="/ina/blog.php">BLOG</a>
                    </li> -->
                    <li class="nav-item <?php active('contact.php') ?>">
                        <a class="nav-link" href="/ina/contact.php">HUBUNGI KAMI</a>
                    </li>
                </ul>

                <ul class="header__lang text-center mt-2 d-block d-lg-none">
                    <li class="<?php lang_active('id') ?>"><a href="/ina/<?php echo $page;?>">ID</a></li>
                    <li class="<?php lang_active('') ?>"><a href="/<?php echo $page;?>">EN</a></li>
                    <li class="<?php lang_active('jp') ?>"><a href="/jp/<?php echo $page;?>">JP</a></li>
                </ul>
            </div>
        </nav>
    </div>
</section>