<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("subway"); ?>
</head>
<body>
	<div id="wf_holiday_countdown">
		<div id="wf_holiday_header_v1">
            <div id="wf_widget_by">Served fresh by <span>Subway</span></div>
		</div>
		<div id="wf_holiday_content">
            <?php echo $this->helper->fetchChannel('the-heart.html'); ?>
		</div>
		<div id="wf_holiday_footer">
            <script src='http://cdn.onescreen.net/os/static/apps/2.0/_onescreen.js'></script>
            <div id='os_dmp_embed'></div>
            <script>com.onescreen.widgets.load('16725-3a644d003cd9e98c398b0c3b64bb4d7f', 'os_dmp_embed');
            </script>
            <noscript>This application requires JavaScript.</noscript>
		</div>
	</div>

    <img src="http://ad.doubleclick.net/ddm/trackimp/N4912.110164.WOMENSFORUM.COM/B7979810.23;dc_trk_aid=278536371;dc_trk_cid=56793249;ord=[timestamp]" border="0" width="1" height="1"/>
</body>
</html>

