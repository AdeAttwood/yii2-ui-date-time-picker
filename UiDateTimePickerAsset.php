<?php
/**
 * Description of UiDateTimePickerAsset
 *
 * @author Ade Attwood
 */

namespace adeattwood\yii2\datetimepicker;

use yii\web\AssetBundle;

class UiDateTimePickerAsset extends AssetBundle
{

    public $sourcePath = '@bower';
    public $css  = [
        "jqueryui-timepicker-addon/dist/jquery-ui-timepicker-addon.css"
    ];
    public $js  = [
        "jqueryui-timepicker-addon/dist/jquery-ui-timepicker-addon.js",
        "jqueryui-timepicker-addon/dist/jquery-ui-sliderAccess.js"
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\jui\JuiAsset'
    ];

}
