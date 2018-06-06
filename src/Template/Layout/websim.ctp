<!DOCTYPE html>
<html lang="vi">
    <head>
        <?php echo $this->element('Layout/head'); ?>
    </head>
    <body>
        <div id="o-wrapper" class="o-wrapper">
            <?php echo $this->element('Layout/navbar_top'); ?>
            <div class="container">
                <div class="header">
                    <img src="<?php echo $BASE_URL; ?>/img/banner.png" alt="tổng kho sim" />
                </div>
                <?php echo $this->element('Layout/navbar_main'); ?>
                <div class="row">
                    <div class="container" id="b"><a href="<?php echo $BASE_URL; ?>">Trang chủ</a></div>
                </div>
                <div class="row">
                    <div class="col-md-3 left-page visible-md visible-lg">
                        <?php echo $this->element('Layout/left_page'); ?>
                    </div>
                    <div class="col-md-6 main-page">
                        <?php echo $this->fetch('content'); ?>
                    </div>
                    <div class="col-md-3 right-page visible-lg visible-md">
                        <?php echo $this->element('Layout/right_page'); ?>
                    </div>
                </div>
                <div class="panel panel-success visible-xs">
                    <div class="panel-body">
                        <ul class="loaisim">
                            <li><a href='sim-ngay-thang-nam-sinh.html'>Năm sinh dd/mm/YY</a>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-success visible-xs">
                    <div class="panel-heading">
                        <h2 class="panel-title">    
                            <i class="glyphicon glyphicon-star-empty"></i>SIM SỐ ĐẸP THEO MẠNG
                        </h2>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body" style="padding: 5px;">
                            <ul class="list-group">
                                <a class="list-group-item" href="/chon-mang/VinaPhone">Sim số đẹp VinaPhone</a>
                                <a class="list-group-item" href="/chon-mang/MobiFone">Sim số đẹp Mobifone</a>
                                <a class="list-group-item" href="/chon-mang/VietTel">Sim số đẹp Viettel</a>
                                <a class="list-group-item" href="/chon-mang/VietNamobile">Sim số đẹp Vietnamobile</a>
                                <a class="list-group-item" href="/chon-mang/Gmobile">Sim số đẹp Gmobile</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-success visible-xs">
                    <div class="panel-heading">
                        <h2 class="panel-title">    
                            <i class="glyphicon glyphicon-star-empty"></i>SIM SỐ ĐẸP THEO ĐẦU SỐ
                        </h2>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body" style="padding: 5px;">
                            <ul class="list-group">
                                <a class="list-group-item" href="dau-so/Mobifome-090"> Đầu số đẹp 090 (Mobifone)</a>
                                <a class="list-group-item" href="dau-so/Vinaphone-091"> Đầu số đẹp 091 (Vinaphone)</a>
                                <a class="list-group-item" href="dau-so/Vietnamobile-092"> Đầu số đẹp 092 (Vietnamobile)</a>
                                <a class="list-group-item" href="dau-so/Mobifone-093"> Đầu số đẹp 093 (Mobifone)</a>
                                <a class="list-group-item" href="dau-so/Vinaphone-094"> Đầu số đẹp 094 (Vinaphone)</a>
                                <a class="list-group-item" href="dau-so/Viettel-096"> Đầu số đẹp 096 (Viettel)</a>
                                <a class="list-group-item" href="dau-so/Viettel-097"> Đầu số đẹp 097 (Viettel)</a>
                                <a class="list-group-item" href="dau-so/Viettel-098"> Đầu số đẹp 098 (Viettel)</a>
                                <a class="list-group-item" href="dau-so/Gmobile-099"> Đầu số đẹp 099 (Gmobile)</a>
                            </ul>
                        </div>
                    </div>
                </div>
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
                <?php echo $this->element('Layout/footer'); ?>
            </div>
        </div>
        <?php echo $this->element('Layout/bottom');?>
    </body>
</html>