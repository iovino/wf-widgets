<!DOCTYPE html>
<html>
<head>
    <?php echo $this->helper->renderCss("main"); ?>
    <?php echo $this->helper->renderCss("kfc"); ?>
</head>
<body>
<div id="wf_widget_countdown">
    <div id="wf_widget_header">
        <div id="wf_widget_by">Brought to you by <span>KFC </span></div>
    </div>
    <div id="wf_widget_content">
        <?php $channels = array('ask-mom.html', 'mom-talk-with-jodi.html', 'moms-and-parenting.html', 'mothers-day.html'); ?>
        <?php echo $this->helper->fetchChannel($channels[array_rand($channels, 1)]); ?>
    </div>
</div>
</body>
</html>

