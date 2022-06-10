<?php

namespace Microsoft\Graph\Me\Events;

class EventsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var EventsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EventsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
