<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AadUserConversationMemberResult extends ActionResultPart implements Parsable 
{
    /**
     * @var string|null $userId The user object ID of the Azure AD user that was being added as part of the bulk operation.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new AadUserConversationMemberResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AadUserConversationMemberResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AadUserConversationMemberResult {
        return new AadUserConversationMemberResult();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the userId property value. The user object ID of the Azure AD user that was being added as part of the bulk operation.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the userId property value. The user object ID of the Azure AD user that was being added as part of the bulk operation.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
