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
                    <?php if (!empty($settings['admin']['web_banner'])):?>
                    <img src="<?php echo $settings['admin']['web_banner']; ?>" alt="banner" />
                    <?php endif;?>
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
                <?php echo $this->element('Layout/main_page_mobile');?>
                <?php echo $this->element('Layout/footer'); ?>
            </div>
        </div>
        <?php echo $this->element('Layout/bottom');?>
    </body>
</html>