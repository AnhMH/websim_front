<div>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h1 class="panel-title">Đặt mua sim <?php echo $pagedata['name']; ?> giá gốc rẻ nhất thị trường</h1>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" id="ordered" action="<?php echo $BASE_URL . '/sim/' . $pagedata['id']; ?>" onsubmit="return checkorder()">
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
                        <div class="form-group hidden-xs">
                            <label class="control-label col-md-4 col-xs-3">Tỉnh/TP: <span class="red hidden-xs">(*)</span></label>
                            <div class="col-md-7 col-xs-9">
                                <input type="hidden" name="city"><input type="hidden" name="qh"><input type="hidden" name="px">
                                <select id="city" class="form-control city">
                                    <option value="0">Chọn Tỉnh/TP</option>
                                    <option value="89">An Giang</option>
                                    <option value="77">Bà Rịa - Vũng Tàu</option>
                                    <option value="24">Bắc Giang</option>
                                    <option value="06">Bắc Kạn</option>
                                    <option value="95">Bạc Liêu</option>
                                    <option value="27">Bắc Ninh</option>
                                    <option value="83">Bến Tre</option>
                                    <option value="74">Bình Dương</option>
                                    <option value="70">Bình Phước</option>
                                    <option value="60">Bình Thuận</option>
                                    <option value="52">Bình Định</option>
                                    <option value="96">Cà Mau</option>
                                    <option value="92">Cần Thơ</option>
                                    <option value="04">Cao Bằng</option>
                                    <option value="64">Gia Lai</option>
                                    <option value="02">Hà Giang</option>
                                    <option value="35">Hà Nam</option>
                                    <option value="01">Hà Nội</option>
                                    <option value="42">Hà Tĩnh</option>
                                    <option value="30">Hải Dương</option>
                                    <option value="31">Hải Phòng</option>
                                    <option value="93">Hậu Giang</option>
                                    <option value="79">Hồ Chí Minh</option>
                                    <option value="17">Hòa Bình</option>
                                    <option value="33">Hưng Yên</option>
                                    <option value="56">Khánh Hòa</option>
                                    <option value="91">Kiên Giang</option>
                                    <option value="62">Kon Tum</option>
                                    <option value="12">Lai Châu</option>
                                    <option value="68">Lâm Đồng</option>
                                    <option value="20">Lạng Sơn</option>
                                    <option value="10">Lào Cai</option>
                                    <option value="80">Long An</option>
                                    <option value="36">Nam Định</option>
                                    <option value="40">Nghệ An</option>
                                    <option value="37">Ninh Bình</option>
                                    <option value="58">Ninh Thuận</option>
                                    <option value="25">Phú Thọ</option>
                                    <option value="54">Phú Yên</option>
                                    <option value="44">Quảng Bình</option>
                                    <option value="49">Quảng Nam</option>
                                    <option value="51">Quảng Ngãi</option>
                                    <option value="22">Quảng Ninh</option>
                                    <option value="45">Quảng Trị</option>
                                    <option value="94">Sóc Trăng</option>
                                    <option value="14">Sơn La</option>
                                    <option value="72">Tây Ninh</option>
                                    <option value="34">Thái Bình</option>
                                    <option value="19">Thái Nguyên</option>
                                    <option value="38">Thanh Hóa</option>
                                    <option value="46">Thừa Thiên Huế</option>
                                    <option value="82">Tiền Giang</option>
                                    <option value="84">Trà Vinh</option>
                                    <option value="08">Tuyên Quang</option>
                                    <option value="86">Vĩnh Long</option>
                                    <option value="26">Vĩnh Phúc</option>
                                    <option value="15">Yên Bái</option>
                                    <option value="48">Đà Nẵng</option>
                                    <option value="66">Đắk Lắk</option>
                                    <option value="67">Đắk Nông</option>
                                    <option value="11">Điện Biên</option>
                                    <option value="75">Đồng Nai</option>
                                    <option value="87">Đồng Tháp</option>
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
        <div class="panel-body"></div>
    </div>
</div>