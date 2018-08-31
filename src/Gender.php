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

        $this->setGenderOptions();
    }

    /**
     * Specify that this field should include the extended gender set.
     *
     * @param  bool  $value
     * @return $this
     */
    public function includeExtended($value = true)
    {
        $this->setGenderOptions($value);

        return $this;
    }

    protected function setGenderOptions($includeExtended = false)
    {
        $options = collect(config('laravel-nova-fields-gender.default'));

        if ($includeExtended) {
            $options = $options->merge(collect(config('laravel-nova-fields-gender.extended')));
        }

        $this->options($options->transform(function ($value) {
            return __($value);
        })->all());
    }
}
