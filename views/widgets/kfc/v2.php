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
		<div id="wf_widget_footer">
            <script src='http://cdn.onescreen.net/os/static/apps/2.0/_onescreen.js'></script>
            <div id='os_dmp_embed'></div>
            <script>com.onescreen.widgets.load('18962-5782ebfd78964e00c596687577c9ffcb', 'os_dmp_embed');
            </script>
            <noscript>This application requires JavaScript.</noscript>
		</div>
	</div>
</body>
</html>

