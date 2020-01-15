<?php

/* @var \yii\web\View $this */

/* @var string $content */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="header fixed-top box-shadow">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?= Url::to(['/home/index/']) ?>">
		        <?= Html::img('@web/img/logo.png',
			        ['alt' => 'Responsive image', 'class' => 'img-fluid']) ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="la la-bars"></i></span>
            </button>
            <div class="navbar-collapse collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a <?php if (Yii::$app->controller->id == 'home'): ?> class="active" <?php endif; ?> href="<?= Url::to(['/home/index']) ?>">HOME</a>
                    </li>
                    <li>
                        <a <?php if (Yii::$app->controller->id == 'about-us'): ?> class="active" <?php endif; ?> href="<?= Url::to(['/about-us/index']) ?>">ABOUT US</a>
                    </li>
                    <li>
                        <a <?php if (Yii::$app->controller->id == 'jobseekers'): ?> class="active" <?php endif; ?> href="<?= Url::to(['/jobseekers/index']) ?>">JOBSEEKERS</a>
                    </li>
                    <li>
                        <a <?php if (Yii::$app->controller->id == 'employers'): ?> class="active" <?php endif; ?> href="<?= Url::to(['/employers/index']) ?>">EMPLOYERS</a>
                    </li>
                    <li>
                        <a <?php if (Yii::$app->controller->id == 'newsroom'): ?> class="active" <?php endif; ?> href="<?= Url::to(['/newsroom/index']) ?>">NEWROOMS</a>
                    </li>
                    <li>
                        <a <?php if (Yii::$app->controller->id == 'contact-us'): ?> class="active" <?php endif; ?> href="<?= Url::to(['/contact-us/index']) ?>">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<?= $content ?>

<footer class="footer">
    <div class="info">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="address">
                        <h5>ADDRESS</h5><br>
                        <span>10 Anson Road</span> <br>
                        <span>#22-07 International Plaza</span><br>
                        <span>Singapore 079903</span><br>
                        <br>
                        <span>Main line: (65) 6213 0130</span><br>
                        <span>Fax: (65) 6213 0138</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="navigate">
                        <h5>NAVIGATE</h5><br>
                        <div class="navigate-left navigate-hover">
                            <a href="<?= Url::to(['/home/index']) ?>">Home</a><br>
                            <a href="<?= Url::to(['/about-us/index']) ?>">About Us</a><br>
                            <a href="<?= Url::to(['/jobseekers/index']) ?>">Jobseekers</a>
                        </div>
                        <div class="navigate-right navigate-hover">
                            <a href="<?= Url::to(['/employers/index']) ?>">Employers</a><br>
                            <a href="<?= Url::to(['/newsroom/index']) ?>">Newsroom</a> <br>
                            <a href="<?= Url::to(['/contact-us/index']) ?>">Contact</a><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-auto">
                    <div class="">
                        <div class="row link-our">
                            <a href="#" class=""><i class="fab fa-facebook-square pr-3"></i>Our Facebook</a>
                        </div>
                        <br>
                        <div class="row link-our">
                            <a href="#" class=""><i class="fab fa-linkedin pr-3"></i>Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <span class="">Copyright 2018 © Stafflink Services Pte Ltd (EA Licence No. 04C4294). All rights reserved.</span>
                </div>
                <div class="col-md-3">
                    <div id="privacy-statement"><a href="#">Privacy Statement</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
