<!DOCTYPE html>
<!--[if IE 9]>
<html class="no-js lt-ie10" lang="en">
<![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?= self::$title ?></title>
    <meta name="description" content="<?= self::$title ?>">
    <meta name="author" content="crazycodes">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <?php foreach (self::$config['css'] as $key => $value) { ?>
        <link rel='stylesheet' href='<?= $value ?>'/>
    <?php } ?>
</head>
<body>

<?php include BUILDER_DIR . '/widget/tables/loading.php' ?>

<div id="page-content">

    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1 style="font-size:20px;"><?= self::$topTitle ?></h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <?php foreach (self::$breadCrumbs as $key => $val) { ?>

                            <?php if ((count(self::$breadCrumbs) - 1) == $key) { ?>
                                <li><a href=""><?= $val ?></a></li>
                            <?php } else { ?>
                                <li><?= $val ?></li>
                            <?php } ?>

                        <?php } ?>


                    </ul>
                </div>
            </div>

        </div>
    </div>

    <?php include BUILDER_DIR . '/widget/tables/search.php' ?>

    <div class="block">
        <div class="block-title clearfix">
            <div class="block-options pull-left">
                <?php foreach (self::$topBtn as $key => $item) { ?>
                    <a href="javascript:;" value="<?= $item['value'] ?>"
                       class="btn btn-effect-ripple btn-primary"><?= $item['name'] ?></a>
                <?php } ?>
            </div>

            <div class="block-options pull-right">
                <div id="style-borders" class="btn-group">
                    <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" id="openSearch">搜索</a>
                </div>
            </div>

        </div>
        <div class="table-responsive">
            <table id="general-table"
                   class="table table-vcenter table-borderless table-striped table-condensed table-hover">
                <thead>
                <tr>
                    <th style="width: 80px;" class="text-center"><label id="allChoose"
                                                                        class="csscheckbox csscheckbox-primary"><input
                                type="checkbox"><span></span></label></th>
                    <?php foreach (self::$column as $key => $item) { ?>
                        <th><?= $item['name'] ?></th>
                    <?php } ?>
                </tr>
                </thead>
                <tbody>
                <?php foreach (self::$data as $key => $item) { ?>
                    <tr>
                        <td class="text-center">
                            <label class="csscheckbox csscheckbox-primary">
                                <input name="checkbox" type="checkbox"
                                       value="<?= $item[self::$listKey] ?>">
                                <span></span>
                            </label>
                        </td>
                        <?php foreach (self::$column as $key => $column) { ?>
                            <?php switch ($column['type']) {
                                case 'default':
                                    include BUILDER_DIR . "/widget/tables/default.php";
                                    break;
                                case 'btn':
                                    include BUILDER_DIR . "/widget/tables/btn.php";
                                    break;
                                case 'date':
                                    include BUILDER_DIR . "/widget/tables/date.php";
                                    break;
                                case 'custom':
                                    include BUILDER_DIR . "/widget/tables/custom.php";
                                    break;

                            }
                            ?>
                        <?php } ?>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <?php include BUILDER_DIR . '/widget/tables/page.php'; ?>
    </div>

</div>
<?php foreach (self::$config['js'] as $key => $value) {
    echo "<script src='{$value}'></script>\n\r";
} ?>


<script>
    <?php foreach (self::$rightBtn as $key => $rightBtn) { ?>
    $('a[value="<?=$rightBtn['value']?>"]').on('click', function () {
        <?php if($rightBtn['type']){ ?>
        $.<?=$rightBtn['way']?>('<?=$rightBtn['url']?>', {
            <?php foreach($rightBtn['custom'] as $key=>$item){ ?>
            '<?=$item?>': $(this).attr('<?=$item?>'),
            <?php } ?>
        }, function (event) {
            $.toast({
                heading: '提示',
                text: '操作成功',
                position: 'top-center',
                icon: 'success',
                hideAfter: 1000,
                afterHidden: function () {
                    <?php if($rightBtn['jump']){ ?>
                    location.href = <?=isset($rightBtn['jump']) ? "'" . $rightBtn['jump'] . "'" : "location.href"?>;
                    <?php } ?>
                }
            });
        });
        <?php }else{ ?>
        var url = '';
        <?php foreach($rightBtn['custom'] as $key=>$item){ ?>
        <?php if((count($rightBtn['custom']) - 1) == $key){ ?>
        url += '<?=$item?>=' + $(this).attr('<?=$item?>');
        <?php }else{ ?>
        url += '<?=$item?>=' + $(this).attr('<?=$item?>') + "&";
        <?php } ?>
        <?php } ?>
        location.href = '<?=$rightBtn['url']?>?' + url;

        <?php } ?>

    });
    <?php } ?>
</script>

<script>
    <?php foreach (self::$topBtn as $key => $topBtn) { if($topBtn['value']){ ?>
    $('a[value="<?=$topBtn['value']?>"]').on('click', function () {
        <?php if($topBtn['type'] == 'url'){ ?>
        location.href = '<?=$topBtn['url']?>';
        <?php }else{ ?>
        var allChoose = "";

        $('input:checkbox[name="checkbox"]:checked').each(function (i) {
            if (0 == i) {
                allChoose = $(this).val();
            } else {
                allChoose += ("," + $(this).val());
            }
        });

        console.log(allChoose);
        <?php } ?>
    });
    <?php }} ?>
</script>

<script>
    $(function () {
        FormsComponents.init();
        UiTables.init();

        $('#openSearch').on('click', function () {
            $('#search').toggle();
        });


        $('#allChoose').on('change', function () {
            var allChoose = "";

            $('input:checkbox[name="checkbox"]:checked').each(function (i) {
                if (0 == i) {
                    allChoose = $(this).val();
                } else {
                    allChoose += ("," + $(this).val());
                }
            });


        });
    });
</script>
</body>
</html>