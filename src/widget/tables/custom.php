<td>
    <?php if (isset($column['url'])) { ?><a style="text-decoration:underline" href="<?= $column['url'] ?>"><?php } ?>
            <?= $column['custom'][$item[$column['value']]] ?>
            <?php if (isset($column['url'])) { ?></a><?php } ?>
</td>