<?php
/**
 * GetCorporationsCorporationIdShareholders200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.6.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetCorporationsCorporationIdShareholders200Ok Class Doc Comment
 *
 * @category    Class
 * @description 200 ok object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdShareholders200Ok implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_shareholders_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'share_count' => 'int',
        'shareholder_id' => 'int',
        'shareholder_type' => 'string'
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
        'share_count' => 'share_count',
        'shareholder_id' => 'shareholder_id',
        'shareholder_type' => 'shareholder_type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'share_count' => 'setShareCount',
        'shareholder_id' => 'setShareholderId',
        'shareholder_type' => 'setShareholderType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'share_count' => 'getShareCount',
        'shareholder_id' => 'getShareholderId',
        'shareholder_type' => 'getShareholderType'
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

    const SHAREHOLDER_TYPE_CHARACTER = 'character';
    const SHAREHOLDER_TYPE_CORPORATION = 'corporation';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getShareholderTypeAllowableValues()
    {
        return [
            self::SHAREHOLDER_TYPE_CHARACTER,
            self::SHAREHOLDER_TYPE_CORPORATION,
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
        $this->container['share_count'] = isset($data['share_count']) ? $data['share_count'] : null;
        $this->container['shareholder_id'] = isset($data['shareholder_id']) ? $data['shareholder_id'] : null;
        $this->container['shareholder_type'] = isset($data['shareholder_type']) ? $data['shareholder_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['share_count'] === null) {
            $invalid_properties[] = "'share_count' can't be null";
        }
        if ($this->container['shareholder_id'] === null) {
            $invalid_properties[] = "'shareholder_id' can't be null";
        }
        if ($this->container['shareholder_type'] === null) {
            $invalid_properties[] = "'shareholder_type' can't be null";
        }
        $allowed_values = ["character", "corporation"];
        if (!in_array($this->container['shareholder_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'shareholder_type', must be one of 'character', 'corporation'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['share_count'] === null) {
            return false;
        }
        if ($this->container['shareholder_id'] === null) {
            return false;
        }
        if ($this->container['shareholder_type'] === null) {
            return false;
        }
        $allowed_values = ["character", "corporation"];
        if (!in_array($this->container['shareholder_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets share_count
     * @return int
     */
    public function getShareCount()
    {
        return $this->container['share_count'];
    }

    /**
     * Sets share_count
     * @param int $share_count share_count integer
     * @return $this
     */
    public function setShareCount($share_count)
    {
        $this->container['share_count'] = $share_count;

        return $this;
    }

    /**
     * Gets shareholder_id
     * @return int
     */
    public function getShareholderId()
    {
        return $this->container['shareholder_id'];
    }

    /**
     * Sets shareholder_id
     * @param int $shareholder_id shareholder_id integer
     * @return $this
     */
    public function setShareholderId($shareholder_id)
    {
        $this->container['shareholder_id'] = $shareholder_id;

        return $this;
    }

    /**
     * Gets shareholder_type
     * @return string
     */
    public function getShareholderType()
    {
        return $this->container['shareholder_type'];
    }

    /**
     * Sets shareholder_type
     * @param string $shareholder_type shareholder_type string
     * @return $this
     */
    public function setShareholderType($shareholder_type)
    {
        $allowed_values = array('character', 'corporation');
        if ((!in_array($shareholder_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'shareholder_type', must be one of 'character', 'corporation'");
        }
        $this->container['shareholder_type'] = $shareholder_type;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


