<?php
/**
 * GetKillmailsKillmailIdKillmailHashOk
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
 * OpenAPI spec version: 0.2.3.dev7
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
 * GetKillmailsKillmailIdKillmailHashOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object object
/**
 * @package     ESI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetKillmailsKillmailIdKillmailHashOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_killmails_killmail_id_killmail_hash_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attackers' => '\ESI\Model\GetKillmailsKillmailIdKillmailHashAttacker[]',
        'killmailId' => 'int',
        'killmailTime' => '\DateTime',
        'moonId' => 'int',
        'solarSystemId' => 'int',
        'victim' => '\ESI\Model\GetKillmailsKillmailIdKillmailHashVictim',
        'warId' => 'int'
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
        'attackers' => 'attackers',
        'killmailId' => 'killmail_id',
        'killmailTime' => 'killmail_time',
        'moonId' => 'moon_id',
        'solarSystemId' => 'solar_system_id',
        'victim' => 'victim',
        'warId' => 'war_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'attackers' => 'setAttackers',
        'killmailId' => 'setKillmailId',
        'killmailTime' => 'setKillmailTime',
        'moonId' => 'setMoonId',
        'solarSystemId' => 'setSolarSystemId',
        'victim' => 'setVictim',
        'warId' => 'setWarId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'attackers' => 'getAttackers',
        'killmailId' => 'getKillmailId',
        'killmailTime' => 'getKillmailTime',
        'moonId' => 'getMoonId',
        'solarSystemId' => 'getSolarSystemId',
        'victim' => 'getVictim',
        'warId' => 'getWarId'
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
        $this->container['attackers'] = isset($data['attackers']) ? $data['attackers'] : null;
        $this->container['killmailId'] = isset($data['killmailId']) ? $data['killmailId'] : null;
        $this->container['killmailTime'] = isset($data['killmailTime']) ? $data['killmailTime'] : null;
        $this->container['moonId'] = isset($data['moonId']) ? $data['moonId'] : null;
        $this->container['solarSystemId'] = isset($data['solarSystemId']) ? $data['solarSystemId'] : null;
        $this->container['victim'] = isset($data['victim']) ? $data['victim'] : null;
        $this->container['warId'] = isset($data['warId']) ? $data['warId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['attackers'] === null) {
            $invalid_properties[] = "'attackers' can't be null";
        }
        if ($this->container['killmailId'] === null) {
            $invalid_properties[] = "'killmailId' can't be null";
        }
        if ($this->container['killmailTime'] === null) {
            $invalid_properties[] = "'killmailTime' can't be null";
        }
        if ($this->container['solarSystemId'] === null) {
            $invalid_properties[] = "'solarSystemId' can't be null";
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
        if ($this->container['attackers'] === null) {
            return false;
        }
        if ($this->container['killmailId'] === null) {
            return false;
        }
        if ($this->container['killmailTime'] === null) {
            return false;
        }
        if ($this->container['solarSystemId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets attackers
     * @return \ESI\Model\GetKillmailsKillmailIdKillmailHashAttacker[]
     */
    public function getAttackers()
    {
        return $this->container['attackers'];
    }

    /**
     * Sets attackers
     * @param \ESI\Model\GetKillmailsKillmailIdKillmailHashAttacker[] $attackers attackers array
     * @return $this
     */
    public function setAttackers($attackers)
    {
        $this->container['attackers'] = $attackers;

        return $this;
    }

    /**
     * Gets killmailId
     * @return int
     */
    public function getKillmailId()
    {
        return $this->container['killmailId'];
    }

    /**
     * Sets killmailId
     * @param int $killmailId ID of the killmail
     * @return $this
     */
    public function setKillmailId($killmailId)
    {
        $this->container['killmailId'] = $killmailId;

        return $this;
    }

    /**
     * Gets killmailTime
     * @return \DateTime
     */
    public function getKillmailTime()
    {
        return $this->container['killmailTime'];
    }

    /**
     * Sets killmailTime
     * @param \DateTime $killmailTime Time that the victim was killed and the killmail generated
     * @return $this
     */
    public function setKillmailTime($killmailTime)
    {
        $this->container['killmailTime'] = $killmailTime;

        return $this;
    }

    /**
     * Gets moonId
     * @return int
     */
    public function getMoonId()
    {
        return $this->container['moonId'];
    }

    /**
     * Sets moonId
     * @param int $moonId Moon if the kill took place at one
     * @return $this
     */
    public function setMoonId($moonId)
    {
        $this->container['moonId'] = $moonId;

        return $this;
    }

    /**
     * Gets solarSystemId
     * @return int
     */
    public function getSolarSystemId()
    {
        return $this->container['solarSystemId'];
    }

    /**
     * Sets solarSystemId
     * @param int $solarSystemId Solar system that the kill took place in
     * @return $this
     */
    public function setSolarSystemId($solarSystemId)
    {
        $this->container['solarSystemId'] = $solarSystemId;

        return $this;
    }

    /**
     * Gets victim
     * @return \ESI\Model\GetKillmailsKillmailIdKillmailHashVictim
     */
    public function getVictim()
    {
        return $this->container['victim'];
    }

    /**
     * Sets victim
     * @param \ESI\Model\GetKillmailsKillmailIdKillmailHashVictim $victim
     * @return $this
     */
    public function setVictim($victim)
    {
        $this->container['victim'] = $victim;

        return $this;
    }

    /**
     * Gets warId
     * @return int
     */
    public function getWarId()
    {
        return $this->container['warId'];
    }

    /**
     * Sets warId
     * @param int $warId War if the killmail is generated in relation to an official war
     * @return $this
     */
    public function setWarId($warId)
    {
        $this->container['warId'] = $warId;

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
