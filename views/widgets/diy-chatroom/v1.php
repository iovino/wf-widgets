<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("diy-chatroom"); ?>

    <script type='text/javascript'>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        (function() {
            var gads = document.createElement('script');
            gads.async = true;
            gads.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(gads, node);
        })();
    </script>

    <script type='text/javascript'>
        googletag.cmd.push(function() {
            googletag.defineSlot('/1019621/rr_diyc_goog', [300, 250], 'div-gpt-ad-1402607489031-4').addService(googletag.pubads());
            googletag.pubads().collapseEmptyDivs();
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">
			<div id="wf_widget_by">Brought to you by <span>DIYchatroom.com </span></div>
		</div>
		<div id="wf_widget_content">
            <?php echo $this->helper->fetchChannel('diy-chatroom.html'); ?>
		</div>
		<div id="wf_widget_footer">
            <div id='div-gpt-ad-1402607489031-4' style='width:300px; height:250px;margin-bottom:20px;'>
                <script type='text/javascript'>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1402607489031-4'); });
                </script>
            </div>
		</div>
	</div>
</body>
</html>


