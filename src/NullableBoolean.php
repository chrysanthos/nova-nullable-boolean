<?php

namespace Chrysanthos\NovaNullableBoolean;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Http\Requests\NovaRequest;

class NullableBoolean extends Boolean
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nullable-boolean';

    public function resolveDefaultValue(NovaRequest $request)
    {
        if ($request->isCreateOrAttachRequest() || $request->isActionRequest()) {
            return parent::resolveDefaultValue($request) ?? ($this->nullable ? null : false);
        }
    }
}
