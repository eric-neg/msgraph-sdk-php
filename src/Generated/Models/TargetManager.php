<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TargetManager extends SubjectSet implements Parsable 
{
    /**
     * @var int|null $managerLevel Manager level, between 1 and 4. The direct manager is 1.
    */
    private ?int $managerLevel = null;
    
    /**
     * Instantiates a new TargetManager and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetManager
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TargetManager {
        return new TargetManager();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'managerLevel' => function (ParseNode $n) use ($o) { $o->setManagerLevel($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the managerLevel property value. Manager level, between 1 and 4. The direct manager is 1.
     * @return int|null
    */
    public function getManagerLevel(): ?int {
        return $this->managerLevel;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('managerLevel', $this->managerLevel);
    }

    /**
     * Sets the managerLevel property value. Manager level, between 1 and 4. The direct manager is 1.
     *  @param int|null $value Value to set for the managerLevel property.
    */
    public function setManagerLevel(?int $value ): void {
        $this->managerLevel = $value;
    }

}
