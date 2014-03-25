<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("easter"); ?>
</head>
<body>
	<div id="wf_holiday_countdown">
		<div id="wf_holiday_header">
			<div id="wf_widget_by">Brought to you by <span>Womensforum.com</span></div>
		</div>
		<div id="wf_holiday_content">
            <?php echo $this->helper->fetchChannel('easter-passover.html'); ?>
		</div>
		<div id="wf_holiday_footer">

		</div>
	</div>
</body>
</html>

