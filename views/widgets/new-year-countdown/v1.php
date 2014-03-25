<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("new-year-countdown"); ?>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">

		</div>
		<div id="wf_widget_content">

		</div>
		<div id="wf_widget_footer">
            <script src='http://cdn.onescreen.net/os/static/apps/2.0/_onescreen.js'></script>
            <div id='os_dmp_embed'></div>
            <script>com.onescreen.widgets.load('15809-0667a749580f66188871369fbfbef10b', 'os_dmp_embed');
            </script>
            <noscript>This application requires JavaScript.</noscript>
		</div>
	</div>

    <?php include('../views/widgets/new-year-countdown/_countdown.js.php'); ?>
</body>
</html>

