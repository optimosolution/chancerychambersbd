<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="language" content="en" />
        <meta name="author" content="S.M. Saidur Rahman">
        <meta name="generator" content="Optimo Solution" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!-- CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/animate.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/lightbox.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/syntax/shCore.css" rel="stylesheet"  media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/syntax/shThemeDefault.css" rel="stylesheet"  media="screen">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet" media="screen" title="default">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/color-default.css" rel="stylesheet" media="screen" title="default">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/width-full.css" rel="stylesheet" media="screen" title="default">
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.js"></script>
            <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="boxed animated fadeIn animation-delay-5">
            <header id="header" class="hidden-xs">
                <div class="container">
                    <div id="header-title">
                        <h1 class="animated fadeInDown"><?php echo CHtml::link('Chancery <span>Chambers</span>', array('site/index'), array('class' => '')); ?></h1>
                        <p class="animated fadeInLeft">Barrister &amp; Advocates</p>
                    </div>
                    <div id="social-header" class="hidden-xs">
                        <a href="#" class="social-icon soc-twitter animated fadeInDown animation-delay-1"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-icon soc-google-plus animated fadeInDown animation-delay-2"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social-icon soc-facebook animated fadeInDown animation-delay-3"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-icon soc-instagram animated fadeInDown animation-delay-4"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="social-icon soc-pinterest animated fadeInDown animation-delay-5"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="social-icon soc-linkedin animated fadeInDown animation-delay-6"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="social-icon soc-github animated fadeInDown animation-delay-7"><i class="fa fa-github"></i></a>
                    </div>
                    <div id="search-header" class="hidden-xs animated bounceInRight">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                </div> <!-- container -->
            </header> <!-- header -->
            <nav class="navbar navbar-static-top navbar-mind" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <?php echo CHtml::link('Chancery <span>Chambers</span>', array('site/index'), array('class' => 'navbar-brand visible-xs')); ?>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mind-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars fa-inverse"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-mind-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <?php echo CHtml::link('Home', array('site/index'), array('class' => '')); ?>                             
                            </li>
                            <li class="">
                                <?php echo CHtml::link('About Us', array('content/view', 'id' => 1), array('class' => '')); ?>                             
                            </li>
                            <li class="">
                                <?php echo CHtml::link('Our Services', array('content/view', 'id' => 2), array('class' => '')); ?>                             
                            </li>
                            <li class="">
                                <?php echo CHtml::link('Our Lawyers', array('content/view', 'id' => 4), array('class' => '')); ?>                             
                            </li>
                            <li class="">
                                <?php echo CHtml::link('Publications', array('content/view', 'id' => 10), array('class' => '')); ?>                             
                            </li>
                            <li class="">
                                <?php echo CHtml::link('Resources', array('content/view', 'id' => 5), array('class' => '')); ?>                             
                            </li>
                            <li class="">
                                <?php echo CHtml::link('Get Advice', array('content/view', 'id' => 6), array('class' => '')); ?>                             
                            </li>
                            <li class="">
                                <?php echo CHtml::link('Recruitment', array('content/view', 'id' => 7), array('class' => '')); ?>                             
                            </li>
                            <li class="">
                                <?php echo CHtml::link('Pupillage', array('content/view', 'id' => 8), array('class' => '')); ?>                             
                            </li>
                            <li class="">
                                <?php echo CHtml::link('Our Fees', array('content/view', 'id' => 9), array('class' => '')); ?>                             
                            </li>
                            <li class="">
                                <?php echo CHtml::link('Contact Us', array('site/contact'), array('class' => '')); ?>                             
                            </li>                            
                        </ul> <!-- nav nabvar-nav -->                        
                    </div><!-- navbar-collapse -->
                </div> <!-- container -->
            </nav> <!-- navbar navbar-default -->
            <?php echo $content; ?>
            <aside id="footer-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="footer-widget-title">Subscribe to our eNewsletter</h3>                            
                            <p>We like to keep you up to date with our latest news so please subscribe to our periodic e-newsletter.  You can see at a glance interesting updates, special offers, upcoming events and good news stories.</p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Adress">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="button">Subscribe</button>
                                </span>
                            </div><!-- /input-group -->
                        </div>
                        <div class="col-md-4">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title">Recent News</h3>
                                <div class="media">                                    
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Coming soon...</a></h4>
                                        <small></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title">Quick Links</h3>
                                <div class="row">
                                    <ol>
                                        <li><?php echo CHtml::link('Supreme Court of Bangladesh', 'http://www.supremecourt.gov.bd/', array('target'=>'_blank')); ?></li>
                                        <li><?php echo CHtml::link('President’s Office', 'http://www.bangabhaban.gov.bd/', array('target'=>'_blank')); ?></li>
                                        <li><?php echo CHtml::link('Prime Minister’s Office', 'http://www.pmo.gov.bd/', array('target'=>'_blank')); ?></li>
                                        <li><?php echo CHtml::link('Ministry of Law, Justice and Parliamentary Affairs', 'http://www.minlaw.gov.bd/', array('target'=>'_blank')); ?></li>
                                        <li><?php echo CHtml::link('Ministry of Finance', 'http://www.mof.gov.bd/en', array('target'=>'_blank')); ?></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </aside> <!-- footer-widgets -->
            <footer id="footer">
                <p>&copy; <?php echo date('Y'); ?> <?php echo Yii::app()->name; ?>. All rights reserved. Developed by <?php echo CHtml::link('Optimo Solution', 'http://www.optimosolution.com', array('target' => '_blank')); ?></p>
            </footer>
        </div> <!-- boxed -->
        <div id="back-top">
            <a href="#header"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Scripts -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.cookie.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.mixitup.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lightbox-2.6.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/holder.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/app.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/styleswitcher.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/syntax/shCore.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/syntax/shBrushXml.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/syntax/shBrushJScript.js"></script>
        <script type="text/javascript">
            SyntaxHighlighter.all()
        </script>
    </body>
</html>