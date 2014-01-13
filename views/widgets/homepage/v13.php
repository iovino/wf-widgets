<!DOCTYPE html>
<html>
<head>
    <?php echo $this->helper->renderCss("main"); ?>
    <?php echo $this->helper->renderCss("better-you"); ?>
</head>
<body>
<div id="wf_holiday_countdown">
    <div id="wf_holiday_header"></div>
    <div id="wf_holiday_content">
        <script src='http://cdn.onescreen.net/os/static/apps/s/_onescreen.js'></script>
        <div id='os_dmp_embed'></div>
        <script>com.onescreen.widgets.load('12075-07b1931bd22fcc8bcf029fe6768bc308', 'os_dmp_embed');
        </script>
        <noscript>This application requires JavaScript.</noscript>
    </div>
    <div id="wf_holiday_footer">
        <?php include('../views/widgets/homepage/_dfp.php'); ?>
    </div>
</div>

<?php include('../views/widgets/better-you/_countdown.js.php'); ?>
</body>
</html>

