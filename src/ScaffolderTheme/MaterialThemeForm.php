<?php

namespace ScaffolderTheme;

use Collective\Html\FormBuilder;

class MaterialThemeForm extends FormBuilder
{
    public function text($name, $value = null, $options = [])
    {
        return sprintf('
        <div class="input-field col l6 s8 offset-l3 offset-s2">
            %s
            %s
        </div>', parent::text($name, $value, $options), parent::label($name, null, []));
    }

    public function textarea($name, $value = null, $options = [])
    {
        return sprintf('
        <div class="input-field col l6 s8 offset-l3 offset-s2">
            %s
            %s
        </div>', parent::textarea($name, $value, ['class' => 'materialize-textarea']), parent::label($name, null, []));
    }
}