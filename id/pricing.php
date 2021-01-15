<?php
    $meta_description = 'Daftar harga dan detail cara berlangganan aplikasi Nippo. Diskusikan dan tinjau kebutuhan Anda serta dapatkan penawaran harga terbaik dari kami.';
    $meta_keyword = 'aplikasi nippo, harga aplikasi nippo, cara berlangganan nippo';

    $og_title = 'Nippo | Harga & Cara Berlangganan';
    $og_url = 'https://nippo.id';
    $og_image = 'https://nippo.id/assets/img/ogp/ogp-pricing.jpg';
    $og_description = 'Daftar harga dan detail cara berlangganan aplikasi Nippo. Diskusikan dan tinjau kebutuhan Anda dan dapatkan penawaran harga terbaik kami.';

    $page_title = 'Nippo | Harga & Cara Berlangganan';

    $link_canonical = 'https://nippo.id/id/pricing.php';

    $add_css = '<link href="/assets/css/pricing.css" rel="stylesheet">';
    
    $page = 'pricing.php';

    include($_SERVER['DOCUMENT_ROOT'].'/id/layout/header.php');
?>

<section class="pricing-amount">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 mb-4 mb-md-0">
                <div class="pricing-amount__details">
                    <h1>PRICING</h1>
                    <div class="details__price" data-currency="RP" data-period="per Bulan">
                    1,000,000
                    </div>
                    <div class="details__info details__info-1">
                        <p>
                            Jika ada lebih dari 10 pengguna, maka setiap pengguna dikenakan biaya
                        </p>
                    </div>
                    <div class="details__info details__info-2">
                        <div class="details__price details__price--info" data-currency="+RP" data-period="per user">
                        50,000
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="pricing-amount__contact">
                    <h5>Hubungi kami untuk <br>fitur custom.</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="mailto:info@logique.co.id"><img src="/assets/icon/mail.svg" alt=""></a></li>
                        <li class="list-inline-item"><a href="tel:622122708935"><img src="/assets/icon/phone.svg" alt=""></a></li>
                        <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=62811870321"><img src="/assets/icon/whatsapp.svg" alt=""></a></li>
                    </ul>
                    <div class="text-center">
                        <a href="/ina/contact.php" class="btn btn--green btn--round btn--main">Hubungi Kami &nbsp; <img class="arrow-right arrow-right--white" src="/assets/icon/arrow-right.svg" alt="" width="15"></a>
                    </div>
                    <a href="/ina/contact.php">Or request an online meeting</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-subscribe mb-5" id="subscribe">
    <div class="container">
        <h4 class="section-title section-title--left-line">Cara Berlangganan</h4>
        <div class="row">
            <div class="col-md-6">
                <p>Sebelum berlangganan Nippo berikut adalah beberapa hal yang harus Anda ketahui tentang prosedur kami.</p>
            </div>
        </div>
        <div class="row group-item-border">
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/touch.svg" alt=""></div>
                    <div class="item__text">
                        <h5>Hubungi Kami</h5>
                        <p>Untuk berlangganan Nippo, Anda harus menghubungi tim sales kami untuk mendiskusikan ketentuan-ketentuan. Anda bisa menjangkau kami melalui Whatsapp, Formulir Online, Telefon, atau Email. Jam kantor kami mulai dari 09:00 sampai 17.00 WIB (Senin-Jumat).</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/agreement.svg" alt=""></div>
                    <div class="item__text">
                        <h5>Persetujuan & Konsultasi</h5>
                        <p>Kami akan mendiskusikan dan meninjau kebutuhan Anda pada fase Persetujuan & Konsultasi. Persetujuan meliputi; proses transisi, proses instalasi, fitur custom, dll. Anda dibebaskan untuk merevisi persetujuan awal sebelum Purchase Order diterbitkan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/purchase.svg" alt=""></div>
                    <div class="item__text">
                        <h5>Purchase Order</h5>
                        <p>Setelah mengkonfirmasi ketentuan dari kebutuhan Anda, kami akan menerbitkan sebuah Purchase Order yang akan dikirimkan ke kantor atau email perusahaan Anda. Isi dari PO merangkum Syarat dan Ketentuan, Syarat Pembayaran, Jumlah Pengguna, PPN, dan Total Harga. Setelah PO disetujui, kami akan membuat Akun Nippo untuk perusahaan Anda, dan menawarkan layanan pelatihan / sesi instalasi gratis jika diperlukan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/invoice.svg" alt=""></div>
                    <div class="item__text">
                        <h5>Invoice</h5>
                        <p>Faktur berulang akan dikirimkan kepada Anda pada awal bulan berikutnya. Anda dapat melihat faktur di dashboard admin Anda, atau dari email yang akan kami kirimkan setiap akhir bulan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-subscribe__note">
            <h6>Perhatikan bahwa:</h6>
            <ol>
                <li>Jumlah biaya pemakaian akan ditutup pada akhir bulan dan harus dibayarkan sebelum akhir bulan berikutnya. Invoice juga sudah termasuk dengan Fatur Pajak.</li>
                <li>Jumlah yang ditagihkan pada invoice sudah termasuk pemotongan Pph23 (2%)</li>
                <li>Pengguna yang baru didaftarkan kurang dari 10 hari tidak dikenakan biaya.</li>
                <li>Pengguna yang sudah tidak aktif disarankan untuk dihapus dari NIPPO .</li>
            </ol>
        </div>
    </div>
</section>
    
<?php include($_SERVER['DOCUMENT_ROOT'].'/id/layout/interest.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/online-meeting.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/id/layout/footer.php') ?>