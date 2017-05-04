<?php if ($item['type'] == 'multipe') { ?>
    <div class="form-group">
        <label class="col-md-3 control-label" for="<?= $item['name'] ?>"><?= $item['title'] ?></label>
        <div class="col-md-9">
            <input type="file" <?php if (isset($item['id'])) { ?> id="<?= $item['id'] ?>" <?php } ?>
                   name="<?= $item['name'] ?>" style="<?= $item['append']['style'] ?>" <?= $item['extra'] ?> multiple>
        </div>
    </div>
<?php } ?>