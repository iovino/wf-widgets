<?php if ($_REQUEST['slide'] == 1 || empty($_REQUEST['slide'])) : ?>
<div style="text-align: center;">
    <a href="?do=sidekick&slide=2"><img src="/assets/imgs/homepage/WF_SideKick_1.jpg" border="0" /></a>
</div>
<?php endif ?>

<?php if ($_REQUEST['slide'] == 2) : ?>
    <div style="text-align: center;">
        <a href="?do=sidekick&slide=1"><img src="/assets/imgs/homepage/WF_Sidekick2.png" border="0" /></a>
    </div>
<?php endif ?>