<?php
    $meta_description = 'The Contact Us page displays Logique contact information, and allows the users to fill in their name, company, phone number, email and a summary message.';
    $meta_keyword = 'Contact Us, Nippo, Contact Logique, fill out form';

    $og_title = 'Nippo | Logique Digital Indonesia | Contact Us';
    $og_url = 'https://nippo.id';
    $og_image = 'https://nippo.id/assets/img/ogp/ogp-contact.jpg';
    $og_description = 'Nippo | Contact Us';

    $page_title = 'Nippo | Contact Us';

    $link_canonical = 'https://nippo.id/jp/contact.php';

    $add_css = '<link href="/assets/css/contact.css" rel="stylesheet">';
    
    $page = 'contact.php';

    include($_SERVER['DOCUMENT_ROOT'].'./jp/layout/header.php');
?>

<section class="contact__headline">
    <div class="container text-center">
        <h1>Contact us</h1>
        <p>使い方、費用、カスタマイズについてなど <br>Nippoに関することは下記フォームにてお問い合わせください。</p>
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

<section class="mb-5 contact__footer">
    <div class="container text-center">
        <p>If you want an immediate response, get in touch with us during office hours: <br>
        <b>09.00 - 17.00 (Mon-Fri)</b></p>            
        <ul class="list-inline">
            <li class="list-inline-item"><a href="mailto:info@logique.co.id"><img src="/assets/icon/mail.svg" alt=""></a></li>
            <li class="list-inline-item"><a href="tel:622122708935"><img src="/assets/icon/phone.svg" alt=""></a></li>
            <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=62811870321"><img src="/assets/icon/whatsapp.svg" alt=""></a></li>
        </ul>
    </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'].'./jp/layout/interest.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'./layout/online-meeting.php') ?>
<?php 
    $add_js = '<script src="/assets/js/contact.js"></script>';
    include($_SERVER['DOCUMENT_ROOT'].'./jp/layout/footer.php') 
?>