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
<div class="row">
    <div class="col-md-6">

        <div class="block">
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)"
                       class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button"
                       title="Toggles .form-bordered class">分割</a>
                </div>
                <h2><?= self::$title ?></h2>
            </div>

            <form action="<?= self::$url ?>" method="<?= self::$way ?>" name="form"
                  class="form-horizontal form-bordered" id="form-validation"
                <?php if (self::$isAjax) { ?> onsubmit="return false;" <?php } ?>>
                <?php
                foreach (self::$receive as $key => $item) {
                    switch ($item['type']) {
                        case 'hidden':
                            include BUILDER_DIR . '/widget/froms/hidden.php';
                            break;
                        case 'text':
                            include BUILDER_DIR . '/widget/froms/text.php';
                            break;
                        case 'password':
                            include BUILDER_DIR . '/widget/froms/password.php';
                            break;
                        case 'textarea':
                            include BUILDER_DIR . '/widget/froms/textarea.php';
                            break;
                        case 'radio':
                            include BUILDER_DIR . '/widget/froms/radio.php';
                            break;
                        case 'checkbox':
                            include BUILDER_DIR . '/widget/froms/checkbox.php';
                            break;
                        case 'select':
                            include BUILDER_DIR . '/widget/froms/select.php';
                            break;
                        // 颜色选择器
                        case 'color':
                            include BUILDER_DIR . '/widget/froms/color.php';
                            break;
                        // 日期选择器
                        case 'date':
                            include BUILDER_DIR . '/widget/froms/date.php';
                            break;
                        // 时间选择器
                        case 'time':
                            include BUILDER_DIR . '/widget/froms/time.php';
                            break;
                        // 标签
                        case 'tags':
                            include BUILDER_DIR . '/widget/froms/tags.php';
                            break;
                        // 上传插件
                        case 'upload':

                            break;
                        // ck富文本
                        case 'ckeditor':
                            break;
                        // 普通文件上传
                        case 'file':
                            include BUILDER_DIR . '/widget/froms/file.php';
                            break;
                        // 普通多文件上传
                        case 'multipe':
                            include BUILDER_DIR . '/widget/froms/multipe.php';
                            break;
                        default:
                            break;

                    }
                }
                ?>

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                        <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                    </div>
                </div>
            </form>

        </div>

    </div>

</div>

<?php foreach (self::$config['js'] as $key => $value) {
    echo "<script src='{$value}'></script>\n\r";
} ?>

<script>
    $(function () {
        FormsComponents.init();
    });
</script>
<?php if (self::$validation == TRUE) { ?>
    <?php include BUILDER_DIR . '/widget/validates/default.php'; ?>
<?php } ?>
</body>
</html>