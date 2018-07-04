<div class="form-group form-<?php echo $param['type'];?> hidden-xs">
    <label class="control-label col-md-4 col-xs-3"><?php echo $param['title']; ?>: <span class="red hidden-xs">(*)</span></label>
    <div class="col-md-7 col-xs-9">
        <select id="<?php echo $param['type'];?>" name="<?php echo $param['type'];?>" class="form-control <?php echo $param['type'];?>">
            <option value="0" data-code="0">Chọn <?php echo $param['title']; ?></option>
            <?php if (!empty($pagedata)): ?>
            <?php foreach ($pagedata as $p): ?>
            <option value="<?php echo $p['name']; ?>" data-code="<?php echo $p['code'];?>"><?php echo $p['name']; ?></option>
            <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </div>
</div>
