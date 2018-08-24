<?php

namespace LaravelNovaFields\Gender;

use Laravel\Nova\Fields\Select;

class Gender extends Select
{
    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string|null  $attribute
     * @param  mixed|null  $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->options([
            'male' => __('Male'),
            'female' => __('Female'),
        ]);
    }
}
