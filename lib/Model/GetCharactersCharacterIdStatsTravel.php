<?php
/**
 * GetCharactersCharacterIdStatsTravel
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
 * GetCharactersCharacterIdStatsTravel Class Doc Comment
 *
 * @category Class
 * @description travel object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdStatsTravel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_stats_travel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acceleration_gate_activations' => 'int',
        'align_to' => 'int',
        'distance_warped_high_sec' => 'int',
        'distance_warped_low_sec' => 'int',
        'distance_warped_null_sec' => 'int',
        'distance_warped_wormhole' => 'int',
        'docks_high_sec' => 'int',
        'docks_low_sec' => 'int',
        'docks_null_sec' => 'int',
        'jumps_stargate_high_sec' => 'int',
        'jumps_stargate_low_sec' => 'int',
        'jumps_stargate_null_sec' => 'int',
        'jumps_wormhole' => 'int',
        'warps_high_sec' => 'int',
        'warps_low_sec' => 'int',
        'warps_null_sec' => 'int',
        'warps_to_bookmark' => 'int',
        'warps_to_celestial' => 'int',
        'warps_to_fleet_member' => 'int',
        'warps_to_scan_result' => 'int',
        'warps_wormhole' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acceleration_gate_activations' => 'int64',
        'align_to' => 'int64',
        'distance_warped_high_sec' => 'int64',
        'distance_warped_low_sec' => 'int64',
        'distance_warped_null_sec' => 'int64',
        'distance_warped_wormhole' => 'int64',
        'docks_high_sec' => 'int64',
        'docks_low_sec' => 'int64',
        'docks_null_sec' => 'int64',
        'jumps_stargate_high_sec' => 'int64',
        'jumps_stargate_low_sec' => 'int64',
        'jumps_stargate_null_sec' => 'int64',
        'jumps_wormhole' => 'int64',
        'warps_high_sec' => 'int64',
        'warps_low_sec' => 'int64',
        'warps_null_sec' => 'int64',
        'warps_to_bookmark' => 'int64',
        'warps_to_celestial' => 'int64',
        'warps_to_fleet_member' => 'int64',
        'warps_to_scan_result' => 'int64',
        'warps_wormhole' => 'int64'
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
        'acceleration_gate_activations' => 'acceleration_gate_activations',
        'align_to' => 'align_to',
        'distance_warped_high_sec' => 'distance_warped_high_sec',
        'distance_warped_low_sec' => 'distance_warped_low_sec',
        'distance_warped_null_sec' => 'distance_warped_null_sec',
        'distance_warped_wormhole' => 'distance_warped_wormhole',
        'docks_high_sec' => 'docks_high_sec',
        'docks_low_sec' => 'docks_low_sec',
        'docks_null_sec' => 'docks_null_sec',
        'jumps_stargate_high_sec' => 'jumps_stargate_high_sec',
        'jumps_stargate_low_sec' => 'jumps_stargate_low_sec',
        'jumps_stargate_null_sec' => 'jumps_stargate_null_sec',
        'jumps_wormhole' => 'jumps_wormhole',
        'warps_high_sec' => 'warps_high_sec',
        'warps_low_sec' => 'warps_low_sec',
        'warps_null_sec' => 'warps_null_sec',
        'warps_to_bookmark' => 'warps_to_bookmark',
        'warps_to_celestial' => 'warps_to_celestial',
        'warps_to_fleet_member' => 'warps_to_fleet_member',
        'warps_to_scan_result' => 'warps_to_scan_result',
        'warps_wormhole' => 'warps_wormhole'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acceleration_gate_activations' => 'setAccelerationGateActivations',
        'align_to' => 'setAlignTo',
        'distance_warped_high_sec' => 'setDistanceWarpedHighSec',
        'distance_warped_low_sec' => 'setDistanceWarpedLowSec',
        'distance_warped_null_sec' => 'setDistanceWarpedNullSec',
        'distance_warped_wormhole' => 'setDistanceWarpedWormhole',
        'docks_high_sec' => 'setDocksHighSec',
        'docks_low_sec' => 'setDocksLowSec',
        'docks_null_sec' => 'setDocksNullSec',
        'jumps_stargate_high_sec' => 'setJumpsStargateHighSec',
        'jumps_stargate_low_sec' => 'setJumpsStargateLowSec',
        'jumps_stargate_null_sec' => 'setJumpsStargateNullSec',
        'jumps_wormhole' => 'setJumpsWormhole',
        'warps_high_sec' => 'setWarpsHighSec',
        'warps_low_sec' => 'setWarpsLowSec',
        'warps_null_sec' => 'setWarpsNullSec',
        'warps_to_bookmark' => 'setWarpsToBookmark',
        'warps_to_celestial' => 'setWarpsToCelestial',
        'warps_to_fleet_member' => 'setWarpsToFleetMember',
        'warps_to_scan_result' => 'setWarpsToScanResult',
        'warps_wormhole' => 'setWarpsWormhole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acceleration_gate_activations' => 'getAccelerationGateActivations',
        'align_to' => 'getAlignTo',
        'distance_warped_high_sec' => 'getDistanceWarpedHighSec',
        'distance_warped_low_sec' => 'getDistanceWarpedLowSec',
        'distance_warped_null_sec' => 'getDistanceWarpedNullSec',
        'distance_warped_wormhole' => 'getDistanceWarpedWormhole',
        'docks_high_sec' => 'getDocksHighSec',
        'docks_low_sec' => 'getDocksLowSec',
        'docks_null_sec' => 'getDocksNullSec',
        'jumps_stargate_high_sec' => 'getJumpsStargateHighSec',
        'jumps_stargate_low_sec' => 'getJumpsStargateLowSec',
        'jumps_stargate_null_sec' => 'getJumpsStargateNullSec',
        'jumps_wormhole' => 'getJumpsWormhole',
        'warps_high_sec' => 'getWarpsHighSec',
        'warps_low_sec' => 'getWarpsLowSec',
        'warps_null_sec' => 'getWarpsNullSec',
        'warps_to_bookmark' => 'getWarpsToBookmark',
        'warps_to_celestial' => 'getWarpsToCelestial',
        'warps_to_fleet_member' => 'getWarpsToFleetMember',
        'warps_to_scan_result' => 'getWarpsToScanResult',
        'warps_wormhole' => 'getWarpsWormhole'
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
        $this->container['acceleration_gate_activations'] = isset($data['acceleration_gate_activations']) ? $data['acceleration_gate_activations'] : null;
        $this->container['align_to'] = isset($data['align_to']) ? $data['align_to'] : null;
        $this->container['distance_warped_high_sec'] = isset($data['distance_warped_high_sec']) ? $data['distance_warped_high_sec'] : null;
        $this->container['distance_warped_low_sec'] = isset($data['distance_warped_low_sec']) ? $data['distance_warped_low_sec'] : null;
        $this->container['distance_warped_null_sec'] = isset($data['distance_warped_null_sec']) ? $data['distance_warped_null_sec'] : null;
        $this->container['distance_warped_wormhole'] = isset($data['distance_warped_wormhole']) ? $data['distance_warped_wormhole'] : null;
        $this->container['docks_high_sec'] = isset($data['docks_high_sec']) ? $data['docks_high_sec'] : null;
        $this->container['docks_low_sec'] = isset($data['docks_low_sec']) ? $data['docks_low_sec'] : null;
        $this->container['docks_null_sec'] = isset($data['docks_null_sec']) ? $data['docks_null_sec'] : null;
        $this->container['jumps_stargate_high_sec'] = isset($data['jumps_stargate_high_sec']) ? $data['jumps_stargate_high_sec'] : null;
        $this->container['jumps_stargate_low_sec'] = isset($data['jumps_stargate_low_sec']) ? $data['jumps_stargate_low_sec'] : null;
        $this->container['jumps_stargate_null_sec'] = isset($data['jumps_stargate_null_sec']) ? $data['jumps_stargate_null_sec'] : null;
        $this->container['jumps_wormhole'] = isset($data['jumps_wormhole']) ? $data['jumps_wormhole'] : null;
        $this->container['warps_high_sec'] = isset($data['warps_high_sec']) ? $data['warps_high_sec'] : null;
        $this->container['warps_low_sec'] = isset($data['warps_low_sec']) ? $data['warps_low_sec'] : null;
        $this->container['warps_null_sec'] = isset($data['warps_null_sec']) ? $data['warps_null_sec'] : null;
        $this->container['warps_to_bookmark'] = isset($data['warps_to_bookmark']) ? $data['warps_to_bookmark'] : null;
        $this->container['warps_to_celestial'] = isset($data['warps_to_celestial']) ? $data['warps_to_celestial'] : null;
        $this->container['warps_to_fleet_member'] = isset($data['warps_to_fleet_member']) ? $data['warps_to_fleet_member'] : null;
        $this->container['warps_to_scan_result'] = isset($data['warps_to_scan_result']) ? $data['warps_to_scan_result'] : null;
        $this->container['warps_wormhole'] = isset($data['warps_wormhole']) ? $data['warps_wormhole'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets acceleration_gate_activations
     *
     * @return int
     */
    public function getAccelerationGateActivations()
    {
        return $this->container['acceleration_gate_activations'];
    }

    /**
     * Sets acceleration_gate_activations
     *
     * @param int $acceleration_gate_activations acceleration_gate_activations integer
     *
     * @return $this
     */
    public function setAccelerationGateActivations($acceleration_gate_activations)
    {
        $this->container['acceleration_gate_activations'] = $acceleration_gate_activations;

        return $this;
    }

    /**
     * Gets align_to
     *
     * @return int
     */
    public function getAlignTo()
    {
        return $this->container['align_to'];
    }

    /**
     * Sets align_to
     *
     * @param int $align_to align_to integer
     *
     * @return $this
     */
    public function setAlignTo($align_to)
    {
        $this->container['align_to'] = $align_to;

        return $this;
    }

    /**
     * Gets distance_warped_high_sec
     *
     * @return int
     */
    public function getDistanceWarpedHighSec()
    {
        return $this->container['distance_warped_high_sec'];
    }

    /**
     * Sets distance_warped_high_sec
     *
     * @param int $distance_warped_high_sec distance_warped_high_sec integer
     *
     * @return $this
     */
    public function setDistanceWarpedHighSec($distance_warped_high_sec)
    {
        $this->container['distance_warped_high_sec'] = $distance_warped_high_sec;

        return $this;
    }

    /**
     * Gets distance_warped_low_sec
     *
     * @return int
     */
    public function getDistanceWarpedLowSec()
    {
        return $this->container['distance_warped_low_sec'];
    }

    /**
     * Sets distance_warped_low_sec
     *
     * @param int $distance_warped_low_sec distance_warped_low_sec integer
     *
     * @return $this
     */
    public function setDistanceWarpedLowSec($distance_warped_low_sec)
    {
        $this->container['distance_warped_low_sec'] = $distance_warped_low_sec;

        return $this;
    }

    /**
     * Gets distance_warped_null_sec
     *
     * @return int
     */
    public function getDistanceWarpedNullSec()
    {
        return $this->container['distance_warped_null_sec'];
    }

    /**
     * Sets distance_warped_null_sec
     *
     * @param int $distance_warped_null_sec distance_warped_null_sec integer
     *
     * @return $this
     */
    public function setDistanceWarpedNullSec($distance_warped_null_sec)
    {
        $this->container['distance_warped_null_sec'] = $distance_warped_null_sec;

        return $this;
    }

    /**
     * Gets distance_warped_wormhole
     *
     * @return int
     */
    public function getDistanceWarpedWormhole()
    {
        return $this->container['distance_warped_wormhole'];
    }

    /**
     * Sets distance_warped_wormhole
     *
     * @param int $distance_warped_wormhole distance_warped_wormhole integer
     *
     * @return $this
     */
    public function setDistanceWarpedWormhole($distance_warped_wormhole)
    {
        $this->container['distance_warped_wormhole'] = $distance_warped_wormhole;

        return $this;
    }

    /**
     * Gets docks_high_sec
     *
     * @return int
     */
    public function getDocksHighSec()
    {
        return $this->container['docks_high_sec'];
    }

    /**
     * Sets docks_high_sec
     *
     * @param int $docks_high_sec docks_high_sec integer
     *
     * @return $this
     */
    public function setDocksHighSec($docks_high_sec)
    {
        $this->container['docks_high_sec'] = $docks_high_sec;

        return $this;
    }

    /**
     * Gets docks_low_sec
     *
     * @return int
     */
    public function getDocksLowSec()
    {
        return $this->container['docks_low_sec'];
    }

    /**
     * Sets docks_low_sec
     *
     * @param int $docks_low_sec docks_low_sec integer
     *
     * @return $this
     */
    public function setDocksLowSec($docks_low_sec)
    {
        $this->container['docks_low_sec'] = $docks_low_sec;

        return $this;
    }

    /**
     * Gets docks_null_sec
     *
     * @return int
     */
    public function getDocksNullSec()
    {
        return $this->container['docks_null_sec'];
    }

    /**
     * Sets docks_null_sec
     *
     * @param int $docks_null_sec docks_null_sec integer
     *
     * @return $this
     */
    public function setDocksNullSec($docks_null_sec)
    {
        $this->container['docks_null_sec'] = $docks_null_sec;

        return $this;
    }

    /**
     * Gets jumps_stargate_high_sec
     *
     * @return int
     */
    public function getJumpsStargateHighSec()
    {
        return $this->container['jumps_stargate_high_sec'];
    }

    /**
     * Sets jumps_stargate_high_sec
     *
     * @param int $jumps_stargate_high_sec jumps_stargate_high_sec integer
     *
     * @return $this
     */
    public function setJumpsStargateHighSec($jumps_stargate_high_sec)
    {
        $this->container['jumps_stargate_high_sec'] = $jumps_stargate_high_sec;

        return $this;
    }

    /**
     * Gets jumps_stargate_low_sec
     *
     * @return int
     */
    public function getJumpsStargateLowSec()
    {
        return $this->container['jumps_stargate_low_sec'];
    }

    /**
     * Sets jumps_stargate_low_sec
     *
     * @param int $jumps_stargate_low_sec jumps_stargate_low_sec integer
     *
     * @return $this
     */
    public function setJumpsStargateLowSec($jumps_stargate_low_sec)
    {
        $this->container['jumps_stargate_low_sec'] = $jumps_stargate_low_sec;

        return $this;
    }

    /**
     * Gets jumps_stargate_null_sec
     *
     * @return int
     */
    public function getJumpsStargateNullSec()
    {
        return $this->container['jumps_stargate_null_sec'];
    }

    /**
     * Sets jumps_stargate_null_sec
     *
     * @param int $jumps_stargate_null_sec jumps_stargate_null_sec integer
     *
     * @return $this
     */
    public function setJumpsStargateNullSec($jumps_stargate_null_sec)
    {
        $this->container['jumps_stargate_null_sec'] = $jumps_stargate_null_sec;

        return $this;
    }

    /**
     * Gets jumps_wormhole
     *
     * @return int
     */
    public function getJumpsWormhole()
    {
        return $this->container['jumps_wormhole'];
    }

    /**
     * Sets jumps_wormhole
     *
     * @param int $jumps_wormhole jumps_wormhole integer
     *
     * @return $this
     */
    public function setJumpsWormhole($jumps_wormhole)
    {
        $this->container['jumps_wormhole'] = $jumps_wormhole;

        return $this;
    }

    /**
     * Gets warps_high_sec
     *
     * @return int
     */
    public function getWarpsHighSec()
    {
        return $this->container['warps_high_sec'];
    }

    /**
     * Sets warps_high_sec
     *
     * @param int $warps_high_sec warps_high_sec integer
     *
     * @return $this
     */
    public function setWarpsHighSec($warps_high_sec)
    {
        $this->container['warps_high_sec'] = $warps_high_sec;

        return $this;
    }

    /**
     * Gets warps_low_sec
     *
     * @return int
     */
    public function getWarpsLowSec()
    {
        return $this->container['warps_low_sec'];
    }

    /**
     * Sets warps_low_sec
     *
     * @param int $warps_low_sec warps_low_sec integer
     *
     * @return $this
     */
    public function setWarpsLowSec($warps_low_sec)
    {
        $this->container['warps_low_sec'] = $warps_low_sec;

        return $this;
    }

    /**
     * Gets warps_null_sec
     *
     * @return int
     */
    public function getWarpsNullSec()
    {
        return $this->container['warps_null_sec'];
    }

    /**
     * Sets warps_null_sec
     *
     * @param int $warps_null_sec warps_null_sec integer
     *
     * @return $this
     */
    public function setWarpsNullSec($warps_null_sec)
    {
        $this->container['warps_null_sec'] = $warps_null_sec;

        return $this;
    }

    /**
     * Gets warps_to_bookmark
     *
     * @return int
     */
    public function getWarpsToBookmark()
    {
        return $this->container['warps_to_bookmark'];
    }

    /**
     * Sets warps_to_bookmark
     *
     * @param int $warps_to_bookmark warps_to_bookmark integer
     *
     * @return $this
     */
    public function setWarpsToBookmark($warps_to_bookmark)
    {
        $this->container['warps_to_bookmark'] = $warps_to_bookmark;

        return $this;
    }

    /**
     * Gets warps_to_celestial
     *
     * @return int
     */
    public function getWarpsToCelestial()
    {
        return $this->container['warps_to_celestial'];
    }

    /**
     * Sets warps_to_celestial
     *
     * @param int $warps_to_celestial warps_to_celestial integer
     *
     * @return $this
     */
    public function setWarpsToCelestial($warps_to_celestial)
    {
        $this->container['warps_to_celestial'] = $warps_to_celestial;

        return $this;
    }

    /**
     * Gets warps_to_fleet_member
     *
     * @return int
     */
    public function getWarpsToFleetMember()
    {
        return $this->container['warps_to_fleet_member'];
    }

    /**
     * Sets warps_to_fleet_member
     *
     * @param int $warps_to_fleet_member warps_to_fleet_member integer
     *
     * @return $this
     */
    public function setWarpsToFleetMember($warps_to_fleet_member)
    {
        $this->container['warps_to_fleet_member'] = $warps_to_fleet_member;

        return $this;
    }

    /**
     * Gets warps_to_scan_result
     *
     * @return int
     */
    public function getWarpsToScanResult()
    {
        return $this->container['warps_to_scan_result'];
    }

    /**
     * Sets warps_to_scan_result
     *
     * @param int $warps_to_scan_result warps_to_scan_result integer
     *
     * @return $this
     */
    public function setWarpsToScanResult($warps_to_scan_result)
    {
        $this->container['warps_to_scan_result'] = $warps_to_scan_result;

        return $this;
    }

    /**
     * Gets warps_wormhole
     *
     * @return int
     */
    public function getWarpsWormhole()
    {
        return $this->container['warps_wormhole'];
    }

    /**
     * Sets warps_wormhole
     *
     * @param int $warps_wormhole warps_wormhole integer
     *
     * @return $this
     */
    public function setWarpsWormhole($warps_wormhole)
    {
        $this->container['warps_wormhole'] = $warps_wormhole;

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


