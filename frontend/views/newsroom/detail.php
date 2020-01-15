<?php

use yii\helpers\Url;

/* @var yii\web\View $this */

$this->title = 'Newsroom Detail';

?>
<section class="body">
    <div id="button">
        <button type="button" class="btn btn-danger" id="btn-btn">
            <i class="lar la-envelope"></i>Get in touch
        </button>
    </div>
    <div class="newsroom-detail-page">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb" id="breadcrumb-me">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/home/index']) ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Newsroom</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="newsroom-detail-col">
                        <div class="back-to-list-row">
                            <a href="<?= Url::to(['/newsroom/index']) ?>">
                                <i class="las la-angle-left la-2x"></i> Back To List</a>
                            <div class="icon-row icon-desktop">
                                <a href="#"><i class="lab la-facebook-square"></i></a>
                                <a href="#"><i class="la la-twitter"></i></a>
                                <a href="#"><i class="la la-pinterest"></i></a>
                                <a href="#"><i class="la la-linkedin"></i></a>
                                <a href="#"><i class="la la-plus"></i></a>
                            </div>
                            <div class="icon-row icon-mobile">
                                <a href="#"><i class="la la-external-link-alt"></i></a>
                            </div>
                        </div>
                        <h3>THE ROLE OF HR IS CONSTANTLY EVOLVING. WHAT CAN HR PROFESSIONALS DO TO ENSURE CONTINUED RELEVANCE TO THE ORGANISATION?</h3>
                        <div class="date">
                            <i class="la la-calendar"></i>
                            <span>02 Nov 2018</span>
                        </div>
                        <h4>The business world is constantly evolving, and along with it the role of human resource (HR) as well. While the development of a knowledge economy gains momentum and outsourcing of traditional HR tasks become common, it often means greater opportunities</h4>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis quam, hendrerit eget egestas hendrerit, elementum eget ante. Nam maximus justo lectus, nec suscipit orci eleifend id. Suspendisse eu ex ut magna viverra consectetur vitae non elit. Suspendisse vestibulum vestibulum ante, quis aliquet ex laoreet et. Phasellus sit amet nulla non orci volutpat pellentesque quis non felis. Nam et tempus ante. Morbi eu dapibus tortor. Aliquam eget feugiat orci, at volutpat diam. Praesent lacus metus, malesuada vel vulputate non, rhoncus et magna. Proin vitae sem ante. Vivamus nisl ex, malesuada quis massa non, bibendum ultrices mi. Donec sed convallis nisl, eget interdum metus. Fusce sit amet egestas nibh. Quisque sed turpis eleifend, aliquet ex eget, consectetur lorem. Aliquam venenatis quis odio vitae congue. Morbi a urna sit amet sem ornare volutpat.</h5>
                        <h5>Pellentesque in augue sapien. Phasellus vitae auctor lacus. Vivamus auctor turpis quis dui tempor, sit amet consectetur enim viverra. Maecenas pulvinar, ex vel luctus sollicitudin, est enim facilisis ex, eget pharetra neque nisl quis risus. Nullam eu nisi nec purus posuere feugiat eget rutrum est. Aenean tortor lectus, cursus in ultricies egestas, mollis sit amet diam. In purus odio, dignissim sit amet placerat ac, vehicula vitae odio. Vivamus eleifend velit felis, mollis rhoncus turpis pretium at. Integer a risus pellentesque, auctor dolor quis, tristique sapien. Vestibulum ullamcorper leo sit amet nisl scelerisque, eget eleifend leo molestie. Integer mi diam, sodales id ligula eget, commodo fermentum massa. Fusce in augue sed nulla fermentum fringilla.</h5>
                        <h5>Aliquam eu nulla quam. Mauris condimentum semper sem, vel finibus erat euismod vel. Sed fermentum facilisis leo, non egestas magna porttitor ac. Morbi elit magna, ultricies non tellus at, tempus pretium tellus. Aliquam erat volutpat. Suspendisse suscipit, sem ac suscipit bibendum, tortor elit auctor ipsum, ut sagittis mauris velit in sem. Ut nec finibus sem. Duis eleifend dui diam, sed bibendum augue molestie eu. Aliquam placerat risus turpis, a posuere enim ultrices nec. Etiam mi urna, cursus eget commodo id, fermentum vitae erat. Phasellus odio lorem, hendrerit a elit ut, ultricies pellentesque dolor. Aliquam ut libero maximus tortor viverra vestibulum.</h5>
                        <h5>Nunc id diam quis quam accumsan semper. Aenean rhoncus ante sit amet cursus volutpat. Nam ut justo lacus. Nam sit amet mattis felis, fermentum convallis ipsum. Sed nec efficitur lectus. Suspendisse tempus mauris et pulvinar aliquam. Morbi bibendum dui quis risus sodales lobortis. Curabitur nec ipsum varius, accumsan neque id, sollicitudin diam. Mauris id sagittis elit. Donec tempus ligula at orci aliquam dignissim. Mauris lacus neque, maximus eu lacus a, varius maximus ante. Nulla enim mauris, malesuada vitae viverra non, iaculis in nulla. Nam quis felis nisi.</h5>
                    </div>
                </div>
                <div class="col-md-3 related-post">
                    <h2>Related Post</h2>
                    <a href="<?= Url::to(['/newsroom/detail']) ?>">
                        <h3>WHAT IS HEAD HUNTING AND WHAT ARE THE ETHICAL VALUES SURROUNDING IT?</h3>
                    </a>
                    <div class="date"><span>02 Nov 2018</span></div>
                    <a href="<?= Url::to(['/newsroom/detail']) ?>">
                        <h3>WORKPLACE WELLNESS PROGRAMS; DO THEY REALLY WORK?</h3>
                    </a>
                    <div class="date"><span>02 Nov 2018</span></div>
                    <a href="<?= Url::to(['/newsroom/detail']) ?>">
                        <h3>WITH THE RAPID GLOBAL ADOPTION OF FLEXIBLE WORKING ARRANGEMENTS, FIND OUT THE PROS AND CONS OF IT AND IF IT IS SUITABLE FOR YOUR ORGANIZATION.</h3>
                    </a>
                    <div class="date"><span>02 Nov 2018</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
