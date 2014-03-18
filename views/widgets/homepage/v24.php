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
        <script src='http://cdn.onescreen.net/os/static/apps/s/_onescreen.js'></script>
        <div id='os_dmp_embed'></div>
        <script>com.onescreen.widgets.load('11639-d2519d24c1c977ea31271c9debadfb64', 'os_dmp_embed');
        </script>
        <noscript>This application requires JavaScript.</noscript>
    </div>
</div>

<?php include('../views/widgets/better-you/_countdown.js.php'); ?>
</body>
</html>




