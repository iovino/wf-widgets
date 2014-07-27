<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("contractor-talk"); ?>

    <script type='text/javascript'>
        (function() {
            var useSSL = 'https:' == document.location.protocol;
            var src = (useSSL ? 'https:' : 'http:') +
                '//www.googletagservices.com/tag/js/gpt.js';
            document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
        })();
    </script>

    <script type='text/javascript'>
        googletag.defineSlot('/1019621/contractortalk_sidebar_square_atf', [[300, 600], [300, 250]], 'div-gpt-ad-1339698798371-2').addService(googletag.pubads());
        googletag.pubads().collapseEmptyDivs(true)
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
    </script>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">
			<div id="wf_widget_by">Brought to you by <span>contractortalk.com </span></div>
		</div>
		<div id="wf_widget_content">
            <?php echo $this->helper->fetchChannel('contractor-talk.html'); ?>
        </div>
        <div id="wf_widget_footer">

            <!-- contractortalk_sidebar_square_atf -->
            <div id='div-gpt-ad-1339698798371-2'>
                <script type='text/javascript'>
                    googletag.display('div-gpt-ad-1339698798371-2');
                </script>
            </div>

        </div>
	</div>
</body>
</html>

