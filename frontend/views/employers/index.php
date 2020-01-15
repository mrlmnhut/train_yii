<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var yii\web\View $this */

$this->title = 'Employers';

?>
<section class="banner">
	<?= Html::img('@web/img/banner-employers-page.png',
		['alt' => 'My Banner', 'class' => 'img-fluid img-desktop']) ?>
	<?= Html::img('@web/img/banner-employers-page-mobile.png',
		['alt' => 'My Banner', 'class' => 'img-fluid img-mobile']) ?>
</section>

<section class="body">
    <div id="button">
        <button type="button" class="btn btn-danger" id="btn-btn">
            <i class="lar la-envelope"></i>Get in touch
        </button>
    </div>
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb" id="breadcrumb-me">
                <li class="breadcrumb-item"><a href="<?= Url::to(['/home/index/']) ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Employers</li>
            </ol>
        </div>
    </nav>
    <div class="employers-page">
        <div class="container">
            <h5>In need of staffing solutions? Submit the details below and our recruitment specialists will contact you as soon as possible. </h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-box" id="company-inf">
                        <div class="box-title">
                            <div class="box-icon"><i class="la la-calendar"></i></div>
                            <h4>1. Company Information</h4>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <label for="contact-person-name" class="required">Contact Person's Name</label>
                                <input type="text" class="form-control" id="contact-person-name" name="contact-person-name">
                            </div>
                            <div class="form-group">
                                <label for="company-name" class="required">Company Name</label>
                                <input type="text" class="form-control" id="company-name" name="company-name">
                            </div>
                            <div class="form-group">
                                <label for="contact-number" class="required">Contact Number</label>
                                <input type="text" class="form-control" id="contact-number" name="contact-number">
                            </div>
                            <div class="form-group">
                                <label for="email-address" class="required">Email Address</label>
                                <input type="text" class="form-control" id="email-address" name="email-address">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-box" id="job-detail">
                        <div class="box-title">
                            <div class="box-icon"><i class="la la-suitcase"></i></div>
                            <h4>2. Job Detail</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="job-title" class="required">Job Title</label>
                                        <input type="text" class="form-control" id="job-title" name="job-title">
                                    </div>
                                    <div class="form-group">
                                        <label for="job-location" class="required">Job Location</label>
                                        <input type="text" class="form-control" id="job-location" name="job-location">
                                    </div>
                                    <div class="form-group">
                                        <label for="additional-information">Additional Information</label>
                                        <textarea class="form-control" id="additional-information"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Attach Job Description</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile"> File...</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="additional-information" class="required">Job type</label>
                                    <hr>
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="permanent-full-time" name="additional-information">
                                        <label class="custom-control-label" for="permanent-full-time">Permanent Full Time</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="temporary-contract" name="additional-information">
                                        <label class="custom-control-label" for="temporary-contract">Temporary / Contract</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="part-time" name="additional-information">
                                        <label class="custom-control-label" for="part-time">Part Time</label>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary form-control">Submit
                                    <i class="las la-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

