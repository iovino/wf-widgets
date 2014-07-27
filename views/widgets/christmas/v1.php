<!DOCTYPE html>
<html>
<head>
	<?php echo $this->helper->renderCss("main"); ?>
	<?php echo $this->helper->renderCss("christmas"); ?>
</head>
<body>
	<div id="wf_widget_countdown">
		<div id="wf_widget_header">

		</div>
		<div id="wf_widget_content">

		</div>
		<div id="wf_widget_footer">

		</div>
	</div>

    <script type="text/javascript">
        (function(){
            var now  = new Date();
            var then = new Date("December 24, 2014 00:00:00 EST");
            var gap  = then.getTime() - now.getTime();

            gap = Math.floor(gap / (1000 * 60 * 60 * 24)) + 1;
            gap = gap >= 1 ? gap : 0;

            var header = document.getElementById('wf_widget_header');
            var font   = gap >= 100 ? "small" : "large";

            var html = "<div id='wf_countdown' class='"+ font +"'>" + gap + "</div>";
                html += "<div id=\"wf_widget_by\">Brought to you by <span>Womensforum.com </span></div>";
            header.innerHTML = html;
        }());
    </script>
</body>
</html>

