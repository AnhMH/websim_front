<footer>
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
    <div style="text-align: center;"><span style="font-family:arial,verdana,helvetica,sans-serif; font-size:13px"><strong>C&ocirc;ng Ty TNHH Thương Mại Dịch Vụ Viễn Th&ocirc;ng Song Long</strong></span></div>
    <div style="font-size: 12.8px; text-align: center;"><strong><span style="font-family:tahoma,sans-serif; font-size:12.8px">Số ĐKKD&nbsp;</span></strong><span style="font-family:arial,verdana,helvetica,sans-serif; font-size:13px"><strong>0313085731</strong></span><strong><span style="font-family:arial,verdana,helvetica,sans-serif; font-size:13px">&nbsp;cấp ng&agrave;y&nbsp;</span></strong><span style="font-family:arial,verdana,helvetica,sans-serif; font-size:13px"><strong>12/01/2015</strong></span><strong><span style="font-family:arial,verdana,helvetica,sans-serif; font-size:13px">&nbsp;do sở kế hoạch v&agrave; đầu tư tp Hồ Ch&iacute; Minh</span></strong></div>
    <div style="text-align: center;"><strong>Trụ sở ch&iacute;nh: <a href="https://www.google.com/maps/place/Tongkhosim.com+-+C%C3%B4ng+ty+TNHH+TMDV+VT+Song+Long/@10.7891413,106.6445589,14z/data=!4m8!1m2!2m1!1stong+kho+sim!3m4!1s0x31752f225ae8bb8f:0x590c833198d883d4!8m2!3d10.770147!4d106.68451" target="_blank">409 V&otilde; Văn Tần, phường 5, quận 3, Tp.HCM</a></strong></div>
    <div style="text-align: center;"><strong>Chi nh&aacute;nh H&agrave; Nội: 128 Đốc Ngữ, Ba Đ&igrave;nh, H&agrave; Nội</strong></div>
    <div style="text-align: center;"><strong>Hotline :&nbsp;0966767676 - 0912767676</strong></div>
    <div style="text-align: center;"><strong>Email :&nbsp;<a href="mailto:Songlongtongkhosim@gmail.com" target="_blank">Songlongtongkhosim@gmail.com</a></strong></div>
    <p style="text-align:center"><img alt="" src="<?php echo $BASE_URL; ?>/img/dathongbaobct.png" style="height:48px; width:127px" /></p>
</footer>
<br />
<div class="panel panel-success visible-xs">
    <div class="panel-heading">
        <h2 class="panel-title"><i class="glyphicon glyphicon-phone-alt"></i> Giảm giá đặc biệt</h2>
    </div>
    <div class="panel-body">
        <p style="text-align:center"><span style="font-size:14px"><span style="color:rgb(255, 255, 0)"><strong>Giảm gi&aacute; đặc biệt 15%</strong></span></span></p>
        <p style="text-align: center;"><span style="font-size:12px"><strong>0975.689.986&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10,200,000</strong></span></p>
    </div>
</div>
