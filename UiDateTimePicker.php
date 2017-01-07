<?php
/**
 * Description of UiDateTimePicker
 *
 * @author Ade Attwood
 */

namespace  adeattwood\yii2\datetimepicker;

use yii\helpers\Html;
use yii\helpers\Json;


class UiDateTimePicker extends \yii\widgets\InputWidget
{

    public $datePickerOptions = [];
    public $options = ['class' => 'form-control'];

    public function init()
    {
        parent::init();
        $this->registerAssets();
        echo $this->renderInput();
    }

    public function run()
    {
        parent::run();
    }

    private function renderInput()
    {
        if ($this->hasModel()) {
            $input = Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            $input = Html::textInput($this->name, $this->value, $this->options);
        }

        return $input;
    }

    public function registerAssets()
    {
        $view = $this->getView();

        UiDateTimePickerAsset::register($view);

        $datePickerOptions = Json::encode($this->datePickerOptions);
        $js  = 'jQuery(window).load(function(){jQuery(\'#' . $this->options['id'] . '\').datetimepicker(' . $datePickerOptions . ');});';
        $view->registerJs($js);
    }

}
