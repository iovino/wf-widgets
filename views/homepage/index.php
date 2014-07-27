<?php

$_REQUEST['do'] = empty($_REQUEST['do']) ? 'welcome' : $_REQUEST['do'];
$content_tabs   = array('marchmania');
$program_tabs   = array('inspringwomen', 'momtalk', 'askmom', 'trend', 'socialbuzz', 'fitfix', 'kitchencourses', 'diy-diaries');
$social_tabs    = array('twitter', 'facebook', 'pinterest');
$q1_tabs        = array();
$q2_tabs        = array('easter', 'mothersday', 'fathersday', 'worldcup', 'springfashion');
$q3_tabs        = array('backtoschool', 'summertime', 'fall-back-fitness', 'fall-tv', 'winter-fashion');
$q4_tabs        = array('halloween', 'breast-care', 'newyears-countdown', 'holidays');
$seasonal_tabs  = array_merge($q1_tabs, $q2_tabs, $q3_tabs, $q4_tabs);
$custom_tabs    = array('hershey', 'coppertone', 'alaway', 'social');
$high_tabs      = array('expandable', 'filmstrip', 'pushdown', 'interstitial_high', 'super-pushdown', 'reskin', 'billboard', 'portrait', 'game', 'webapp20', 'webapp1050');
$mobile_tabs    = array('interstitial', 'mobile-standard', 'on-the-go');
$native_tabs    = array('flash-panel', 'blogger-bar', 'slideshow', 'trending', 'navbar');
$savvy_tabs     = array('savvy-shoppers', 'shopping-guides');
$audience_tabs  = array('audience-platform');
$content_tab    = array('content-overview', 'expert-bloggers', 'womensforum-tv', 'social-media-promos');
$success_tab    = array('success-parenting', 'success-food', 'success-health', 'success-living', 'success-style', 'success-entertainment', 'success-cpg', 'success-qsr', 'success-pets', 'success-retail');
$holiday_tab	= array('holiday-2014-countdown', 'holiday-2014-mobile', 'holiday-2014-shopping', 'holiday-2014-web-apps');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Womensforum Products</title>
    <link href="/assets/css/homepage/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/homepage/main.css" rel="stylesheet">

    <?php if (in_array($_REQUEST['do'], $content_tab)) : ?>
        <link href="/assets/css/homepage/wf-content.css" rel="stylesheet">
    <?php endif ?>

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>

</head>

