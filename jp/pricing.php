<?php
    $meta_description = 'The Nippo Pricing page details its total cost & fees, subscribing procedure, ageement & consultation process, invoice and purchase order.';
    $meta_keyword = 'Nippo, nippo fees, nippo, cost, subscribing procedure, agreement & consultation, Nippo sales, nippo online form, nippo whatsapp, nippo call, installation process, nippo invoice, purchase order, terms and agreement, payment terms, nippo number of users, nippo total cost';

    $og_title = 'Nippo | Pricing';
    $og_url = 'https://nippo.id';
    $og_image = 'https://nippo.id/assets/img/ogp/ogp-pricing.jpg';
    $og_description = 'The Nippo Pricing page details the total cost, subscribing procedure, ageement & consultation process, invoice and purchase order involved in using the Cloud Based Employee Management system.';

    $page_title = 'Nippo | Pricing & Fees';

    $link_canonical = 'https://nippo.id/jp/pricing.php';

    $add_css = '<link href="/assets/css/pricing.css" rel="stylesheet">';
    
    $page = 'pricing.php';

    include($_SERVER['DOCUMENT_ROOT'].'./jp/layout/header.php');
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
                        <p>ユーザー数が10人を超えると1ユーザーにつき月間</p>
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
                    <h5>カスタマイズして御社仕様の日報ツールを開発することも可能です。</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="mailto:info@logique.co.id"><img src="/assets/icon/mail.svg" alt=""></a></li>
                        <li class="list-inline-item"><a href="tel:622122708935"><img src="/assets/icon/phone.svg" alt=""></a></li>
                        <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=62811870321"><img src="/assets/icon/whatsapp.svg" alt=""></a></li>
                    </ul>
                    <div class="text-center">
                        <a href="/contact.php" class="btn btn--green btn--round btn--main">Contact Us &nbsp; <img class="arrow-right arrow-right--white" src="/assets/icon/arrow-right.svg" alt="" width="15"></a>
                    </div>
                    <a href="/contact.php">オンラインミーティングのリクエストはこちら</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-subscribe mb-5">
    <div class="container">
        <h4 class="section-title section-title--left-line">Nippoの利用の仕方</h4>
        <div class="row">
            <div class="col-md-6">
                <p>Nippoはすぐに簡単にはじめられます</p>
            </div>
        </div>
        <div class="row group-item-border">
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/touch.svg" alt=""></div>
                    <div class="item__text">
                        <h5>お問い合わせください。</h5>
                        <p>日本語、英語、インドネシア語のいずれかでWA、TEL、Eメールでご連絡ください。Salesスタッフが対応いたします。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/agreement.svg" alt=""></div>
                    <div class="item__text">
                        <h5>コンサルテーション</h5>
                        <p>スペシャリストがNIPPOについてデモをしご説明いたします。御社のご要望もヒアリングさせていただき適切な提案をいたします。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/purchase.svg" alt=""></div>
                    <div class="item__text">
                        <h5>サービス利用申込書</h5>
                        <p>利用条件や費用について同意いただけたら申込書に記入＆サインし送信ください。ソフトコピーで十分です。NPWPなども別途お知らせいただきます。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="group-item-border__item">
                    <div class="item__img"><img src="/assets/icon/invoice.svg" alt=""></div>
                    <div class="item__text">
                        <h5>ご請求</h5>
                        <p>利用費用は毎月末に登録されたユーザー数をカウントして計算し、ご請求書を発行いたします。原則電子請求書となりますが必要に応じてハードコピーを郵送することも可能です。翌月末までに銀行振込いただきます。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-subscribe__note">
            <h6>注記</h6>
            <ol>
                <li>インドネシアの当社銀行口座にお振り込みいただきます月末締め翌月末払い。Factur Pajakお出しします</li>
                <li>Pph23 (2%) を控除してお支払いいただきます。</li>
                <li>ユーザーとして登録されていた期間が10日未満であったユーザーは課金対象となりません。</li>
                <li>アクティブでないユーザーはNIPPOから削除いただく必要があります。</li>
            </ol>
        </div>
    </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'].'./jp/layout/interest.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'./layout/online-meeting.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'./jp/layout/footer.php') ?>