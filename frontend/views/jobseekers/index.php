<?php

/** @var yii\web\View $this
 * @var $classifications
 * @var $types
 * @var $jobs
 * @var $pages
 * @var $job_apply
 * @var $nationalities
 * @var $search
 */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Jobseekers';
?>

    <section class="banner">
	    <?= Html::img('@web/img/banner-jobseekers-page.png',
		    ['alt' => 'My Banner', 'class' => 'img-fluid img-desktop']) ?>
	    <?= Html::img('@web/img/banner-jobseekers-page-mobile.png',
		    ['alt' => 'My Banner', 'class' => 'img-fluid img-mobile']) ?>
    </section>

    <section class="body">
        <div id="button">
            <button type="button" class="btn btn-danger" id="btn-btn">
                <i class="lar la-envelope"></i>Get in touch
            </button>
        </div>
        <div class="jobseekers-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" id="breadcrumb-me">
                        <li class="breadcrumb-item">
                            <a href="<?= Url::to(['/home/index/']) ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Jobseeker</li>
                    </ol>
                </nav>
                <h3>Job Opportunities</h3>
            </div>
            <div class="jobseekers-page-head">
                <div class="container">
                    <form action="" method="post">
                        <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>"/>
                        <div class="grid">
                            <div class="form-group job-title">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="la la-search"></i></span>
                                    </div>
	                                <?= Html::input('text', 'job_title', $search['job_title'],
		                                ['class' => 'form-control', 'placeholder' => 'Job Title']) ?>
                                </div>
                            </div>
                            <div class="form-group select-group classification">
                                <div class="input-group">
	                                <?= Html::dropDownList('job_classification', NULL,
		                                ArrayHelper::map($classifications, 'id', 'name'),
		                                ['class' => 'form-control select2', 'prompt' => 'Classification', 'options' => [$search['job_classification'] => ['Selected' => 'selected']]]);
	                                ?>
                                </div>
                            </div>
                            <div class="form-group select-group job-type">
                                <div class="input-group">
	                                <?= Html::dropDownList('job_type', NULL,
		                                ArrayHelper::map($types, 'id', 'name'),
		                                ['class' => 'form-control select2', 'prompt' => 'Job Type', 'options' => [$search['job_type'] => ['Selected' => 'selected']]]);
	                                ?>
                                </div>
                            </div>
                            <div class="form-group btn-action">
                                <button type="reset" class="btn btn-redo" name="redo" id="redo">
                                    <i class="la la-undo-alt"></i></button>
                                <button type="submit" class="btn btn-search">
                                    <i class="la la-search"></i></button>
                            </div>
                            <div class="form-group deposit-resume">
                                <div class="item">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-deposit-resume" data-toggle="modal" data-target="#exampleModal">Deposit Resume</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="jobseekers-page-data">
                    <div class="container">
			            <?php foreach ($jobs as $key) : ?>
                            <a href="<?= Url::to(['/jobseekers/detail', 'id' => $key['id']]) ?>" class="job-item">
                                <div class="row">
                                    <div class="col-date col-6 col-lg-2">
                                        <div class="date">
                                            <i class="la la-calendar"></i>
                                            <span><?= date('d M Y ', $key['updated_at']); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-title col-lg-8">
                                        <div class="title">
                                            <span><?= $key['title'] ?></span>
                                        </div>
                                    </div>
                                    <div class="col-location col-6 col-lg-2">
                                        <div class="location">
                                            <i class="la la-map-marker-alt"></i>
                                            <span><?= $key->location->name ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
			            <?php endforeach; ?>
			            <?= LinkPager::widget([
				            'pagination'       => $pages,
				            'firstPageLabel'   => FALSE,
				            'lastPageLabel'    => FALSE,
				            'nextPageLabel'    => '<i class="la la-angle-right"></i>',
				            'prevPageLabel'    => '<i class="la la-angle-left"></i>',
				            'nextPageCssClass' => 'pagination-arrow',
				            'prevPageCssClass' => 'pagination-arrow',
			            ]);
			            ?>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" id="popup-deposit-resume">
                        <div class="modal-content">
                            <div class="form-box">
                                <div class="box-title">
                                    <div class="box-icon"><i class="las la-paper-plane la-2x"></i>
                                    </div>
                                    <h4>Submit Your Resume To Us</h4>
                                </div>
					            <?= $this->render('_form', [
						            'job_apply' => $job_apply,
					            ]) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" id="message" value="<?= Yii::$app->session->getFlash('success'); ?><?php if (Yii::$app->session->getFlash('error')){
		        echo 'Failed!';
	        } ?>"/>
    </section>
<?php
$script = <<< JS
    if($('#message').val() != "")
    {
        alert($('#message').val());
    }
    $('#jobapplication-file').change(function() {
        var filename = $(this).val().substr(12);
        $('#label-file').html(filename);
    });
JS;
$this->registerJs($script);
?>