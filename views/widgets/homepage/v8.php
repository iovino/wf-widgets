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
        <?php echo $this->helper->fetchChannel('holiday-fashion.html'); ?>
    </div>
    <div id="wf_holiday_footer">
        <script src='http://cdn.onescreen.net/os/static/apps/s/_onescreen.js'></script>
        <div id='os_dmp_embed'></div>
        <script>com.onescreen.widgets.load('11639-d2519d24c1c977ea31271c9debadfb64', 'os_dmp_embed');
        </script>
        <noscript>This application requires JavaScript.</noscript>
    </div>
</div>

<?php include('../views/widgets/better-you/_countdown.js.php'); ?>
</body>
</html>




