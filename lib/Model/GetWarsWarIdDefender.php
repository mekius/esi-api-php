<?php
/**
 * GetWarsWarIdDefender
 *
 * PHP version 5
 *
 * @category Class
 * @package  ESI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.2.7.dev1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ESI\Model;

use \ArrayAccess;

/**
 * GetWarsWarIdDefender Class Doc Comment
 *
 * @category    Class */
 // @description The defending corporation or alliance that declared this war, only contains either corporation_id or alliance_id
/**
 * @package     ESI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetWarsWarIdDefender implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_wars_war_id_defender';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allianceId' => 'int',
        'corporationId' => 'int',
        'iskDestroyed' => 'float',
        'shipsKilled' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'allianceId' => 'alliance_id',
        'corporationId' => 'corporation_id',
        'iskDestroyed' => 'isk_destroyed',
        'shipsKilled' => 'ships_killed'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'allianceId' => 'setAllianceId',
        'corporationId' => 'setCorporationId',
        'iskDestroyed' => 'setIskDestroyed',
        'shipsKilled' => 'setShipsKilled'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'allianceId' => 'getAllianceId',
        'corporationId' => 'getCorporationId',
        'iskDestroyed' => 'getIskDestroyed',
        'shipsKilled' => 'getShipsKilled'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['allianceId'] = isset($data['allianceId']) ? $data['allianceId'] : null;
        $this->container['corporationId'] = isset($data['corporationId']) ? $data['corporationId'] : null;
        $this->container['iskDestroyed'] = isset($data['iskDestroyed']) ? $data['iskDestroyed'] : null;
        $this->container['shipsKilled'] = isset($data['shipsKilled']) ? $data['shipsKilled'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['iskDestroyed'] === null) {
            $invalid_properties[] = "'iskDestroyed' can't be null";
        }
        if ($this->container['shipsKilled'] === null) {
            $invalid_properties[] = "'shipsKilled' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['iskDestroyed'] === null) {
            return false;
        }
        if ($this->container['shipsKilled'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets allianceId
     * @return int
     */
    public function getAllianceId()
    {
        return $this->container['allianceId'];
    }

    /**
     * Sets allianceId
     * @param int $allianceId Alliance ID if and only if the defender is an alliance
     * @return $this
     */
    public function setAllianceId($allianceId)
    {
        $this->container['allianceId'] = $allianceId;

        return $this;
    }

    /**
     * Gets corporationId
     * @return int
     */
    public function getCorporationId()
    {
        return $this->container['corporationId'];
    }

    /**
     * Sets corporationId
     * @param int $corporationId Corporation ID if and only if the defender is a corporation
     * @return $this
     */
    public function setCorporationId($corporationId)
    {
        $this->container['corporationId'] = $corporationId;

        return $this;
    }

    /**
     * Gets iskDestroyed
     * @return float
     */
    public function getIskDestroyed()
    {
        return $this->container['iskDestroyed'];
    }

    /**
     * Sets iskDestroyed
     * @param float $iskDestroyed ISK value of ships the defender has killed
     * @return $this
     */
    public function setIskDestroyed($iskDestroyed)
    {
        $this->container['iskDestroyed'] = $iskDestroyed;

        return $this;
    }

    /**
     * Gets shipsKilled
     * @return int
     */
    public function getShipsKilled()
    {
        return $this->container['shipsKilled'];
    }

    /**
     * Sets shipsKilled
     * @param int $shipsKilled The number of ships the defender has killed
     * @return $this
     */
    public function setShipsKilled($shipsKilled)
    {
        $this->container['shipsKilled'] = $shipsKilled;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ESI\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ESI\ObjectSerializer::sanitizeForSerialization($this));
    }
}
