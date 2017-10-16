<?php
/**
 * GetFwLeaderboardsCharactersVictoryPoints
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
 * GetFwLeaderboardsCharactersVictoryPoints Class Doc Comment
 *
 * @category    Class
 * @description Top 100 rankings of pilots by victory points from yesterday, last week and in total
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetFwLeaderboardsCharactersVictoryPoints implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_fw_leaderboards_characters_victory_points';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active_total' => '\Swagger\Client\Model\GetFwLeaderboardsCharactersActiveTotal1[]',
        'last_week' => '\Swagger\Client\Model\GetFwLeaderboardsCharactersLastWeek1[]',
        'yesterday' => '\Swagger\Client\Model\GetFwLeaderboardsCharactersYesterday1[]'
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
        'active_total' => 'active_total',
        'last_week' => 'last_week',
        'yesterday' => 'yesterday'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'active_total' => 'setActiveTotal',
        'last_week' => 'setLastWeek',
        'yesterday' => 'setYesterday'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'active_total' => 'getActiveTotal',
        'last_week' => 'getLastWeek',
        'yesterday' => 'getYesterday'
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
        $this->container['active_total'] = isset($data['active_total']) ? $data['active_total'] : null;
        $this->container['last_week'] = isset($data['last_week']) ? $data['last_week'] : null;
        $this->container['yesterday'] = isset($data['yesterday']) ? $data['yesterday'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['active_total'] === null) {
            $invalid_properties[] = "'active_total' can't be null";
        }
        if ($this->container['last_week'] === null) {
            $invalid_properties[] = "'last_week' can't be null";
        }
        if ($this->container['yesterday'] === null) {
            $invalid_properties[] = "'yesterday' can't be null";
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

        if ($this->container['active_total'] === null) {
            return false;
        }
        if ($this->container['last_week'] === null) {
            return false;
        }
        if ($this->container['yesterday'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets active_total
     * @return \Swagger\Client\Model\GetFwLeaderboardsCharactersActiveTotal1[]
     */
    public function getActiveTotal()
    {
        return $this->container['active_total'];
    }

    /**
     * Sets active_total
     * @param \Swagger\Client\Model\GetFwLeaderboardsCharactersActiveTotal1[] $active_total Top 100 ranking of pilots active in faction warfare by total victory points. A pilot is considered \"active\" if they have participated in faction warfare in the past 14 days.
     * @return $this
     */
    public function setActiveTotal($active_total)
    {
        $this->container['active_total'] = $active_total;

        return $this;
    }

    /**
     * Gets last_week
     * @return \Swagger\Client\Model\GetFwLeaderboardsCharactersLastWeek1[]
     */
    public function getLastWeek()
    {
        return $this->container['last_week'];
    }

    /**
     * Sets last_week
     * @param \Swagger\Client\Model\GetFwLeaderboardsCharactersLastWeek1[] $last_week Top 100 ranking of pilots by victory points in the past week
     * @return $this
     */
    public function setLastWeek($last_week)
    {
        $this->container['last_week'] = $last_week;

        return $this;
    }

    /**
     * Gets yesterday
     * @return \Swagger\Client\Model\GetFwLeaderboardsCharactersYesterday1[]
     */
    public function getYesterday()
    {
        return $this->container['yesterday'];
    }

    /**
     * Sets yesterday
     * @param \Swagger\Client\Model\GetFwLeaderboardsCharactersYesterday1[] $yesterday Top 100 ranking of pilots by victory points in the past day
     * @return $this
     */
    public function setYesterday($yesterday)
    {
        $this->container['yesterday'] = $yesterday;

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


