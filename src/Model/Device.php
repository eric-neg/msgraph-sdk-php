<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Device File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* Device class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Device extends DirectoryObject
{
    /**
    * Gets the accountEnabled
    * true if the account is enabled; otherwise, false. Default is true.  Supports $filter (eq, ne, not, in). Only callers in Global Administrator and Cloud Device Administrator roles can set this property.
    *
    * @return bool|null The accountEnabled
    */
    public function getAccountEnabled()
    {
        if (array_key_exists("accountEnabled", $this->_propDict)) {
            return $this->_propDict["accountEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountEnabled
    * true if the account is enabled; otherwise, false. Default is true.  Supports $filter (eq, ne, not, in). Only callers in Global Administrator and Cloud Device Administrator roles can set this property.
    *
    * @param bool $val The accountEnabled
    *
    * @return Device
    */
    public function setAccountEnabled($val)
    {
        $this->_propDict["accountEnabled"] = boolval($val);
        return $this;
    }


     /**
     * Gets the alternativeSecurityIds
    * For internal use only. Not nullable. Supports $filter (eq, not, ge, le).
     *
     * @return AlternativeSecurityId[]|null The alternativeSecurityIds
     */
    public function getAlternativeSecurityIds()
    {
        if (array_key_exists('alternativeSecurityIds', $this->_propDict) && !is_null($this->_propDict['alternativeSecurityIds'])) {
            $alternativeSecurityIds = [];
            if (count($this->_propDict['alternativeSecurityIds']) > 0 && is_a($this->_propDict['alternativeSecurityIds'][0], 'AlternativeSecurityId')) {
                return $this->_propDict['alternativeSecurityIds'];
            }
            foreach ($this->_propDict['alternativeSecurityIds'] as $singleValue) {
                $alternativeSecurityIds []= new AlternativeSecurityId($singleValue);
            }
            $this->_propDict['alternativeSecurityIds'] = $alternativeSecurityIds;
            return $this->_propDict['alternativeSecurityIds'];
        }
        return null;
    }

    /**
    * Sets the alternativeSecurityIds
    * For internal use only. Not nullable. Supports $filter (eq, not, ge, le).
    *
    * @param AlternativeSecurityId[] $val The alternativeSecurityIds
    *
    * @return Device
    */
    public function setAlternativeSecurityIds($val)
    {
        $this->_propDict["alternativeSecurityIds"] = $val;
        return $this;
    }

    /**
    * Gets the approximateLastSignInDateTime
    * The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, and eq on null values) and $orderBy.
    *
    * @return \DateTime|null The approximateLastSignInDateTime
    */
    public function getApproximateLastSignInDateTime()
    {
        if (array_key_exists("approximateLastSignInDateTime", $this->_propDict) && !is_null($this->_propDict["approximateLastSignInDateTime"])) {
            if (is_a($this->_propDict["approximateLastSignInDateTime"], "\DateTime")) {
                return $this->_propDict["approximateLastSignInDateTime"];
            } else {
                $this->_propDict["approximateLastSignInDateTime"] = new \DateTime($this->_propDict["approximateLastSignInDateTime"]);
                return $this->_propDict["approximateLastSignInDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the approximateLastSignInDateTime
    * The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, and eq on null values) and $orderBy.
    *
    * @param \DateTime $val The approximateLastSignInDateTime
    *
    * @return Device
    */
    public function setApproximateLastSignInDateTime($val)
    {
        $this->_propDict["approximateLastSignInDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the complianceExpirationDateTime
    * The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The complianceExpirationDateTime
    */
    public function getComplianceExpirationDateTime()
    {
        if (array_key_exists("complianceExpirationDateTime", $this->_propDict) && !is_null($this->_propDict["complianceExpirationDateTime"])) {
            if (is_a($this->_propDict["complianceExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["complianceExpirationDateTime"];
            } else {
                $this->_propDict["complianceExpirationDateTime"] = new \DateTime($this->_propDict["complianceExpirationDateTime"]);
                return $this->_propDict["complianceExpirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the complianceExpirationDateTime
    * The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The complianceExpirationDateTime
    *
    * @return Device
    */
    public function setComplianceExpirationDateTime($val)
    {
        $this->_propDict["complianceExpirationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deviceId
    * Identifier set by Azure Device Registration Service at the time of registration. Supports $filter (eq, ne, not, startsWith).
    *
    * @return string|null The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    * Identifier set by Azure Device Registration Service at the time of registration. Supports $filter (eq, ne, not, startsWith).
    *
    * @param string $val The deviceId
    *
    * @return Device
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceMetadata
    * For internal use only. Set to null.
    *
    * @return string|null The deviceMetadata
    */
    public function getDeviceMetadata()
    {
        if (array_key_exists("deviceMetadata", $this->_propDict)) {
            return $this->_propDict["deviceMetadata"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceMetadata
    * For internal use only. Set to null.
    *
    * @param string $val The deviceMetadata
    *
    * @return Device
    */
    public function setDeviceMetadata($val)
    {
        $this->_propDict["deviceMetadata"] = $val;
        return $this;
    }

    /**
    * Gets the deviceVersion
    * For internal use only.
    *
    * @return int|null The deviceVersion
    */
    public function getDeviceVersion()
    {
        if (array_key_exists("deviceVersion", $this->_propDict)) {
            return $this->_propDict["deviceVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceVersion
    * For internal use only.
    *
    * @param int $val The deviceVersion
    *
    * @return Device
    */
    public function setDeviceVersion($val)
    {
        $this->_propDict["deviceVersion"] = intval($val);
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the device. Required. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name for the device. Required. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
    *
    * @param string $val The displayName
    *
    * @return Device
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isCompliant
    * true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
    *
    * @return bool|null The isCompliant
    */
    public function getIsCompliant()
    {
        if (array_key_exists("isCompliant", $this->_propDict)) {
            return $this->_propDict["isCompliant"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCompliant
    * true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
    *
    * @param bool $val The isCompliant
    *
    * @return Device
    */
    public function setIsCompliant($val)
    {
        $this->_propDict["isCompliant"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isManaged
    * true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
    *
    * @return bool|null The isManaged
    */
    public function getIsManaged()
    {
        if (array_key_exists("isManaged", $this->_propDict)) {
            return $this->_propDict["isManaged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isManaged
    * true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
    *
    * @param bool $val The isManaged
    *
    * @return Device
    */
    public function setIsManaged($val)
    {
        $this->_propDict["isManaged"] = boolval($val);
        return $this;
    }

    /**
    * Gets the mdmAppId
    * Application identifier used to register device into MDM. Read-only. Supports $filter (eq, ne, not, startsWith).
    *
    * @return string|null The mdmAppId
    */
    public function getMdmAppId()
    {
        if (array_key_exists("mdmAppId", $this->_propDict)) {
            return $this->_propDict["mdmAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mdmAppId
    * Application identifier used to register device into MDM. Read-only. Supports $filter (eq, ne, not, startsWith).
    *
    * @param string $val The mdmAppId
    *
    * @return Device
    */
    public function setMdmAppId($val)
    {
        $this->_propDict["mdmAppId"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesLastSyncDateTime
    * The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only. Supports $filter (eq, ne, not, ge, le, in).
    *
    * @return \DateTime|null The onPremisesLastSyncDateTime
    */
    public function getOnPremisesLastSyncDateTime()
    {
        if (array_key_exists("onPremisesLastSyncDateTime", $this->_propDict) && !is_null($this->_propDict["onPremisesLastSyncDateTime"])) {
            if (is_a($this->_propDict["onPremisesLastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["onPremisesLastSyncDateTime"];
            } else {
                $this->_propDict["onPremisesLastSyncDateTime"] = new \DateTime($this->_propDict["onPremisesLastSyncDateTime"]);
                return $this->_propDict["onPremisesLastSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the onPremisesLastSyncDateTime
    * The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only. Supports $filter (eq, ne, not, ge, le, in).
    *
    * @param \DateTime $val The onPremisesLastSyncDateTime
    *
    * @return Device
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesSyncEnabled
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
    *
    * @return bool|null The onPremisesSyncEnabled
    */
    public function getOnPremisesSyncEnabled()
    {
        if (array_key_exists("onPremisesSyncEnabled", $this->_propDict)) {
            return $this->_propDict["onPremisesSyncEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesSyncEnabled
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return Device
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the operatingSystem
    * The type of operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
    *
    * @return string|null The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystem
    * The type of operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
    *
    * @param string $val The operatingSystem
    *
    * @return Device
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
        return $this;
    }

    /**
    * Gets the operatingSystemVersion
    * Operating system version of the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
    *
    * @return string|null The operatingSystemVersion
    */
    public function getOperatingSystemVersion()
    {
        if (array_key_exists("operatingSystemVersion", $this->_propDict)) {
            return $this->_propDict["operatingSystemVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystemVersion
    * Operating system version of the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
    *
    * @param string $val The operatingSystemVersion
    *
    * @return Device
    */
    public function setOperatingSystemVersion($val)
    {
        $this->_propDict["operatingSystemVersion"] = $val;
        return $this;
    }

    /**
    * Gets the physicalIds
    * For internal use only. Not nullable. Supports $filter (eq, not, ge, le, startsWith).
    *
    * @return string|null The physicalIds
    */
    public function getPhysicalIds()
    {
        if (array_key_exists("physicalIds", $this->_propDict)) {
            return $this->_propDict["physicalIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the physicalIds
    * For internal use only. Not nullable. Supports $filter (eq, not, ge, le, startsWith).
    *
    * @param string $val The physicalIds
    *
    * @return Device
    */
    public function setPhysicalIds($val)
    {
        $this->_propDict["physicalIds"] = $val;
        return $this;
    }

    /**
    * Gets the profileType
    * The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT.
    *
    * @return string|null The profileType
    */
    public function getProfileType()
    {
        if (array_key_exists("profileType", $this->_propDict)) {
            return $this->_propDict["profileType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the profileType
    * The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT.
    *
    * @param string $val The profileType
    *
    * @return Device
    */
    public function setProfileType($val)
    {
        $this->_propDict["profileType"] = $val;
        return $this;
    }

    /**
    * Gets the systemLabels
    * List of labels applied to the device by the system.
    *
    * @return string|null The systemLabels
    */
    public function getSystemLabels()
    {
        if (array_key_exists("systemLabels", $this->_propDict)) {
            return $this->_propDict["systemLabels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the systemLabels
    * List of labels applied to the device by the system.
    *
    * @param string $val The systemLabels
    *
    * @return Device
    */
    public function setSystemLabels($val)
    {
        $this->_propDict["systemLabels"] = $val;
        return $this;
    }

    /**
    * Gets the trustType
    * Type of trust for the joined device. Read-only. Possible values: Workplace (indicates bring your own personal devices), AzureAd (Cloud only joined devices), ServerAd (on-premises domain joined devices joined to Azure AD). For more details, see Introduction to device management in Azure Active Directory
    *
    * @return string|null The trustType
    */
    public function getTrustType()
    {
        if (array_key_exists("trustType", $this->_propDict)) {
            return $this->_propDict["trustType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trustType
    * Type of trust for the joined device. Read-only. Possible values: Workplace (indicates bring your own personal devices), AzureAd (Cloud only joined devices), ServerAd (on-premises domain joined devices joined to Azure AD). For more details, see Introduction to device management in Azure Active Directory
    *
    * @param string $val The trustType
    *
    * @return Device
    */
    public function setTrustType($val)
    {
        $this->_propDict["trustType"] = $val;
        return $this;
    }


     /**
     * Gets the memberOf
    * Groups that this device is a member of. Read-only. Nullable. Supports $expand.
     *
     * @return DirectoryObject[]|null The memberOf
     */
    public function getMemberOf()
    {
        if (array_key_exists('memberOf', $this->_propDict) && !is_null($this->_propDict['memberOf'])) {
            $memberOf = [];
            if (count($this->_propDict['memberOf']) > 0 && is_a($this->_propDict['memberOf'][0], 'DirectoryObject')) {
                return $this->_propDict['memberOf'];
            }
            foreach ($this->_propDict['memberOf'] as $singleValue) {
                $memberOf []= new DirectoryObject($singleValue);
            }
            $this->_propDict['memberOf'] = $memberOf;
            return $this->_propDict['memberOf'];
        }
        return null;
    }

    /**
    * Sets the memberOf
    * Groups that this device is a member of. Read-only. Nullable. Supports $expand.
    *
    * @param DirectoryObject[] $val The memberOf
    *
    * @return Device
    */
    public function setMemberOf($val)
    {
        $this->_propDict["memberOf"] = $val;
        return $this;
    }


     /**
     * Gets the registeredOwners
    * The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Currently, there can be only one owner. Read-only. Nullable. Supports $expand.
     *
     * @return DirectoryObject[]|null The registeredOwners
     */
    public function getRegisteredOwners()
    {
        if (array_key_exists('registeredOwners', $this->_propDict) && !is_null($this->_propDict['registeredOwners'])) {
            $registeredOwners = [];
            if (count($this->_propDict['registeredOwners']) > 0 && is_a($this->_propDict['registeredOwners'][0], 'DirectoryObject')) {
                return $this->_propDict['registeredOwners'];
            }
            foreach ($this->_propDict['registeredOwners'] as $singleValue) {
                $registeredOwners []= new DirectoryObject($singleValue);
            }
            $this->_propDict['registeredOwners'] = $registeredOwners;
            return $this->_propDict['registeredOwners'];
        }
        return null;
    }

    /**
    * Sets the registeredOwners
    * The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Currently, there can be only one owner. Read-only. Nullable. Supports $expand.
    *
    * @param DirectoryObject[] $val The registeredOwners
    *
    * @return Device
    */
    public function setRegisteredOwners($val)
    {
        $this->_propDict["registeredOwners"] = $val;
        return $this;
    }


     /**
     * Gets the registeredUsers
    * Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand.
     *
     * @return DirectoryObject[]|null The registeredUsers
     */
    public function getRegisteredUsers()
    {
        if (array_key_exists('registeredUsers', $this->_propDict) && !is_null($this->_propDict['registeredUsers'])) {
            $registeredUsers = [];
            if (count($this->_propDict['registeredUsers']) > 0 && is_a($this->_propDict['registeredUsers'][0], 'DirectoryObject')) {
                return $this->_propDict['registeredUsers'];
            }
            foreach ($this->_propDict['registeredUsers'] as $singleValue) {
                $registeredUsers []= new DirectoryObject($singleValue);
            }
            $this->_propDict['registeredUsers'] = $registeredUsers;
            return $this->_propDict['registeredUsers'];
        }
        return null;
    }

    /**
    * Sets the registeredUsers
    * Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand.
    *
    * @param DirectoryObject[] $val The registeredUsers
    *
    * @return Device
    */
    public function setRegisteredUsers($val)
    {
        $this->_propDict["registeredUsers"] = $val;
        return $this;
    }


     /**
     * Gets the transitiveMemberOf
    * Groups that this device is a member of. This operation is transitive. Supports $expand.
     *
     * @return DirectoryObject[]|null The transitiveMemberOf
     */
    public function getTransitiveMemberOf()
    {
        if (array_key_exists('transitiveMemberOf', $this->_propDict) && !is_null($this->_propDict['transitiveMemberOf'])) {
            $transitiveMemberOf = [];
            if (count($this->_propDict['transitiveMemberOf']) > 0 && is_a($this->_propDict['transitiveMemberOf'][0], 'DirectoryObject')) {
                return $this->_propDict['transitiveMemberOf'];
            }
            foreach ($this->_propDict['transitiveMemberOf'] as $singleValue) {
                $transitiveMemberOf []= new DirectoryObject($singleValue);
            }
            $this->_propDict['transitiveMemberOf'] = $transitiveMemberOf;
            return $this->_propDict['transitiveMemberOf'];
        }
        return null;
    }

    /**
    * Sets the transitiveMemberOf
    * Groups that this device is a member of. This operation is transitive. Supports $expand.
    *
    * @param DirectoryObject[] $val The transitiveMemberOf
    *
    * @return Device
    */
    public function setTransitiveMemberOf($val)
    {
        $this->_propDict["transitiveMemberOf"] = $val;
        return $this;
    }


     /**
     * Gets the extensions
    * The collection of open extensions defined for the device. Read-only. Nullable.
     *
     * @return Extension[]|null The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists('extensions', $this->_propDict) && !is_null($this->_propDict['extensions'])) {
            $extensions = [];
            if (count($this->_propDict['extensions']) > 0 && is_a($this->_propDict['extensions'][0], 'Extension')) {
                return $this->_propDict['extensions'];
            }
            foreach ($this->_propDict['extensions'] as $singleValue) {
                $extensions []= new Extension($singleValue);
            }
            $this->_propDict['extensions'] = $extensions;
            return $this->_propDict['extensions'];
        }
        return null;
    }

    /**
    * Sets the extensions
    * The collection of open extensions defined for the device. Read-only. Nullable.
    *
    * @param Extension[] $val The extensions
    *
    * @return Device
    */
    public function setExtensions($val)
    {
        $this->_propDict["extensions"] = $val;
        return $this;
    }

}
