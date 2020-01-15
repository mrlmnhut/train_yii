<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var yii\web\View $this */

$this->title = 'Home Page';
?>

<section class="body">
    <div id="button">
        <button type="button" class="btn btn-danger" id="btn-btn">
            <i class="lar la-envelope"></i>Get in touch
        </button>
    </div>
    <div class="home-page">
        <div class="slide">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
	                    <?= Html::img('@web/img/slide.png',
		                    ['alt' => 'My Slide', 'class' => 'img-fluid img-desktop']) ?>
	                    <?= Html::img('@web/img/slide-mobile.png',
		                    ['alt' => 'My Slide', 'class' => 'img-fluid img-mobile']) ?>
                        <div class="carousel-caption">
                            <span>A Full Spectrum Of Recruitment</span>
                        </div>
                    </div>
                    <div class="carousel-item">
	                    <?= Html::img('@web/img/slide.png',
		                    ['alt' => 'My Slide', 'class' => 'img-fluid img-desktop']) ?>
	                    <?= Html::img('@web/img/slide-mobile.png',
		                    ['alt' => 'My Slide', 'class' => 'img-fluid img-mobile']) ?>
                        <div class="carousel-caption">
                            <span>A Full Spectrum Of Recruitment</span>
                        </div>
                    </div>
                    <div class="carousel-item">
	                    <?= Html::img('@web/img/slide.png',
		                    ['alt' => 'My Slide', 'class' => 'img-fluid img-desktop']) ?>
	                    <?= Html::img('@web/img/slide-mobile.png',
		                    ['alt' => 'My Slide', 'class' => 'img-fluid img-mobile']) ?>
                        <div class="carousel-caption">
                            <span>A Full Spectrum Of Recruitment</span>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators d-flex justify-content-start" id="slide">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
        <div class="emp-job">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card empjob">
                            <div class="img" id="emp-img">
		                        <?= Html::img('@web/img/emp.png',
			                        ['alt' => 'My Card', 'class' => 'img-fluid']) ?>
                            </div>
                            <div class="card-body body">
                                <h5 class="card-title">Employers</h5>
                                <p class="card-text">We offer Executive Search, Permanent, Contract<br>
                                    & Temporary Placements.</p>
                                <a href="<?= Url::to(['contact-us/index']) ?>" class="btn btn-outline" id="emp-btn">Contact Us
                                    <i class="la la-arrow-right pl-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card empjob" id="job">
                            <div class="img" id="job-img">
		                        <?= Html::img('@web/img/job.png',
			                        ['alt' => 'My Card', 'class' => 'img-fluid']) ?></div>
                            <div class="card-body body">
                                <h5 class="card-title"><strong>Jobseekers</strong></h5>
                                <p class="card-text">Be part of our database by submitting your<br>
                                    resume online.</p>
                                <a href="<?= Url::to(['contact-us/index']) ?>" class="btn btn-outline" id="job-btn">Contact Us
                                    <i class="la la-arrow-right pl-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mission-vision">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="media">
	                        <?= Html::img('@web/img/mission.png',
		                        ['alt' => 'My Card', 'class' => 'img-fluid']) ?>
                            <div class="media-body pr-3">
                                <h5 class="mt-0">Our Mission</h5>
                                To provide quality human resource support in developing high performance corporate teams while advancing the careers of candidates.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media media-vision">
	                        <?= Html::img('@web/img/vision.png',
		                        ['alt' => 'My Card', 'class' => 'img-fluid']) ?>
                            <div class="media-body">
                                <h5 class="mt-0">Our Vision</h5>
                                To be the partner of choice for quality human resource and recruitment solutions.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us">
            <div class="container">
                <div class="col-md-6">
                    <h5>ABOUT US</h5>
                    <div id="about-us-description">
                        <span>Based in the cosmopolitan city of Singapore, Stafflink Services is focused on the unique needs of our clients and we value our candidates as key assets. Through providing a team of professional consultants, we are dedicated to providing a full range of recruitment solutions that will serve your every business need.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
