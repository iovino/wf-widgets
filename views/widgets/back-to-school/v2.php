<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("back-to-school"); ?>
</head>
<body>
	<div id="wf_holiday_countdown">
		<div id="wf_holiday_header">
			<div id="wf_widget_by">Brought to you by <span>Back To School</span></div>
		</div>
		<div id="wf_holiday_content">
            <script src='http://cdn.onescreen.net/os/static/apps/s/_onescreen.js'></script>
            <div id='os_dmp_embed'></div>
            <script>com.onescreen.widgets.load('17125-6c882597a265cb287b6bd958073b7aad', 'os_dmp_embed');
            </script>
            <noscript>This application requires JavaScript.</noscript>
		</div>
		<div id="wf_holiday_footer">
            <a href="http://www.motts.com/" target="_blank">
                <img src="<?php echo $this->app->config('base_url'); ?>/assets/imgs/back-to-school/ad.png" />
            </a>
		</div>
	</div>
</body>
</html>

