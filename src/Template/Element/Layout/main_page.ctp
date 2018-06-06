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
                    <div class="col-md-4  col-xs-12 col-sm-12 selectnetwork">
                        <select name="network" class="form-control input-sm">
                            <option value="0">Chọn mạng di động</option>
                            <option value="5">Gmobile</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 search-hiden">
                        <div class="input-group">
                            <div class="input-group-addon font-12 font-b"> Giá từ:</div>
                            <input name="giatu" class="form-control input-sm price" placeholder="100,000" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 search-hiden">
                        <div class="input-group">
                            <div class="input-group-addon font-12 font-b">Đến:</div>
                            <input name="den" class="form-control input-sm price" placeholder="1,000,000,000" />
                        </div>
                    </div>
                </div>
                <div class="form-group" style="padding:0 35px 0 35px">
                    <div class="input-group"><input name="sim" id="sim" value="" class="form-control pull-left popover-dismiss" placeholder="Nhập số sim bạn cần tìm" data-container="body" data-toggle="popover" data-placement="bottom" data-content=" - Sử dụng dấu <span class='red'>x</span> đại điện cho 1 số và dấu <span class='red'>*</span> đại điện cho một chuỗi số. <br /> + Để tìm sim bắt đầu bằng 098, quý khách nhập vào 098*<br /> + Để tìm sim kết thúc bằng 888, quý khách nhập vào *888<br /> + Để tìm sim bắt đầu bằng 098 và kết thúc bằng 888, nhập vào 098*888<br /> + Để tìm sim bên trong có số 888, nhập vào 888<br /> + Để tìm sim bắt đầu bằng 098 và kết thúc bằng 808, 818, 828, 838, 848, 858, 868, 878, 888, 898 nhập vào 098*8x8<br /> " title="Hướng dẫn tìm kiếm sim"  /><span class="input-group-btn">  <button class="btn btn-success">TÌM KIẾM</button></span></div>
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
                <div class="form-group text-center search-hiden" >Sim 10 số <input type="radio" value="0" name="type" />Sim 11 số <input type="radio" value="1" name="type" /></div>
                <div class="visible-xs form-group text-right"><a href="#" id="timnangcao" style="margin-right: 20px; font-weight: bold; color: #FFFF00;">Tìm kiếm nâng cao</a></div>
                <input type="hidden" name="submit" value="true" />
            </form>
        </div>
    </div>
    <div class="panel panel-success hidden-xs">
        <div class="panel-body">
            <div class="row">
                <ul id="navigation">
                    <li class="top">
                        <a href="chon-mang/VinaPhone">VinaPhone <span class="caret"></span></a>
                        <ul>
                            <li>
                                <a href="chon-mang/VinaPhone/dau-so/091">Đầu số 091 <span class="pull-right glyphicon glyphicon-circle-arrow-right"></span></a>
                                <ul>
                                    <li><a href="chon-mang/VinaPhone/dau-so/091/sim-ngay-thang-nam-sinh">Năm sinh dd/mm/YY</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="top">
                        <a href="chon-mang/MobiFone">MobiFone <span class="caret"></span></a>
                        <ul>
                            <li>
                                <a href="chon-mang/MobiFone/dau-so/090">Đầu số 090 <span class="pull-right glyphicon glyphicon-circle-arrow-right"></span></a>
                                <ul>
                                    <li><a href="chon-mang/MobiFone/dau-so/090/sim-ngay-thang-nam-sinh">Năm sinh dd/mm/YY</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="top">
                        <a href="chon-mang/VietTel">VietTel <span class="caret"></span></a>
                        <ul>
                            <li>
                                <a href="chon-mang/VietTel/dau-so/097">Đầu số 097 <span class="pull-right glyphicon glyphicon-circle-arrow-right"></span></a>
                                <ul>
                                    <li><a href="chon-mang/VietTel/dau-so/097/sim-ngay-thang-nam-sinh">Năm sinh dd/mm/YY</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="top">
                        <a href="chon-mang/VietNamobile">VietNamobile <span class="caret"></span></a>
                        <ul>
                            <li>
                                <a href="chon-mang/VietNamobile/dau-so/092">Đầu số 092 <span class="pull-right glyphicon glyphicon-circle-arrow-right"></span></a>
                                <ul>
                                    <li><a href="chon-mang/VietNamobile/dau-so/092/sim-ngay-thang-nam-sinh">Năm sinh dd/mm/YY</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="top">
                        <a href="chon-mang/Gmobile">Gmobile <span class="caret"></span></a>
                        <ul>
                            <li>
                                <a href="chon-mang/Gmobile/dau-so/099">Đầu số 099 <span class="pull-right glyphicon glyphicon-circle-arrow-right"></span></a>
                                <ul>
                                    <li><a href="chon-mang/Gmobile/dau-so/099/sim-ngay-thang-nam-sinh">Năm sinh dd/mm/YY</a>
                                </ul>
                            </li>
                            <li>
                                <a href="chon-mang/Gmobile/dau-so/0199">Đầu số 0199 <span class="pull-right glyphicon glyphicon-circle-arrow-right"></span></a>
                                <ul>
                                    <li><a href="chon-mang/Gmobile/dau-so/0199/sim-ngay-thang-nam-sinh">Năm sinh dd/mm/YY</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h1 class="panel-title">SIM SỐ ĐẸP NGẪU NHIÊN <a target="_blank" href="index.php?ajax=home&page=1&print=true" class="pull-right glyphicon glyphicon-print"></a></h1>
        </div>
        <div class="panel-body mp0">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="active center ">STT</th>
                        <th class="active"><input name="simtype" type="radio" value="09" />10 Số <input name="simtype" type="radio" value="01" />11 Số</th>
                        <th class="active sortprice">Giá Tiền <span class="glyphicon"> <a class="pricetoogle" href="javascript://"><span class="glyphicon-arrow-up"></span><span class="glyphicon-arrow-down"></span></a></span></th>
                        <th class="active  text-center">Tổng</th>
                        <th class="active  text-center">Mạng</th>
                        <th class="active  text-center">Đặt Mua</th>
                        <th class="active  text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="center ">1</td>
                        <td><a href="https://tongkhosim.com/0914607791.html" title="0914.60.77.91"><strong class="font-15 sim">0914.60.77.91</strong></a></td>
                        <td class="font-13 sim-price" style="padding-right: 40px;">200,000</td>
                        <td class="text-center">44</td>
                        <td  class=" text-center"><span>Vinaphone</span></td>
                        <td class=" text-center"><a href="https://tongkhosim.com/0914607791.html" class="btn btn-xs btn-success">Đặt Mua</a></td>
                        <td class="text-center"><a data-toggle="tooltip" title="Thêm 0914.60.77.91 vào giỏ hàng" href="javascript://" class="addcart" data-sim="0914607791" data-gia="0.2"><i class="glyphicon glyphicon-shopping-cart"></i></a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6" class="text-right">
                            <ul class="pagination pagination-sm pagination-xs">
                                <li><span class="inactive" href="#">Trước</span></li>
                                <li class="active"><a title="Go to page 1 of 418" class="current" href="javascript:void(0)">[1]</a> </li>
                                <li><a class="paginate" title="Go to page 2 of 418" href="/?page=2">2</a></li>
                                <li><a class="paginate" title="Go to page 3 of 418" href="/?page=3">3</a></li>
                                <li><a class="paginate" title="Go to page 4 of 418" href="/?page=4">4</a></li>
                                <li><a class="paginate" title="Go to page 5 of 418" href="/?page=5">5</a></li>
                                <li><a class="paginate" title="Go to page 6 of 418" href="/?page=6">6</a></li>
                                <li><a class="paginate" title="Go to page 7 of 418" href="/?page=7">7</a></li>
                                <li><a class="paginate" title="Go to page 8 of 418" href="/?page=8">8</a></li>
                                <li><a class="paginate" title="Go to page 9 of 418" href="/?page=9">9</a></li>
                                ... 
                                <li><a class="paginate" title="Go to page 418 of 418" href="/?page=418">418</a></li>
                                <li><a class="paginate" href="/?page=2">Tiếp theo</a></li>
                            </ul>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <div style="padding: 10px;">
                <div style="max-height: 700px; overflow-x: auto;">
                    <p style="text-align:justify"><span style="color:#FFFF00">1&nbsp; Quan niệm chung về Sim số đẹp</span></p>
                    <p style="text-align:center"><span style="color:#FFFF00">-----</span><a href="https://tongkhosim.com/"><span style="color:#FFFF00">https://tongkhosim.com</span></a><span style="color:#FFFF00">-----</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
