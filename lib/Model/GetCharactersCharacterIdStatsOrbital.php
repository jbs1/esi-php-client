<?php
/**
 * GetCharactersCharacterIdStatsOrbital
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
 * Swagger Codegen version: 2.3.1
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
 * GetCharactersCharacterIdStatsOrbital Class Doc Comment
 *
 * @category Class
 * @description orbital object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdStatsOrbital implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_stats_orbital';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'strike_characters_killed' => 'int',
        'strike_damage_to_players_armor_amount' => 'int',
        'strike_damage_to_players_shield_amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'strike_characters_killed' => 'int64',
        'strike_damage_to_players_armor_amount' => 'int64',
        'strike_damage_to_players_shield_amount' => 'int64'
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
        'strike_characters_killed' => 'strike_characters_killed',
        'strike_damage_to_players_armor_amount' => 'strike_damage_to_players_armor_amount',
        'strike_damage_to_players_shield_amount' => 'strike_damage_to_players_shield_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'strike_characters_killed' => 'setStrikeCharactersKilled',
        'strike_damage_to_players_armor_amount' => 'setStrikeDamageToPlayersArmorAmount',
        'strike_damage_to_players_shield_amount' => 'setStrikeDamageToPlayersShieldAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'strike_characters_killed' => 'getStrikeCharactersKilled',
        'strike_damage_to_players_armor_amount' => 'getStrikeDamageToPlayersArmorAmount',
        'strike_damage_to_players_shield_amount' => 'getStrikeDamageToPlayersShieldAmount'
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
        $this->container['strike_characters_killed'] = isset($data['strike_characters_killed']) ? $data['strike_characters_killed'] : null;
        $this->container['strike_damage_to_players_armor_amount'] = isset($data['strike_damage_to_players_armor_amount']) ? $data['strike_damage_to_players_armor_amount'] : null;
        $this->container['strike_damage_to_players_shield_amount'] = isset($data['strike_damage_to_players_shield_amount']) ? $data['strike_damage_to_players_shield_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets strike_characters_killed
     *
     * @return int
     */
    public function getStrikeCharactersKilled()
    {
        return $this->container['strike_characters_killed'];
    }

    /**
     * Sets strike_characters_killed
     *
     * @param int $strike_characters_killed strike_characters_killed integer
     *
     * @return $this
     */
    public function setStrikeCharactersKilled($strike_characters_killed)
    {
        $this->container['strike_characters_killed'] = $strike_characters_killed;

        return $this;
    }

    /**
     * Gets strike_damage_to_players_armor_amount
     *
     * @return int
     */
    public function getStrikeDamageToPlayersArmorAmount()
    {
        return $this->container['strike_damage_to_players_armor_amount'];
    }

    /**
     * Sets strike_damage_to_players_armor_amount
     *
     * @param int $strike_damage_to_players_armor_amount strike_damage_to_players_armor_amount integer
     *
     * @return $this
     */
    public function setStrikeDamageToPlayersArmorAmount($strike_damage_to_players_armor_amount)
    {
        $this->container['strike_damage_to_players_armor_amount'] = $strike_damage_to_players_armor_amount;

        return $this;
    }

    /**
     * Gets strike_damage_to_players_shield_amount
     *
     * @return int
     */
    public function getStrikeDamageToPlayersShieldAmount()
    {
        return $this->container['strike_damage_to_players_shield_amount'];
    }

    /**
     * Sets strike_damage_to_players_shield_amount
     *
     * @param int $strike_damage_to_players_shield_amount strike_damage_to_players_shield_amount integer
     *
     * @return $this
     */
    public function setStrikeDamageToPlayersShieldAmount($strike_damage_to_players_shield_amount)
    {
        $this->container['strike_damage_to_players_shield_amount'] = $strike_damage_to_players_shield_amount;

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


