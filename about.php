<?php
    $meta_description = 'Through Nippo, HR managers can view the daily reports of employees, & serve as an Cloud Management & HR tool for employee evaluation.';
    $meta_keyword = 'Nippo, daily report, tool for HR, HR tool, HR Managers, Tool for supervisors, Human Resources website, employee evaluation tool, internal communication, daily report, cloud management, LOGIQUE';

    $og_title = 'Nippo | A Daily Reporting Tool for Enhanced Employee Evaluation & Cost Management';
    $og_url = 'https://nippo.id';
    $og_image = 'https://nippo.id/assets/img/ogp/ogp-index.jpg';
    $og_description = 'Nippo is a Cloud Based Daily Reporting Tool: Evaluate Employee Performances Objectively through data based reports; determine better cost management solutions for enhanced remote work.';

    $page_title = 'Nippo | A Daily Reporting Tool for Employee Evaluation';

    $link_canonical = 'https://nippo.id/about.php';

    $add_css = '<link href="/assets/css/about.css" rel="stylesheet">';
    
    $page = 'about.php';

    include($_SERVER['DOCUMENT_ROOT'].'/layout/header.php');
?>

<section class="about">
    <div class="container">
        <div class="text-center">
            <img src="/assets/icon/about.svg" width="75" alt="">
            <h1 class="about__title">Nippo is a daily report cloud management tool.</h1>
        </div>

        <div class="row about__text">
            <div class="col-md-6">
                <p>Through Nippo, HR managers and supervisors within each department can examine how employees spend their working hours. Allowing for co-workers to tag and evaluate each other’s work makes internal communication more active.</p>
            </div>
            <div class="col-md-6">
                <p>This is a useful tool for HR to calculate the man-hour cost of each tasks conducted by every employee. Through Nippo, evaluation and self-assessment can be done methodically every day.</p>
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
                    <p>The word <span class="font-weight-bold">"Nippo" (日報)</span> literally means Daily Report in Japanese. Nippo is developed by PT. LOGIQUE Digital Indonesia, a company providing Digital Solutions, based in Jakarta, Indonesia. Nippo was designed to promote healthier and more productive work cultures in a way that benefits both the Company and Employees alike.</p>
                </div>
            </div>

            <div class="green-circle">
                <a href="https://dokodemo-kerja.com" ttarget="_blank" class="mx-auto green-circle__link"><img class="arrow-right" src="/assets/icon/arrow-right.svg" alt="" width="15"> Check out our other HR tool: <span class="font-weight-bold">Dokodemo-Kerja</span></a>
            </div>
        </div>
    </div>
</section>
   
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/interest.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/online-meeting.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/footer.php') ?>