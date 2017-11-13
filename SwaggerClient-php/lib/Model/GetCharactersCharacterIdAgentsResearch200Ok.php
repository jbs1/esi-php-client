<?php
/**
 * GetCharactersCharacterIdAgentsResearch200Ok
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
 * GetCharactersCharacterIdAgentsResearch200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdAgentsResearch200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_agents_research_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agent_id' => 'int',
        'skill_type_id' => 'int',
        'started_at' => '\DateTime',
        'points_per_day' => 'float',
        'remainder_points' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agent_id' => 'int32',
        'skill_type_id' => 'int32',
        'started_at' => 'date-time',
        'points_per_day' => 'float',
        'remainder_points' => 'float'
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
        'agent_id' => 'agent_id',
        'skill_type_id' => 'skill_type_id',
        'started_at' => 'started_at',
        'points_per_day' => 'points_per_day',
        'remainder_points' => 'remainder_points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agent_id' => 'setAgentId',
        'skill_type_id' => 'setSkillTypeId',
        'started_at' => 'setStartedAt',
        'points_per_day' => 'setPointsPerDay',
        'remainder_points' => 'setRemainderPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agent_id' => 'getAgentId',
        'skill_type_id' => 'getSkillTypeId',
        'started_at' => 'getStartedAt',
        'points_per_day' => 'getPointsPerDay',
        'remainder_points' => 'getRemainderPoints'
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
        $this->container['agent_id'] = isset($data['agent_id']) ? $data['agent_id'] : null;
        $this->container['skill_type_id'] = isset($data['skill_type_id']) ? $data['skill_type_id'] : null;
        $this->container['started_at'] = isset($data['started_at']) ? $data['started_at'] : null;
        $this->container['points_per_day'] = isset($data['points_per_day']) ? $data['points_per_day'] : null;
        $this->container['remainder_points'] = isset($data['remainder_points']) ? $data['remainder_points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['agent_id'] === null) {
            $invalidProperties[] = "'agent_id' can't be null";
        }
        if ($this->container['skill_type_id'] === null) {
            $invalidProperties[] = "'skill_type_id' can't be null";
        }
        if ($this->container['started_at'] === null) {
            $invalidProperties[] = "'started_at' can't be null";
        }
        if ($this->container['points_per_day'] === null) {
            $invalidProperties[] = "'points_per_day' can't be null";
        }
        if ($this->container['remainder_points'] === null) {
            $invalidProperties[] = "'remainder_points' can't be null";
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

        if ($this->container['agent_id'] === null) {
            return false;
        }
        if ($this->container['skill_type_id'] === null) {
            return false;
        }
        if ($this->container['started_at'] === null) {
            return false;
        }
        if ($this->container['points_per_day'] === null) {
            return false;
        }
        if ($this->container['remainder_points'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets agent_id
     *
     * @return int
     */
    public function getAgentId()
    {
        return $this->container['agent_id'];
    }

    /**
     * Sets agent_id
     *
     * @param int $agent_id agent_id integer
     *
     * @return $this
     */
    public function setAgentId($agent_id)
    {
        $this->container['agent_id'] = $agent_id;

        return $this;
    }

    /**
     * Gets skill_type_id
     *
     * @return int
     */
    public function getSkillTypeId()
    {
        return $this->container['skill_type_id'];
    }

    /**
     * Sets skill_type_id
     *
     * @param int $skill_type_id skill_type_id integer
     *
     * @return $this
     */
    public function setSkillTypeId($skill_type_id)
    {
        $this->container['skill_type_id'] = $skill_type_id;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param \DateTime $started_at started_at string
     *
     * @return $this
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets points_per_day
     *
     * @return float
     */
    public function getPointsPerDay()
    {
        return $this->container['points_per_day'];
    }

    /**
     * Sets points_per_day
     *
     * @param float $points_per_day points_per_day number
     *
     * @return $this
     */
    public function setPointsPerDay($points_per_day)
    {
        $this->container['points_per_day'] = $points_per_day;

        return $this;
    }

    /**
     * Gets remainder_points
     *
     * @return float
     */
    public function getRemainderPoints()
    {
        return $this->container['remainder_points'];
    }

    /**
     * Sets remainder_points
     *
     * @param float $remainder_points remainder_points number
     *
     * @return $this
     */
    public function setRemainderPoints($remainder_points)
    {
        $this->container['remainder_points'] = $remainder_points;

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


