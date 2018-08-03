<div>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h1 class="panel-title">Đặt mua sim <?php echo $pagedata['name']; ?> giá gốc rẻ nhất thị trường</h1>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" id="ordered" action="<?php echo $BASE_URL . '/orders/complete'; ?>" onsubmit="return checkorder()">
                <table class="table table-hover table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th class="active text-center col-md-1">STT</th>
                            <th class="active text-center">Số sim</th>
                            <th class="active"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> 1</td>
                            <td style="vertical-align: baseline;">
                                <input type="hidden" name="sim[<?php echo $pagedata['name'];?>]" value="<?php echo $pagedata['price'];?>"/>
                                <div>Số sim: <strong style="font-size: 22px; color: gold;"><?php echo $pagedata['name']; ?></strong> </div>
                                <div>Giá bán: <strong style="font-size: 17px; color: gold;"><?php echo number_format($pagedata['price']); ?></strong> <sup>vnđ</sup> </div>
                                <!--<div>( một trăm triệu đồng )</div>-->
                            </td>
                            <td>
                                <img width="200" class="img-responsive" src="<?php echo $pagedata['image']; ?>" alt="sim <?php echo $pagedata['name']; ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="active">
                                <h5 class="pull-right">Tổng tiền: <span id="total"><?php echo number_format($pagedata['price']); ?></span> VNĐ</h5>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="clearfix"></div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4 col-xs-3">Họ và tên: <span class="red">(*)</span></label>
                            <div class="col-md-7 col-xs-9"><input name="fullname" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-xs-3">Điện thoại: <span class="red">(*)</span></label>
                            <div class="col-md-7 col-xs-9"><input name="phone" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-xs-3">Địa chỉ: <span class="red">(*)</span></label>
                            <div class="col-md-7 col-xs-9"><textarea name="address" class="form-control "></textarea></div>
                        </div>
                        <div class="form-group form-city hidden-xs">
                            <label class="control-label col-md-4 col-xs-3">Tỉnh/TP: <span class="red hidden-xs">(*)</span></label>
                            <div class="col-md-7 col-xs-9">
                                <select id="city" name="city" class="form-control city">
                                    <option value="0" data-code="0">Chọn Tỉnh/TP</option>
                                    <?php if (!empty($settings['provinces'])): ?>
                                    <?php foreach ($settings['provinces'] as $p): ?>
                                        <option value="<?php echo $p['name'];?>" data-code="<?php echo $p['code'];?>"><?php echo $p['name']; ?></option>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label class="control-label col-md-4 col-xs-3">Ghi chú:</label>
                            <div class="col-md-7 col-xs-9"><textarea class="form-control" name="note" style="height: 50px;"></textarea></div>
                        </div>
                        <div class="form-group form-group-sm">
                            <div class="col-md-12">
                                <div class="text-center"><button name="submit" class="btn btn-success">Đặt mua</button> <button type="reset" class="btn btn-default">Làm lại</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel ">
        <div class="panel-heading">
            <h4></h4>
        </div>
        <div class="panel-body">
            <?php echo $settings['admin']['product_block']; ?>
        </div>
    </div>
</div>