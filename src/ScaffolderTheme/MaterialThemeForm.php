<?php

namespace ScaffolderTheme;

use Collective\Html\FormBuilder;

class MaterialThemeForm extends FormBuilder
{
    public function text($name, $value = null, $options = [])
    {
        return $this->commonInputs('text', $name, $value, $options);
    }

    public function number($name, $value = null, $options = [])
    {
        return $this->commonInputs('number', $name, $value, $options);
    }

    public function textarea($name, $value = null, $options = [])
    {
        $options['id'] = $name;
        $options['class'] = 'materialize-textarea';

        return sprintf('
        <div class="input-field col l6 s8 offset-l3 offset-s2">
            %s
            %s
        </div>', parent::textarea($name, $value, $options), parent::label($name, null, []));
    }

    public function select($name, $list = [], $selected = null, $options = [])
    {
        return sprintf('
        <div class="input-field col l6 s8 offset-l3 offset-s2">
            %s
            %s
        </div>', parent::select($name, $list, $selected, $options), parent::label($name, null, []));
    }

    public function checkbox($name, $value = 1, $checked = null, $options = [])
    {
        $options['id'] = $name;

        return sprintf('
        <div class="input-field col l6 s8 offset-l3 offset-s2">
            %s
            %s
            %s
        </div>', parent::hidden($name, 0), parent::checkbox($name, $value, $checked, $options), parent::label($name, null, []));
    }

    public function radio($name, $value = null, $checked = null, $options = [])
    {
        return sprintf('
        <div class="input-field col l6 s8 offset-l3 offset-s2">
            %s
            %s
        </div>', parent::radio($name, $value, $checked, $options), parent::label($options['id'], $value, []));
    }

    private function commonInputs($type, $name, $value = null, $options = [])
    {
        $options['id'] = $name;

        return sprintf('
        <div class="input-field col l6 s8 offset-l3 offset-s2">
            %s
            %s
        </div>', parent::input($type, $name, $value, $options), parent::label($name, null, []));
    }
}