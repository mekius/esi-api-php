<?php
/**
 * GetAlliancesAllianceIdOk
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
 * GetAlliancesAllianceIdOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     ESI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetAlliancesAllianceIdOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_alliances_alliance_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allianceName' => 'string',
        'dateFounded' => '\DateTime',
        'executorCorp' => 'int',
        'ticker' => 'string'
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
        'allianceName' => 'alliance_name',
        'dateFounded' => 'date_founded',
        'executorCorp' => 'executor_corp',
        'ticker' => 'ticker'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'allianceName' => 'setAllianceName',
        'dateFounded' => 'setDateFounded',
        'executorCorp' => 'setExecutorCorp',
        'ticker' => 'setTicker'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'allianceName' => 'getAllianceName',
        'dateFounded' => 'getDateFounded',
        'executorCorp' => 'getExecutorCorp',
        'ticker' => 'getTicker'
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
        $this->container['allianceName'] = isset($data['allianceName']) ? $data['allianceName'] : null;
        $this->container['dateFounded'] = isset($data['dateFounded']) ? $data['dateFounded'] : null;
        $this->container['executorCorp'] = isset($data['executorCorp']) ? $data['executorCorp'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['allianceName'] === null) {
            $invalid_properties[] = "'allianceName' can't be null";
        }
        if ($this->container['dateFounded'] === null) {
            $invalid_properties[] = "'dateFounded' can't be null";
        }
        if ($this->container['executorCorp'] === null) {
            $invalid_properties[] = "'executorCorp' can't be null";
        }
        if ($this->container['ticker'] === null) {
            $invalid_properties[] = "'ticker' can't be null";
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
        if ($this->container['allianceName'] === null) {
            return false;
        }
        if ($this->container['dateFounded'] === null) {
            return false;
        }
        if ($this->container['executorCorp'] === null) {
            return false;
        }
        if ($this->container['ticker'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets allianceName
     * @return string
     */
    public function getAllianceName()
    {
        return $this->container['allianceName'];
    }

    /**
     * Sets allianceName
     * @param string $allianceName the full name of the alliance
     * @return $this
     */
    public function setAllianceName($allianceName)
    {
        $this->container['allianceName'] = $allianceName;

        return $this;
    }

    /**
     * Gets dateFounded
     * @return \DateTime
     */
    public function getDateFounded()
    {
        return $this->container['dateFounded'];
    }

    /**
     * Sets dateFounded
     * @param \DateTime $dateFounded date_founded string
     * @return $this
     */
    public function setDateFounded($dateFounded)
    {
        $this->container['dateFounded'] = $dateFounded;

        return $this;
    }

    /**
     * Gets executorCorp
     * @return int
     */
    public function getExecutorCorp()
    {
        return $this->container['executorCorp'];
    }

    /**
     * Sets executorCorp
     * @param int $executorCorp executor_corp integer
     * @return $this
     */
    public function setExecutorCorp($executorCorp)
    {
        $this->container['executorCorp'] = $executorCorp;

        return $this;
    }

    /**
     * Gets ticker
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     * @param string $ticker the short name of the alliance
     * @return $this
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

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
