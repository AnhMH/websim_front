<div><div class="panel panel-success">
        <div class="panel-heading">
            <h2 class="panel-title">Đặt hàng thành công</h2>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="active text-center col-md-1">STT</th>
                        <th class="active text-center">Số sim</th>
                        <th class="active">Giá tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($param['sim'])): ?>
                    <?php
                    $total = 0;
                    $stt = 0;
                    ?>
                    <?php foreach ($param['sim'] as $k => $v): ?>
                    <?php 
                    $stt++; 
                    $total += $v;
                    ?>
                    <tr>
                        <td class="center"><?php echo $stt; ?></td>
                        <td class="text-center"><?php echo $k; ?></td>
                        <td><?php echo number_format($v);?> VNĐ</td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="4" class="active">
                            <h5 class="pull-right">
                                Tổng tiền: <span id="total"><?php echo number_format($total);?></span> VNĐ
                            </h5>
                        </td>
                    </tr>
                    <?php endif;?>
                </tbody>
            </table>
            <table class="table table-hover table-condensed table-striped">
                <thead>
                    <tr>
                        <th class="active" colspan="2">Thông tin giao hàng</th>
                    </tr>
                </thead>
                <tbody><tr>
                        <td>Họ và tên:</td>
                        <td><?php echo $param['fullname'];?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ:</td>
                        <td><?php echo $param['address'].' - '.$param['ward'].' - '.$param['district'].' - '.$param['city']; ?></td>
                    </tr>
                    <tr>
                        <td>Điện thoại:</td>
                        <td><?php echo $param['phone']; ?></td>
                    </tr>
                    <tr>
                        <td>Ghi chú:</td>
                        <td><?php echo $param['note']; ?></td>
                    </tr>
                </tbody></table>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="panel-body">
                <?php echo $settings['admin']['order_block'];?>
            </div>
        </div>
    </div>
</div>
