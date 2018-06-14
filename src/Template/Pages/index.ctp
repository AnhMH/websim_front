<div>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h1 class="panel-title"><?php echo $pagedata['name'];?></h1>
        </div>
        <div class="panel-body">
            <div class="table-condensed">
                <div class="ui-tabs-panel ui-widget-content">
                    <?php
                    echo !empty($pagedata['content']) ? $pagedata['content'] : '';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>