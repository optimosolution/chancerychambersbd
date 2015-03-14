<?php $this->beginContent('//layouts/main'); ?>
<section>
    <div id="carousel-example-generic" class="carousel carousel-mind slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-7">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                    <h1 class="animated fadeInDownBig">Our Services</h1>
                                    <ul class="list-unstyled carousel-list">
                                        <li class="animated bounceInLeft"><i class="fa fa-table"></i><span>Administrative Law</span></li>
                                        <li class="animated bounceInLeft"><i class="fa fa-table"></i><span>Administrative Suits</span></li>
                                        <li class="animated bounceInLeft"><i class="fa fa-table"></i><span>Agency Law</span></li>
                                        <li class="animated bounceInLeft"><i class="fa fa-table"></i><span>And more...</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-5 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/banner1.jpg" class="img-responsive animated bounceInUp" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                    <h1 class="animated fadeInDownBig">Our Resources</h1>
                                    <ul class="list-unstyled carousel-list">
                                        <li class="animated bounceInLeft"><i class="fa fa-eye"></i><span>Online library</span></li>
                                        <li class="animated bounceInLeft"><i class="fa fa-eye"></i><span>Research Division</span></li>
                                        <li class="animated bounceInLeft"><i class="fa fa-users"></i><span>Human Rights</span></li>
                                        <li class="animated bounceInLeft"><i class="fa fa-upload"></i><span>And more...</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/banner1.jpg" class="img-responsive animated bounceInUp" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-9">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                    <h1 class="animated fadeInDownBig">Online Case Law Report</h1>
                                    <ul class="list-unstyled carousel-list">
                                        <li class="animated bounceInLeft"><i class="fa fa-th-large"></i><span>Judgements</span></li>
                                        <li class="animated bounceInLeft"><i class="fa fa-th-list"></i><span>Glossary</span></li>
                                        <li class="animated bounceInLeft"><i class="fa fa-book"></i><span>Law Dictionaries</span></li>
                                        <li class="animated bounceInLeft"><i class="fa fa-cloud-upload"></i><span>And more...</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-3 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/banner1.jpg" class="img-responsive animated bounceInUp" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section> <!-- carousel -->                         
<?php echo $content; ?>
<?php $this->endContent(); ?>