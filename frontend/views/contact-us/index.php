<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var yii\web\View $this */

$this->title = 'Contact Us';

?>

<section class="banner">
	<?= Html::img('@web/img/banner-contact-us-page.png',
		['alt' => 'My Banner', 'class' => 'img-fluid img-desktop']) ?>
	<?= Html::img('@web/img/banner-contact-us-page-mobile.png',
		['alt' => 'My Banner', 'class' => 'img-fluid img-mobile']) ?>
</section>

<section class="body">
    <div id="button">
        <button type="button" class="btn btn-danger" id="btn-btn">
            <i class="lar la-envelope"></i>Get in touch
        </button>
    </div>
    <div class="contact-us-page">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb" id="breadcrumb-me">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/home/index/']) ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <h3>Contact Us</h3>
            <h4>Get in touch with us to let us know how we can assist you.</h4>
            <div class="row row-contact-us">
                <div class="col-md-12 col-lg-4">
                    <div class="form-box" id="general-enquiry">
                        <div class="box-title">
                            <div class="box-icon"><i class="las la-paper-plane la-2x"></i></div>
                            <h4>General Enquiry</h4>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <label for="contact-person-name" class="required">Contact Person Name</label>
                                <input type="text" class="form-control" id="contact-person-name" name="contact-person-name">
                            </div>
                            <div class="form-group">
                                <label for="company-name">Company Name</label>
                                <input type="text" class="form-control" id="company-name" name="company-name">
                            </div>
                            <div class="form-group">
                                <label for="job-title">Job Title</label>
                                <input type="text" class="form-control" id="job-title" name="job-title">
                            </div>
                            <div class="form-group">
                                <label for="email-address" class="required">Email Address</label>
                                <input type="text" class="form-control" id="email-address" name="email-address">
                            </div>
                            <div class="form-group">
                                <label for="contact-number" class="required">Contact Number</label>
                                <input type="text" class="form-control" id="contact-number" name="contact-number">
                            </div>
                            <div class="form-group">
                                <label for="enquiry" class="required">Enquiry</label>
                                <textarea class="form-control" id="enquiry" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Send
                                <i class="las la-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-inf-detail">
                    <div class="row row-inf">
                        <div class="col-md-6 col-lg-6 p-0">
                            <h5>Address:</h5>
                            <h6>10 Anson Road <br> #22-07 International Plaza <br> Singapore 079903
                            </h6></div>
                        <div class="col-md-6 col-lg-6 p-0">
                            <h5 id="main-line">Main Line:</h5>
                            <h6>(65) 6213 0130</h6>
                            <h5 id="fax">Fax:</h5>
                            <h6>(65) 6213 0138</h6>
                        </div>
                    </div>
                    <div class="row-map">
                        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.829401746343!2d103.8436211147081!3d1.27570516216465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1913440ef3cf%3A0x2d552d64c2a5b3b4!2s10%20Anson%20Rd%2C%20International%20Plaza%2C%20Singapore%20079903!5e0!3m2!1svi!2s!4v1573787789111!5m2!1svi!2s" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

