<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("ask-mom"); ?>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">
			<div id="wf_widget_by">Brought to you by <span>Womensforum.com</span></div>
		</div>
		<div id="wf_widget_content">
            <?php echo $this->helper->fetchChannel('moms-and-parenting.html'); ?>
		</div>
		<div id="wf_widget_footer">
            <!-- Womensforum/widget -->
            <script type="text/javascript">
                var ord = window.ord || Math.floor(Math.random() * 1e16);
                document.write('<script type="text/javascript" src="=300x250;ord=' + ord + '?"><\/script>');
            </script>
            <noscript>
                <a href="=300x250;ord=[timestamp]?">
                    <img src="=300x250;ord=[timestamp]?" width="300" height="250" />
                </a>
            </noscript>
		</div>
	</div>
</body>
</html>

