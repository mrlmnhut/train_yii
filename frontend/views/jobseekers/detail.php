<?php

use yii\helpers\Url;

/**
 * @var yii\web\View $this
 * @var $job_detail
 * @var $nationalities
 * @var $job_apply
 */
$this->title = 'Jobseekers Detail';
?>

<section class="body">
    <div id="button">
        <button type="button" class="btn btn-danger" id="btn-btn">
            <i class="lar la-envelope"></i>Get in touch
        </button>
    </div>
    <div class="jobseeker-detail-page">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb" id="breadcrumb-me">
                    <li class="breadcrumb-item">
                        <a href="<?= Url::to(['/home/index']) ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= Url::to(['/jobseekers/index']) ?>">Jobseeker</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Job Detail</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <a href="<?= Url::to(['/jobseekers/index']) ?>" id="back-to-list"><i class="las la-angle-left la-2x"></i> Back To List</a>
            <div class="row">
                <div class="col-md-8">
                    <div class="job-detail-col">
                        <h3><?= $job_detail['title'] ?></h3>
                        <hr>
                        <h4>Job Description</h4>
	                    <?= $job_detail['description'] ?>
                        <hr>
                        <div class="row job-inf-row">
                            <div class="col-md-6">
                                <h4>Job Type</h4>
                                <h5><?= $job_detail->type->name ?></h5>
                                <h4>Working Hours</h4>
                                <h5><?= $job_detail['working_hours'] ?></h5>
                                <h4>Salary</h4>
                                <h5> $ <?= $job_detail['salary'] ?></h5>
                            </div>
                            <div class="col-md-6">
                                <h4>Location</h4>
                                <h5><?= $job_detail->location->name ?></h5>
                                <h4>Classification</h4>
                                <h5><?= $job_detail->classification->name ?></h5>
                            </div>
                        </div>
                        <hr>
                        <div class="action-personnel-row">
                            <div class="icon-row">
                                <a href="#"><i class="lab la-facebook-square"></i></a>
                                <a href="#"><i class="la la-twitter"></i></a>
                                <a href="#"><i class="la la-linkedin"></i></a>
                                <a href="#"><i class="la la-print"></i></a>
                                <a href="#"><i class="la la-plus"></i></a>
                            </div>
                            <div class="personnel-row">
                                <p>EA Personnel: Tiang Wan Ying</p>
                                <p>EA Personnel Reg. No.: R1767473</p>
                            </div>
                        </div>
                    </div>
                    <div class="note">
                        <hr>
                        <p>
                            All applications received will be treated with strictest conf idence. We
                            regret that only short-listed applicants will be notified.
                            By submitting your resume or personal data to us in connection with your
                            job application, you are deemed to have consented to the collection, use
                            and disclosure of your personal data by us and our affiliates , in
                            accordance with our Privacy Policy. </p>
                        <p>
                            Please access our website at
                            <a href="#">www.stafflink.com.sg</a> for a copy of our
                            Privacy Policy. If you wish to withdraw your consent, please email to let
                            us know. </p><br>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-box" id="apply-this-job">
                        <div class="box-title">
                            <div class="box-icon"><i class="las la-paper-plane la-2x"></i></div>
                            <h4>Apply This Job</h4>
                        </div>
	                    <?= $this->render('_form', [
		                    'job_apply' => $job_apply,
	                    ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$script = <<< JS
    $('#jobapplication-file').change(function() {
        var filename = $(this).val().substr(12);
        $('#label-file').html(filename);
    });
JS;
$this->registerJs($script);
?>
