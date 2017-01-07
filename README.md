# yii2-ui-date-time-picker
Yii 2 Date time picker using [jquery ui](https://jqueryui.com/) and the time picker add on

This widget uses timepicker addon for jQuery UI [Datepicker](http://trentrichardson.com/examples/timepicker/)

## Installation

- - -
TODO

## Usage

- - -
### Basic usage
~~~php 
use adeattwood\yii2\datetimepicker\UiDateTimePicker;

<?= UiDateTimePicker::widget([
    'name' => 'date-picker',
]) ?>
~~~

### Use with active form
~~~php 
use adeattwood\yii2\datetimepicker\UiDateTimePicker;

<?= $form->field($model, 'date-time')->widget(
    UiDateTimePicker::classname()
); ?>
~~~

### Adding options to the date time picker
Options can be found in the time addon [documentation](http://trentrichardson.com/examples/timepicker/)
~~~php 
use adeattwood\yii2\datetimepicker\UiDateTimePicker;

<?= $form->field($model, 'date-time')->widget(
    UiDateTimePicker::classname()
    [
        'datePickerOptions' => [
            'controlType' => 'select',
            'oneLine' =>  true,
            'timeFormat' =>  'hh:mm tt'
        ]
    ]
); ?>
~~~  
