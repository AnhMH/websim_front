<footer style="padding-bottom: 20px;">
    <?php if (!empty($settings['footer_menu'])): ?>
    <div style="float: left; width: 100%;">
        <div class="col-md-3 col-xs-12 font-13 col1">
            <h3 class="font-14"><strong>Chính Sách Bán Hàng</strong></h3>
            <hr>
            <ul>
                <?php foreach ($settings['footer_menu'] as $m): ?>
                <?php if ($m['footer_menu_type'] == 1): ?>
                <li>
                    <h4><a rel="nofollow" href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $m['url']; ?>"><?php echo $m['name'];?></a></h4>
                </li>
                <?php endif; ?>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="col-md-3 col-xs-12 font-13 col2">
            <h3 class="font-14"><strong>Hỗ Trợ Chung</strong></h3>
            <hr>
            <ul>
                <?php foreach ($settings['footer_menu'] as $m): ?>
                <?php if ($m['footer_menu_type'] == 2): ?>
                <li>
                    <h4><a rel="nofollow" href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $m['url']; ?>"><?php echo $m['name'];?></a></h4>
                </li>
                <?php endif; ?>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="col-md-3 col-xs-12 font-13 col3">
            <h3 class="font-14"><strong>Thông Tin - Liên Hệ</strong></h3>
            <hr>
            <ul>
                <?php foreach ($settings['footer_menu'] as $m): ?>
                <?php if ($m['footer_menu_type'] == 3): ?>
                <li>
                    <h4><a rel="nofollow" href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $m['url']; ?>"><?php echo $m['name'];?></a></h4>
                </li>
                <?php endif; ?>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="col-md-3 col4 col-xs-12">
            <h3 class="font-14"><strong>Dịch Vụ Khác</strong></h3>
            <hr />
            <ul>
                <?php foreach ($settings['footer_menu'] as $m): ?>
                <?php if ($m['footer_menu_type'] == 4): ?>
                <li>
                    <h4><a rel="nofollow" href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $m['url']; ?>"><?php echo $m['name'];?></a></h4>
                </li>
                <?php endif; ?>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="clearfix"></div>
    <div style="text-align: center;">&nbsp;</div>
    <div style="text-align: center;">
        <span style="font-family:arial,verdana,helvetica,sans-serif; font-size:15px">
            <strong><?php echo $settings['admin']['company_name'];?></strong>
        </span>
    </div>
    <div style="text-align: center;"><strong>Địa chỉ: <?php echo $settings['admin']['address'];?></strong></div>
    <div style="text-align: center;"><strong>Hotline: <?php echo $settings['admin']['tel'];?></strong></div>
    <div style="text-align: center;"><strong>Email : &nbsp;<a href="mailto:<?php echo $settings['admin']['email'];?>" target="_blank"><?php echo $settings['admin']['email'];?></a></strong></div>
</footer>
