<?php
/**
 * GetIncursions200Ok
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
 * GetIncursions200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     ESI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetIncursions200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_incursions_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'constellationId' => 'int',
        'factionId' => 'int',
        'hasBoss' => 'bool',
        'infestedSolarSystems' => 'int[]',
        'influence' => 'float',
        'stagingSolarSystemId' => 'int',
        'state' => 'string',
        'type' => 'string'
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
        'constellationId' => 'constellation_id',
        'factionId' => 'faction_id',
        'hasBoss' => 'has_boss',
        'infestedSolarSystems' => 'infested_solar_systems',
        'influence' => 'influence',
        'stagingSolarSystemId' => 'staging_solar_system_id',
        'state' => 'state',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'constellationId' => 'setConstellationId',
        'factionId' => 'setFactionId',
        'hasBoss' => 'setHasBoss',
        'infestedSolarSystems' => 'setInfestedSolarSystems',
        'influence' => 'setInfluence',
        'stagingSolarSystemId' => 'setStagingSolarSystemId',
        'state' => 'setState',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'constellationId' => 'getConstellationId',
        'factionId' => 'getFactionId',
        'hasBoss' => 'getHasBoss',
        'infestedSolarSystems' => 'getInfestedSolarSystems',
        'influence' => 'getInfluence',
        'stagingSolarSystemId' => 'getStagingSolarSystemId',
        'state' => 'getState',
        'type' => 'getType'
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

    const STATE_WITHDRAWING = 'withdrawing';
    const STATE_MOBILIZING = 'mobilizing';
    const STATE_ESTABLISHED = 'established';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_WITHDRAWING,
            self::STATE_MOBILIZING,
            self::STATE_ESTABLISHED,
        ];
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
        $this->container['constellationId'] = isset($data['constellationId']) ? $data['constellationId'] : null;
        $this->container['factionId'] = isset($data['factionId']) ? $data['factionId'] : null;
        $this->container['hasBoss'] = isset($data['hasBoss']) ? $data['hasBoss'] : null;
        $this->container['infestedSolarSystems'] = isset($data['infestedSolarSystems']) ? $data['infestedSolarSystems'] : null;
        $this->container['influence'] = isset($data['influence']) ? $data['influence'] : null;
        $this->container['stagingSolarSystemId'] = isset($data['stagingSolarSystemId']) ? $data['stagingSolarSystemId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['constellationId'] === null) {
            $invalid_properties[] = "'constellationId' can't be null";
        }
        if ($this->container['factionId'] === null) {
            $invalid_properties[] = "'factionId' can't be null";
        }
        if ($this->container['hasBoss'] === null) {
            $invalid_properties[] = "'hasBoss' can't be null";
        }
        if ($this->container['infestedSolarSystems'] === null) {
            $invalid_properties[] = "'infestedSolarSystems' can't be null";
        }
        if ($this->container['influence'] === null) {
            $invalid_properties[] = "'influence' can't be null";
        }
        if ($this->container['stagingSolarSystemId'] === null) {
            $invalid_properties[] = "'stagingSolarSystemId' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = ["withdrawing", "mobilizing", "established"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
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
        if ($this->container['constellationId'] === null) {
            return false;
        }
        if ($this->container['factionId'] === null) {
            return false;
        }
        if ($this->container['hasBoss'] === null) {
            return false;
        }
        if ($this->container['infestedSolarSystems'] === null) {
            return false;
        }
        if ($this->container['influence'] === null) {
            return false;
        }
        if ($this->container['stagingSolarSystemId'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = ["withdrawing", "mobilizing", "established"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets constellationId
     * @return int
     */
    public function getConstellationId()
    {
        return $this->container['constellationId'];
    }

    /**
     * Sets constellationId
     * @param int $constellationId The constellation id in which this incursion takes place
     * @return $this
     */
    public function setConstellationId($constellationId)
    {
        $this->container['constellationId'] = $constellationId;

        return $this;
    }

    /**
     * Gets factionId
     * @return int
     */
    public function getFactionId()
    {
        return $this->container['factionId'];
    }

    /**
     * Sets factionId
     * @param int $factionId The attacking faction's id
     * @return $this
     */
    public function setFactionId($factionId)
    {
        $this->container['factionId'] = $factionId;

        return $this;
    }

    /**
     * Gets hasBoss
     * @return bool
     */
    public function getHasBoss()
    {
        return $this->container['hasBoss'];
    }

    /**
     * Sets hasBoss
     * @param bool $hasBoss Whether the final encounter has boss or not
     * @return $this
     */
    public function setHasBoss($hasBoss)
    {
        $this->container['hasBoss'] = $hasBoss;

        return $this;
    }

    /**
     * Gets infestedSolarSystems
     * @return int[]
     */
    public function getInfestedSolarSystems()
    {
        return $this->container['infestedSolarSystems'];
    }

    /**
     * Sets infestedSolarSystems
     * @param int[] $infestedSolarSystems A list of infested solar system ids that are a part of this incursion
     * @return $this
     */
    public function setInfestedSolarSystems($infestedSolarSystems)
    {
        $this->container['infestedSolarSystems'] = $infestedSolarSystems;

        return $this;
    }

    /**
     * Gets influence
     * @return float
     */
    public function getInfluence()
    {
        return $this->container['influence'];
    }

    /**
     * Sets influence
     * @param float $influence Influence of this incursion as a float from 0 to 1
     * @return $this
     */
    public function setInfluence($influence)
    {
        $this->container['influence'] = $influence;

        return $this;
    }

    /**
     * Gets stagingSolarSystemId
     * @return int
     */
    public function getStagingSolarSystemId()
    {
        return $this->container['stagingSolarSystemId'];
    }

    /**
     * Sets stagingSolarSystemId
     * @param int $stagingSolarSystemId Staging solar system for this incursion
     * @return $this
     */
    public function setStagingSolarSystemId($stagingSolarSystemId)
    {
        $this->container['stagingSolarSystemId'] = $stagingSolarSystemId;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state The state of this incursion
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('withdrawing', 'mobilizing', 'established');
        if ((!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'withdrawing', 'mobilizing', 'established'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of this incursion
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
