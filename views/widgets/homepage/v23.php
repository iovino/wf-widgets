<!DOCTYPE html>
<html>
<head>
    <?php echo $this->helper->renderCss("main"); ?>
    <?php echo $this->helper->renderCss("march-mania"); ?>

    <div id="fb-root"></div>
    <script type="text/javascript">
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=435070163191891";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>
<body>
<div id="wf_holiday_countdown">
    <div id="wf_holiday_header"></div>
    <div id="wf_holiday_content">
        <div class="fb-like-box" data-href="https://www.facebook.com/Womensforumcom" data-width="300" data-height="250" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
    </div>
    <div id="wf_holiday_footer">
        <?php include('../views/widgets/homepage/_dfp.php'); ?>
    </div>
</div>

<?php include('../views/widgets/better-you/_countdown.js.php'); ?>
</body>
</html>

