<!DOCTYPE html>
<html>
<head>
    <?php echo $this->helper->renderCss("main"); ?>
    <?php echo $this->helper->renderCss("easter"); ?>
</head>
<body>
<div id="wf_holiday_countdown">
    <div id="wf_widget_header">
        <div id="wf_widget_by">Brought to you by <span>Hershey's</span></div>
    </div>
    <div id="wf_holiday_content">
        <?php echo $this->helper->fetchChannel('easter-passover.html'); ?>
    </div>
    <div id="wf_holiday_footer">
        <a href="http://www.hershey.com/" target="_blank"><img src="/assets/imgs/easter/hershey-ad.png" border="0" /></a>
    </div>
</div>
</body>
</html>

