<!DOCTYPE html>
<html>
<head>
    <?php echo $this->helper->renderCss("main"); ?>
    <?php echo $this->helper->renderCss("sochi"); ?>
</head>
<body>
<div id="wf_holiday_countdown">
    <div id="wf_holiday_header">
        <div id="wf_widget_by">Brought to you by <span>Womensforum.com</span></div>
    </div>
    <div id="wf_holiday_content">
        <?php echo $this->helper->fetchChannel('olympics.html'); ?>
    </div>
    <div id="wf_holiday_footer">
        <script src='http://cdn.onescreen.net/os/static/apps/2.0/_onescreen.js'></script>
        <div id='os_dmp_embed_v4'></div>
        <script>com.onescreen.widgets.load('15812-8ce3655ef2c9788ca9785e056158a31c', 'os_dmp_embed_v4');
        </script>
        <noscript>This application requires JavaScript.</noscript>
    </div>
</div>
</body>
</html>

