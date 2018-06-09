<div class="panel panel-success">
    <div class="panel-heading">
        <h2 class="panel-title"><i class="glyphicon glyphicon-phone-alt"></i> Hotline</h2>
    </div>
    <div class="panel-body">
        <p style="text-align:center"><strong>Hotline b&aacute;n h&agrave;ng</strong></p>
        <p style="text-align:center"><span style="font-size:12px"><strong>(l&atilde;i suất cực thấp)</strong></span></p>
    </div>
</div>
<div class="panel panel-success visible-lg visible-md">
    <div class="panel-heading">
        <h2 class="panel-title"><i class="glyphicon glyphicon-star-empty"></i> Giảm giá đặc biệt</h2>
    </div>
    <div class="panel-body mp0">
        <div class="table-responsive" style="max-height: 500px; overflow: auto;">
            <p style="text-align:center"><span style="font-size:14px"><span style="color:rgb(255, 255, 0)"><strong>Gi&aacute; đ&atilde; giảm 15%</strong></span></span></p>
            <p style="text-align:center"><span style="font-size:12px"><strong>0975.689.986&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10,200,000</strong></span></p>
        </div>
    </div>
</div>
<?php if (!empty($settings['sub_cates'])): ?>
<div class="panel panel-success">
    <div class="panel-heading">
        <h2 class="panel-title"> <i class="glyphicon glyphicon-search"></i>tìm sim theo đầu số</h2>
    </div>
    <div class="panel-body">
        <ul class="loaisim">
            <?php foreach ($settings['sub_cates'] as $c): ?>
            <li> <a href="<?php echo $BASE_URL . "?cate_id={$c['cate_id']}&sub_cate={$c['id']}";?>"><?php echo $c['name'] . ' (' . $c['cate_name'] . ')'; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
<div class="panel panel-success visible-lg visible-md">
    <div class="panel-heading">
        <h2 class="panel-title">    <i class="glyphicon glyphicon-star-empty"></i> Tin tức</h2>
    </div>
    <div class="panel-body" style="max-height: 480px; overflow: auto;">
        <ul class="new">
            <li><a  href="/p/ke-hoach-chuyen-doi-sim-11-so-sang-sim-10-so">Kế hoạch chuyển đổi sim 11 số sang sim 10 số</a></li>
            <li><a  href="/p/cac-loai-sim-so-dep-dang-duoc-ua-chuong-va-tim-kiem-nhieu-nhat-hien-nay">Các loại sim số đẹp đang được ưa chuộng và tìm kiếm nhiều nhất hiện nay</a></li>
        </ul>
    </div>
</div>
