<!DOCTYPE html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>

    <?php echo $this->helper->renderCss("main"); ?>
    <?php echo $this->helper->renderCss("style"); ?>
</head>

<body>
<div id="wf_widget_countdown">
    <div id="wf_widget_header">
        <div id="wf_widget_by">Brought to you by <span>Womensforum.com</span></div>
    </div>
    <div id="wf_widget_content">
        <ul class="bjqs">
            <li><a href="#" target="_blank"><img src="<?php echo $this->app->config('base_url'); ?>/assets/imgs/style/slides/a-to-z-nail-art.jpg" border="0" title="Nail Art, A to Z Pedicure" /></a></li>
            <li><a href="#" target="_blank"><img src="<?php echo $this->app->config('base_url'); ?>/assets/imgs/style/slides/leopardmani.jpg" border="0" title="Nail Art, Rainbow Leopard" /></a></li>
            <li><a href="#" target="_blank"><img src="<?php echo $this->app->config('base_url'); ?>/assets/imgs/style/slides/paper-plane-nails.jpg" border="0" title="Nail Art, Paper Planes" /></a></li>
            <li><a href="#" target="_blank"><img src="<?php echo $this->app->config('base_url'); ?>/assets/imgs/style/slides/tribal-nails.jpg" border="0" title="Nail Art, Coral Tribal" /></a></li>
            <li><a href="#" target="_blank"><img src="<?php echo $this->app->config('base_url'); ?>/assets/imgs/style/slides/cat-nail-art.jpg" border="0" title="Nail Art, Polka Dot Cat" /></a></li>
        </ul>
    </div>
    <div id="wf_widget_footer">
        <a href="http://www.motts.com/" target="_blank">
            <img src="<?php echo $this->app->config('base_url'); ?>/assets/imgs/back-to-school/ad.png" />
        </a>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php echo $this->app->config('base_url'); ?>/assets/js/jquery.bjqs-1.3.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#wf_widget_content').bjqs({
            height      : 250,
            width       : 300,
            showmarkers : false
        });
    });
</script>

</body>
</html>
