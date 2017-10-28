<?php
/**
 * GetCharactersCharacterIdChatChannelsMuted
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
 * OpenAPI spec version: 0.7.0
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
 * GetCharactersCharacterIdChatChannelsMuted Class Doc Comment
 *
 * @category Class
 * @description muted object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdChatChannelsMuted implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_chat_channels_muted';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accessor_id' => 'int',
        'accessor_type' => 'string',
        'end_at' => '\DateTime',
        'reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accessor_id' => 'int32',
        'accessor_type' => null,
        'end_at' => 'date-time',
        'reason' => null
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
        'accessor_id' => 'accessor_id',
        'accessor_type' => 'accessor_type',
        'end_at' => 'end_at',
        'reason' => 'reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessor_id' => 'setAccessorId',
        'accessor_type' => 'setAccessorType',
        'end_at' => 'setEndAt',
        'reason' => 'setReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessor_id' => 'getAccessorId',
        'accessor_type' => 'getAccessorType',
        'end_at' => 'getEndAt',
        'reason' => 'getReason'
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

    const ACCESSOR_TYPE_CHARACTER = 'character';
    const ACCESSOR_TYPE_CORPORATION = 'corporation';
    const ACCESSOR_TYPE_ALLIANCE = 'alliance';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessorTypeAllowableValues()
    {
        return [
            self::ACCESSOR_TYPE_CHARACTER,
            self::ACCESSOR_TYPE_CORPORATION,
            self::ACCESSOR_TYPE_ALLIANCE,
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
        $this->container['accessor_id'] = isset($data['accessor_id']) ? $data['accessor_id'] : null;
        $this->container['accessor_type'] = isset($data['accessor_type']) ? $data['accessor_type'] : null;
        $this->container['end_at'] = isset($data['end_at']) ? $data['end_at'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accessor_id'] === null) {
            $invalidProperties[] = "'accessor_id' can't be null";
        }
        if ($this->container['accessor_type'] === null) {
            $invalidProperties[] = "'accessor_type' can't be null";
        }
        $allowedValues = $this->getAccessorTypeAllowableValues();
        if (!in_array($this->container['accessor_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'accessor_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['accessor_id'] === null) {
            return false;
        }
        if ($this->container['accessor_type'] === null) {
            return false;
        }
        $allowedValues = $this->getAccessorTypeAllowableValues();
        if (!in_array($this->container['accessor_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets accessor_id
     *
     * @return int
     */
    public function getAccessorId()
    {
        return $this->container['accessor_id'];
    }

    /**
     * Sets accessor_id
     *
     * @param int $accessor_id ID of a muted channel member
     *
     * @return $this
     */
    public function setAccessorId($accessor_id)
    {
        $this->container['accessor_id'] = $accessor_id;

        return $this;
    }

    /**
     * Gets accessor_type
     *
     * @return string
     */
    public function getAccessorType()
    {
        return $this->container['accessor_type'];
    }

    /**
     * Sets accessor_type
     *
     * @param string $accessor_type accessor_type string
     *
     * @return $this
     */
    public function setAccessorType($accessor_type)
    {
        $allowedValues = $this->getAccessorTypeAllowableValues();
        if (!in_array($accessor_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accessor_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accessor_type'] = $accessor_type;

        return $this;
    }

    /**
     * Gets end_at
     *
     * @return \DateTime
     */
    public function getEndAt()
    {
        return $this->container['end_at'];
    }

    /**
     * Sets end_at
     *
     * @param \DateTime $end_at Time at which this accessor will no longer be muted
     *
     * @return $this
     */
    public function setEndAt($end_at)
    {
        $this->container['end_at'] = $end_at;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Reason this accessor is muted
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

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


