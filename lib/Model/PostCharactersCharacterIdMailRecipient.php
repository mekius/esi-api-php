<?php
/**
 * PostCharactersCharacterIdMailRecipient
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
 * OpenAPI spec version: 0.2.6.dev1
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
 * PostCharactersCharacterIdMailRecipient Class Doc Comment
 *
 * @category    Class */
 // @description recipient object
/**
 * @package     ESI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostCharactersCharacterIdMailRecipient implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'post_characters_character_id_mail_recipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recipientId' => 'int',
        'recipientType' => 'string'
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
        'recipientId' => 'recipient_id',
        'recipientType' => 'recipient_type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'recipientId' => 'setRecipientId',
        'recipientType' => 'setRecipientType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'recipientId' => 'getRecipientId',
        'recipientType' => 'getRecipientType'
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

    const RECIPIENT_TYPE_ALLIANCE = 'alliance';
    const RECIPIENT_TYPE_CHARACTER = 'character';
    const RECIPIENT_TYPE_CORPORATION = 'corporation';
    const RECIPIENT_TYPE_MAILING_LIST = 'mailing_list';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRecipientTypeAllowableValues()
    {
        return [
            self::RECIPIENT_TYPE_ALLIANCE,
            self::RECIPIENT_TYPE_CHARACTER,
            self::RECIPIENT_TYPE_CORPORATION,
            self::RECIPIENT_TYPE_MAILING_LIST,
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
        $this->container['recipientId'] = isset($data['recipientId']) ? $data['recipientId'] : null;
        $this->container['recipientType'] = isset($data['recipientType']) ? $data['recipientType'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['recipientId'] === null) {
            $invalid_properties[] = "'recipientId' can't be null";
        }
        if ($this->container['recipientType'] === null) {
            $invalid_properties[] = "'recipientType' can't be null";
        }
        $allowed_values = ["alliance", "character", "corporation", "mailing_list"];
        if (!in_array($this->container['recipientType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'recipientType', must be one of #{allowed_values}.";
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
        if ($this->container['recipientId'] === null) {
            return false;
        }
        if ($this->container['recipientType'] === null) {
            return false;
        }
        $allowed_values = ["alliance", "character", "corporation", "mailing_list"];
        if (!in_array($this->container['recipientType'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets recipientId
     * @return int
     */
    public function getRecipientId()
    {
        return $this->container['recipientId'];
    }

    /**
     * Sets recipientId
     * @param int $recipientId recipient_id integer
     * @return $this
     */
    public function setRecipientId($recipientId)
    {
        $this->container['recipientId'] = $recipientId;

        return $this;
    }

    /**
     * Gets recipientType
     * @return string
     */
    public function getRecipientType()
    {
        return $this->container['recipientType'];
    }

    /**
     * Sets recipientType
     * @param string $recipientType recipient_type string
     * @return $this
     */
    public function setRecipientType($recipientType)
    {
        $allowed_values = array('alliance', 'character', 'corporation', 'mailing_list');
        if ((!in_array($recipientType, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'recipientType', must be one of 'alliance', 'character', 'corporation', 'mailing_list'");
        }
        $this->container['recipientType'] = $recipientType;

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
