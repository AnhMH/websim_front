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
        <div class="panel-heading">
            <h2 class="panel-title">Hướng dẫn thanh toán và nhận sim</h2>
        </div>
        <div class="panel-body">
            <div class="panel-body">
                <div class="table-condensed">
                    <p style="text-align:center">Tất cả các sim do công ty chúng tôi bán ra mặc nhiên đã được chúng tôi cam kết thực hiện đúng theo nội dung hợp đồng mua bán dưới đây mà không cần phải ký hợp đồng. Quý khách hoàn toàn yên tâm khi giao dịch.</p>
                    <p style="text-align:center"><img alt="" style="height:778px; width:550px" src="/data/550x778xhinh,P20mau,P20HD,P20ban,P20sim,P20DT.jpg.pagespeed.ic.CVwoFDF3cC.webp" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" class="img-responsive"></p>
                    <p style="text-align:center"><strong>Hướng Dẫn Thanh Toán &amp; Nhận Sim</strong></p>
                    <p style="text-align:justify"><span style="font-size:12px">Sau khi quý khách đặt hàng thành công. Nhân viên của chúng tôi sẽ liên hệ lại và tư vấn cho quý khách trong thời gian sớm nhất.</span></p>
                    <p style="text-align:justify"><span style="font-size:12px">1. Quý khách có thể trực tiếp đến lấy hoặc nhân viên của chúng tôi sẽ giao sim đến tận nơi cho quý khách nếu quý khách ở Hà Nội &amp; Tp.HCM hoặc tại các tỉnh thành có chi nhánh của </span><a href="http://tongkhosim.com/" target="_blank">http://tongkhosim.com/</a></p>
                    <p style="text-align:justify"><span style="font-size:12px">2. Quý khách ở các tỉnh xa chúng tôi sẽ chuyển phát nhanh sim về tận nhà quý khách theo hình thức COD, quý khách thanh toán tiền trực tiếp cho nhân viên chuyển phát và nhận sim. Sau khi nhận sim quý khách vui lòng liên hệ lại nhân viên hotline hoặc số điện thoại kỹ thuật ghi trên phong bì để làm thủ tục đăng ký thông tin chính chủ. ( Lưu ý: với hình thức này trong một số trường hợp có thể chúng tôi sẽ yêu cầu quý khách đặt cọc trước một phần giá trị sim) </span></p>
                    <span style="font-size:12px">- Toàn bộ sim quý khách mua tại </span><a href="http://tongkhosim.com/" target="_blank">http://tongkhosim.com/</a><span style="font-size:12px"> sẽ được đăng ký thông tin chính chủ và được chúng tôi đảm bảo không có tranh chấp trong suốt quá trình sử dụng về sau.</span>
                    <p style="text-align:center"><span style="color:#FFFF00"><span style="font-size:12px"><strong>Chúng tôi đang có nhu cầu mua lại số đẹp với giá cao &amp; bán trả góp - cầm cố sim số đẹp với lãi xuất cực thấp, thanh toán linh hoạt, Quý khách có nhu cầu xin liên hệ Mr Long 0985666666</strong></span></span></p>
                    <p><span style="font-size:12px"><strong>Dưới đây là những&nbsp;tài khoản mà chúng tôi nhận thanh toán:</strong><br>
                            &nbsp;</span><span style="font-size:12px">1 - </span><span style="color:rgb(255, 255, 0); font-size:12px"><strong>VIETCOMBANK </strong></span><span style="font-size:12px">–&nbsp;Ngân Hàng TMCP&nbsp;Ngoại Thương Việt Nam –&nbsp;</span><strong>Chi nhánh Thanh Đa - HCM</strong></p>
                    <p><span style="font-size:12px">Số Tài Khoản:&nbsp;<span style="color:#FFFF00"><strong>0371005888888</strong></span> - Chủ Tài Khoản: <strong>Phạm Thanh Long</strong></span></p>
                    <p><span style="font-size:12px">2 - <span style="color:rgb(255, 255, 0)"><strong>VIETINBANK </strong></span>–&nbsp;Ngân Hàng TMCP&nbsp;Công Thương&nbsp;Việt Nam&nbsp;–&nbsp;<strong>Chi nhánh Bình Thạnh - HCM</strong><br>
                            Số&nbsp;Tài Khoản: <span style="color:#FFFF00"><strong>104005551473</strong></span>&nbsp;Chủ Tài Khoản: <strong>Phạm Thanh Long</strong></span></p>
                    <p><span style="font-size:12px">3 - <span style="color:rgb(255, 255, 0)"><strong>TECHCOMBANK </strong></span>–&nbsp;Ngân Hàng TMCP&nbsp;Kỹ Thương&nbsp;Việt Nam&nbsp;– <strong>Chi nhánh Thanh Đa - HCM</strong><br>
                            Số Tài Khoản:&nbsp;<span style="color:#FFFF00"><strong>11621040785015</strong></span>&nbsp;- Chủ Tài Khoản: <strong>Phạm Thanh Long</strong></span></p>
                    <p><span style="font-size:12px">&nbsp;4 - <strong><span style="color:rgb(255, 255, 0)">BIDV</span> &nbsp;-</strong> Ngân Hàng Đầu Tư Và Phát&nbsp;Triển Việt Nam&nbsp;–&nbsp;<strong>Chi nhánh Gia Định - HCM</strong><br>
                            Số Tài Khoản:&nbsp;<span style="color:#FFFF00"><strong>13510006667788</strong> </span>- Chủ Tài Khoản: <strong>Phạm Thanh Long</strong></span></p>
                    <p>5&nbsp; –&nbsp;<span style="color:rgb(255, 255, 0)">AGRIBANK&nbsp;</span>- Ngân Hàng NN &amp; PTNT Việt&nbsp;Nam&nbsp;–&nbsp;Chi nhánh quận 3 - HCM<br>
                        Số&nbsp;Tài Khoản:&nbsp;<span style="color:rgb(255, 255, 0)">1602205311547</span>&nbsp;- Chủ Tài Khoản:&nbsp;Phạm Thanh Long</p>
                    <p><span style="font-size:12px">6 -&nbsp; <strong><span style="color:rgb(255, 255, 0)">DONGABANK </span>- </strong>Ngân Hàng Đông Á –&nbsp;<strong>Chi nhánh Thanh Đa - HCM</strong><br>
                            Số&nbsp;Tài Khoản: <span style="color:#FFFF00"><strong>0102055194</strong></span>&nbsp;- Chủ Tài Khoản: <strong>Phạm Thanh Long</strong></span></p>
                    <p><span style="font-size:12px">7 - <strong><span style="color:rgb(255, 255, 0)">MARITIMEBANK</span> - </strong>Ngân Hàng&nbsp;TMCP Hàng Hải Việt Nam&nbsp;–&nbsp;<strong>Chi Nhánh HCM</strong><br>
                            Số Tài Khoản:&nbsp;<span style="color:#FFFF00"><strong>04001010049898</strong></span>&nbsp;- Chủ Tài Khoản: <strong>Phạm Thanh Long</strong></span></p>
                    <p><span style="font-size:12px">8 <strong>- <span style="color:rgb(255, 255, 0)">ACHAUBANK</span> - </strong>Ngân Hàng Á Châu – <strong>Chi nhánh Bến Xe Miền Đông - HCM</strong></span></p>
                    <p><span style="font-size:12px">Số&nbsp;Tài Khoản: <span style="color:#FFFF00"><strong>46790189</strong></span>&nbsp;- Chủ Tài Khoản: <strong>Phạm Thanh Long</strong></span></p>
                    <p><strong>9 -</strong><strong><span style="color:rgb(255, 255, 0)"> SACOMBANK</span> - </strong><span style="font-size:12px">Ngân hàng Sài Gòn thương tín</span><strong>– Chi nhánh Thanh Đa - HCM</strong></p>
                    <p><span style="font-size:12px">Số&nbsp;Tài Khoản: <span style="color:#FFFF00"><strong>060023048852 </strong></span>- Chủ Tài Khoản: <strong>Phạm Thanh Long</strong></span></p>
                    <p><span style="font-size:12px"><strong>10 -</strong><strong><span style="color:rgb(255, 255, 0)"> MBBANK</span> - </strong>Ngân hàng TMCP Quân Đội<strong>– Chi nhánh HCM</strong><br>
                            Số&nbsp;Tài Khoản: <span style="color:#FFFF00"><strong>1120115558888 </strong></span>- Chủ Tài Khoản: <strong>Phạm Thanh Long</strong></span></p>
                    <p><strong>Quý khách có nhu cầu mua sim số đẹp hay cần tư vấn bất cứ điều gì liên quan đến sim xin vui lòng liên hệ theo thông tin đưới đây. Chúng tôi luôn sẵn sàng phục vụ quý khách. Kính chúc quý khách an khang thịnh vượng.</strong></p>
                    <p><strong>Công ty TNHH TMDV Viễn Thông Song Long</strong></p>
                    <p>Trụ sở chính: 409 Võ Văn Tần, phường 5, quận 3, Tp.HCM</p>
                    <p><span style="color:#FFFF00"><strong>Chi nhánh tại Hà Nội và các tỉnh:</strong></span></p>
                    <p>Chi nhánh 1: 128 Đốc Ngữ, Ba Đình, Hà Nội</p>
                    <p>Chi nhánh 2: đường Giải Phóng, Q.Hoàng Mai, Hà Nội</p>
                    <p>Chi nhánh 3: đường Trần Nguyên Hãn, Q.lê Chân, Tp. Hải Phòng</p>
                    <p>Chi nhánh 4: đường Nguyễn Thị Minh Khai, Tp Vinh, Nghệ An</p>
                    <p>Chi nhánh 5: đường 30/4, p.An Lạc, Q.Ninh Kiều, Tp. Cần Thơ</p>
                    <p>Chi nhánh 6: đường Nguyễn Trãi, Tp. Hưng Yên, Hưng Yên</p>
                    <p>Và còn rất nhiều chi nhánh khác trên toàn quốc…</p>
                    <p><span style="color:rgb(255, 255, 0)"><strong>Hotline: </strong></span></p>
                    <p><strong>Phục vụ cho khách hàng: 0961767676 - 0966767676 - 0967767676 - 0976822222 - 0972122222 - 0947767676 - 0941767676 - 0946383838 - 0946393939 -&nbsp;0912767676</strong></p>
                    <p><strong>Phục vụ cho đại lý:&nbsp;</strong><strong>0982333328</strong></p>
                    <p><strong>Quản lý chăm sóc fanpage (&nbsp;<a href="https://www.facebook.com/tongkhosimsonglong" target="_blank">https://www.facebook.com/tongkhosimsonglong</a></strong>&nbsp;):<strong>&nbsp;0888766888</strong></p>
                    <p><strong>Số chỉ dùng nhắn tin chung:&nbsp;0919247777</strong></p>
                    <p><strong>Quản lý: Mr Long: 0985666666 - 0985667788</strong></p>
                    <p><span style="color:rgb(255, 255, 0)"><strong>Thời gian làm việc:</strong></span></p>
                    <p>- Từ 8h đến 18h hàng ngày, ngoài thời gian trên quý khách vui lòng click "Đặt mua", chúng tôi sẽ liên hệ lại với quý khách vào sáng hôm sau.</p>
                    <p><strong>Email:</strong> Songlongtongkhosim@gmail.com hoặc Tongkhosim@gmail.com</p>
                    <p><strong>Website:</strong> Tongkhosim.com - Tongkhosim.net - Tongkhosim.vn - Tongkhosim.com.vn -Tongkhosim.net.vn</p>
                    <p>Tongkhosim.com tự hào là là trang web cung cấp sim số đẹp uy tín số 1 tại Việt Nam.</p>
                    <p>Rất hân hạnh được phục vụ quý khách!</p>
                </div>
            </div>
        </div>
    </div>
</div>
