<?php
/**
 * GetCorporationsCorporationIdContractsContractIdItems200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 1.21
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.54
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GetCorporationsCorporationIdContractsContractIdItems200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdContractsContractIdItems200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_contracts_contract_id_items_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_included' => 'bool',
        'is_singleton' => 'bool',
        'quantity' => 'int',
        'raw_quantity' => 'int',
        'record_id' => 'int',
        'type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_included' => null,
        'is_singleton' => null,
        'quantity' => 'int32',
        'raw_quantity' => 'int32',
        'record_id' => 'int64',
        'type_id' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_included' => 'is_included',
        'is_singleton' => 'is_singleton',
        'quantity' => 'quantity',
        'raw_quantity' => 'raw_quantity',
        'record_id' => 'record_id',
        'type_id' => 'type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_included' => 'setIsIncluded',
        'is_singleton' => 'setIsSingleton',
        'quantity' => 'setQuantity',
        'raw_quantity' => 'setRawQuantity',
        'record_id' => 'setRecordId',
        'type_id' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_included' => 'getIsIncluded',
        'is_singleton' => 'getIsSingleton',
        'quantity' => 'getQuantity',
        'raw_quantity' => 'getRawQuantity',
        'record_id' => 'getRecordId',
        'type_id' => 'getTypeId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['is_included'] = isset($data['is_included']) ? $data['is_included'] : null;
        $this->container['is_singleton'] = isset($data['is_singleton']) ? $data['is_singleton'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['raw_quantity'] = isset($data['raw_quantity']) ? $data['raw_quantity'] : null;
        $this->container['record_id'] = isset($data['record_id']) ? $data['record_id'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_included'] === null) {
            $invalidProperties[] = "'is_included' can't be null";
        }
        if ($this->container['is_singleton'] === null) {
            $invalidProperties[] = "'is_singleton' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['record_id'] === null) {
            $invalidProperties[] = "'record_id' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets is_included
     *
     * @return bool
     */
    public function getIsIncluded()
    {
        return $this->container['is_included'];
    }

    /**
     * Sets is_included
     *
     * @param bool $is_included true if the contract issuer has submitted this item with the contract, false if the isser is asking for this item in the contract
     *
     * @return $this
     */
    public function setIsIncluded($is_included)
    {
        $this->container['is_included'] = $is_included;

        return $this;
    }

    /**
     * Gets is_singleton
     *
     * @return bool
     */
    public function getIsSingleton()
    {
        return $this->container['is_singleton'];
    }

    /**
     * Sets is_singleton
     *
     * @param bool $is_singleton is_singleton boolean
     *
     * @return $this
     */
    public function setIsSingleton($is_singleton)
    {
        $this->container['is_singleton'] = $is_singleton;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Number of items in the stack
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets raw_quantity
     *
     * @return int
     */
    public function getRawQuantity()
    {
        return $this->container['raw_quantity'];
    }

    /**
     * Sets raw_quantity
     *
     * @param int $raw_quantity -1 indicates that the item is a singleton (non-stackable). If the item happens to be a Blueprint, -1 is an Original and -2 is a Blueprint Copy
     *
     * @return $this
     */
    public function setRawQuantity($raw_quantity)
    {
        $this->container['raw_quantity'] = $raw_quantity;

        return $this;
    }

    /**
     * Gets record_id
     *
     * @return int
     */
    public function getRecordId()
    {
        return $this->container['record_id'];
    }

    /**
     * Sets record_id
     *
     * @param int $record_id Unique ID for the item
     *
     * @return $this
     */
    public function setRecordId($record_id)
    {
        $this->container['record_id'] = $record_id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id Type ID for item
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
