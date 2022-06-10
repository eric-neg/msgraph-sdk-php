<?php

namespace Microsoft\Graph\Groups\Item\Onenote\Notebooks\Item\SectionGroups\Item\Sections\Item\ParentNotebook;

use Microsoft\Kiota\Abstractions\QueryParameter;

class ParentNotebookRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
