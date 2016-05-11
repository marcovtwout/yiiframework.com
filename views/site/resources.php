<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Resources';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-resources">
    <div class="header container">
        <div class="row">
            <h1>Resources</h1>
            <h2>Very helpful. Check these out.</h2>
        </div>
        <img class="background" src="<?= Yii::getAlias('@web/image/resources/header.svg')?>" alt="">
    </div>
    <div class="container style_external_links">
        <div class="row">
            <div class="content">
                <p>There are various resources that aren't part of official Yii website but are very helpful. Check these out.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-3 group">
                <h3>News</h3>

                <div class="image">
                    <a href="http://yiifeed.com/">
                    <img src="<?= Yii::getAlias('@web/image/resources/yiifeed.png') ?>" alt="">
                    </a>
                </div>

                <h4><a href="http://yiifeed.com/">YiiFeed</a></h4>

                <p>is a community-driven news source for both official Yii announcements and
                    unofficial articles, blogposts and tutorials. Anyone can suggest news. RSS provided.</p>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3 group">
                <h3>Extensions</h3>

                <div class="image">
                    <a href="https://yiigist.com/">
                    <img src="<?= Yii::getAlias('@web/image/resources/yiigist.png') ?>" alt="">
                    </a>
                </div>

                <h4><a href="https://yiigist.com/">YiiGist</a></h4>

                <p>Until official extensions repository is ready you can use this community driven project based on packagist.</p>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3 group">
                <h3>Videos</h3>

                <div class="image">
                    <img src="<?= Yii::getAlias('@web/image/resources/videos.png') ?>" alt="">
                </div>

                <p>There are many videos available. <a href="https://www.youtube.com/results?search_query=yii">Check YouTube for "yii"</a>.</p>
                <p>Below are links to two big video series community likes most.</p>

                <ul>
                    <li><a href="https://www.youtube.com/playlist?list=PLMyGpiUTm106xkNQh9WeMsa-LXjanaLUm">Beginning Yii 2.0 by Tom King</a></li>
                    <li><a href="https://www.youtube.com/playlist?list=PLRd0zhQj3CBmusDbBzFgg3H20VxLx2mkF">Yii2 Lessons, DoingITeasyChannel</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3 group">
                <h3>Yii 1.1</h3>

                <div class="image">
                    <a href="<?= Url::to(['guide/blog-entry']) ?>">
                    <img src="<?= Yii::getAlias('@web/image/resources/yii11.png') ?>" alt="">
                    </a>
                </div>

                <h4><?= Html::a('The Yii 1.1 Blog tutorial', ['guide/blog-entry']) ?></h4>

                <p>If you need to learn good old Yii 1.1 this is a must read official tutorial.</p>
            </div>
        </div>
    </div>
</div>