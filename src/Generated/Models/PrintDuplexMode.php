<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PrintDuplexMode extends Enum {
    public const FLIP_ON_LONG_EDGE = 'flipOnLongEdge';
    public const FLIP_ON_SHORT_EDGE = 'flipOnShortEdge';
    public const ONE_SIDED = 'oneSided';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
