<a class="scrollToTop to" href="javascript://"></a>
<a class="scrollTobottom to" href="javascript://"></a>
<script src="<?php echo $BASE_URL; ?>/js/websim.js?<?php echo time(); ?>" type="text/javascript"></script>
<script src="<?php echo $BASE_URL; ?>/js/common.js?<?php echo time(); ?>" type="text/javascript"></script>
<nav id="c-menu--push-right" class="navbar-default c-menu c-menu--push-right">
    <ul class="nav navbar-nav">
        <li><a rel="nofollow" href="<?php echo $BASE_URL;?>">Trang chủ</a></li>
        <?php if (!empty($settings['main_menu'])): ?>
        <?php foreach ($settings['main_menu'] as $m): ?>
        <li><a rel="nofollow" href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $m['url'];?>"><?php echo $m['name'];?></a></li>
        <?php endforeach; ?>
        <?php endif; ?>
    </ul>  
    <button class="c-menu__close">Ẩn menu <span class="glyphicon glyphicon-arrow-right"></span></button>
</nav>
<?php if (!empty($settings['admin']['tel'])): ?>
<?php 
$adminPhoneNumbers = explode('-', $settings['admin']['tel']);
?>
<div class="navbar-fixed-bottom visible-xs visible-sm" style="zoom: 1; -moz-transform:scale(1);">
    <p>
        <span style="font-size:12px">
            <strong>
                <a href="javascript::void(0);">
                    <span style="color:#FFFF00">Call:&nbsp;</span>
                </a>
            </strong>
        </span>
        <strong>
            <?php foreach($adminPhoneNumbers as $k => $p):?>
            <?php if ($k > 0): ?>
            <span style="color:#FFFF00">&nbsp;-&nbsp;</span>
            <?php endif;?>
            <a href="tel:<?php echo $p;?>" target="_blank">
                <span style="color:#FFFF00"><?php echo $p;?></span>
            </a>
            <?php endforeach; ?>
        </strong>
    </p>
</div>
<?php endif; ?>
<div id="c-mask" class="c-mask"></div>
<style>
    .img-responsive, .thumbnail > img, 
    .thumbnail a > img {display: inline !important;max-width: 100%;height: auto;}
</style>
