<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("avery"); ?>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">
            <div id="wf_widget_by">Brought to you by <span>Avery&reg;</span></div>
		</div>
		<div id="wf_widget_content">
            <?php echo $this->helper->fetchChannel('parties-and-celebrations.html'); ?>
        </div>
		<div id="wf_widget_footer">
			
		</div>
	</div>
</body>
</html>

