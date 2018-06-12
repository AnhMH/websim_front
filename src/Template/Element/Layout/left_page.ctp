<div class="panel panel-success hidden-xs">
    <div class="panel-heading">
        <h2 class="panel-title">
            <span class="glyphicon glyphicon-search"></span>Danh sách mạng
        </h2>
    </div>
    <div class="panel-body" id="menutop">
        <nav>
            <ul class="mang" style="margin: 0; padding: 0;">
                <?php if (!empty($settings['cates'])): ?>
                    <?php foreach ($settings['cates'] as $c): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class=""></span> <?php echo $c['name']; ?>
                            </a>
                            <?php if (!empty($settings['tags'])): ?>
                                <ul class="dropdown-menu mega-menu" role="menu" >
                                    <li class="mega-menu-column">
                                        <ul>
                                            <li class="nav-header"><span class=""></span> Số vip</li>
                                            <?php foreach ($settings['tags'] as $t): ?>
                                                <?php if (!empty($t['type']) && $t['type'] == 1): ?>
                                                    <li>
                                                        <a href="<?php echo $BASE_URL . "?cate_id={$c['id']}&tag_id={$t['id']}";?>" >
                                                            <span class="glyphicon glyphicon-arrow-right"></span> <?php echo $t['name']; ?>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-column">
                                        <ul>
                                            <li class="nav-header"><span class=""></span> Số dễ nhớ</li>
                                            <?php foreach ($settings['tags'] as $t): ?>
                                                <?php if (!empty($t['type']) && $t['type'] == 2): ?>
                                                    <li>
                                                        <a href="<?php echo $BASE_URL . "?cate_id={$c['id']}&tag_id={$t['id']}";?>" >
                                                            <span class="glyphicon glyphicon-arrow-right"></span> <?php echo $t['name']; ?>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h6 class="panel-title"> <i class="glyphicon glyphicon-search"></i>Thể loại sim số đẹp</h6>
    </div>
    <div class="panel-body">
        <ul class="loaisim">
            <?php if (!empty($settings['tags'])): ?>
                <?php foreach ($settings['tags'] as $t): ?>
                    <li><a href='<?php echo $BASE_URL . "?tag_id={$t['id']}";?>'><?php echo $t['name']; ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
        </ul>
    </div>
</div>
<!--<div class="panel panel-success"><div class="panel-heading"><h6 class="panel-title"> <i class="glyphicon glyphicon-search"></i>Tìm sim theo giá tiền</h6></div><div class="panel-body"><div class="timtheogia"></div></div></div>-->
<div class="panel panel-success">
    <div class="panel-heading">
        <h2 class="panel-title"><i class="glyphicon glyphicon-search"></i> Sim theo phong thủy</h2>
    </div>
    <div class="panel-body">
        <form method="GET" action="<?php echo $BASE_URL; ?>">
            <input name="do" value="search" type="hidden" />
            <div class="form-group">
                <label>Tổng nút</label>
                <input name="tongnut" class="form-control input-sm" placeholder="Tổng nút 1-10" type="text">
            </div>
            <div class="form-group">
                <label>Tổng điểm</label>
                <input name="tongdiem" class="form-control input-sm" placeholder="Tổng điểm < 81" type="text">
            </div>
            <div class="row form-group" style="font-size: 11px; font-weight: normal;">
                <div class="col-xs-12 text-center">
                    <label><input name="type" checked="checked" value="0" type="radio"> Tất cả</label> 	
                    <label><input name="type" value="10" type="radio"> 10 Số</label> 
                    <label><input name="type" value="11" type="radio"> 11 Số</label>
                </div>
                <div class="col-xs-12 text-center margin-top">
                    <input class="btn btn-success" value="Tìm sim" type="submit">
                </div>
            </div>
            <input type="hidden" name="submit" value="true" />
        </form>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h6 class="panel-title"> 
            <i class="glyphicon glyphicon-search"></i> Tìm sim năm sinh
        </h6>
    </div>
    <div class="panel-body">
        <form method="GET" action="<?php echo $BASE_URL; ?>">
            <input name="do" value="search" type="hidden" />
            <div class="form-group">
                <label>Chọn ngày</label>
                <input name="date" type="text" class="form-control input-sm datepicker" placeholder="dd/mm/yyyy" type="text">
            </div>
            <div class="row form-group">
                <div class="col-xs-12 text-center">
                    <label> <input name="dtp" checked="checked" value="0" type="radio"> Tất cả</label> 
                    <label> <input name="dtp" value="2" type="radio"> d/m/y</label> 
                    <label> <input name="dtp" value="1" type="radio"> 19xx</label>
                </div>
                <div class="col-xs-12 text-center margin-top">
                    <input class="btn btn-success" value="Tìm sim" type="submit">
                </div>
            </div>
            <input name="submit" value="true" type="hidden" />
        </form>
    </div>
</div>
<div class="panel panel-success visible-lg visible-md">
    <div class="panel-heading">
        <h6 class="panel-title"> <i class="glyphicon glyphicon-shopping-cart"></i> ĐƠN ĐẶT HÀNG</h6>
    </div>
    <div class="panel-body mp0">
        <div id="order">
            <div class="newdh">
                <strong style="color: #FFFF00;">012x80x99x4</strong>
                <p class="list-group-item-text font-11">00:50:23 07/06/2018</p>
                <p class="list-group-item-text font-13">Lê đình danh</p>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-success hidden-xs">
    <div class="panel-heading">
        <h6 class="panel-title"><i class="glyphicon glyphicon-star-empty"></i> Quảng Cáo</h6>
    </div>
    <div class="panel-body mp0">
        <p style="text-align: center;"><strong><?php echo $BASE_URL; ?></strong></p>
    </div>
</div>
