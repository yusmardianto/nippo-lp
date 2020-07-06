<?php
    function active($current_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        if($current_page == $url){
            echo 'active'; 
        }
    } 
?>

<section class="header">
    <div class="container">
        <div class="d-flex justify-content-between header__top">
            <a href="/"><img src="/assets/img/nippo.png" alt="Nippo" width="200"></a>
            
            <div class="navbar-expand-lg navbar-light">
                <ul class="header__lang d-none d-lg-block">
                    <li class="active"><a href="#">ENG</a></li>
                    <li><a href="#">INA</a></li>
                    <li><a href="#">JPN</a></li>
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
                        <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php active('about.php') ?>">
                        <a class="nav-link" href="/about.php">ABOUT US</a>
                    </li>
                    <li class="nav-item <?php active('features.php') ?>">
                        <a class="nav-link" href="/features.php">FEATURES</a>
                    </li>
                    <li class="nav-item <?php active('pricing.php') ?>">
                        <a class="nav-link" href="/pricing.php">PRICING</a>
                    </li>
                    <li class="nav-item <?php active('blog.php') ?>">
                        <a class="nav-link" href="blog.php">BLOG</a>
                    </li>
                    <li class="nav-item <?php active('contact.php') ?>">
                        <a class="nav-link" href="contact.php">CONTACT US</a>
                    </li>
                </ul>

                <ul class="header__lang text-center mt-2 d-block d-lg-none">
                    <li class="active"><a href="#">ENG</a></li>
                    <li><a href="#">INA</a></li>
                    <li><a href="#">JPN</a></li>
                </ul>
            </div>
        </nav>
    </div>
</section>