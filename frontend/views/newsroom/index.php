<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var yii\web\View $this */

$this->title = 'Newsroom';
?>

<section class="banner">
	<?= Html::img('@web/img/banner-newsroom-page.png',
		['alt' => 'My Banner', 'class' => 'img-fluid img-desktop']) ?>
	<?= Html::img('@web/img/banner-newsroom-page-mobile.png',
		['alt' => 'My Banner', 'class' => 'img-fluid img-mobile']) ?>
</section>

<section class="body">
    <div id="button">
        <button type="button" class="btn btn-danger" id="btn-btn">
            <i class="lar la-envelope"></i>Get in touch
        </button>
    </div>
    <div class="newsroom-page">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb" id="breadcrumb-me">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/home/index/']) ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Newsroom</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="list-newsroom">
                <ul class="list-unstyled">
                    <li class="newsroom-row">
                        <a class="media" href="<?= Url::to(['/newsroom/detail', 'id' => '']) ?>">
		                    <?= Html::img('@web/img/img-list-newsroom.png',
			                    ['alt' => 'My Card', 'class' => 'mr-3']) ?>
                            <div class="media-body">
                                <div class="date date-mobile">
                                    <i class="la la-calendar"></i>
                                    <span>02<br> Nov 2018</span>
                                </div>
                                <h5>THE ROLE OF HR IS CONSTANTLY EVOLVING. WHAT CAN HR PROFESSIONALS DO TO ENSURE CONT...</h5>
                                <div class="date date-desktop">
                                    <i class="la la-calendar"></i>
                                    <span>02 Nov 2018</span>
                                </div>
                                <span>The business world is constantly evolving, and along with it the role of human resource (HR) as well. While the development of a knowledge economy gains momentum and outsourcing of traditional HR tasks become common, it often means greater opportunities</span>
                            </div>
                        </a>
                    </li>
                    <li class="newsroom-row">
                        <a class="media" href="<?= Url::to(['/newsroom/detail', 'id' => '']) ?>">
		                    <?= Html::img('@web/img/img-list-newsroom2.png',
			                    ['alt' => 'My Card', 'class' => 'mr-3']) ?>
                            <div class="media-body">
                                <div class="date date-mobile">
                                    <i class="la la-calendar"></i>
                                    <span>02<br> Nov 2018</span>
                                </div>
                                <h5>WHAT IS HEAD HUNTING AND WHAT ARE THE ETHICAL VALUES SURROUNDING IT?</h5>
                                <div class="date date-desktop">
                                    <i class="la la-calendar"></i>
                                    <span>02 Nov 2018</span>
                                </div>
                                <span>The business world is constantly evolving, and along with it the role of human resource (HR) as well. While the development of a knowledge economy gains momentum and outsourcing of traditional HR tasks become common, it often means greater opportunities</span>
                            </div>
                        </a>
                    </li>
                    <li class="newsroom-row">
                        <a class="media" href="<?= Url::to(['/newsroom/detail', 'id' => '']) ?>">
		                    <?= Html::img('@web/img/img-list-newsroom3.png',
			                    ['alt' => 'My Card', 'class' => 'mr-3']) ?>
                            <div class="media-body">
                                <div class="date date-mobile">
                                    <i class="la la-calendar"></i>
                                    <span>02<br> Nov 2018</span>
                                </div>
                                <h5>WORKPLACE WELLNESS PROGRAMS; DO THEY REALLY WORK?</h5>
                                <div class="date date-desktop">
                                    <i class="la la-calendar"></i>
                                    <span>02 Nov 2018</span>
                                </div>
                                <span>The business world is constantly evolving, and along with it the role of human resource (HR) as well. While the development of a knowledge economy gains momentum and outsourcing of traditional HR tasks become common, it often means greater opportunities</span>
                            </div>
                        </a>
                    </li>
                    <li class="newsroom-row">
                        <a class="media" href="<?= Url::to(['/newsroom/detail', 'id' => '']) ?>">
		                    <?= Html::img('@web/img/img-list-newsroom4.png',
			                    ['alt' => 'My Card', 'class' => 'mr-3']) ?>
                            <div class="media-body">
                                <div class="date date-mobile">
                                    <i class="la la-calendar"></i>
                                    <span>02<br> Nov 2018</span>
                                </div>
                                <h5>WITH THE RAPID GLOBAL ADOPTION OF FLEXIBLE WORKING ARRANGEMENTS, FIND OUT THE PROS...</h5>
                                <div class="date date-desktop">
                                    <i class="la la-calendar"></i>
                                    <span>02 Nov 2018</span>
                                </div>
                                <span>The business world is constantly evolving, and along with it the role of human resource (HR) as well. While the development of a knowledge economy gains momentum and outsourcing of traditional HR tasks become common, it often means greater opportunities</span>
                            </div>
                        </a>
                    </li>
                    <li class="newsroom-row">
                        <a class="media" href="<?= Url::to(['/newsroom/detail', 'id' => '']) ?>">
		                    <?= Html::img('@web/img/img-list-newsroom5.png',
			                    ['alt' => 'My Card', 'class' => 'mr-3']) ?>
                            <div class="media-body">
                                <div class="date date-mobile">
                                    <i class="la la-calendar"></i>
                                    <span>02<br> Nov 2018</span>
                                </div>
                                <h5>THE ROLE OF HR IS CONSTANTLY EVOLVING. WHAT CAN HR PROFESSIONALS DO TO ENSURE CONT...</h5>
                                <div class="date date-desktop">
                                    <i class="la la-calendar"></i>
                                    <span>02 Nov 2018</span>
                                </div>
                                <span>The business world is constantly evolving, and along with it the role of human resource (HR) as well. While the development of a knowledge economy gains momentum and outsourcing of traditional HR tasks become common, it often means greater opportunities</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="pagination">
                    <a href="<?= Url::to(['/newsroom/index']) ?>" class="pagination-arrow"><i class="la la-angle-left"></i></a>
                    <a href="<?= Url::to(['/newsroom/index']) ?>" class="active">1</a>
                    <a href="<?= Url::to(['/newsroom/index']) ?>">2</a>
                    <a href="<?= Url::to(['/newsroom/index']) ?>">3</a>
                    <a href="<?= Url::to(['/newsroom/index']) ?>">4</a>
                    <a href="<?= Url::to(['/newsroom/index']) ?>">5</a>
                    <a href="<?= Url::to(['/newsroom/index']) ?>">6</a>
                    <a href="#" class="pagination-arrow"><i class="la la-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>