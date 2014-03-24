<?php

$_REQUEST['do'] = empty($_REQUEST['do']) ? 'marchmania' : $_REQUEST['do'];
$content_tabs   = array('marchmania');
$program_tabs   = array('inspringwomen', 'momtalk', 'askmom', 'trend', 'socialbuzz', 'fitfix', 'kitchencourses');
$social_tabs    = array('twitter', 'facebook', 'pinterest');
$q1_tabs        = array();
$q2_tabs        = array('easter', 'mothersday', 'fathersday', 'worldcup', 'springfashion');
$q3_tabs        = array('backtoschool', 'summertime');
$custom_tabs    = array('hershey', 'coppertone', 'allaway');
$high_tabs      = array('sidekick', 'filmstrip', 'pushdown', 'interstitial_high', 'super-pushdown', 'reskin');
$mobile_tabs    = array('interstitial');
$native_tabs    = array('flash-panel', 'blogger-bar', 'slideshow', 'trending', 'navbar');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Womensforum Products</title>

    <link href="/assets/css/homepage/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/homepage/main.css" rel="stylesheet">

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="masthead">
        <a href="/"><img src="/assets/imgs/homepage/wf-logo.gif"></a>
        <h3 class="text-muted pull-right">Womensforum Products</h3>
    </div>

    <hr>

    <div class="row-fluid">
        <!-- navigation tabs -->
        <ul class="nav nav-tabs" id="myTab">

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $program_tabs) ? ' active' : '') ?>">
                <a href="#" id="video_tab" class="dropdown-toggle" data-toggle="dropdown">Original Programming CDU's<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="video_tab">
                    <li><a href="?do=inspringwomen" tabindex="-1">Inspring Women</a></li>
                    <li><a href="?do=momtalk" tabindex="-1">Mom Talk</a></li>
                    <li><a href="?do=askmom" tabindex="-1">Ask Mom</a></li>
                    <li><a href="?do=trend" tabindex="-1">Trend</a></li>
                    <li><a href="?do=socialbuzz" tabindex="-1">Social Buzz</a></li>
                    <li><a href="?do=fitfix" tabindex="-1">Fit Fix</a></li>
                    <li><a href="?do=kitchencourses" tabindex="-1">Kitchen Courses</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $social_tabs) ? ' active' : '') ?>">
                <a href="#" id="social_tab" class="dropdown-toggle" data-toggle="dropdown">Social CDU's<b class="caret"></b></a>
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

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $q2_tabs) ? ' active' : '') ?>">
                <a href="#" id="q2_tab" class="dropdown-toggle" data-toggle="dropdown">Q2 Opportunities CDU's<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="q2_tab">
                    <li><a href="?do=easter" tabindex="-1">Easter</a></li>
                    <li><a href="?do=mothersday" tabindex="-1">Mothers Day</a></li>
                    <li><a href="?do=fathersday" tabindex="-1">Fathers Day</a></li>
                    <li><a href="?do=worldcup" tabindex="-1">World Cup</a></li>
                    <li><a href="?do=springfashion" tabindex="-1">Spring Fashion</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $q3_tabs) ? ' active' : '') ?>">
                <a href="#" id="q3_tab" class="dropdown-toggle" data-toggle="dropdown">Q3 Opportunities CDU's<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="q3_tab">
                    <li><a href="?do=backtoschool" tabindex="-1">Back To School</a></li>
                    <li><a href="?do=summertime" tabindex="-1">Summertime</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $custom_tabs) ? ' active' : '') ?>">
                <a href="#" id="q3_tab" class="dropdown-toggle" data-toggle="dropdown">Custom CDU's <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="q3_tab">
                    <li><a href="?do=hershey" tabindex="-1">Hershey</a></li>
                    <li><a href="?do=coppertone" tabindex="-1">Coppertone</a></li>
                    <li><a href="?do=allaway" tabindex="-1">Allaway Pollen</a></li>
                </ul>
            </li>


            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $high_tabs) ? ' active' : '') ?>">
                <a href="#" id="q3_tab" class="dropdown-toggle" data-toggle="dropdown">High Impact <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="q3_tab">
                    <li><a href="?do=sidekick" tabindex="-1">Side Kick</a></li>
                    <li><a href="?do=filmstrip" tabindex="-1">Film Strip</a></li>
                    <li><a href="?do=pushdown" tabindex="-1">Push Down</a></li>
                    <li><a href="?do=super-pushdown" tabindex="-1">Super Push Down</a></li>
                    <li><a href="?do=reskin" tabindex="-1">Reskin</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $mobile_tabs) ? ' active' : '') ?>">
                <a href="#" id="q3_tab" class="dropdown-toggle" data-toggle="dropdown">Mobile <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="q3_tab">
                    <li><a href="?do=interstitial" tabindex="-1">Interstitial</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $native_tabs) ? ' active' : '') ?>">
                <a href="#" id="q3_tab" class="dropdown-toggle" data-toggle="dropdown">Native Ads <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="q3_tab">
                    <li><a href="?do=flash-panel" tabindex="-1">Flash Panel</a></li>
                    <li><a href="?do=blogger-bar" tabindex="-1">Blogger Bar</a></li>
                    <li><a href="?do=slideshow" tabindex="-1">Slideshow</a></li>
                    <li><a href="?do=trending" tabindex="-1">Trending</a></li>
                    <li><a href="?do=navbar" tabindex="-1">Navigation Bar</a></li>
                </ul>
            </li>

        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="womensforum">
                <div class="row-fluid">
                    <?php if (file_exists($file = '../views/homepage/' . htmlspecialchars($_REQUEST['do'] . '.php'))) : ?>
                        <?php include $file ?>
                    <?php endif ?>
                </div>
            </div>
        </div> <!-- /tab-content -->
    </div> <!-- /row-fluid -->
</div> <!-- /container -->

</body>
</html>

