<?php
    $meta_description = 'インドネシアに展開している日系企業に有益なツールNippo！日報を通して従業員の働き方を可視化し、客観的な人事評価を可能にし、HR業務を効率化、社内のコミュニケーションを活性化するクラウドツールNippoの紹介です。開発販売元のLOGIQUEにお問い合わせください。';
    $meta_keyword = 'Nippo, daily report, tool for HR, HR tool, HR Managers, Tool for supervisors, Human Resources website, employee evaluation tool, internal communication, daily report, cloud management, LOGIQUE';

    $og_title = '人事評価と原価管理をインドネシアの日報管理ツールNippoで';
    $og_url = 'https://nippo.id';
    $og_image = 'https://nippo.id/assets/img/ogp/ogp-index.jpg';
    $og_description = 'インドネシアに展開している日系企業に有益なツールNippo！日報を通して従業員の働き方を可視化し、客観的な人事評価を可能にします。';

    $page_title = '人事評価と原価管理をNippoで | インドネシアの日報管理ツール';

    $link_canonical = 'https://nippo.id/jp/about.php';

    $add_css = '<link href="/assets/css/about.css" rel="stylesheet">';
    
    $page = 'about.php';

    include($_SERVER['DOCUMENT_ROOT'].'/jp/layout/header.php');
?>

<section class="about">
    <div class="container">
        <div class="text-center">
            <img src="/assets/icon/about.svg" width="75" alt="">
            <h1 class="about__title">Nippoは日報入力を通じて組織の生産性向上とロジカルな人事評価を支援するクラウドツールです。</h1>
        </div>

        <div class="row about__text">
            <div class="col-md-6">
                <p>毎日の日報から、人事マネージャーやスーパーバイザーは従業員がどのような働き方をしているのか把握でき適切なコーチングをすることが可能になります。従業員間で評価＆コメントする仕組みがインターナルコミュニケーションを活性化します。</p>
            </div>
            <div class="col-md-6">
                <p>誰が、どのプロジェクト、タスクに何時間、費やしたのかを把握し分析することができます。プロジェクト別、部署別に損益分析、計画対比分析などが行えます。人事評価を数字で客観的に行えるようになります。</p>
            </div>
        </div>

        <div class="row about__img-wrapper">
            <div class="offset-md-1 col-md-10">
                <div class="row">
                    <div class="col-md-5 mb-4 mb-lg-0">
                        <div class="img-wrapper">
                            <picture>
                                <source srcset="/assets/img/about-1.webp" type="image/webp">
                                <img src="/assets/img/about-1.jpg" alt="" class="img-fluid">
                            </picture>
                        </div>
                    </div>
                    <div class="offset-md-2 col-md-5 mb-4 mb-lg-0">
                        <div class="img-wrapper">
                            <picture>
                                <source srcset="/assets/img/about-2.webp" type="image/webp">
                                <img src="/assets/img/about-2.jpg" alt="" class="img-fluid">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about__summary text-center">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <p><span class="font-weight-bold">Nippoは当社</span>（PT. LOGIQUE Digital Indonesia）が日報記録提出＆フィードバック運用をするために社内向けに開発したツールが元になっています。人事評価の精度があがり、より精緻で適切なプロジェクト原価管理ができるようになった確かな効果を確認した後、この便利なツールを社外でも使っていただくために製品化しました。当社のようなプロジェクトベースのビジネスをされている会社は特にお奨めですし、カスタマイズして導入することも可能ですので、異なるビジネス形態の会社も日報運用に興味お持ちの場合はお気軽にご連絡ください。</p>
                </div>
            </div>

            <div class="green-circle">
                <a href="https://dokodemo-kerja.com" ttarget="_blank" class="mx-auto green-circle__link"><img class="arrow-right" src="/assets/icon/arrow-right.svg" alt="" width="15"> リモートワークも可能にする勤怠管理ツール<span class="font-weight-bold">Dokodemo-Kerja</span>についてはこちらから参照ください</a>
            </div>
        </div>
    </div>
</section>
   
<?php include($_SERVER['DOCUMENT_ROOT'].'/jp/layout/interest.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/online-meeting.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/jp/layout/footer.php') ?>