<?php

namespace Microsoft\Graph\Me\Calendar;

use Microsoft\Kiota\Abstractions\QueryParameter;

class CalendarRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
