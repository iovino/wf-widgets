<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("diy-diaries"); ?>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">
			<div id="wf_widget_by">Brought to you by <span>Womensforum.com</span></div>
		</div>
		<div id="wf_widget_content">
            <?php echo $this->helper->fetchChannel('diy-diaries.html'); ?>
		</div>
		<div id="wf_widget_footer">
            <script src='http://cdn.onescreen.net/os/static/apps/2.0/_onescreen.js'></script>
            <div id='os_dmp_embed'></div>
            <script>com.onescreen.widgets.load('16649-3187a227f3e34123b048b68f73e7e3c9', 'os_dmp_embed');
            </script>
            <noscript>This application requires JavaScript.</noscript>
		</div>
	</div>
</body>
</html>

