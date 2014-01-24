<?php

if (empty($_REQUEST['do'])) {$_REQUEST['do'] = 'womensforum';}
if (empty($_REQUEST['show'])) {$_REQUEST['show'] = 'decor';}

$social_tabs = array('twitter', 'facebook', 'pinterest');
$q1_tabs     = array('marchmad', 'newyears', 'redcarpet', 'sochi', 'superbowl');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Womensforum Products</title>

    <link href="/assets/css/homepage/bootstrap.min.css" rel="stylesheet">

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <style type="text/css">
        body {
            padding-top: 20px;
            padding-bottom: 40px;
        }

            /* Custom container */
        .container-narrow {
            margin: 0 auto;
            max-width: 700px;
        }
        .container-narrow > hr {
            margin: 30px 0;
        }

            /* Main marketing message and sign up button */
        .jumbotron {
            margin: 60px 0;
            text-align: center;
        }
        .jumbotron h1 {
            font-size: 72px;
            line-height: 1;
        }
        .jumbotron .btn {
            font-size: 21px;
            padding: 14px 24px;
        }

            /* Supporting marketing content */
        .marketing {
            margin: 60px 0;
        }
        .marketing p + h4 {
            margin-top: 28px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="masthead">
        <a href="/"><img src="/assets/imgs/homepage/wf-logo.gif"></a>
        <h3 class="text-muted pull-right">Womensforum Products</h3>
    </div>

    <hr>

    <div class="row-fluid">
        <ul class="nav nav-tabs" id="myTab">
            <li class="dropdown<?php echo ($_REQUEST['do'] == 'womensforum' ? ' active' : '') ?>">
                <a href="#" id="content_tab" class="dropdown-toggle" data-toggle="dropdown">Womensforum Content <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="content_tab">
                    <li><a href="?do=womensforum&show=decor" tabindex="-1"> Holiday Decor</a></li>
                    <li><a href="?do=womensforum&show=recipes" tabindex="-1"> Holiday Recipes</a></li>
                    <li><a href="?do=womensforum&show=shopping" tabindex="-1">Holiday Shopping</a></li>
                    <li><a href="?do=womensforum&show=fashion" tabindex="-1">Holiday Fashion</a></li>
                    <li><a href="?do=womensforum&show=traditions" tabindex="-1">Holiday Healthy Traditions</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo ($_REQUEST['do'] == 'video' ? ' active' : '') ?>">
                <a href="#" id="video_tab" class="dropdown-toggle" data-toggle="dropdown">Womensforum Video <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="video_tab">
                    <li><a href="?do=video&show=all" tabindex="-1">All Holiday Videos</a></li>
                    <li><a href="?do=video&show=food" tabindex="-1">Holiday Food</a></li>
                    <li><a href="?do=video&show=decorating" tabindex="-1">Holiday Decorating</a></li>
                    <li><a href="?do=video&show=shopping" tabindex="-1">Holiday Shopping</a></li>
                    <li><a href="?do=video&show=healthy" tabindex="-1">Holiday Healthy Living</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $social_tabs) ? ' active' : '') ?>">
                <a href="#" id="social_tab" class="dropdown-toggle" data-toggle="dropdown">Social <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="social_tab">
                    <li><a href="?do=twitter" tabindex="-1">Twitter</a></li>
                    <li><a href="?do=facebook" tabindex="-1">Facebook</a></li>
                    <li><a href="?do=pinterest" tabindex="-1">Pinterest</a></li>
                </ul>
            </li>

            <li class="dropdown<?php echo (in_array($_REQUEST['do'], $q1_tabs) ? ' active' : '') ?>">
                <a href="#" id="social_tab" class="dropdown-toggle" data-toggle="dropdown">Q1 Opportunities <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="social_tab">
                    <li><a href="?do=marchmad" tabindex="-1">March Mania</a></li>
                    <li><a href="?do=newyears" tabindex="-1">New Years</a></li>
                    <li><a href="?do=redcarpet" tabindex="-1">Red Carpet</a></li>
                    <li><a href="?do=sochi" tabindex="-1">Sochi</a></li>
                    <li><a href="?do=superbowl" tabindex="-1">Superbowl</a></li>
                </ul>
            </li>

            <li class="<?php echo ($_REQUEST['do'] == 'backtoschool' ? ' active' : '') ?>">
                <a href="?do=backtoschool">Back To School</a>
            </li>

        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="womensforum">
                <div class="row-fluid">
                    <?php if ($_REQUEST['do'] == 'womensforum') : ?>
                        <?php include('../views/homepage/womensforum.php'); ?>
                    <?php endif ?>

                    <?php if ($_REQUEST['do'] == 'twitter') : ?>
                        <?php include('../views/homepage/twitter.php'); ?>
                    <?php endif ?>

                    <?php if ($_REQUEST['do'] == 'facebook') : ?>
                        <?php include('../views/homepage/facebook.php'); ?>
                    <?php endif ?>

                    <?php if ($_REQUEST['do'] == 'pinterest') : ?>
                        <?php include('../views/homepage/pinterest.php'); ?>
                    <?php endif ?>

                    <?php if ($_REQUEST['do'] == 'video') : ?>
                        <?php include('../views/homepage/video.php'); ?>
                    <?php endif ?>

                    <?php if ($_REQUEST['do'] == 'marchmad') : ?>
                        <?php include('../views/homepage/marchmad.php'); ?>
                    <?php endif ?>

                    <?php if ($_REQUEST['do'] == 'newyears') : ?>
                        <?php include('../views/homepage/newyears.php'); ?>
                    <?php endif ?>

                    <?php if ($_REQUEST['do'] == 'redcarpet') : ?>
                        <?php include('../views/homepage/redcarpet.php'); ?>
                    <?php endif ?>

                    <?php if ($_REQUEST['do'] == 'sochi') : ?>
                        <?php include('../views/homepage/sochi.php'); ?>
                    <?php endif ?>

                    <?php if ($_REQUEST['do'] == 'superbowl') : ?>
                        <?php include('../views/homepage/superbowl.php'); ?>
                    <?php endif ?>

                    <?php if ($_REQUEST['do'] == 'backtoschool') : ?>
                        <?php include('../views/homepage/backtoschool.php'); ?>
                    <?php endif ?>
                </div>
            </div>
        </div> <!-- /tab-content -->
    </div> <!-- /row-fluid -->
</div> <!-- /container -->

</body>
</html>

