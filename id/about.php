<?php
    $meta_description = 'Nippo adalah aplikasi berbasis web untuk membantu para manajer memantau produktivitas & manajemen kerja stafnya. Solusi tepat untuk budaya kerja yang sehat & produktif.';
    $meta_keyword = 'Aplikasi untuk memantau produktivitas, budaya kerja, kerja produktif, produksivitas kerja';

    $og_title = 'Nippo | Aplikasi Pelaporan Untuk Meningkatkan Produktivitas Kerja';
    $og_url = 'https://nippo.id';
    $og_image = 'https://nippo.id/assets/img/ogp/ogp-about.jpg';
    $og_description = 'Nippo adalah aplikasi berbasis web untuk membantu para manajer memantau produktivitas & manajemen kerja stafnya. Solusi tepat untuk menciptakan budaya kerja yang produktif.';

    $page_title = 'Nippo | Aplikasi Untuk Memantau Produktivitas Kerja';

    $link_canonical = 'https://nippo.id/id/about.php';

    $add_css = '<link href="/assets/css/about.css" rel="stylesheet">';
    
    $page = 'about.php';

    include($_SERVER['DOCUMENT_ROOT'].'./id/layout/header.php');
?>

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

<?php include($_SERVER['DOCUMENT_ROOT'].'./id/layout/interest.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'./layout/online-meeting.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'./id/layout/footer.php') ?>