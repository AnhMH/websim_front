<nav class="navbar-custom navbar-collapse collapse clearfix" role="navigation" id="menuleft">
    <div role="navigation" class="navbar-collapse">
        <ul class="nav navbar-nav navbar-left-fix text-left">
            <ul class="nav navbar-nav">
                <li><a rel="nofollow" href="<?php echo $BASE_URL;?>">Trang chủ</a></li>
                <?php if (!empty($settings['main_menu'])): ?>
                <?php foreach ($settings['main_menu'] as $m): ?>
                <li><a rel="nofollow" href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $m['url'];?>"><?php echo $m['name'];?></a></li>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </ul>
        <form class="navbar-form navbar-right hidden" action="/index.php">
            <input type="hidden" name="do" value="search">
            <div class="input-group" style="max-width: 200px;">
                <input name="sim" type="text" class="form-control" placeholder="Nhập số sim cần tìm!">
                <span class="input-group-btn">
                    <button class="btn btn-success"><i class="glyphicon glyphicon-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
</nav>