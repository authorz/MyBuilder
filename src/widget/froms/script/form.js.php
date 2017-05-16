$('form[name="form"]').submit(function () {

    $.toast({
        heading: '提示',
        text: '操作成功,正在跳转',
        position: 'top-center',
        icon: 'success',
        hideAfter: 1000,
        afterHidden: function () {
            //location.href=location.href;
        }
    });
    console.log($(form).serializeArray());
    $.ajax({
        type: "<?= self::$way ?>",
        url: "<?= self::$url ?>",
        data: $(form).serializeArray(),
        success: function (event) {
            console.log(event);
        }
    });
});