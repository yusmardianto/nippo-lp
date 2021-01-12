<?php
    $meta_description = 'The Nippo Pricing page details its total cost & fees, subscribing procedure, ageement & consultation process, invoice and purchase order.';
    $meta_keyword = 'Nippo, nippo fees, nippo, cost, subscribing procedure, agreement & consultation, Nippo sales, nippo online form, nippo whatsapp, nippo call, installation process, nippo invoice, purchase order, terms and agreement, payment terms, nippo number of users, nippo total cost';

    $og_title = 'Nippo | Pricing';
    $og_url = 'https://nippo.id';
    $og_image = 'https://nippo.id/assets/img/ogp/ogp-pricing.jpg';
    $og_description = 'The Nippo Pricing page details the total cost, subscribing procedure, ageement & consultation process, invoice and purchase order involved in using the Cloud Based Employee Management system.';

    $page_title = 'Nippo | Pricing & Fees';

    $link_canonical = 'https://nippo.id/pricing.php';

    $add_css = '<link href="/assets/css/pricing.css" rel="stylesheet">';
    
    $page = 'pricing.php';

    include($_SERVER['DOCUMENT_ROOT'].'/layout/header.php');
?>

<section class="pricing-amount">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 mb-4 mb-md-0">
                <div class="pricing-amount__details">
                    <h1>PRICING</h1>
                    <div class="details__price" data-currency="RP" data-period="per Month">
                    1,000,000
                    </div>
                    <div class="details__info details__info-1">
                        <p>
                            If the number of user is above 10 then additional charge is ( for 1 more user )
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
                    <h5>Or you can contact us to <br>customize any feature.</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="mailto:info@logique.co.id"><img src="/assets/icon/mail.svg" alt=""></a></li>
                        <li class="list-inline-item"><a href="tel:622122708935"><img src="/assets/icon/phone.svg" alt=""></a></li>
                        <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=62811870321"><img src="/assets/icon/whatsapp.svg" alt=""></a></li>
                    </ul>
                    <div class="text-center">
                        <a href="/contact.php" class="btn btn--green btn--round btn--main">Contact Us &nbsp; <img class="arrow-right arrow-right--white" src="/assets/icon/arrow-right.svg" alt="" width="15"></a>
                    </div>
                    <a href="/contact.php">Or request an online meeting</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-subscribe mb-5">
    <div class="container">
        <h4 class="section-title section-title--left-line">How to Subscribe?</h4>
        <div class="row">
            <div class="col-md-6">
                <p>Before subscribing to Nippo, there are some things that you should know about our procedure.</p>
            </div>
        </div>
        <div class="row group-item-border">
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/touch.svg" alt=""></div>
                    <div class="item__text">
                        <h5>Get in Touch</h5>
                        <p>To buy Nippo, you will have to get in touch with our sales team to discuss the terms. You can reach us through Whatsapp, Online Form, Direct Call, or Email.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/agreement.svg" alt=""></div>
                    <div class="item__text">
                        <h5>Agreement & Consultation</h5>
                        <p>We will discuss and review your needs during the Agreement & Consultation phase. The Agreement includes transitioning procedure, installation process, custom features, etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/purchase.svg" alt=""></div>
                    <div class="item__text">
                        <h5>Purchase Order</h5>
                        <p>After confirming the terms of your specified requirements, then issue a Purchase Order will be mailed to your office, or sent to your company email. The content of the PO includes; Terms and Agreement, Payment Terms, Number of Users, VAT, and Total Cost.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/invoice.svg" alt=""></div>
                    <div class="item__text">
                        <h5>Invoice</h5>
                        <p>A recurring invoice will be sent to you at the beginning of the following month. You can view the invoice on your admin dashboard, or from an email that we will send you at the end of every month.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-subscribe__note">
            <h6>Note that:</h6>
            <ol>
                <li>The fee calculation will closes at the end of the month and should be paid by the end of the following month. We will provide the Tax invoice.</li>
                <li>The invoice amount will include Pph23 (2%) deduction.</li>
                <li>Users who have been registered less than 10 days will not be charged.</li>
                <li>Inactive users should be removed from NIPPO.</li>
            </ol>
        </div>
    </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/interest.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/online-meeting.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/footer.php') ?>