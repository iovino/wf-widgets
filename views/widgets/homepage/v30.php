<!DOCTYPE html>
<html>
<head>
    <?php echo $this->helper->renderCss("main"); ?>
    <?php echo $this->helper->renderCss("valentine"); ?>
</head>
<body>
<div id="wf_holiday_countdown">
    <div id="wf_holiday_header">
        <div id="wf_widget_by">Brought to you by <span>Womensforum.com</span></div>
    </div>
    <div id="wf_holiday_content">
        <?php echo $this->helper->fetchChannel('valentines-day.html'); ?>
    </div>
    <div id="wf_holiday_footer">
        <script src='http://cdn.onescreen.net/os/static/apps/s/_onescreen.js'></script>
        <div id='os_dmp_embed'></div>
        <script>com.onescreen.widgets.load('16314-81cdb728b199598721cc097895175380', 'os_dmp_embed');
        </script>
        <noscript>This application requires JavaScript.</noscript>
    </div>
</div>
</body>
</html>

