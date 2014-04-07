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
                    '0' => array(
                        'img' => '<a target="_blank" href="http://ad.doubleclick.net/ddm/trackclk/N7384.110164WOMENSFORUM.COM/B8048566.107755008;dc_trk_aid=280742640;dc_trk_cid=57590216"><img src="/assets/imgs/avery/bnr_300x250_avery_birthdays_cupcakes.jpg" border="0"></a>',
                        'trk' => '<img src="http://ad.doubleclick.net/ddm/trackimp/n7384.110164womensforum.com/b8048566.107755008;dc_trk_aid=280742640;dc_trk_cid=57590216;ord=[timestamp]?" border="0" height="1" width="1" alt="advertisement">'
                    ),
                    '1' => array(
                        'img' => '<a target="_blank" href="http://ad.doubleclick.net/ddm/trackclk/N7384.110164WOMENSFORUM.COM/B8048566.107755009;dc_trk_aid=280742640;dc_trk_cid=57590216"><img src="/assets/imgs/avery/bnr_300x250_avery_birthdays_kebabs.jpg" border="0"></a>',
                        'trk' => '<img src="http://ad.doubleclick.net/ddm/trackimp/n7384.110164womensforum.com/b8048566.107755009;dc_trk_aid=280742640;dc_trk_cid=57590216;ord=[timestamp]?" border="0" height="1" width="1" alt="advertisement">'
                    ),
                    '2' => array(
                        'img' => '<a target="_blank" href="http://ad.doubleclick.net/ddm/trackclk/N7384.110164WOMENSFORUM.COM/B8048566.107755285;dc_trk_aid=280742640;dc_trk_cid=57590216"><img src="/assets/imgs/avery/bnr_300x250_avery_birthdays_pink-party.jpg" border="0"></a>',
                        'trk' => '<img src="http://ad.doubleclick.net/ddm/trackimp/n7384.110164womensforum.com/b8048566.107755285;dc_trk_aid=280742640;dc_trk_cid=57590216;ord=[timestamp]?" border="0" height="1" width="1" alt="advertisement">'
                    )
                );
            ?>

            <?php $key = rand(0,2); ?>
            <?php echo $ads[$key]['img']; ?>
            <?php echo $ads[$key]['trk']; ?>

            <img src="http://ad.doubleclick.net/ddm/trackimp/N7384.110164WOMENSFORUM.COM/B8048566.107483565;dc_trk_aid=280742640;dc_trk_cid=57590216;ord=[timestamp]?"  border="0" alt=""/>

		</div>
	</div>

    <img src="" border="0" />
</body>
</html>

