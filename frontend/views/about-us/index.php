<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var yii\web\View $this */

$this->title = 'About Us';
?>

<section class="banner">
	<?= Html::img('@web/img/banner-about-us-page.png',
		['alt' => 'My Banner', 'class' => 'img-fluid img-desktop']) ?>

	<?= Html::img('@web/img/banner-about-us-page-mobile.png',
		['alt' => 'My Banner', 'class' => 'img-fluid img-mobile']) ?>
</section>

<section class="body">
    <div id="button">
        <button type="button" class="btn btn-danger" id="btn-btn">
            <i class="lar la-envelope"></i>Get in touch
        </button>
    </div>
    <div class="about-us-page">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb" id="breadcrumb-me">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/home/index/']) ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </div>
        </nav>
        <div class="catalog">
            <div class="container">
                <div class="established">
                    <div class="row">
                        <div class="col-md-7" id="col-established">
                            <p>Established for over a decade, Stafflink Services is a leading staffing and recruitment agency. With a keen focus on the unique needs of our clients, we are dedicated to providing a full range of turnkey recruitment solutions that serve your every business need.</p>
                        </div>
                        <div class="col-md-5">
	                        <?= Html::img('@web/img/img-about-us.png',
		                        ['alt' => 'Responsive image', 'class' => 'img-fluid']) ?>
                        </div>
                    </div>
                </div>
                <div class="services">
                    <div class="row">
                        <div class="col-md-5">
                            <h5>As a staffing solutions provider, Stafflink offers a full spectrum of recruitment and related services that include:</h5>
                        </div>
                    </div>
                    <div class="row" id="row-services">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6 frame-col">
                                    <div class="card">
                                        <div class="card-body">
	                                        <?= Html::img('@web/img/frame.png',
		                                        ['alt' => 'Responsive image', 'class' => 'img-fluid']) ?>
                                            <h5 class="card-title">Staff Placement</h5>
                                            <p class="card-text">Our staff placement services include executive search, permanent/temporary as well as contract placements.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 frame-col">
                                    <div class="card">
                                        <div class="card-body">
	                                        <?= Html::img('@web/img/frame1.png',
		                                        ['alt' => 'Responsive image', 'class' => 'img-fluid']) ?>
                                            <h5 class="card-title">Payroll Services</h5>
                                            <p>For companies seeking all-in-one convenience, we offer payroll services that allow clients flexibility in their task allocation and enhanced work productivity.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 frame-col">
                            <div class="card">
                                <div class="card-body">
	                                <?= Html::img('@web/img/frame2.png',
		                                ['alt' => 'Responsive image', 'class' => 'img-fluid']) ?>
                                    <h5 class="card-title">Work Pass Application</h5>
                                    <p>We are also able to act on behalf of clients in applying for Employment Passes, S-Passes and Work Permits.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logan">
            <div class="container">
                <h3>
                    <sup id="open">“</sup> We offer better fits by taking time to truly understand the needs of both clients and candidates,
                    <br>striving to foster enduring relationships that we believe will lead to the best solutions.
                    <sup id="close">”</sup>
                </h3>
            </div>
        </div>
        <div class="at-stafflink">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <p>At Stafflink, the interest of both clients and candidates are paramount, which explains why we have built a team that takes immense pride in service. Comprising of committed and proficient consultants with varied industry experiences, we offer personalised services that go beyond the mundane.</p>
                        <p class="mt-5">Experience Stafflink, your partner in HR and recruitment.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="feedback">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h5 class="">HEAR WHAT OUR CLIENTS SAY ABOUT US</h5>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <q class="quote"><i>Through providing a team of professional consultants, we are dedicated to providing a full range of recruitment solutions that will serve your every business need.</i></q>
                                </div>
                                <div class="carousel-item">
                                    <q class="quote"><i>Through providing a team of professional consultants, we are dedicated to providing a full range of recruitment solutions that will serve your every business need.</i></q>
                                </div>
                                <div class="carousel-item">
                                    <q class="quote"><i>Through providing a team of professional consultants, we are dedicated to providing a full range of recruitment solutions that will serve your every business need.</i></q>
                                </div>
                            </div>
                            <ol class="carousel-indicators justify-content-start" id="feedback">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                        </div>
                        <br>
                        <div class="btn btn-outline" id="read-testimonials">
                            <a href="#"><p class="">Read Testimonials
                                    <i class="la la-arrow-right pl-2"></i></p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
