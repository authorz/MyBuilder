<form action="<?= self::$url ?>"
      method="<?= self::$way ?>" <?php if (self::$isAjax) { ?> onsubmit="return false;" <?php } ?>>
    <?php
    foreach (self::$receive as $key => $item) {
        switch ($item['type']) {
            case 'hidden':
                echo "<input type='hidden' value='{$item['value']}' name='{$item['name']}'>";
                break;
            case 'text':
                echo "{$item['title']} : <input type='{$item['type']}' name='{$item['name']}' value='{$item['value']}'> <br>";
                break;
            case 'password':
                echo "{$item['title']} : <input type='{$item['type']}' name='{$item['name']}' value='{$item['value']}'> <br>";
                break;
            case 'textarea':
                echo "{$item['title']} : <textarea name='{$item['name']}'>{$item['value']}</textarea><br>";
                break;
            case 'radio':

                foreach ($item['parameter'] as $key => $radio) {

                    if ($key == $item['value']) {
                        $radioData .= "{$radio} <input type='radio' name='{$item['name']}' value='{$key}' checked>";
                    } else {
                        $radioData .= "{$radio} <input type='radio' name='{$item['name']}' value='{$key}'>";
                    }

                }

                echo "{$item['title']} : {$radioData}<br>";

                $radioData = '';
                break;

            case 'checkbox':

                foreach ($item['parameter'] as $key => $checkbox) {
                    $checkboxData .= "{$checkbox} <input type='checkbox' name='{$item['name']}[]' value='{$key}'>";
                }

                echo "{$item['title']} : {$checkboxData}<br>";

                $checkboxData = '';

                break;

            case 'select':
                $selectData = "<select name='{$item['name']}'>";
                foreach ($item['parameter'] as $key => $select) {
                    $selectData .= "<option value='{$key}'>{$select}</option>";
                }

                $selectData .= '</select>';

                echo "{$item['title']} : {$selectData}<br/>";

                break;

            default:
                break;

        }
    }
    ?>


    <input type="submit">
</form>