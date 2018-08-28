<?php

namespace Naif\AddressAutocomplete;

use Laravel\Nova\Fields\Field;

class AddressAutocomplete extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'address_autocomplete';

    public function countries($list){
        return $this->withMeta([
            'countries' => $list
        ]);
    }
}
