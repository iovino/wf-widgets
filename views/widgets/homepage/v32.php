<!DOCTYPE html>
<html>
<head>
    <?php echo $this->helper->renderCss("main"); ?>
    <?php echo $this->helper->renderCss("red-carpet"); ?>
</head>
<body>
<div id="wf_holiday_countdown">
    <div id="wf_holiday_header">
        <div id="wf_widget_by">Brought to you by <span>Womensforum.com</span></div>
    </div>
    <div id="wf_holiday_content">
        <?php echo $this->helper->fetchChannel('red-carpet-showdown.html'); ?>
    </div>
    <div id="wf_holiday_footer">
        <script src='http://cdn.onescreen.net/os/static/apps/2.0/_onescreen.js'></script>
        <div id='os_dmp_embed'></div>
        <script>com.onescreen.widgets.load('15810-a144b2b6b798c193567b08f707976a2a', 'os_dmp_embed');
        </script>
        <noscript>This application requires JavaScript.</noscript>
    </div>
</div>
</body>
</html>

