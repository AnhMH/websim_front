<div class="panel panel-success">
    <div class="panel-heading">
        <h2 class="panel-title"><i class="glyphicon glyphicon-phone-alt"></i> Hotline</h2>
    </div>
    <div class="panel-body">
        <p style="text-align:center"><strong>Hotline bán hàng</strong></p>
        <?php if (!empty($settings['hotlines'])): ?>
        <?php foreach ($settings['hotlines'] as $h): ?>
        <p style="text-align:center"><strong><?php echo $h['name']; ?></strong></p>
            <?php foreach ($h['phone_number'] as $k => $p): ?>
            <p style="text-align:center">
                <span style="font-size:14px">
                    <a href="tel:<?php echo $k;?>" target="_blank">
                        <span style="color:rgb(255, 255, 0)"><strong><?php echo $p;?></strong></span>
                    </a>
                </span>
            </p>
            <?php endforeach; ?>
        
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<!--<div class="panel panel-success visible-lg visible-md">
    <div class="panel-heading">
        <h2 class="panel-title"><i class="glyphicon glyphicon-star-empty"></i> Giảm giá đặc biệt</h2>
    </div>
    <div class="panel-body mp0">
        <div class="table-responsive" style="max-height: 500px; overflow: auto;">
            <p style="text-align:center"><span style="font-size:14px"><span style="color:rgb(255, 255, 0)"><strong>Gi&aacute; đ&atilde; giảm 15%</strong></span></span></p>
            <p style="text-align:center"><span style="font-size:12px"><strong>0975.689.986&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10,200,000</strong></span></p>
        </div>
    </div>
</div>-->
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
<?php if (!empty($settings['news'])): ?>
<div class="panel panel-success visible-lg visible-md">
    <div class="panel-heading">
        <h2 class="panel-title"><i class="glyphicon glyphicon-star-empty"></i> Tin tức</h2>
    </div>
    <div class="panel-body" style="max-height: 480px; overflow: auto;">
        <ul class="new">
            <?php foreach ($settings['news'] as $n): ?>
            <li><a  href="<?php echo $BASE_URL."/tin-tuc/{$n['url']}";?>"><?php echo $n['name'];?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
