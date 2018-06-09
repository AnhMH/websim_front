<?php if (!empty($settings['tags'])): ?>
<div class="panel panel-success visible-xs">
    <div class="panel-body">
        <ul class="loaisim">
            <?php foreach($settings['tags'] as $t): ?>
            <li><a href='<?php echo $BASE_URL . "?tag_id={$t['id']}";?>'><?php echo $t['name']; ?></a>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>

<?php if (!empty($settings['cates'])): ?>
<div class="panel panel-success visible-xs">
    <div class="panel-heading">
        <h2 class="panel-title">    
            <i class="glyphicon glyphicon-star-empty"></i>SIM SỐ ĐẸP THEO MẠNG
        </h2>
    </div>
    <div class="panel-body">
        <div class="panel-body" style="padding: 5px;">
            <ul class="list-group">
                <?php foreach ($settings['cates'] as $c): ?>
                <a class="list-group-item" href="<?php echo $BASE_URL . "?cate_id={$c['id']}";?>"><?php echo $c['name']; ?></a>
                <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if (!empty($settings['sub_cates'])): ?>
<div class="panel panel-success visible-xs">
    <div class="panel-heading">
        <h2 class="panel-title">    
            <i class="glyphicon glyphicon-star-empty"></i>SIM SỐ ĐẸP THEO ĐẦU SỐ
        </h2>
    </div>
    <div class="panel-body">
        <div class="panel-body" style="padding: 5px;">
            <ul class="list-group">
                <?php foreach ($settings['sub_cates'] as $sc): ?>
                <a class="list-group-item" href="<?php echo $BASE_URL . "?cate_id={$sc['cate_id']}&sub_cate={$sc['id']}";?>"> <?php echo $sc['name'] . ' (' . $sc['cate_name'] . ')'; ?></a>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>

<style>
    @media (max-width:768px){
        .list-group{width:100%;display: block;padding: 0;margin: 0;}
        .list-group-item{width:100%;display: inline-block;font-weight: bold;padding: 5px;}
        .loaisim li{display: inline-block;width: 50%;}
    }
</style>
<div class="panel panel-success visible-xs">
    <div class="panel-heading">
        <h2 class="panel-title"><i class="glyphicon glyphicon-phone-alt"></i> Hotline</h2>
    </div>
    <div class="panel-body">
        <div class="ui-tabs-panel ui-widget-content ui-corner-bottom">
            <p style="text-align:center"><span style="font-size:16px"><strong>Hotline b&aacute;n h&agrave;ng</strong></span></p>
            <p style="text-align:center">&nbsp;</p>
        </div>
    </div>
</div>
