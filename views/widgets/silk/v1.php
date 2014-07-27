<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("silk"); ?>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">
			<div id="wf_widget_by">Brought to you by <span>Silk&reg; Coconutmilk </span></div>
		</div>
		<div id="wf_widget_content">
            <?php echo $this->helper->fetchChannel('recipe.html'); ?>
		</div>
	</div>
</body>
</html>

