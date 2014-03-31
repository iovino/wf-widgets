<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("avery"); ?>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">
            <div id="wf_widget_by">Brought to you by <span>Avery&reg;</span></div>
		</div>
		<div id="wf_widget_content">
            <?php echo $this->helper->fetchChannel('parties-and-celebrations.html'); ?>
		</div>
		<div id="wf_widget_footer">
			<?php
                $ads = array(
                    '/assets/imgs/avery/bnr_300x250_avery_birthdays_cupcakes.jpg',
                    '/assets/imgs/avery/bnr_300x250_avery_birthdays_kebabs.jpg',
                    '/assets/imgs/avery/bnr_300x250_avery_birthdays_pink-party.jpg'
                );
            ?>

            <a target="_blank" href="http://ad.doubleclick.net/ddm/trackclk/N7384.110164WOMENSFORUM.COM/B8048566.107483565;dc_trk_aid=280742640;dc_trk_cid=57590216">
                <img src="<?php echo $ads[rand(0,2)]; ?>" border="0" />
            </a>
		</div>
	</div>

    <img src="http://ad.doubleclick.net/ddm/trackimp/N7384.110164WOMENSFORUM.COM/B8048566.107483565;dc_trk_aid=280742640;dc_trk_cid=57590216;ord=[timestamp]?" border="0" />
</body>
</html>

