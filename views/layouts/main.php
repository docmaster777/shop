<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
<!--    <title>--><?//= Html::encode($this->title) ?><!--</title>-->
    <title>Шапки-Сумки</title>
    <?php $this->head() ?>

    <?php
//        $this->registerJsFile('js/html5shiv.js', ['position' => \yii\web\View::POS_HEAD, 'condition' => 'lte IE9']);
//        $this->registerJsFile('js/respond.min.js', ['position' => \yii\web\View::POS_HEAD, 'condition' => 'lte IE9']);
    ?>

    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<?php $this->beginBody() ?>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="<?= \yii\helpers\Url::home()?>"><?= Html::img('@web/images/home/logo.png', ['alt' => 'E-SHOPPER'])?></a>
                    </div>
<!--                    <div class="btn-group pull-right">-->
<!--                        <div class="btn-group">-->
<!--                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">-->
<!--                                USA-->
<!--                                <span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">Canada</a></li>-->
<!--                                <li><a href="#">UK</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!---->
<!--                        <div class="btn-group">-->
<!--                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">-->
<!--                                DOLLAR-->
<!--                                <span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">Canadian Dollar</a></li>-->
<!--                                <li><a href="#">Pound</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
<?php if(!Yii::$app->user->isGuest): ?>
    <li><a href="<?= \yii\helpers\Url::to(['/site/logout'])?>"><i class="fa fa-user"></i> <?= Yii::$app->user->identity['username']?> (Выход)</a></li>
<?php endif;?>
<!--                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>-->
<!--                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>-->
                            <li><a href="#" onclick="return getCart()"><i class="fa fa-shopping-cart"></i>Корзина Ваших товаров</a></li>
                            <li><a href="<?= \yii\helpers\Url::to(['/admin'])?>"><i class="fa fa-lock"></i>Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="<?= \yii\helpers\Url::to(['/site/main'])?>" class="active">Главная</a></li>
                            <li class="dropdown"><a href="<?= \yii\helpers\Url::to(['/category/index'])?>">Магазин<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="<?= \yii\helpers\Url::to(['/category/index'])?>">Товары</a></li>
                                    <li><a href="<?= \yii\helpers\Url::to(['/category/index'])?>">Описание товаров</a></li>
                                    <li><a href="<?= \yii\helpers\Url::to(['/category/index'])?>">Корзина</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Наши новоси</a></li>
                                    <li><a href="blog-single.html">Наши партнеры</a></li>
                                </ul>
                            </li>
<!--                            <li><a href="404.html">404</a></li>-->
                            <li><a href="contact-us.html">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form method="get" action="<?= \yii\helpers\Url::to(['category/search'])?>">
                            <input type="text" placeholder="Поиск" name="q">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<?= $content ?>

<footer id="footer"><!--Footer-->
<!--    <div class="footer-top">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-2">-->
<!--                    <div class="companyinfo">-->
<!--                        <h2><span>e</span>-shopper</h2>-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-7">-->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="/images/home/iframe1.png" alt="" />-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="/images/home/iframe2.png" alt="" />-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="/images/home/iframe3.png" alt="" />-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="/images/home/iframe4.png" alt="" />-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-3">-->
<!--                    <div class="address">-->
<!--                        <img src="/images/home/map.png" alt="" />-->
<!--                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Сервис</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пкнкт</a></li>
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Быстрые покупки</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Заголовок</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Заголовок</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                            <li><a href="#">пункт</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>Подпишитесь</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Ваш email адрес" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Будьте всегда<br />с нами</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2017 Shapki-Sumki Inc.</p>
<!--                <p class="pull-right">Разработано <span><a target="_blank" href="http://www.themeum.com">для Вас</a></span></p>-->
            </div>
        </div>
    </div>

</footer><!--/Footer-->

<?php
\yii\bootstrap\Modal::begin([
    'header' => '<h2>Корзина</h2>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
        <a href="' . \yii\helpers\Url::to(['cart/view']) . '" class="btn btn-success">Оформить заказ</a>
        <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>'
]);

\yii\bootstrap\Modal::end();
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>