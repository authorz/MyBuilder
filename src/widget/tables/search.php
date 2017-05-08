<?php
if (self::$isSearch == TRUE) {
    ?>
    <div class="block full" style="display: none" id="search">
        <form action="" method="post" class="form-inline">
            <div class="form-group">
                <div class="col-sm-2">
                    <label class="col-md-12 control-label" for="example-colorpicker">标题</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-sm-2">
                    <label class="col-md-12 control-label" for="example-colorpicker">状态</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-2">
                    <label class="col-md-12 control-label" for="example-colorpicker">Select</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-2">
                    <label class="col-md-12 control-label" for="example-colorpicker">Select</label>
                    <input type="text" class="form-control" placeholder=".col-sm-3">
                </div>
                <div class="col-sm-2">
                    <label class="col-md-12 control-label" for="example-colorpicker">Select</label>
                    <input type="text" class="form-control" placeholder=".col-sm-3">
                </div>
                <div class="col-sm-2">
                    <label class="col-md-12 control-label" for="example-colorpicker">Select</label>
                    <input type="text" id="example-colorpicker" name="example-colorpicker" class="form-control input-colorpicker colorpicker-element" value="#5ccdde">
                </div>

                <div class="col-sm-12" style="margin-top: 10px;">
                <button type="submit" class="btn btn-block btn-primary">搜索</button>
                   </div>
            </div>
        </form>
    </div>
<?php } ?>