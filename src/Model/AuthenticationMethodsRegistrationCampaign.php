<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodsRegistrationCampaign File
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
* AuthenticationMethodsRegistrationCampaign class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodsRegistrationCampaign extends Entity
{

    /**
    * Gets the excludeTargets
    * Users and groups of users that are excluded from being prompted to set up the authentication method.
    *
    * @return ExcludeTarget[]|null The excludeTargets
    */
    public function getExcludeTargets()
    {
        if (array_key_exists("excludeTargets", $this->_propDict) && !is_null($this->_propDict["excludeTargets"])) {
       
            if (count($this->_propDict['excludeTargets']) > 0 && is_a($this->_propDict['excludeTargets'][0], 'ExcludeTarget')) {
                return $this->_propDict['excludeTargets'];
            }
            $excludeTargets = [];
            foreach ($this->_propDict['excludeTargets'] as $singleValue) {
                $excludeTargets []= new ExcludeTarget($singleValue);
            }
            $this->_propDict['excludeTargets'] = $excludeTargets;
            return $this->_propDict['excludeTargets'];
            }
        return null;
    }

    /**
    * Sets the excludeTargets
    * Users and groups of users that are excluded from being prompted to set up the authentication method.
    *
    * @param ExcludeTarget[] $val The value to assign to the excludeTargets
    *
    * @return AuthenticationMethodsRegistrationCampaign The AuthenticationMethodsRegistrationCampaign
    */
    public function setExcludeTargets($val)
    {
        $this->_propDict["excludeTargets"] = $val;
         return $this;
    }

    /**
    * Gets the includeTargets
    * Users and groups of users that are prompted to set up the authentication method.
    *
    * @return AuthenticationMethodsRegistrationCampaignIncludeTarget[]|null The includeTargets
    */
    public function getIncludeTargets()
    {
        if (array_key_exists("includeTargets", $this->_propDict) && !is_null($this->_propDict["includeTargets"])) {
       
            if (count($this->_propDict['includeTargets']) > 0 && is_a($this->_propDict['includeTargets'][0], 'AuthenticationMethodsRegistrationCampaignIncludeTarget')) {
                return $this->_propDict['includeTargets'];
            }
            $includeTargets = [];
            foreach ($this->_propDict['includeTargets'] as $singleValue) {
                $includeTargets []= new AuthenticationMethodsRegistrationCampaignIncludeTarget($singleValue);
            }
            $this->_propDict['includeTargets'] = $includeTargets;
            return $this->_propDict['includeTargets'];
            }
        return null;
    }

    /**
    * Sets the includeTargets
    * Users and groups of users that are prompted to set up the authentication method.
    *
    * @param AuthenticationMethodsRegistrationCampaignIncludeTarget[] $val The value to assign to the includeTargets
    *
    * @return AuthenticationMethodsRegistrationCampaign The AuthenticationMethodsRegistrationCampaign
    */
    public function setIncludeTargets($val)
    {
        $this->_propDict["includeTargets"] = $val;
         return $this;
    }
    /**
    * Gets the snoozeDurationInDays
    * Specifies the number of days that the user sees a prompt again if they select 'Not now' and snoozes the prompt. Minimum: 0 days. Maximum: 14 days. If the value is '0', the user is prompted during every MFA attempt.
    *
    * @return int|null The snoozeDurationInDays
    */
    public function getSnoozeDurationInDays()
    {
        if (array_key_exists("snoozeDurationInDays", $this->_propDict)) {
            return $this->_propDict["snoozeDurationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the snoozeDurationInDays
    * Specifies the number of days that the user sees a prompt again if they select 'Not now' and snoozes the prompt. Minimum: 0 days. Maximum: 14 days. If the value is '0', the user is prompted during every MFA attempt.
    *
    * @param int $val The value of the snoozeDurationInDays
    *
    * @return AuthenticationMethodsRegistrationCampaign
    */
    public function setSnoozeDurationInDays($val)
    {
        $this->_propDict["snoozeDurationInDays"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure Active Directory for the setting. The default value is disabled.
    *
    * @return AdvancedConfigState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict) && !is_null($this->_propDict["state"])) {
     
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\AdvancedConfigState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AdvancedConfigState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure Active Directory for the setting. The default value is disabled.
    *
    * @param AdvancedConfigState $val The value to assign to the state
    *
    * @return AuthenticationMethodsRegistrationCampaign The AuthenticationMethodsRegistrationCampaign
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
