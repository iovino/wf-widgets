<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("azo"); ?>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">
			<div id="wf_widget_by">Brought to you by <span>AZO</span></div>
		</div>
		<div id="wf_widget_content">
            <?php echo $this->helper->fetchChannel('personal-health.html'); ?>
        </div>
	</div>
</body>
</html>

