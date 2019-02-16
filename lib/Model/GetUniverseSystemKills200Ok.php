<?php
/**
 * GetUniverseSystemKills200Ok
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
 * OpenAPI spec version: 0.8.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1
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
 * GetUniverseSystemKills200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseSystemKills200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_system_kills_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'npc_kills' => 'int',
        'pod_kills' => 'int',
        'ship_kills' => 'int',
        'system_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'npc_kills' => 'int32',
        'pod_kills' => 'int32',
        'ship_kills' => 'int32',
        'system_id' => 'int32'
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
        'npc_kills' => 'npc_kills',
        'pod_kills' => 'pod_kills',
        'ship_kills' => 'ship_kills',
        'system_id' => 'system_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'npc_kills' => 'setNpcKills',
        'pod_kills' => 'setPodKills',
        'ship_kills' => 'setShipKills',
        'system_id' => 'setSystemId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'npc_kills' => 'getNpcKills',
        'pod_kills' => 'getPodKills',
        'ship_kills' => 'getShipKills',
        'system_id' => 'getSystemId'
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
        $this->container['npc_kills'] = isset($data['npc_kills']) ? $data['npc_kills'] : null;
        $this->container['pod_kills'] = isset($data['pod_kills']) ? $data['pod_kills'] : null;
        $this->container['ship_kills'] = isset($data['ship_kills']) ? $data['ship_kills'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['npc_kills'] === null) {
            $invalidProperties[] = "'npc_kills' can't be null";
        }
        if ($this->container['pod_kills'] === null) {
            $invalidProperties[] = "'pod_kills' can't be null";
        }
        if ($this->container['ship_kills'] === null) {
            $invalidProperties[] = "'ship_kills' can't be null";
        }
        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
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
     * Gets npc_kills
     *
     * @return int
     */
    public function getNpcKills()
    {
        return $this->container['npc_kills'];
    }

    /**
     * Sets npc_kills
     *
     * @param int $npc_kills Number of NPC ships killed in this system
     *
     * @return $this
     */
    public function setNpcKills($npc_kills)
    {
        $this->container['npc_kills'] = $npc_kills;

        return $this;
    }

    /**
     * Gets pod_kills
     *
     * @return int
     */
    public function getPodKills()
    {
        return $this->container['pod_kills'];
    }

    /**
     * Sets pod_kills
     *
     * @param int $pod_kills Number of pods killed in this system
     *
     * @return $this
     */
    public function setPodKills($pod_kills)
    {
        $this->container['pod_kills'] = $pod_kills;

        return $this;
    }

    /**
     * Gets ship_kills
     *
     * @return int
     */
    public function getShipKills()
    {
        return $this->container['ship_kills'];
    }

    /**
     * Sets ship_kills
     *
     * @param int $ship_kills Number of player ships killed in this system
     *
     * @return $this
     */
    public function setShipKills($ship_kills)
    {
        $this->container['ship_kills'] = $ship_kills;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id system_id integer
     *
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

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