<body>
<div class="container">
    <div class="masthead">
        <a href="/"><img src="/assets/imgs/homepage/wf-logo.gif"></a>
        <h3 class="text-muted pull-right">Womensforum Products</h3>
    </div>

    <br>

    <div class="row-fluid">
        <!-- navigation tabs -->
        <ul class="nav nav-tabs" id="myTab">

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $program_tabs) ? ' active' : '') ?>">
                <a href="#" id="video_tab" class="dropdown-toggle" data-toggle="dropdown">Original Programming<br> Web Apps<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="video_tab">
                    <li><a href="?do=inspringwomen" tabindex="-1">Inspring Women</a></li>
                    <li><a href="?do=momtalk" tabindex="-1">Mom Talk</a></li>
                    <li><a href="?do=askmom" tabindex="-1">Ask Mom</a></li>
                    <li><a href="?do=trend" tabindex="-1">Trend</a></li>
                    <li><a href="?do=socialbuzz" tabindex="-1">Social Buzz</a></li>
                    <li><a href="?do=fitfix" tabindex="-1">Fit Fix</a></li>
                    <li><a href="?do=kitchencourses" tabindex="-1">Kitchen Courses</a></li>
                    <li><a href="?do=diy-diaries" tabindex="-1">DIY Diaries</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $social_tabs) ? ' active' : '') ?>">
                <a href="#" id="social_tab" class="dropdown-toggle" data-toggle="dropdown">Social<br> Web Apps<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="social_tab">
                    <li><a href="?do=twitter" tabindex="-1">Twitter</a></li>
                    <li><a href="?do=facebook" tabindex="-1">Facebook</a></li>
                    <li><a href="?do=pinterest" tabindex="-1">Pinterest</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $q1_tabs) ? ' active' : '') ?>">
                <!-- <a href="#" id="q1_tab" class="dropdown-toggle" data-toggle="dropdown">Q1 Opportunities <b class="caret"></b></a> -->
                <ul class="dropdown-menu" role="menu" aria-labelledby="q1_tab">
                    <li><a href="?do=marchmania" tabindex="-1">March Mania</a></li>
                    <li><a href="?do=newyears" tabindex="-1">New Years</a></li>
                    <li><a href="?do=redcarpet" tabindex="-1">Red Carpet</a></li>
                    <li><a href="?do=sochi" tabindex="-1">Sochi</a></li>
                    <li><a href="?do=superbowl" tabindex="-1">Superbowl</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $seasonal_tabs) ? ' active' : '') ?>">
                <a href="#" id="seasonal_tab" class="dropdown-toggle" data-toggle="dropdown">Seasonal<br> Web Apps<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="seasonal_tab">
                    <li class="dropdown-header">Q2 Web Apps</li>
                    <li><a href="?do=easter" tabindex="-1">Easter</a></li>
                    <li><a href="?do=mothersday" tabindex="-1">Mothers Day</a></li>
                    <li><a href="?do=fathersday" tabindex="-1">Fathers Day</a></li>
                    <li><a href="?do=worldcup" tabindex="-1">World Cup</a></li>
                    <li><a href="?do=springfashion" tabindex="-1">Spring Fashion</a></li>

                    <li class="dropdown-header">Q3 Web Apps</li>
                    <li><a href="?do=backtoschool" tabindex="-1">Back To School</a></li>
                    <li><a href="?do=summertime" tabindex="-1">Summertime</a></li>
                    <li><a href="?do=fall-back-fitness" tabindex="-1">Fall Back Into Fitness</a></li>
                    <li><a href="?do=fall-tv" tabindex="-1">Fall TV</a></li>
                    <li><a href="?do=winter-fashion" tabindex="-1">Winter Fashion</a></li>

                    <li class="dropdown-header">Q4 Web Apps</li>
                    <li><a href="?do=halloween" tabindex="-1">Halloween</a></li>
                    <li><a href="?do=breast-care" tabindex="-1">Breast Cancer Awareness</a></li>
                    <li><a href="?do=newyears-countdown" tabindex="-1">New Years Countdown</a></li>
                    <li><a href="?do=holidays" tabindex="-1">Holidays</a></li>
                </ul>
            </li>


            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $custom_tabs) ? ' active' : '') ?>">
                <a href="#" id="q3_tab" class="dropdown-toggle" data-toggle="dropdown"><br>Custom <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="q3_tab">
                    <li><a href="?do=hershey" tabindex="-1">Hershey</a></li>
                    <li><a href="?do=coppertone" tabindex="-1">Coppertone</a></li>
                    <li><a href="?do=alaway" tabindex="-1">Alaway Pollen</a></li>
                    <li><a href="?do=social" tabindex="-1">Social Media</a></li>
                </ul>
            </li>


            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $high_tabs) ? ' active' : '') ?>">
                <a href="#" id="q3_tab" class="dropdown-toggle" data-toggle="dropdown">High<br> Impact <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="q3_tab">
                    <li><a href="?do=expandable" tabindex="-1">Expandable</a></li>
                    <li><a href="?do=filmstrip" tabindex="-1">Filmstrip</a></li>
                    <li><a href="?do=pushdown" tabindex="-1">Pushdown</a></li>
                    <li><a href="?do=super-pushdown" tabindex="-1">Super Pushdown</a></li>
                    <li><a href="?do=reskin" tabindex="-1">Reskin</a></li>
                    <li><a href="?do=billboard" tabindex="-1">Billboard</a></li>
                    <li><a href="?do=portrait" tabindex="-1">Portrait</a></li>
                    <li><a href="?do=game" tabindex="-1">Games</a></li>
                    <li><a href="?do=webapp20" tabindex="-1">Web App 2.0</a></li>
                    <li><a href="?do=webapp1050" tabindex="-1">Web App (300x1050)</a></li>
                    <li><a href="?do=expandable-footer" tabindex="-1">Expandable Footer</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $mobile_tabs) ? ' active' : '') ?>">
                <a href="#" id="q3_tab" class="dropdown-toggle" data-toggle="dropdown">Mobile<br> Ads <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="q3_tab">
                    <li><a href="?do=mobile-standard" tabindex="-1">Standard</a></li>
                    <li><a href="?do=interstitial" tabindex="-1">Interstitial</a></li>
                    <li><a href="?do=on-the-go" tabindex="-1">Mobile Only Content</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $native_tabs) ? ' active' : '') ?>">
                <a href="#" id="q3_tab" class="dropdown-toggle" data-toggle="dropdown">Native<br> Ads <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="q3_tab">
                    <li><a href="?do=flash-panel" tabindex="-1">Flash Panel</a></li>
                    <li><a href="?do=blogger-bar" tabindex="-1">Blogger Bar</a></li>
                    <li><a href="?do=slideshow" tabindex="-1">Slideshow</a></li>
                    <li><a href="?do=trending" tabindex="-1">Trending</a></li>
                    <li><a href="?do=navbar" tabindex="-1">Navigation Bar</a></li>
                    <li><a href="?do=badges" tabindex="-1">Promo Badges</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $savvy_tabs) ? ' active' : '') ?>">
                <a href="#" id="q3_tab" class="dropdown-toggle" data-toggle="dropdown">Savvy<br> Shoppers <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="q3_tab">
                    <li><a href="?do=savvy-shoppers" tabindex="-1">Savvy Shoppers</a></li>
                    <li><a href="?do=shopping-guides" tabindex="-1">Shopping Guides</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $audience_tabs) ? ' active' : '') ?>">
                <a href="#" id="audience_tab" class="dropdown-toggle" data-toggle="dropdown">Audience<br> Platform <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="audience_tab">
                    <li><a href="?do=audience-platform" tabindex="-1">Overview</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $content_tab) ? ' active' : '') ?>">
                <a href="#" id="content_tab" class="dropdown-toggle" data-toggle="dropdown"><br> Content <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="content_tab">
                    <li><a href="?do=content-overview" tabindex="-1">Overview</a></li>
                    <li><a href="?do=expert-bloggers" tabindex="-1">Expert Bloggers</a></li>
                    <li><a href="?do=womensforum-tv" tabindex="-1">Womensforum TV</a></li>
                    <li><a href="?do=social-media-promos" tabindex="-1">Social Media</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $success_tab) ? ' active' : '') ?>">
                <a href="#" id="success_tab" class="dropdown-toggle" data-toggle="dropdown">Success<br> Cases <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="success_tab">
                    <li><a href="?do=success-parenting" tabindex="-1">Parenting</a></li>
                    <li><a href="?do=success-food" tabindex="-1">Food</a></li>
                    <li><a href="?do=success-health" tabindex="-1">Health</a></li>
                    <li><a href="?do=success-living" tabindex="-1">Living</a></li>
                    <li><a href="?do=success-style" tabindex="-1">Style</a></li>
                    <li><a href="?do=success-cpg" tabindex="-1">CPG</a></li>
                    <li><a href="?do=success-retail" tabindex="-1">Retail</a></li>
                </ul>
            </li>
            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $holiday_tab) ? ' active' : '') ?>">
				<a href="#" id="holiday_tab" class="dropdown-toggle" data-toggle="dropdown">Holiday<br> 2014<b class="caret"></b></a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="holiday_tab">
					<li><a href="?do=holiday-2014-countdown" tabindex="-1">High Impact</a></li>
					<li><a href="?do=holiday-2014-mobile" tabindex="-1">Mobile</a></li>
					<li><a href="?do=holiday-2014-shopping" tabindex="-1">Shopping Guide</a></li>
					<li><a href="?do=holiday-2014-web-apps" tabindex="-1">Web Apps</a></li>
				</ul>
            </li>


        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="womensforum">
                <div class="row-fluid">
                    <?php if (file_exists($file = '../views/homepage/partials/' . htmlspecialchars($_REQUEST['do'] . '.php'))) : ?>
                        <?php include $file ?>
                    <?php endif ?>
                </div>
            </div>
        </div> <!-- /tab-content -->
    </div> <!-- /row-fluid -->
</div> <!-- /container -->

</body>
</html>

