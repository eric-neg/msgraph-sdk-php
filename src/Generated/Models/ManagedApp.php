<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedApp extends MobileApp implements Parsable 
{
    /**
     * @var ManagedAppAvailability|null $appAvailability The Application's availability. Possible values are: global, lineOfBusiness.
    */
    private ?ManagedAppAvailability $appAvailability = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var string|null $version The Application's version.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new ManagedApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedApp {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.managedAndroidStoreApp': return new ManagedAndroidStoreApp();
                case '#microsoft.graph.managedIOSStoreApp': return new ManagedIOSStoreApp();
                case '#microsoft.graph.managedMobileLobApp': return new ManagedMobileLobApp();
            }
        }
        return new ManagedApp();
    }

    /**
     * Gets the appAvailability property value. The Application's availability. Possible values are: global, lineOfBusiness.
     * @return ManagedAppAvailability|null
    */
    public function getAppAvailability(): ?ManagedAppAvailability {
        return $this->appAvailability;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appAvailability' => function (ParseNode $n) use ($o) { $o->setAppAvailability($n->getEnumValue(ManagedAppAvailability::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Gets the version property value. The Application's version.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appAvailability', $this->appAvailability);
        $writer->writeStringValue('@odata.type', $this->type);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the appAvailability property value. The Application's availability. Possible values are: global, lineOfBusiness.
     *  @param ManagedAppAvailability|null $value Value to set for the appAvailability property.
    */
    public function setAppAvailability(?ManagedAppAvailability $value ): void {
        $this->appAvailability = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the version property value. The Application's version.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
