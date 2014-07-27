<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("paint-talk"); ?>

    <script>
        window.google_analytics_uacct = "UA-97734-22"
    </script>

    <script type='text/javascript'>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        (function() {
            var gads = document.createElement('script');
            gads.async = true;
            gads.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            gads.src = (useSSL ? 'https:' : 'http:') +
                '//www.googletagservices.com/tag/js/gpt.js';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(gads, node);
        })();
    </script>

    <script type='text/javascript'>
        googletag.cmd.push(function() {
            googletag.defineSlot('/1019621/painttalk_square', [300, 250], 'div-gpt-ad-1368724149465-2').addService(googletag.pubads());
            googletag.pubads().collapseEmptyDivs();
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">
			<div id="wf_widget_by">Brought to you by <span>Painttalk.com </span></div>
		</div>
		<div id="wf_widget_content">
            <?php echo $this->helper->fetchChannel('paint-talk.html'); ?>
		</div>
		<div id="wf_widget_footer">

            <div id='div-gpt-ad-1368724149465-2' style='width:300px; height:250px; margin:0 auto 20px auto;'>
                <script type='text/javascript'>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1368724149465-2'); });
                </script>
            </div>

        </div>
	</div>
</body>
</html>

