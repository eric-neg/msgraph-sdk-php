<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosVppAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * @var bool|null $useDeviceLicensing Whether or not to use device licensing.
    */
    private ?bool $useDeviceLicensing = null;
    
    /**
     * @var string|null $vpnConfigurationId The VPN Configuration Id to apply for this app.
    */
    private ?string $vpnConfigurationId = null;
    
    /**
     * Instantiates a new IosVppAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosVppAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosVppAppAssignmentSettings {
        return new IosVppAppAssignmentSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'useDeviceLicensing' => function (ParseNode $n) use ($o) { $o->setUseDeviceLicensing($n->getBooleanValue()); },
            'vpnConfigurationId' => function (ParseNode $n) use ($o) { $o->setVpnConfigurationId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the useDeviceLicensing property value. Whether or not to use device licensing.
     * @return bool|null
    */
    public function getUseDeviceLicensing(): ?bool {
        return $this->useDeviceLicensing;
    }

    /**
     * Gets the vpnConfigurationId property value. The VPN Configuration Id to apply for this app.
     * @return string|null
    */
    public function getVpnConfigurationId(): ?string {
        return $this->vpnConfigurationId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('useDeviceLicensing', $this->useDeviceLicensing);
        $writer->writeStringValue('vpnConfigurationId', $this->vpnConfigurationId);
    }

    /**
     * Sets the useDeviceLicensing property value. Whether or not to use device licensing.
     *  @param bool|null $value Value to set for the useDeviceLicensing property.
    */
    public function setUseDeviceLicensing(?bool $value ): void {
        $this->useDeviceLicensing = $value;
    }

    /**
     * Sets the vpnConfigurationId property value. The VPN Configuration Id to apply for this app.
     *  @param string|null $value Value to set for the vpnConfigurationId property.
    */
    public function setVpnConfigurationId(?string $value ): void {
        $this->vpnConfigurationId = $value;
    }

}
