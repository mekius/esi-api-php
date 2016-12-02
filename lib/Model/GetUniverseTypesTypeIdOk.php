<?php
/**
 * GetUniverseTypesTypeIdOk
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
 * GetUniverseTypesTypeIdOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     ESI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseTypesTypeIdOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_types_type_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'categoryId' => 'int',
        'graphicId' => 'int',
        'groupId' => 'int',
        'iconId' => 'int',
        'typeDescription' => 'string',
        'typeName' => 'string'
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
        'categoryId' => 'category_id',
        'graphicId' => 'graphic_id',
        'groupId' => 'group_id',
        'iconId' => 'icon_id',
        'typeDescription' => 'type_description',
        'typeName' => 'type_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'categoryId' => 'setCategoryId',
        'graphicId' => 'setGraphicId',
        'groupId' => 'setGroupId',
        'iconId' => 'setIconId',
        'typeDescription' => 'setTypeDescription',
        'typeName' => 'setTypeName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'categoryId' => 'getCategoryId',
        'graphicId' => 'getGraphicId',
        'groupId' => 'getGroupId',
        'iconId' => 'getIconId',
        'typeDescription' => 'getTypeDescription',
        'typeName' => 'getTypeName'
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
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['graphicId'] = isset($data['graphicId']) ? $data['graphicId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['iconId'] = isset($data['iconId']) ? $data['iconId'] : null;
        $this->container['typeDescription'] = isset($data['typeDescription']) ? $data['typeDescription'] : null;
        $this->container['typeName'] = isset($data['typeName']) ? $data['typeName'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['categoryId'] === null) {
            $invalid_properties[] = "'categoryId' can't be null";
        }
        if ($this->container['groupId'] === null) {
            $invalid_properties[] = "'groupId' can't be null";
        }
        if ($this->container['typeDescription'] === null) {
            $invalid_properties[] = "'typeDescription' can't be null";
        }
        if ($this->container['typeName'] === null) {
            $invalid_properties[] = "'typeName' can't be null";
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
        if ($this->container['categoryId'] === null) {
            return false;
        }
        if ($this->container['groupId'] === null) {
            return false;
        }
        if ($this->container['typeDescription'] === null) {
            return false;
        }
        if ($this->container['typeName'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets categoryId
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     * @param int $categoryId category_id integer
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets graphicId
     * @return int
     */
    public function getGraphicId()
    {
        return $this->container['graphicId'];
    }

    /**
     * Sets graphicId
     * @param int $graphicId graphic_id integer
     * @return $this
     */
    public function setGraphicId($graphicId)
    {
        $this->container['graphicId'] = $graphicId;

        return $this;
    }

    /**
     * Gets groupId
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     * @param int $groupId group_id integer
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets iconId
     * @return int
     */
    public function getIconId()
    {
        return $this->container['iconId'];
    }

    /**
     * Sets iconId
     * @param int $iconId icon_id integer
     * @return $this
     */
    public function setIconId($iconId)
    {
        $this->container['iconId'] = $iconId;

        return $this;
    }

    /**
     * Gets typeDescription
     * @return string
     */
    public function getTypeDescription()
    {
        return $this->container['typeDescription'];
    }

    /**
     * Sets typeDescription
     * @param string $typeDescription type_description string
     * @return $this
     */
    public function setTypeDescription($typeDescription)
    {
        $this->container['typeDescription'] = $typeDescription;

        return $this;
    }

    /**
     * Gets typeName
     * @return string
     */
    public function getTypeName()
    {
        return $this->container['typeName'];
    }

    /**
     * Sets typeName
     * @param string $typeName type_name string
     * @return $this
     */
    public function setTypeName($typeName)
    {
        $this->container['typeName'] = $typeName;

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
