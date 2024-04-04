<?php
/**
 * GetFwStats200Ok
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
 * GetFwStats200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetFwStats200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_fw_stats_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'faction_id' => 'int',
        'kills' => '\Swagger\Client\Model\GetFwStatsKills',
        'pilots' => 'int',
        'systems_controlled' => 'int',
        'victory_points' => '\Swagger\Client\Model\GetFwStatsVictoryPoints'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'faction_id' => 'int32',
        'kills' => null,
        'pilots' => 'int32',
        'systems_controlled' => 'int32',
        'victory_points' => null
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
        'faction_id' => 'faction_id',
        'kills' => 'kills',
        'pilots' => 'pilots',
        'systems_controlled' => 'systems_controlled',
        'victory_points' => 'victory_points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'faction_id' => 'setFactionId',
        'kills' => 'setKills',
        'pilots' => 'setPilots',
        'systems_controlled' => 'setSystemsControlled',
        'victory_points' => 'setVictoryPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'faction_id' => 'getFactionId',
        'kills' => 'getKills',
        'pilots' => 'getPilots',
        'systems_controlled' => 'getSystemsControlled',
        'victory_points' => 'getVictoryPoints'
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
        $this->container['faction_id'] = isset($data['faction_id']) ? $data['faction_id'] : null;
        $this->container['kills'] = isset($data['kills']) ? $data['kills'] : null;
        $this->container['pilots'] = isset($data['pilots']) ? $data['pilots'] : null;
        $this->container['systems_controlled'] = isset($data['systems_controlled']) ? $data['systems_controlled'] : null;
        $this->container['victory_points'] = isset($data['victory_points']) ? $data['victory_points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['faction_id'] === null) {
            $invalidProperties[] = "'faction_id' can't be null";
        }
        if ($this->container['kills'] === null) {
            $invalidProperties[] = "'kills' can't be null";
        }
        if ($this->container['pilots'] === null) {
            $invalidProperties[] = "'pilots' can't be null";
        }
        if ($this->container['systems_controlled'] === null) {
            $invalidProperties[] = "'systems_controlled' can't be null";
        }
        if ($this->container['victory_points'] === null) {
            $invalidProperties[] = "'victory_points' can't be null";
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
     * Gets faction_id
     *
     * @return int
     */
    public function getFactionId()
    {
        return $this->container['faction_id'];
    }

    /**
     * Sets faction_id
     *
     * @param int $faction_id faction_id integer
     *
     * @return $this
     */
    public function setFactionId($faction_id)
    {
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets kills
     *
     * @return \Swagger\Client\Model\GetFwStatsKills
     */
    public function getKills()
    {
        return $this->container['kills'];
    }

    /**
     * Sets kills
     *
     * @param \Swagger\Client\Model\GetFwStatsKills $kills kills
     *
     * @return $this
     */
    public function setKills($kills)
    {
        $this->container['kills'] = $kills;

        return $this;
    }

    /**
     * Gets pilots
     *
     * @return int
     */
    public function getPilots()
    {
        return $this->container['pilots'];
    }

    /**
     * Sets pilots
     *
     * @param int $pilots How many pilots fight for the given faction
     *
     * @return $this
     */
    public function setPilots($pilots)
    {
        $this->container['pilots'] = $pilots;

        return $this;
    }

    /**
     * Gets systems_controlled
     *
     * @return int
     */
    public function getSystemsControlled()
    {
        return $this->container['systems_controlled'];
    }

    /**
     * Sets systems_controlled
     *
     * @param int $systems_controlled The number of solar systems controlled by the given faction
     *
     * @return $this
     */
    public function setSystemsControlled($systems_controlled)
    {
        $this->container['systems_controlled'] = $systems_controlled;

        return $this;
    }

    /**
     * Gets victory_points
     *
     * @return \Swagger\Client\Model\GetFwStatsVictoryPoints
     */
    public function getVictoryPoints()
    {
        return $this->container['victory_points'];
    }

    /**
     * Sets victory_points
     *
     * @param \Swagger\Client\Model\GetFwStatsVictoryPoints $victory_points victory_points
     *
     * @return $this
     */
    public function setVictoryPoints($victory_points)
    {
        $this->container['victory_points'] = $victory_points;

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
