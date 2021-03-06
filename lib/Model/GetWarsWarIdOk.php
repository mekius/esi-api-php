<?php
/**
 * GetWarsWarIdOk
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
 * GetWarsWarIdOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     ESI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetWarsWarIdOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_wars_war_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aggressor' => '\ESI\Model\GetWarsWarIdAggressor',
        'allies' => '\ESI\Model\GetWarsWarIdAlly[]',
        'declared' => '\DateTime',
        'defender' => '\ESI\Model\GetWarsWarIdDefender',
        'finished' => '\DateTime',
        'id' => 'int',
        'mutual' => 'bool',
        'openForAllies' => 'bool',
        'retracted' => '\DateTime',
        'started' => '\DateTime'
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
        'aggressor' => 'aggressor',
        'allies' => 'allies',
        'declared' => 'declared',
        'defender' => 'defender',
        'finished' => 'finished',
        'id' => 'id',
        'mutual' => 'mutual',
        'openForAllies' => 'open_for_allies',
        'retracted' => 'retracted',
        'started' => 'started'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'aggressor' => 'setAggressor',
        'allies' => 'setAllies',
        'declared' => 'setDeclared',
        'defender' => 'setDefender',
        'finished' => 'setFinished',
        'id' => 'setId',
        'mutual' => 'setMutual',
        'openForAllies' => 'setOpenForAllies',
        'retracted' => 'setRetracted',
        'started' => 'setStarted'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'aggressor' => 'getAggressor',
        'allies' => 'getAllies',
        'declared' => 'getDeclared',
        'defender' => 'getDefender',
        'finished' => 'getFinished',
        'id' => 'getId',
        'mutual' => 'getMutual',
        'openForAllies' => 'getOpenForAllies',
        'retracted' => 'getRetracted',
        'started' => 'getStarted'
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
        $this->container['aggressor'] = isset($data['aggressor']) ? $data['aggressor'] : null;
        $this->container['allies'] = isset($data['allies']) ? $data['allies'] : null;
        $this->container['declared'] = isset($data['declared']) ? $data['declared'] : null;
        $this->container['defender'] = isset($data['defender']) ? $data['defender'] : null;
        $this->container['finished'] = isset($data['finished']) ? $data['finished'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mutual'] = isset($data['mutual']) ? $data['mutual'] : null;
        $this->container['openForAllies'] = isset($data['openForAllies']) ? $data['openForAllies'] : null;
        $this->container['retracted'] = isset($data['retracted']) ? $data['retracted'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['declared'] === null) {
            $invalid_properties[] = "'declared' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['mutual'] === null) {
            $invalid_properties[] = "'mutual' can't be null";
        }
        if ($this->container['openForAllies'] === null) {
            $invalid_properties[] = "'openForAllies' can't be null";
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
        if ($this->container['declared'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['mutual'] === null) {
            return false;
        }
        if ($this->container['openForAllies'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets aggressor
     * @return \ESI\Model\GetWarsWarIdAggressor
     */
    public function getAggressor()
    {
        return $this->container['aggressor'];
    }

    /**
     * Sets aggressor
     * @param \ESI\Model\GetWarsWarIdAggressor $aggressor
     * @return $this
     */
    public function setAggressor($aggressor)
    {
        $this->container['aggressor'] = $aggressor;

        return $this;
    }

    /**
     * Gets allies
     * @return \ESI\Model\GetWarsWarIdAlly[]
     */
    public function getAllies()
    {
        return $this->container['allies'];
    }

    /**
     * Sets allies
     * @param \ESI\Model\GetWarsWarIdAlly[] $allies allied corporations or alliances, each object contains either corporation_id or alliance_id
     * @return $this
     */
    public function setAllies($allies)
    {
        $this->container['allies'] = $allies;

        return $this;
    }

    /**
     * Gets declared
     * @return \DateTime
     */
    public function getDeclared()
    {
        return $this->container['declared'];
    }

    /**
     * Sets declared
     * @param \DateTime $declared Time that the war was declared
     * @return $this
     */
    public function setDeclared($declared)
    {
        $this->container['declared'] = $declared;

        return $this;
    }

    /**
     * Gets defender
     * @return \ESI\Model\GetWarsWarIdDefender
     */
    public function getDefender()
    {
        return $this->container['defender'];
    }

    /**
     * Sets defender
     * @param \ESI\Model\GetWarsWarIdDefender $defender
     * @return $this
     */
    public function setDefender($defender)
    {
        $this->container['defender'] = $defender;

        return $this;
    }

    /**
     * Gets finished
     * @return \DateTime
     */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
     * Sets finished
     * @param \DateTime $finished Time the war ended and shooting was no longer allowed
     * @return $this
     */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID of the specified war
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets mutual
     * @return bool
     */
    public function getMutual()
    {
        return $this->container['mutual'];
    }

    /**
     * Sets mutual
     * @param bool $mutual Was the war declared mutual by both parties
     * @return $this
     */
    public function setMutual($mutual)
    {
        $this->container['mutual'] = $mutual;

        return $this;
    }

    /**
     * Gets openForAllies
     * @return bool
     */
    public function getOpenForAllies()
    {
        return $this->container['openForAllies'];
    }

    /**
     * Sets openForAllies
     * @param bool $openForAllies Is the war currently open for allies or not
     * @return $this
     */
    public function setOpenForAllies($openForAllies)
    {
        $this->container['openForAllies'] = $openForAllies;

        return $this;
    }

    /**
     * Gets retracted
     * @return \DateTime
     */
    public function getRetracted()
    {
        return $this->container['retracted'];
    }

    /**
     * Sets retracted
     * @param \DateTime $retracted Time the war was retracted but both sides could still shoot each other
     * @return $this
     */
    public function setRetracted($retracted)
    {
        $this->container['retracted'] = $retracted;

        return $this;
    }

    /**
     * Gets started
     * @return \DateTime
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     * @param \DateTime $started Time when the war started and both sides could shoot each other
     * @return $this
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

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
