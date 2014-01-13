<!DOCTYPE html>
<html>
<head>
    <?php echo $this->helper->renderCss("main"); ?>
    <?php echo $this->helper->renderCss("better-you"); ?>
</head>
<body>
<div id="wf_holiday_countdown">
    <div id="wf_holiday_header"></div>
    <div id="wf_holiday_content">
        <?php echo $this->helper->fetchChannel('holiday-shopping.html'); ?>
    </div>
    <div id="wf_holiday_footer">
        <?php include('../views/widgets/homepage/_dfp.php'); ?>
    </div>
</div>

<?php include('../views/widgets/better-you/_countdown.js.php'); ?>
</body>
</html>

