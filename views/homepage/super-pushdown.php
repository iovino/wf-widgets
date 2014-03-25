<?php $_REQUEST['type'] = empty($_REQUEST['type']) ? 'style' : $_REQUEST['type']; ?>

<div class="row-fluid super-pushdowns-nav">
    <ul class="nav nav-pills">
        <li<?php echo ($_REQUEST['type'] == 'style' ? ' class="active"' : ''); ?>><a href="?do=super-pushdown&amp;type=style">Style</a></li>
        <li<?php echo ($_REQUEST['type'] == 'food' ? ' class="active"' : ''); ?>><a href="?do=super-pushdown&amp;type=food">Food</a></li>
    </ul>
</div>


<?php if ($_REQUEST['type'] == 'style') : ?>
<div class="row-fluid super-pushdowns">
    <div class="col-lg-12 text-center">
        <h2>Lookbook</h2>
        <img src="/assets/imgs/homepage/super-pushdown/lookbook.png" border="0" />
    </div>
    <div class="col-lg-12 text-center">
        <h2>Pop-up Shop</h2>
        <img src="/assets/imgs/homepage/super-pushdown/pop-up-shop.png" border="0" />
    </div>
    <div class="col-lg-12 text-center">
        <h2>Video</h2>
        <img src="/assets/imgs/homepage/super-pushdown/video.png" border="0" />
    </div>
</div>
<?php endif ?>

<?php if ($_REQUEST['type'] == 'food') : ?>
<div class="row-fluid super-pushdowns">
    <div class="col-lg-12 text-center">
        <h2>Recipes</h2>
        <img src="/assets/imgs/homepage/super-pushdown/WFFood_SuperPushDown_1.jpg" border="0" />
    </div>
    <div class="col-lg-12 text-center">
        <h2>Shopping List</h2>
        <img src="/assets/imgs/homepage/super-pushdown/WFFood_SuperPushDown_2.jpg" border="0" />
    </div>
    <div class="col-lg-12 text-center">
        <h2>Videos</h2>
        <img src="/assets/imgs/homepage/super-pushdown/WFFood_SuperPushDown_3.jpg" border="0" />
    </div>
</div>
<?php endif ?>