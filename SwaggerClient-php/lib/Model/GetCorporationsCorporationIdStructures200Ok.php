<?php
/**
 * GetCorporationsCorporationIdStructures200Ok
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
 * GetCorporationsCorporationIdStructures200Ok Class Doc Comment
 *
 * @category    Class
 * @description 200 ok object
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdStructures200Ok implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_structures_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'corporation_id' => 'int',
        'current_vul' => '\Swagger\Client\Model\GetCorporationsCorporationIdStructuresCurrentVul[]',
        'fuel_expires' => '\DateTime',
        'next_vul' => '\Swagger\Client\Model\GetCorporationsCorporationIdStructuresNextVul[]',
        'profile_id' => 'int',
        'services' => '\Swagger\Client\Model\GetCorporationsCorporationIdStructuresService[]',
        'state_timer_end' => '\DateTime',
        'state_timer_start' => '\DateTime',
        'structure_id' => 'int',
        'system_id' => 'int',
        'type_id' => 'int',
        'unanchors_at' => '\DateTime'
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
        'corporation_id' => 'corporation_id',
        'current_vul' => 'current_vul',
        'fuel_expires' => 'fuel_expires',
        'next_vul' => 'next_vul',
        'profile_id' => 'profile_id',
        'services' => 'services',
        'state_timer_end' => 'state_timer_end',
        'state_timer_start' => 'state_timer_start',
        'structure_id' => 'structure_id',
        'system_id' => 'system_id',
        'type_id' => 'type_id',
        'unanchors_at' => 'unanchors_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'corporation_id' => 'setCorporationId',
        'current_vul' => 'setCurrentVul',
        'fuel_expires' => 'setFuelExpires',
        'next_vul' => 'setNextVul',
        'profile_id' => 'setProfileId',
        'services' => 'setServices',
        'state_timer_end' => 'setStateTimerEnd',
        'state_timer_start' => 'setStateTimerStart',
        'structure_id' => 'setStructureId',
        'system_id' => 'setSystemId',
        'type_id' => 'setTypeId',
        'unanchors_at' => 'setUnanchorsAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'corporation_id' => 'getCorporationId',
        'current_vul' => 'getCurrentVul',
        'fuel_expires' => 'getFuelExpires',
        'next_vul' => 'getNextVul',
        'profile_id' => 'getProfileId',
        'services' => 'getServices',
        'state_timer_end' => 'getStateTimerEnd',
        'state_timer_start' => 'getStateTimerStart',
        'structure_id' => 'getStructureId',
        'system_id' => 'getSystemId',
        'type_id' => 'getTypeId',
        'unanchors_at' => 'getUnanchorsAt'
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
        $this->container['corporation_id'] = isset($data['corporation_id']) ? $data['corporation_id'] : null;
        $this->container['current_vul'] = isset($data['current_vul']) ? $data['current_vul'] : null;
        $this->container['fuel_expires'] = isset($data['fuel_expires']) ? $data['fuel_expires'] : null;
        $this->container['next_vul'] = isset($data['next_vul']) ? $data['next_vul'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['state_timer_end'] = isset($data['state_timer_end']) ? $data['state_timer_end'] : null;
        $this->container['state_timer_start'] = isset($data['state_timer_start']) ? $data['state_timer_start'] : null;
        $this->container['structure_id'] = isset($data['structure_id']) ? $data['structure_id'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['unanchors_at'] = isset($data['unanchors_at']) ? $data['unanchors_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['corporation_id'] === null) {
            $invalid_properties[] = "'corporation_id' can't be null";
        }
        if ($this->container['current_vul'] === null) {
            $invalid_properties[] = "'current_vul' can't be null";
        }
        if ($this->container['next_vul'] === null) {
            $invalid_properties[] = "'next_vul' can't be null";
        }
        if ($this->container['profile_id'] === null) {
            $invalid_properties[] = "'profile_id' can't be null";
        }
        if ($this->container['structure_id'] === null) {
            $invalid_properties[] = "'structure_id' can't be null";
        }
        if ($this->container['system_id'] === null) {
            $invalid_properties[] = "'system_id' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalid_properties[] = "'type_id' can't be null";
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

        if ($this->container['corporation_id'] === null) {
            return false;
        }
        if ($this->container['current_vul'] === null) {
            return false;
        }
        if ($this->container['next_vul'] === null) {
            return false;
        }
        if ($this->container['profile_id'] === null) {
            return false;
        }
        if ($this->container['structure_id'] === null) {
            return false;
        }
        if ($this->container['system_id'] === null) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets corporation_id
     * @return int
     */
    public function getCorporationId()
    {
        return $this->container['corporation_id'];
    }

    /**
     * Sets corporation_id
     * @param int $corporation_id ID of the corporation that owns the structure
     * @return $this
     */
    public function setCorporationId($corporation_id)
    {
        $this->container['corporation_id'] = $corporation_id;

        return $this;
    }

    /**
     * Gets current_vul
     * @return \Swagger\Client\Model\GetCorporationsCorporationIdStructuresCurrentVul[]
     */
    public function getCurrentVul()
    {
        return $this->container['current_vul'];
    }

    /**
     * Sets current_vul
     * @param \Swagger\Client\Model\GetCorporationsCorporationIdStructuresCurrentVul[] $current_vul This week's vulnerability windows, Monday is day 0
     * @return $this
     */
    public function setCurrentVul($current_vul)
    {
        $this->container['current_vul'] = $current_vul;

        return $this;
    }

    /**
     * Gets fuel_expires
     * @return \DateTime
     */
    public function getFuelExpires()
    {
        return $this->container['fuel_expires'];
    }

    /**
     * Sets fuel_expires
     * @param \DateTime $fuel_expires Date on which the structure will run out of fuel
     * @return $this
     */
    public function setFuelExpires($fuel_expires)
    {
        $this->container['fuel_expires'] = $fuel_expires;

        return $this;
    }

    /**
     * Gets next_vul
     * @return \Swagger\Client\Model\GetCorporationsCorporationIdStructuresNextVul[]
     */
    public function getNextVul()
    {
        return $this->container['next_vul'];
    }

    /**
     * Sets next_vul
     * @param \Swagger\Client\Model\GetCorporationsCorporationIdStructuresNextVul[] $next_vul Next week's vulnerability windows, Monday is day 0
     * @return $this
     */
    public function setNextVul($next_vul)
    {
        $this->container['next_vul'] = $next_vul;

        return $this;
    }

    /**
     * Gets profile_id
     * @return int
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     * @param int $profile_id The id of the ACL profile for this citadel
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets services
     * @return \Swagger\Client\Model\GetCorporationsCorporationIdStructuresService[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     * @param \Swagger\Client\Model\GetCorporationsCorporationIdStructuresService[] $services Contains a list of service upgrades, and their state
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets state_timer_end
     * @return \DateTime
     */
    public function getStateTimerEnd()
    {
        return $this->container['state_timer_end'];
    }

    /**
     * Sets state_timer_end
     * @param \DateTime $state_timer_end Date at which the structure will move to it's next state
     * @return $this
     */
    public function setStateTimerEnd($state_timer_end)
    {
        $this->container['state_timer_end'] = $state_timer_end;

        return $this;
    }

    /**
     * Gets state_timer_start
     * @return \DateTime
     */
    public function getStateTimerStart()
    {
        return $this->container['state_timer_start'];
    }

    /**
     * Sets state_timer_start
     * @param \DateTime $state_timer_start Date at which the structure entered it's current state
     * @return $this
     */
    public function setStateTimerStart($state_timer_start)
    {
        $this->container['state_timer_start'] = $state_timer_start;

        return $this;
    }

    /**
     * Gets structure_id
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structure_id'];
    }

    /**
     * Sets structure_id
     * @param int $structure_id The Item ID of the structure
     * @return $this
     */
    public function setStructureId($structure_id)
    {
        $this->container['structure_id'] = $structure_id;

        return $this;
    }

    /**
     * Gets system_id
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     * @param int $system_id The solar system the structure is in
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets type_id
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     * @param int $type_id The type id of the structure
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets unanchors_at
     * @return \DateTime
     */
    public function getUnanchorsAt()
    {
        return $this->container['unanchors_at'];
    }

    /**
     * Sets unanchors_at
     * @param \DateTime $unanchors_at Date at which the structure will unanchor
     * @return $this
     */
    public function setUnanchorsAt($unanchors_at)
    {
        $this->container['unanchors_at'] = $unanchors_at;

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


