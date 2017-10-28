<?php
/**
 * GetSovereigntyCampaigns200Ok
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
 * GetSovereigntyCampaigns200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetSovereigntyCampaigns200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_sovereignty_campaigns_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attackers_score' => 'float',
        'campaign_id' => 'int',
        'constellation_id' => 'int',
        'defender_id' => 'int',
        'defender_score' => 'float',
        'event_type' => 'string',
        'participants' => '\Swagger\Client\Model\GetSovereigntyCampaignsParticipant[]',
        'solar_system_id' => 'int',
        'start_time' => '\DateTime',
        'structure_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attackers_score' => 'float',
        'campaign_id' => 'int32',
        'constellation_id' => 'int32',
        'defender_id' => 'int32',
        'defender_score' => 'float',
        'event_type' => null,
        'participants' => null,
        'solar_system_id' => 'int32',
        'start_time' => 'date-time',
        'structure_id' => 'int64'
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
        'attackers_score' => 'attackers_score',
        'campaign_id' => 'campaign_id',
        'constellation_id' => 'constellation_id',
        'defender_id' => 'defender_id',
        'defender_score' => 'defender_score',
        'event_type' => 'event_type',
        'participants' => 'participants',
        'solar_system_id' => 'solar_system_id',
        'start_time' => 'start_time',
        'structure_id' => 'structure_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attackers_score' => 'setAttackersScore',
        'campaign_id' => 'setCampaignId',
        'constellation_id' => 'setConstellationId',
        'defender_id' => 'setDefenderId',
        'defender_score' => 'setDefenderScore',
        'event_type' => 'setEventType',
        'participants' => 'setParticipants',
        'solar_system_id' => 'setSolarSystemId',
        'start_time' => 'setStartTime',
        'structure_id' => 'setStructureId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attackers_score' => 'getAttackersScore',
        'campaign_id' => 'getCampaignId',
        'constellation_id' => 'getConstellationId',
        'defender_id' => 'getDefenderId',
        'defender_score' => 'getDefenderScore',
        'event_type' => 'getEventType',
        'participants' => 'getParticipants',
        'solar_system_id' => 'getSolarSystemId',
        'start_time' => 'getStartTime',
        'structure_id' => 'getStructureId'
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

    const EVENT_TYPE_TCU_DEFENSE = 'tcu_defense';
    const EVENT_TYPE_IHUB_DEFENSE = 'ihub_defense';
    const EVENT_TYPE_STATION_DEFENSE = 'station_defense';
    const EVENT_TYPE_STATION_FREEPORT = 'station_freeport';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_TCU_DEFENSE,
            self::EVENT_TYPE_IHUB_DEFENSE,
            self::EVENT_TYPE_STATION_DEFENSE,
            self::EVENT_TYPE_STATION_FREEPORT,
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
        $this->container['attackers_score'] = isset($data['attackers_score']) ? $data['attackers_score'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['constellation_id'] = isset($data['constellation_id']) ? $data['constellation_id'] : null;
        $this->container['defender_id'] = isset($data['defender_id']) ? $data['defender_id'] : null;
        $this->container['defender_score'] = isset($data['defender_score']) ? $data['defender_score'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
        $this->container['solar_system_id'] = isset($data['solar_system_id']) ? $data['solar_system_id'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['structure_id'] = isset($data['structure_id']) ? $data['structure_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if ($this->container['constellation_id'] === null) {
            $invalidProperties[] = "'constellation_id' can't be null";
        }
        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!in_array($this->container['event_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'event_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['solar_system_id'] === null) {
            $invalidProperties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['structure_id'] === null) {
            $invalidProperties[] = "'structure_id' can't be null";
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

        if ($this->container['campaign_id'] === null) {
            return false;
        }
        if ($this->container['constellation_id'] === null) {
            return false;
        }
        if ($this->container['event_type'] === null) {
            return false;
        }
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!in_array($this->container['event_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['solar_system_id'] === null) {
            return false;
        }
        if ($this->container['start_time'] === null) {
            return false;
        }
        if ($this->container['structure_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets attackers_score
     *
     * @return float
     */
    public function getAttackersScore()
    {
        return $this->container['attackers_score'];
    }

    /**
     * Sets attackers_score
     *
     * @param float $attackers_score Score for all attacking parties, only present in Defense Events.
     *
     * @return $this
     */
    public function setAttackersScore($attackers_score)
    {
        $this->container['attackers_score'] = $attackers_score;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id Unique ID for this campaign.
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets constellation_id
     *
     * @return int
     */
    public function getConstellationId()
    {
        return $this->container['constellation_id'];
    }

    /**
     * Sets constellation_id
     *
     * @param int $constellation_id The constellation in which the campaign will take place.
     *
     * @return $this
     */
    public function setConstellationId($constellation_id)
    {
        $this->container['constellation_id'] = $constellation_id;

        return $this;
    }

    /**
     * Gets defender_id
     *
     * @return int
     */
    public function getDefenderId()
    {
        return $this->container['defender_id'];
    }

    /**
     * Sets defender_id
     *
     * @param int $defender_id Defending alliance, only present in Defense Events
     *
     * @return $this
     */
    public function setDefenderId($defender_id)
    {
        $this->container['defender_id'] = $defender_id;

        return $this;
    }

    /**
     * Gets defender_score
     *
     * @return float
     */
    public function getDefenderScore()
    {
        return $this->container['defender_score'];
    }

    /**
     * Sets defender_score
     *
     * @param float $defender_score Score for the defending alliance, only present in Defense Events.
     *
     * @return $this
     */
    public function setDefenderScore($defender_score)
    {
        $this->container['defender_score'] = $defender_score;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type Type of event this campaign is for. tcu_defense, ihub_defense and station_defense are referred to as \"Defense Events\", station_freeport as \"Freeport Events\".
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!in_array($event_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return \Swagger\Client\Model\GetSovereigntyCampaignsParticipant[]
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param \Swagger\Client\Model\GetSovereigntyCampaignsParticipant[] $participants Alliance participating and their respective scores, only present in Freeport Events.
     *
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets solar_system_id
     *
     * @return int
     */
    public function getSolarSystemId()
    {
        return $this->container['solar_system_id'];
    }

    /**
     * Sets solar_system_id
     *
     * @param int $solar_system_id The solar system the structure is located in.
     *
     * @return $this
     */
    public function setSolarSystemId($solar_system_id)
    {
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time Time the event is scheduled to start.
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets structure_id
     *
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structure_id'];
    }

    /**
     * Sets structure_id
     *
     * @param int $structure_id The structure item ID that is related to this campaign.
     *
     * @return $this
     */
    public function setStructureId($structure_id)
    {
        $this->container['structure_id'] = $structure_id;

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


