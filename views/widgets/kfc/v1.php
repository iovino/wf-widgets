<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("kfc"); ?>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">
			<div id="wf_widget_by">Brought to you by <span>KFC </span></div>
		</div>
		<div id="wf_widget_content">
            <?php $channels = array('ask-mom.html', 'mom-talk-with-jodi.html', 'moms-and-parenting.html', 'mothers-day.html'); ?>
            <?php echo $this->helper->fetchChannel($channels[array_rand($channels, 1)]); ?>
		</div>
		<div id="wf_widget_footer">
            <a target="_blank" href="http://ad.doubleclick.net/jump/N9823.110164WOMENSFORUM.COM/B8071068.107993578;sz=1x1;ord=[timestamp]?">
                <img src="/assets/imgs/kfc/300x250.png" alt="" border="" />
			</a>
		</div>
	</div>
    <img src="http://ad.doubleclick.net/ad/N9823.110164WOMENSFORUM.COM/B8071068.107993578;sz=1x1;ord=[timestamp]?" alt="" />
</body>
</html>

