<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("better-you"); ?>
</head>
<body>
	<div id="wf_holiday_countdown">
		<div id="wf_holiday_header"></div>
		<div id="wf_holiday_content">
            <script src='http://cdn.onescreen.net/os/static/apps/2.0/_onescreen.js'></script>
            <div id='os_dmp_embed'></div>
            <script>com.onescreen.widgets.load('15809-0667a749580f66188871369fbfbef10b', 'os_dmp_embed');
            </script>
            <noscript>This application requires JavaScript.</noscript>
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

    <?php include('../views/widgets/better-you/_countdown.js.php'); ?>
</body>
</html>