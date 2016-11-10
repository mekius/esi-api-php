<?php
/**
 * GetCharactersCharacterIdWalletsTransactions200OkObject
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
 * GetCharactersCharacterIdWalletsTransactions200OkObject Class Doc Comment
 *
 * @category    Class */
 // @description wallet transaction
/**
 * @package     ESI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdWalletsTransactions200OkObject implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_wallets_transactions_200_ok_object';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clientId' => 'int',
        'clientType' => 'string',
        'journalRefId' => 'int',
        'locationId' => 'int',
        'locationType' => 'string',
        'pricePerUnit' => 'int',
        'quantity' => 'int',
        'transactionDate' => '\DateTime',
        'transactionFor' => 'string',
        'transactionId' => 'int',
        'transactionType' => 'string',
        'typeId' => 'int'
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
        'clientId' => 'client_id',
        'clientType' => 'client_type',
        'journalRefId' => 'journal_ref_id',
        'locationId' => 'location_id',
        'locationType' => 'location_type',
        'pricePerUnit' => 'price_per_unit',
        'quantity' => 'quantity',
        'transactionDate' => 'transaction_date',
        'transactionFor' => 'transaction_for',
        'transactionId' => 'transaction_id',
        'transactionType' => 'transaction_type',
        'typeId' => 'type_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'clientId' => 'setClientId',
        'clientType' => 'setClientType',
        'journalRefId' => 'setJournalRefId',
        'locationId' => 'setLocationId',
        'locationType' => 'setLocationType',
        'pricePerUnit' => 'setPricePerUnit',
        'quantity' => 'setQuantity',
        'transactionDate' => 'setTransactionDate',
        'transactionFor' => 'setTransactionFor',
        'transactionId' => 'setTransactionId',
        'transactionType' => 'setTransactionType',
        'typeId' => 'setTypeId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'clientId' => 'getClientId',
        'clientType' => 'getClientType',
        'journalRefId' => 'getJournalRefId',
        'locationId' => 'getLocationId',
        'locationType' => 'getLocationType',
        'pricePerUnit' => 'getPricePerUnit',
        'quantity' => 'getQuantity',
        'transactionDate' => 'getTransactionDate',
        'transactionFor' => 'getTransactionFor',
        'transactionId' => 'getTransactionId',
        'transactionType' => 'getTransactionType',
        'typeId' => 'getTypeId'
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

    const CLIENT_TYPE_CHARACTER = 'character';
    const CLIENT_TYPE_CORPORATION = 'corporation';
    const CLIENT_TYPE_ALLIANCE = 'alliance';
    const LOCATION_TYPE_STATION = 'station';
    const LOCATION_TYPE_STRUCTURE = 'structure';
    const TRANSACTION_FOR_PERSONAL = 'personal';
    const TRANSACTION_FOR_CORPORATE = 'corporate';
    const TRANSACTION_TYPE_BUY = 'buy';
    const TRANSACTION_TYPE_SELL = 'sell';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getClientTypeAllowableValues()
    {
        return [
            self::CLIENT_TYPE_CHARACTER,
            self::CLIENT_TYPE_CORPORATION,
            self::CLIENT_TYPE_ALLIANCE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLocationTypeAllowableValues()
    {
        return [
            self::LOCATION_TYPE_STATION,
            self::LOCATION_TYPE_STRUCTURE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTransactionForAllowableValues()
    {
        return [
            self::TRANSACTION_FOR_PERSONAL,
            self::TRANSACTION_FOR_CORPORATE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTransactionTypeAllowableValues()
    {
        return [
            self::TRANSACTION_TYPE_BUY,
            self::TRANSACTION_TYPE_SELL,
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
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientType'] = isset($data['clientType']) ? $data['clientType'] : null;
        $this->container['journalRefId'] = isset($data['journalRefId']) ? $data['journalRefId'] : null;
        $this->container['locationId'] = isset($data['locationId']) ? $data['locationId'] : null;
        $this->container['locationType'] = isset($data['locationType']) ? $data['locationType'] : null;
        $this->container['pricePerUnit'] = isset($data['pricePerUnit']) ? $data['pricePerUnit'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['transactionDate'] = isset($data['transactionDate']) ? $data['transactionDate'] : null;
        $this->container['transactionFor'] = isset($data['transactionFor']) ? $data['transactionFor'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["character", "corporation", "alliance"];
        if (!in_array($this->container['clientType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'clientType', must be one of #{allowed_values}.";
        }

        $allowed_values = ["station", "structure"];
        if (!in_array($this->container['locationType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'locationType', must be one of #{allowed_values}.";
        }

        if ($this->container['transactionDate'] === null) {
            $invalid_properties[] = "'transactionDate' can't be null";
        }
        $allowed_values = ["personal", "corporate"];
        if (!in_array($this->container['transactionFor'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'transactionFor', must be one of #{allowed_values}.";
        }

        if ($this->container['transactionId'] === null) {
            $invalid_properties[] = "'transactionId' can't be null";
        }
        $allowed_values = ["buy", "sell"];
        if (!in_array($this->container['transactionType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'transactionType', must be one of #{allowed_values}.";
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
        $allowed_values = ["character", "corporation", "alliance"];
        if (!in_array($this->container['clientType'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["station", "structure"];
        if (!in_array($this->container['locationType'], $allowed_values)) {
            return false;
        }
        if ($this->container['transactionDate'] === null) {
            return false;
        }
        $allowed_values = ["personal", "corporate"];
        if (!in_array($this->container['transactionFor'], $allowed_values)) {
            return false;
        }
        if ($this->container['transactionId'] === null) {
            return false;
        }
        $allowed_values = ["buy", "sell"];
        if (!in_array($this->container['transactionType'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets clientId
     * @return int
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     * @param int $clientId client_id integer
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets clientType
     * @return string
     */
    public function getClientType()
    {
        return $this->container['clientType'];
    }

    /**
     * Sets clientType
     * @param string $clientType client_type string
     * @return $this
     */
    public function setClientType($clientType)
    {
        $allowed_values = array('character', 'corporation', 'alliance');
        if (!is_null($clientType) && (!in_array($clientType, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'clientType', must be one of 'character', 'corporation', 'alliance'");
        }
        $this->container['clientType'] = $clientType;

        return $this;
    }

    /**
     * Gets journalRefId
     * @return int
     */
    public function getJournalRefId()
    {
        return $this->container['journalRefId'];
    }

    /**
     * Sets journalRefId
     * @param int $journalRefId journal_ref_id integer
     * @return $this
     */
    public function setJournalRefId($journalRefId)
    {
        $this->container['journalRefId'] = $journalRefId;

        return $this;
    }

    /**
     * Gets locationId
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
     * Sets locationId
     * @param int $locationId location_id integer
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;

        return $this;
    }

    /**
     * Gets locationType
     * @return string
     */
    public function getLocationType()
    {
        return $this->container['locationType'];
    }

    /**
     * Sets locationType
     * @param string $locationType location_type string
     * @return $this
     */
    public function setLocationType($locationType)
    {
        $allowed_values = array('station', 'structure');
        if (!is_null($locationType) && (!in_array($locationType, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'locationType', must be one of 'station', 'structure'");
        }
        $this->container['locationType'] = $locationType;

        return $this;
    }

    /**
     * Gets pricePerUnit
     * @return int
     */
    public function getPricePerUnit()
    {
        return $this->container['pricePerUnit'];
    }

    /**
     * Sets pricePerUnit
     * @param int $pricePerUnit price_per_unit integer
     * @return $this
     */
    public function setPricePerUnit($pricePerUnit)
    {
        $this->container['pricePerUnit'] = $pricePerUnit;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity quantity integer
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets transactionDate
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->container['transactionDate'];
    }

    /**
     * Sets transactionDate
     * @param \DateTime $transactionDate transaction_date string
     * @return $this
     */
    public function setTransactionDate($transactionDate)
    {
        $this->container['transactionDate'] = $transactionDate;

        return $this;
    }

    /**
     * Gets transactionFor
     * @return string
     */
    public function getTransactionFor()
    {
        return $this->container['transactionFor'];
    }

    /**
     * Sets transactionFor
     * @param string $transactionFor transaction_for string
     * @return $this
     */
    public function setTransactionFor($transactionFor)
    {
        $allowed_values = array('personal', 'corporate');
        if (!is_null($transactionFor) && (!in_array($transactionFor, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'transactionFor', must be one of 'personal', 'corporate'");
        }
        $this->container['transactionFor'] = $transactionFor;

        return $this;
    }

    /**
     * Gets transactionId
     * @return int
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     * @param int $transactionId transaction_id integer
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets transactionType
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     * @param string $transactionType transaction_type string
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $allowed_values = array('buy', 'sell');
        if (!is_null($transactionType) && (!in_array($transactionType, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'transactionType', must be one of 'buy', 'sell'");
        }
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets typeId
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
     * Sets typeId
     * @param int $typeId type_id integer
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;

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
