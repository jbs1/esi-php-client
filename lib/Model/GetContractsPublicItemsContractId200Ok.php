<?php
/**
 * GetContractsPublicItemsContractId200Ok
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
 * OpenAPI spec version: 1.2.9
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
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
 * GetContractsPublicItemsContractId200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetContractsPublicItemsContractId200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_contracts_public_items_contract_id_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_blueprint_copy' => 'bool',
        'is_included' => 'bool',
        'item_id' => 'int',
        'material_efficiency' => 'int',
        'quantity' => 'int',
        'record_id' => 'int',
        'runs' => 'int',
        'time_efficiency' => 'int',
        'type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_blueprint_copy' => null,
        'is_included' => null,
        'item_id' => 'int64',
        'material_efficiency' => 'int32',
        'quantity' => 'int32',
        'record_id' => 'int64',
        'runs' => 'int32',
        'time_efficiency' => 'int32',
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
        'is_blueprint_copy' => 'is_blueprint_copy',
        'is_included' => 'is_included',
        'item_id' => 'item_id',
        'material_efficiency' => 'material_efficiency',
        'quantity' => 'quantity',
        'record_id' => 'record_id',
        'runs' => 'runs',
        'time_efficiency' => 'time_efficiency',
        'type_id' => 'type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_blueprint_copy' => 'setIsBlueprintCopy',
        'is_included' => 'setIsIncluded',
        'item_id' => 'setItemId',
        'material_efficiency' => 'setMaterialEfficiency',
        'quantity' => 'setQuantity',
        'record_id' => 'setRecordId',
        'runs' => 'setRuns',
        'time_efficiency' => 'setTimeEfficiency',
        'type_id' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_blueprint_copy' => 'getIsBlueprintCopy',
        'is_included' => 'getIsIncluded',
        'item_id' => 'getItemId',
        'material_efficiency' => 'getMaterialEfficiency',
        'quantity' => 'getQuantity',
        'record_id' => 'getRecordId',
        'runs' => 'getRuns',
        'time_efficiency' => 'getTimeEfficiency',
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
        $this->container['is_blueprint_copy'] = isset($data['is_blueprint_copy']) ? $data['is_blueprint_copy'] : null;
        $this->container['is_included'] = isset($data['is_included']) ? $data['is_included'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['material_efficiency'] = isset($data['material_efficiency']) ? $data['material_efficiency'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['record_id'] = isset($data['record_id']) ? $data['record_id'] : null;
        $this->container['runs'] = isset($data['runs']) ? $data['runs'] : null;
        $this->container['time_efficiency'] = isset($data['time_efficiency']) ? $data['time_efficiency'] : null;
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
        if (!is_null($this->container['material_efficiency']) && ($this->container['material_efficiency'] > 25)) {
            $invalidProperties[] = "invalid value for 'material_efficiency', must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['material_efficiency']) && ($this->container['material_efficiency'] < 0)) {
            $invalidProperties[] = "invalid value for 'material_efficiency', must be bigger than or equal to 0.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['record_id'] === null) {
            $invalidProperties[] = "'record_id' can't be null";
        }
        if (!is_null($this->container['runs']) && ($this->container['runs'] < -1)) {
            $invalidProperties[] = "invalid value for 'runs', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['time_efficiency']) && ($this->container['time_efficiency'] > 20)) {
            $invalidProperties[] = "invalid value for 'time_efficiency', must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['time_efficiency']) && ($this->container['time_efficiency'] < 0)) {
            $invalidProperties[] = "invalid value for 'time_efficiency', must be bigger than or equal to 0.";
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
     * Gets is_blueprint_copy
     *
     * @return bool
     */
    public function getIsBlueprintCopy()
    {
        return $this->container['is_blueprint_copy'];
    }

    /**
     * Sets is_blueprint_copy
     *
     * @param bool $is_blueprint_copy is_blueprint_copy boolean
     *
     * @return $this
     */
    public function setIsBlueprintCopy($is_blueprint_copy)
    {
        $this->container['is_blueprint_copy'] = $is_blueprint_copy;

        return $this;
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
     * Gets item_id
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int $item_id Unique ID for the item being sold. Not present if item is being requested by contract rather than sold with contract
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets material_efficiency
     *
     * @return int
     */
    public function getMaterialEfficiency()
    {
        return $this->container['material_efficiency'];
    }

    /**
     * Sets material_efficiency
     *
     * @param int $material_efficiency Material Efficiency Level of the blueprint
     *
     * @return $this
     */
    public function setMaterialEfficiency($material_efficiency)
    {

        if (!is_null($material_efficiency) && ($material_efficiency > 25)) {
            throw new \InvalidArgumentException('invalid value for $material_efficiency when calling GetContractsPublicItemsContractId200Ok., must be smaller than or equal to 25.');
        }
        if (!is_null($material_efficiency) && ($material_efficiency < 0)) {
            throw new \InvalidArgumentException('invalid value for $material_efficiency when calling GetContractsPublicItemsContractId200Ok., must be bigger than or equal to 0.');
        }

        $this->container['material_efficiency'] = $material_efficiency;

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
     * @param int $record_id Unique ID for the item, used by the contract system
     *
     * @return $this
     */
    public function setRecordId($record_id)
    {
        $this->container['record_id'] = $record_id;

        return $this;
    }

    /**
     * Gets runs
     *
     * @return int
     */
    public function getRuns()
    {
        return $this->container['runs'];
    }

    /**
     * Sets runs
     *
     * @param int $runs Number of runs remaining if the blueprint is a copy, -1 if it is an original
     *
     * @return $this
     */
    public function setRuns($runs)
    {

        if (!is_null($runs) && ($runs < -1)) {
            throw new \InvalidArgumentException('invalid value for $runs when calling GetContractsPublicItemsContractId200Ok., must be bigger than or equal to -1.');
        }

        $this->container['runs'] = $runs;

        return $this;
    }

    /**
     * Gets time_efficiency
     *
     * @return int
     */
    public function getTimeEfficiency()
    {
        return $this->container['time_efficiency'];
    }

    /**
     * Sets time_efficiency
     *
     * @param int $time_efficiency Time Efficiency Level of the blueprint
     *
     * @return $this
     */
    public function setTimeEfficiency($time_efficiency)
    {

        if (!is_null($time_efficiency) && ($time_efficiency > 20)) {
            throw new \InvalidArgumentException('invalid value for $time_efficiency when calling GetContractsPublicItemsContractId200Ok., must be smaller than or equal to 20.');
        }
        if (!is_null($time_efficiency) && ($time_efficiency < 0)) {
            throw new \InvalidArgumentException('invalid value for $time_efficiency when calling GetContractsPublicItemsContractId200Ok., must be bigger than or equal to 0.');
        }

        $this->container['time_efficiency'] = $time_efficiency;

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


