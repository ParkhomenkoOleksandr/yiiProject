<?php

defined("YII_DEBUG") or define('YII_DEBUG', true);
defined("YII_ENV") or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';
(new yii\web\Application($config))->run();

echo '<link rel="stylesheet" type="text/css" href="/yiiProject/web/css/site.css" />';
echo '<link rel="stylesheet" type="text/css" href="/yiiProject/web/css/style.css" />';
?>

<div class="col-md-8">

    <article class="post">

        <div class="post-thumb">

            <a href=""><img class="img-index" src="" alt="Image"></a>

        </div>

        <div class="post-content">

            <header class="entry-header text-center text-uppercase">

                <h6><a href=""> Travel</a></h6>

                <h1 class="entry-title"><a href=""> Home is peaceful place </a></h1>

            </header>

            <div class="entry-content">

                <p>

                    Text

                </p>

                <div class="btn-continue-reading text-center text-uppercase">

                    <a href="#" class="more-link">Continue Reading</a>

                </div>

            </div>

            <div class="social-share">
                <ul class="text-center pull-right">
                <span class="social-share-title pull-left text-capitalize">By Stas On 20-02-12



                    <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li>

                    10


                    </span>
                </ul>
            </div>

        </div>

    </article>
</div>
<ul class="pagination">

    <li class="active"><a href="#">1</a></li>

    <li><a href="#">2</a></li>

    <li><a href="#">3</a></li>

</ul>

<?php
Yii::$app->view->renderFile('@app/views/site/right.php');
?>
