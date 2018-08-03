<div>
    <div class="panel panel-fix">
        <div class="search-hiden" style="text-align: center;">
            <div class="stv-search-bg"></div>
            <div style="margin-top: -28px;" >
                <h2 class="sbg-txt" style="font-size: 14px;margin: 0;">TÌM SIM SỐ ĐẸP </h2>
            </div>
        </div>
        <div class="clearfix"></div>
        <br />
        <div class="panel-body" style="padding-bottom: 0; padding-top: 10px;">
            <div class="clearfix"></div>
            <form id="search" action="<?php echo $BASE_URL;?>" class="form-horizontal">
                <input name="do" value="search" type="hidden">
                <div class="form-group">
                    <?php if (!empty($settings['cates'])): ?>
                    <div class="col-md-4  col-xs-12 col-sm-12 selectnetwork">
                        <select name="cate_id" class="form-control input-sm">
                            <option value="0">Chọn mạng di động</option>
                            <?php foreach ($settings['cates'] as $c): ?>
                            <option value="<?php echo $c['id']; ?>" <?php echo !empty($param['cate_id']) && $param['cate_id'] == $c['id'] ? " selected='selected'" : "";?>><?php echo $c['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <?php endif; ?>
                    
                    <div class="col-md-4 col-sm-4 col-xs-6 search-hiden">
                        <div class="input-group">
                            <div class="input-group-addon font-12 font-b"> Giá từ:</div>
                            <input name="price_from" value="<?php echo !empty($param['price_from']) ? $param['price_from'] : ''; ?>" class="form-control input-sm price" placeholder="100,000" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 search-hiden">
                        <div class="input-group">
                            <div class="input-group-addon font-12 font-b">Đến:</div>
                            <input name="price_to" value="<?php echo !empty($param['price_to']) ? $param['price_to'] : ''; ?>" class="form-control input-sm price" placeholder="1,000,000,000" />
                        </div>
                    </div>
                </div>
                <div class="form-group" style="padding:0 35px 0 35px">
                    <div class="input-group">
                        <input name="sim" id="sim" value="<?php echo !empty($param['sim']) ? $param['sim'] : ''; ?>" class="form-control pull-left popover-dismiss" placeholder="Nhập số sim bạn cần tìm" data-container="body" data-toggle="popover" data-placement="bottom" data-content=" - Sử dụng dấu <span class='red'>x</span> đại điện cho 1 số và dấu <span class='red'>*</span> đại điện cho một chuỗi số. <br /> + Để tìm sim bắt đầu bằng 098, quý khách nhập vào 098*<br /> + Để tìm sim kết thúc bằng 888, quý khách nhập vào *888<br /> + Để tìm sim bắt đầu bằng 098 và kết thúc bằng 888, nhập vào 098*888<br /> + Để tìm sim bên trong có số 888, nhập vào 888<br /> + Để tìm sim bắt đầu bằng 098 và kết thúc bằng 808, 818, 828, 838, 848, 858, 868, 878, 888, 898 nhập vào 098*8x8<br /> " title="Hướng dẫn tìm kiếm sim"  />
                        <span class="input-group-btn">  
                            <button class="btn btn-success">TÌM KIẾM</button>
                        </span>
                    </div>
                </div>
                <div class="form-group text-center"><strong class="red font-12">Hot key:</strong> <span class="hotkey"><a href="09*9999" class="hotkey">09*9999</a>, <a href="*9999" class="hotkey">*9999</a>, <a href="*6868" class="hotkey">*6868</a>, <a href="*1989" class="hotkey">*1989</a>, <a href="09*99x99" class="hotkey">09*99x99</a></span></div>
                <div class="form-group text-center search-hiden" style="padding: 0px 10px;">Dãy số không gồm:<input name="n[]" value="1" type="checkbox"><span> 1 </span><input name="n[]" value="2" type="checkbox"><span> 2 </span><input name="n[]" value="3" type="checkbox"><span> 3 </span><input name="n[]" value="4" type="checkbox"><span> 4 </span><input name="n[]" value="5" type="checkbox"><span> 5 </span><input name="n[]" value="6" type="checkbox"><span> 6 </span><input name="n[]" value="7" type="checkbox"><span> 7 </span><input name="n[]" value="8" type="checkbox"><span> 8 </span><input name="n[]" value="9" type="checkbox"><span> 9 </span></div>
                <div class="form-group text-center search-hiden" style="padding: 0 25px 0 25px;">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="input-group">
                            <div class="input-group-addon font-12">Tổng điểm:</div>
                            <input name="tongdiem" maxlength="2" class="form-control input-sm" style="padding: 0;" placeholder=" < 81" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="input-group">
                            <div class="input-group-addon font-12">Tổng Nút:</div>
                            <input name="tongnut" maxlength="2" class="form-control input-sm" style="padding: 0;" placeholder=" 1 -10" />
                        </div>
                    </div>
                </div>
                <div class="form-group text-center search-hiden" >
                    Sim 10 số <input type="radio" value="10" name="type" />
                    Sim 11 số <input type="radio" value="11" name="type" />
                </div>
                <div class="visible-xs form-group text-right"><a href="#" id="timnangcao" style="margin-right: 20px; font-weight: bold; color: #FFFF00;">Tìm kiếm nâng cao</a></div>
                <input type="hidden" name="submit" value="true" />
            </form>
        </div>
    </div>
    <?php if (!empty($settings['cates'])): ?>
    <div class="panel panel-success hidden-xs">
        <div class="panel-body">
            <div class="row">
                <ul id="navigation">
                    <?php foreach ($settings['cates'] as $c): ?>
                    <li class="top">
                        <a href="<?php echo $BASE_URL;?>?cate_id=<?php echo $c['id']; ?>"><?php echo $c['name'];?> <span class="caret"></span></a>
                        <ul>
                            <?php if (!empty($settings['sub_cates'])): ?>
                            <?php foreach ($settings['sub_cates'] as $sc): ?>
                            <?php if ($sc['cate_id'] == $c['id']): ?>
                            <li>
                                <a href="<?php echo $BASE_URL;?>?cate_id=<?php echo $c['id']; ?>&sub_cate=<?php echo $sc['id']; ?>"><?php echo $sc['name']; ?> <span class="pull-right glyphicon glyphicon-circle-arrow-right"></span></a>
                                <?php if (!empty($settings['tags'])): ?>
                                <ul>
                                    <?php foreach ($settings['tags'] as $t): ?>
                                    <li><a href="<?php echo $BASE_URL;?>?cate_id=<?php echo $c['id']; ?>&sub_cate=<?php echo $sc['id']; ?>&tag_id=<?php echo $t['id']; ?>"><?php echo $t['name'];?></a>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h1 class="panel-title">SIM SỐ ĐẸP NGẪU NHIÊN</h1>
        </div>
        <div class="panel-body mp0">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="active center ">STT</th>
                        <th class="active">Số sim</th>
                        <th class="active sortprice">Giá Tiền <span class="glyphicon"> <a class="pricetoogle" href="javascript://"><span class="glyphicon-arrow-up"></span><span class="glyphicon-arrow-down"></span></a></span></th>
                        <th class="active  text-center">Tổng</th>
                        <th class="active  text-center">Mạng</th>
                        <th class="active  text-center">Đặt Mua</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data)): ?>
                    <?php foreach ($data as $k => $val): ?>
                    <tr>
                        <td class="center "><?php echo $k + 1; ?></td>
                        <td>
                            <a href="<?php echo $BASE_URL;?>/sim/<?php echo $val['id']; ?>" title="<?php echo $val['name']; ?>">
                                <strong class="font-15 sim"><?php echo $val['name']; ?></strong>
                            </a>
                        </td>
                        <td class="font-13 sim-price" style="padding-right: 40px;"><?php echo number_format($val['price']); ?></td>
                        <td class="text-center"><?php echo $val['sum_num']; ?></td>
                        <td  class=" text-center"><span><?php echo $val['cate_name']; ?></span></td>
                        <td class=" text-center">
                            <a href="<?php echo $BASE_URL;?>/sim/<?php echo $val['id']; ?>" class="btn btn-xs btn-success">Đặt Mua</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6" class="text-right">
                            <?php echo $this->Paginate->render($total, $param['limit']); ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <div style="padding: 10px;">
                <div style="max-height: 700px; overflow-x: auto;">
                    <?php echo $settings['admin']['homepage_block'];?>
                </div>
            </div>
        </div>
    </div>
</div>
