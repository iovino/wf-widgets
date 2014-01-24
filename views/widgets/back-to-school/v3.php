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
			<a class="twitter-timeline" href="https://twitter.com/Womensforum" data-widget-id="259107114746789890" width="300" height="250">Tweets by @Womensforum</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
        <div id="wf_holiday_footer">
            <a href="http://www.motts.com/" target="_blank">
                <img src="<?php echo $this->app->config('base_url'); ?>/assets/imgs/back-to-school/ad.png" />
            </a>
        </div>
	</div>
</body>
</html>

