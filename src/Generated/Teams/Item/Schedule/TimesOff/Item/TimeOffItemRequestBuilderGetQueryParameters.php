<?php

namespace Microsoft\Graph\Teams\Item\Schedule\TimesOff\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class TimeOffItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
