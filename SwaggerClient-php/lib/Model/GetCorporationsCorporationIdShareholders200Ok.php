<?php
/**
 * GetCorporationsCorporationIdShareholders200Ok
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
 * OpenAPI spec version: 0.7.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
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
 * GetCorporationsCorporationIdShareholders200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdShareholders200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_shareholders_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shareholder_id' => 'int',
        'shareholder_type' => 'string',
        'share_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shareholder_id' => 'int32',
        'shareholder_type' => null,
        'share_count' => 'int64'
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
        'shareholder_id' => 'shareholder_id',
        'shareholder_type' => 'shareholder_type',
        'share_count' => 'share_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shareholder_id' => 'setShareholderId',
        'shareholder_type' => 'setShareholderType',
        'share_count' => 'setShareCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shareholder_id' => 'getShareholderId',
        'shareholder_type' => 'getShareholderType',
        'share_count' => 'getShareCount'
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

    const SHAREHOLDER_TYPE_CHARACTER = 'character';
    const SHAREHOLDER_TYPE_CORPORATION = 'corporation';
    

    
    /**
     * Gets allowable values of the enum
     *
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
        $this->container['shareholder_id'] = isset($data['shareholder_id']) ? $data['shareholder_id'] : null;
        $this->container['shareholder_type'] = isset($data['shareholder_type']) ? $data['shareholder_type'] : null;
        $this->container['share_count'] = isset($data['share_count']) ? $data['share_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shareholder_id'] === null) {
            $invalidProperties[] = "'shareholder_id' can't be null";
        }
        if ($this->container['shareholder_type'] === null) {
            $invalidProperties[] = "'shareholder_type' can't be null";
        }
        $allowedValues = $this->getShareholderTypeAllowableValues();
        if (!in_array($this->container['shareholder_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shareholder_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['share_count'] === null) {
            $invalidProperties[] = "'share_count' can't be null";
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

        if ($this->container['shareholder_id'] === null) {
            return false;
        }
        if ($this->container['shareholder_type'] === null) {
            return false;
        }
        $allowedValues = $this->getShareholderTypeAllowableValues();
        if (!in_array($this->container['shareholder_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['share_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets shareholder_id
     *
     * @return int
     */
    public function getShareholderId()
    {
        return $this->container['shareholder_id'];
    }

    /**
     * Sets shareholder_id
     *
     * @param int $shareholder_id shareholder_id integer
     *
     * @return $this
     */
    public function setShareholderId($shareholder_id)
    {
        $this->container['shareholder_id'] = $shareholder_id;

        return $this;
    }

    /**
     * Gets shareholder_type
     *
     * @return string
     */
    public function getShareholderType()
    {
        return $this->container['shareholder_type'];
    }

    /**
     * Sets shareholder_type
     *
     * @param string $shareholder_type shareholder_type string
     *
     * @return $this
     */
    public function setShareholderType($shareholder_type)
    {
        $allowedValues = $this->getShareholderTypeAllowableValues();
        if (!in_array($shareholder_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shareholder_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shareholder_type'] = $shareholder_type;

        return $this;
    }

    /**
     * Gets share_count
     *
     * @return int
     */
    public function getShareCount()
    {
        return $this->container['share_count'];
    }

    /**
     * Sets share_count
     *
     * @param int $share_count share_count integer
     *
     * @return $this
     */
    public function setShareCount($share_count)
    {
        $this->container['share_count'] = $share_count;

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


