<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("sochi"); ?>
</head>
<body>
	<div id="wf_holiday_countdown">
		<div id="wf_holiday_header">
			<div id="wf_widget_by">Brought to you by <span>Womensforum.com</span></div>
		</div>
		<div id="wf_holiday_content">
            <?php echo $this->helper->fetchChannel('olympics.html'); ?>
		</div>
		<div id="wf_holiday_footer">
            <script type="text/javascript">
                var ord = window.ord || Math.floor(Math.random() * 1e16);
                document.write('<script type="text/javascript" src="http://ad.doubleclick.net/N5809/adj/5089.wfm/widget;sz=300x250;ord=' + ord + '?"><\/script>');
            </script>
            <noscript>
                <a href="http://ad.doubleclick.net/N5809/jump/5089.wfm/widget;sz=300x250;ord=[timestamp]?">
                    <img src="http://ad.doubleclick.net/N5809/ad/5089.wfm/widget;sz=300x250;ord=[timestamp]?" width="300" height="250"/>
                </a>
            </noscript>
		</div>
	</div>
</body>
</html>

