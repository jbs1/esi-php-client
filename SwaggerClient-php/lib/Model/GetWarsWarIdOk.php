<?php
/**
 * GetWarsWarIdOk
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
 * GetWarsWarIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetWarsWarIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_wars_war_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'declared' => '\DateTime',
        'started' => '\DateTime',
        'retracted' => '\DateTime',
        'finished' => '\DateTime',
        'mutual' => 'bool',
        'open_for_allies' => 'bool',
        'aggressor' => '\Swagger\Client\Model\GetWarsWarIdAggressor',
        'defender' => '\Swagger\Client\Model\GetWarsWarIdDefender',
        'allies' => '\Swagger\Client\Model\GetWarsWarIdAlly[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'declared' => 'date-time',
        'started' => 'date-time',
        'retracted' => 'date-time',
        'finished' => 'date-time',
        'mutual' => null,
        'open_for_allies' => null,
        'aggressor' => null,
        'defender' => null,
        'allies' => null
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
        'id' => 'id',
        'declared' => 'declared',
        'started' => 'started',
        'retracted' => 'retracted',
        'finished' => 'finished',
        'mutual' => 'mutual',
        'open_for_allies' => 'open_for_allies',
        'aggressor' => 'aggressor',
        'defender' => 'defender',
        'allies' => 'allies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'declared' => 'setDeclared',
        'started' => 'setStarted',
        'retracted' => 'setRetracted',
        'finished' => 'setFinished',
        'mutual' => 'setMutual',
        'open_for_allies' => 'setOpenForAllies',
        'aggressor' => 'setAggressor',
        'defender' => 'setDefender',
        'allies' => 'setAllies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'declared' => 'getDeclared',
        'started' => 'getStarted',
        'retracted' => 'getRetracted',
        'finished' => 'getFinished',
        'mutual' => 'getMutual',
        'open_for_allies' => 'getOpenForAllies',
        'aggressor' => 'getAggressor',
        'defender' => 'getDefender',
        'allies' => 'getAllies'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['declared'] = isset($data['declared']) ? $data['declared'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['retracted'] = isset($data['retracted']) ? $data['retracted'] : null;
        $this->container['finished'] = isset($data['finished']) ? $data['finished'] : null;
        $this->container['mutual'] = isset($data['mutual']) ? $data['mutual'] : null;
        $this->container['open_for_allies'] = isset($data['open_for_allies']) ? $data['open_for_allies'] : null;
        $this->container['aggressor'] = isset($data['aggressor']) ? $data['aggressor'] : null;
        $this->container['defender'] = isset($data['defender']) ? $data['defender'] : null;
        $this->container['allies'] = isset($data['allies']) ? $data['allies'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['declared'] === null) {
            $invalidProperties[] = "'declared' can't be null";
        }
        if ($this->container['mutual'] === null) {
            $invalidProperties[] = "'mutual' can't be null";
        }
        if ($this->container['open_for_allies'] === null) {
            $invalidProperties[] = "'open_for_allies' can't be null";
        }
        if ($this->container['aggressor'] === null) {
            $invalidProperties[] = "'aggressor' can't be null";
        }
        if ($this->container['defender'] === null) {
            $invalidProperties[] = "'defender' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['declared'] === null) {
            return false;
        }
        if ($this->container['mutual'] === null) {
            return false;
        }
        if ($this->container['open_for_allies'] === null) {
            return false;
        }
        if ($this->container['aggressor'] === null) {
            return false;
        }
        if ($this->container['defender'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID of the specified war
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets declared
     *
     * @return \DateTime
     */
    public function getDeclared()
    {
        return $this->container['declared'];
    }

    /**
     * Sets declared
     *
     * @param \DateTime $declared Time that the war was declared
     *
     * @return $this
     */
    public function setDeclared($declared)
    {
        $this->container['declared'] = $declared;

        return $this;
    }

    /**
     * Gets started
     *
     * @return \DateTime
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     *
     * @param \DateTime $started Time when the war started and both sides could shoot each other
     *
     * @return $this
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

        return $this;
    }

    /**
     * Gets retracted
     *
     * @return \DateTime
     */
    public function getRetracted()
    {
        return $this->container['retracted'];
    }

    /**
     * Sets retracted
     *
     * @param \DateTime $retracted Time the war was retracted but both sides could still shoot each other
     *
     * @return $this
     */
    public function setRetracted($retracted)
    {
        $this->container['retracted'] = $retracted;

        return $this;
    }

    /**
     * Gets finished
     *
     * @return \DateTime
     */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
     * Sets finished
     *
     * @param \DateTime $finished Time the war ended and shooting was no longer allowed
     *
     * @return $this
     */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;

        return $this;
    }

    /**
     * Gets mutual
     *
     * @return bool
     */
    public function getMutual()
    {
        return $this->container['mutual'];
    }

    /**
     * Sets mutual
     *
     * @param bool $mutual Was the war declared mutual by both parties
     *
     * @return $this
     */
    public function setMutual($mutual)
    {
        $this->container['mutual'] = $mutual;

        return $this;
    }

    /**
     * Gets open_for_allies
     *
     * @return bool
     */
    public function getOpenForAllies()
    {
        return $this->container['open_for_allies'];
    }

    /**
     * Sets open_for_allies
     *
     * @param bool $open_for_allies Is the war currently open for allies or not
     *
     * @return $this
     */
    public function setOpenForAllies($open_for_allies)
    {
        $this->container['open_for_allies'] = $open_for_allies;

        return $this;
    }

    /**
     * Gets aggressor
     *
     * @return \Swagger\Client\Model\GetWarsWarIdAggressor
     */
    public function getAggressor()
    {
        return $this->container['aggressor'];
    }

    /**
     * Sets aggressor
     *
     * @param \Swagger\Client\Model\GetWarsWarIdAggressor $aggressor aggressor
     *
     * @return $this
     */
    public function setAggressor($aggressor)
    {
        $this->container['aggressor'] = $aggressor;

        return $this;
    }

    /**
     * Gets defender
     *
     * @return \Swagger\Client\Model\GetWarsWarIdDefender
     */
    public function getDefender()
    {
        return $this->container['defender'];
    }

    /**
     * Sets defender
     *
     * @param \Swagger\Client\Model\GetWarsWarIdDefender $defender defender
     *
     * @return $this
     */
    public function setDefender($defender)
    {
        $this->container['defender'] = $defender;

        return $this;
    }

    /**
     * Gets allies
     *
     * @return \Swagger\Client\Model\GetWarsWarIdAlly[]
     */
    public function getAllies()
    {
        return $this->container['allies'];
    }

    /**
     * Sets allies
     *
     * @param \Swagger\Client\Model\GetWarsWarIdAlly[] $allies allied corporations or alliances, each object contains either corporation_id or alliance_id
     *
     * @return $this
     */
    public function setAllies($allies)
    {
        $this->container['allies'] = $allies;

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


