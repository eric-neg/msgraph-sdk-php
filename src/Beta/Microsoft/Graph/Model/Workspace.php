<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Workspace File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* Workspace class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Workspace extends Place
{
    /**
    * Gets the building
    *
    * @return string|null The building
    */
    public function getBuilding()
    {
        if (array_key_exists("building", $this->_propDict)) {
            return $this->_propDict["building"];
        } else {
            return null;
        }
    }

    /**
    * Sets the building
    *
    * @param string $val The building
    *
    * @return Workspace
    */
    public function setBuilding($val)
    {
        $this->_propDict["building"] = $val;
        return $this;
    }

    /**
    * Gets the capacity
    *
    * @return int|null The capacity
    */
    public function getCapacity()
    {
        if (array_key_exists("capacity", $this->_propDict)) {
            return $this->_propDict["capacity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the capacity
    *
    * @param int $val The capacity
    *
    * @return Workspace
    */
    public function setCapacity($val)
    {
        $this->_propDict["capacity"] = intval($val);
        return $this;
    }

    /**
    * Gets the emailAddress
    *
    * @return string|null The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            return $this->_propDict["emailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailAddress
    *
    * @param string $val The emailAddress
    *
    * @return Workspace
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the floorLabel
    *
    * @return string|null The floorLabel
    */
    public function getFloorLabel()
    {
        if (array_key_exists("floorLabel", $this->_propDict)) {
            return $this->_propDict["floorLabel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the floorLabel
    *
    * @param string $val The floorLabel
    *
    * @return Workspace
    */
    public function setFloorLabel($val)
    {
        $this->_propDict["floorLabel"] = $val;
        return $this;
    }

    /**
    * Gets the floorNumber
    *
    * @return int|null The floorNumber
    */
    public function getFloorNumber()
    {
        if (array_key_exists("floorNumber", $this->_propDict)) {
            return $this->_propDict["floorNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the floorNumber
    *
    * @param int $val The floorNumber
    *
    * @return Workspace
    */
    public function setFloorNumber($val)
    {
        $this->_propDict["floorNumber"] = intval($val);
        return $this;
    }

    /**
    * Gets the isWheelChairAccessible
    *
    * @return bool|null The isWheelChairAccessible
    */
    public function getIsWheelChairAccessible()
    {
        if (array_key_exists("isWheelChairAccessible", $this->_propDict)) {
            return $this->_propDict["isWheelChairAccessible"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isWheelChairAccessible
    *
    * @param bool $val The isWheelChairAccessible
    *
    * @return Workspace
    */
    public function setIsWheelChairAccessible($val)
    {
        $this->_propDict["isWheelChairAccessible"] = boolval($val);
        return $this;
    }

    /**
    * Gets the label
    *
    * @return string|null The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            return $this->_propDict["label"];
        } else {
            return null;
        }
    }

    /**
    * Sets the label
    *
    * @param string $val The label
    *
    * @return Workspace
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
        return $this;
    }

    /**
    * Gets the nickname
    *
    * @return string|null The nickname
    */
    public function getNickname()
    {
        if (array_key_exists("nickname", $this->_propDict)) {
            return $this->_propDict["nickname"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nickname
    *
    * @param string $val The nickname
    *
    * @return Workspace
    */
    public function setNickname($val)
    {
        $this->_propDict["nickname"] = $val;
        return $this;
    }

    /**
    * Gets the tags
    *
    * @return string|null The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tags
    *
    * @param string $val The tags
    *
    * @return Workspace
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

}
