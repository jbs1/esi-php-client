<?php
/**
 * GetCorporationsCorporationIdMedalsIssued200Ok
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
 * OpenAPI spec version: 0.7.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0
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
 * GetCorporationsCorporationIdMedalsIssued200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdMedalsIssued200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_medals_issued_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'medal_id' => 'int',
        'character_id' => 'int',
        'reason' => 'string',
        'status' => 'string',
        'issuer_id' => 'int',
        'issued_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'medal_id' => 'int32',
        'character_id' => 'int32',
        'reason' => null,
        'status' => null,
        'issuer_id' => 'int32',
        'issued_at' => 'date-time'
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
        'medal_id' => 'medal_id',
        'character_id' => 'character_id',
        'reason' => 'reason',
        'status' => 'status',
        'issuer_id' => 'issuer_id',
        'issued_at' => 'issued_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'medal_id' => 'setMedalId',
        'character_id' => 'setCharacterId',
        'reason' => 'setReason',
        'status' => 'setStatus',
        'issuer_id' => 'setIssuerId',
        'issued_at' => 'setIssuedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'medal_id' => 'getMedalId',
        'character_id' => 'getCharacterId',
        'reason' => 'getReason',
        'status' => 'getStatus',
        'issuer_id' => 'getIssuerId',
        'issued_at' => 'getIssuedAt'
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

    const STATUS__PRIVATE = 'private';
    const STATUS__PUBLIC = 'public';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__PRIVATE,
            self::STATUS__PUBLIC,
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
        $this->container['medal_id'] = isset($data['medal_id']) ? $data['medal_id'] : null;
        $this->container['character_id'] = isset($data['character_id']) ? $data['character_id'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['issuer_id'] = isset($data['issuer_id']) ? $data['issuer_id'] : null;
        $this->container['issued_at'] = isset($data['issued_at']) ? $data['issued_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['medal_id'] === null) {
            $invalidProperties[] = "'medal_id' can't be null";
        }
        if ($this->container['character_id'] === null) {
            $invalidProperties[] = "'character_id' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        if ((strlen($this->container['reason']) > 1000)) {
            $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 1000.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['issuer_id'] === null) {
            $invalidProperties[] = "'issuer_id' can't be null";
        }
        if ($this->container['issued_at'] === null) {
            $invalidProperties[] = "'issued_at' can't be null";
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

        if ($this->container['medal_id'] === null) {
            return false;
        }
        if ($this->container['character_id'] === null) {
            return false;
        }
        if ($this->container['reason'] === null) {
            return false;
        }
        if (strlen($this->container['reason']) > 1000) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        if ($this->container['issuer_id'] === null) {
            return false;
        }
        if ($this->container['issued_at'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets medal_id
     *
     * @return int
     */
    public function getMedalId()
    {
        return $this->container['medal_id'];
    }

    /**
     * Sets medal_id
     *
     * @param int $medal_id medal_id integer
     *
     * @return $this
     */
    public function setMedalId($medal_id)
    {
        $this->container['medal_id'] = $medal_id;

        return $this;
    }

    /**
     * Gets character_id
     *
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     *
     * @param int $character_id ID of the character who was rewarded this medal
     *
     * @return $this
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

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
     * @param string $reason reason string
     *
     * @return $this
     */
    public function setReason($reason)
    {
        if ((strlen($reason) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling GetCorporationsCorporationIdMedalsIssued200Ok., must be smaller than or equal to 1000.');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status string
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets issuer_id
     *
     * @return int
     */
    public function getIssuerId()
    {
        return $this->container['issuer_id'];
    }

    /**
     * Sets issuer_id
     *
     * @param int $issuer_id ID of the character who issued the medal
     *
     * @return $this
     */
    public function setIssuerId($issuer_id)
    {
        $this->container['issuer_id'] = $issuer_id;

        return $this;
    }

    /**
     * Gets issued_at
     *
     * @return \DateTime
     */
    public function getIssuedAt()
    {
        return $this->container['issued_at'];
    }

    /**
     * Sets issued_at
     *
     * @param \DateTime $issued_at issued_at string
     *
     * @return $this
     */
    public function setIssuedAt($issued_at)
    {
        $this->container['issued_at'] = $issued_at;

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


