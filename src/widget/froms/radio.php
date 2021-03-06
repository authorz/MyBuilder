<?php if ($item['type'] == 'radio') { ?>
    <div class="form-group">
        <label class="col-md-3 control-label"><?= $item['title'] ?></label>
        <div class="col-md-9">
            <?php foreach ($item['parameter'] as $key => $radio) { ?>
                <?php if ($key == $item['value']) { ?>
                    <label class="radio-inline" for="<?= $item['name'] ?>">
                        <input type="radio" <?php if (isset($item['id'])) { ?> id="<?= $item['id'] ?>" <?php } ?>
                               name="<?= $item['name'] ?>" value="<?= $key ?>"
                               checked> <?= $radio ?>
                    </label>
                <?php } else { ?>
                    <label class="radio-inline" for="<?= $item['name'] ?>">
                        <input type="radio" <?php if (isset($item['id'])) { ?> id="<?= $item['id'] ?>" <?php } ?>
                               name="<?= $item['name'] ?>"
                               value="<?= $key ?>"> <?= $radio ?>
                    </label>
                <?php } ?>
            <?php } ?>

            <?php if (isset($item['help'])) { ?>
                <span class="help-block"><?= $item['help'] ?></span>
            <?php } ?>
        </div>
    </div>

    <?php unset($radioData); ?>
<?php } ?>
