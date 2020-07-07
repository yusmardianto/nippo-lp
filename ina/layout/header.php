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
            <a href="/"><img src="/assets/img/nippo.png" alt="Nippo" width="200"></a>
            
            <div class="navbar-expand-lg navbar-light">
                <ul class="header__lang d-none d-lg-block">
                    <li class="<?php lang_active('') ?>"><a href="/<?php echo $page;?>">ENG</a></li>
                    <li class="<?php lang_active('ina') ?>"><a href="/ina/<?php echo $page;?>">INA</a></li>
                    <!-- <li class="<//?php lang_active('jpn') ?>"><a href="/jpn/<//?php echo $page;?>">JPN</a></li> -->
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
                        <a class="nav-link" href="/ina/about.php">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item <?php active('features.php') ?>">
                        <a class="nav-link" href="/ina/features.php">FITUR</a>
                    </li>
                    <li class="nav-item <?php active('pricing.php') ?>">
                        <a class="nav-link" href="/ina/pricing.php">HARGA</a>
                    </li>
                    <!-- <li class="nav-item <?php active('blog.php') ?>">
                        <a class="nav-link" href="/ina/blog.php">BLOG</a>
                    </li> -->
                    <li class="nav-item <?php active('contact.php') ?>">
                        <a class="nav-link" href="/ina/contact.php">HUBUNGI KAMI</a>
                    </li>
                </ul>

                <ul class="header__lang text-center mt-2 d-block d-lg-none">
                    <li class="<?php lang_active('') ?>"><a href="/<?php echo $page;?>">ENG</a></li>
                    <li class="<?php lang_active('ina') ?>"><a href="/ina/<?php echo $page;?>">INA</a></li>
                    <!-- <li class="<//?php lang_active('jpn') ?>"><a href="/jpn/<//?php echo $page;?>">JPN</a></li> -->
                </ul>
            </div>
        </nav>
    </div>
</section>