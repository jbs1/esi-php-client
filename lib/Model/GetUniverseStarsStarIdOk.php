<?php
/**
 * GetUniverseStarsStarIdOk
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
 * GetUniverseStarsStarIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseStarsStarIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_stars_star_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'age' => 'int',
        'luminosity' => 'float',
        'name' => 'string',
        'radius' => 'int',
        'solar_system_id' => 'int',
        'spectral_class' => 'string',
        'temperature' => 'int',
        'type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'age' => 'int64',
        'luminosity' => 'float',
        'name' => null,
        'radius' => 'int64',
        'solar_system_id' => 'int32',
        'spectral_class' => null,
        'temperature' => 'int32',
        'type_id' => 'int32'
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
        'age' => 'age',
        'luminosity' => 'luminosity',
        'name' => 'name',
        'radius' => 'radius',
        'solar_system_id' => 'solar_system_id',
        'spectral_class' => 'spectral_class',
        'temperature' => 'temperature',
        'type_id' => 'type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'age' => 'setAge',
        'luminosity' => 'setLuminosity',
        'name' => 'setName',
        'radius' => 'setRadius',
        'solar_system_id' => 'setSolarSystemId',
        'spectral_class' => 'setSpectralClass',
        'temperature' => 'setTemperature',
        'type_id' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'age' => 'getAge',
        'luminosity' => 'getLuminosity',
        'name' => 'getName',
        'radius' => 'getRadius',
        'solar_system_id' => 'getSolarSystemId',
        'spectral_class' => 'getSpectralClass',
        'temperature' => 'getTemperature',
        'type_id' => 'getTypeId'
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

    const SPECTRAL_CLASS_K2_V = 'K2 V';
    const SPECTRAL_CLASS_K4_V = 'K4 V';
    const SPECTRAL_CLASS_G2_V = 'G2 V';
    const SPECTRAL_CLASS_G8_V = 'G8 V';
    const SPECTRAL_CLASS_M7_V = 'M7 V';
    const SPECTRAL_CLASS_K7_V = 'K7 V';
    const SPECTRAL_CLASS_M2_V = 'M2 V';
    const SPECTRAL_CLASS_K5_V = 'K5 V';
    const SPECTRAL_CLASS_M3_V = 'M3 V';
    const SPECTRAL_CLASS_G0_V = 'G0 V';
    const SPECTRAL_CLASS_G7_V = 'G7 V';
    const SPECTRAL_CLASS_G3_V = 'G3 V';
    const SPECTRAL_CLASS_F9_V = 'F9 V';
    const SPECTRAL_CLASS_G5_V = 'G5 V';
    const SPECTRAL_CLASS_F6_V = 'F6 V';
    const SPECTRAL_CLASS_K8_V = 'K8 V';
    const SPECTRAL_CLASS_K9_V = 'K9 V';
    const SPECTRAL_CLASS_K6_V = 'K6 V';
    const SPECTRAL_CLASS_G9_V = 'G9 V';
    const SPECTRAL_CLASS_G6_V = 'G6 V';
    const SPECTRAL_CLASS_G4_VI = 'G4 VI';
    const SPECTRAL_CLASS_G4_V = 'G4 V';
    const SPECTRAL_CLASS_F8_V = 'F8 V';
    const SPECTRAL_CLASS_F2_V = 'F2 V';
    const SPECTRAL_CLASS_F1_V = 'F1 V';
    const SPECTRAL_CLASS_K3_V = 'K3 V';
    const SPECTRAL_CLASS_F0_VI = 'F0 VI';
    const SPECTRAL_CLASS_G1_VI = 'G1 VI';
    const SPECTRAL_CLASS_G0_VI = 'G0 VI';
    const SPECTRAL_CLASS_K1_V = 'K1 V';
    const SPECTRAL_CLASS_M4_V = 'M4 V';
    const SPECTRAL_CLASS_M1_V = 'M1 V';
    const SPECTRAL_CLASS_M6_V = 'M6 V';
    const SPECTRAL_CLASS_M0_V = 'M0 V';
    const SPECTRAL_CLASS_K2_IV = 'K2 IV';
    const SPECTRAL_CLASS_G2_VI = 'G2 VI';
    const SPECTRAL_CLASS_K0_V = 'K0 V';
    const SPECTRAL_CLASS_K5_IV = 'K5 IV';
    const SPECTRAL_CLASS_F5_VI = 'F5 VI';
    const SPECTRAL_CLASS_G6_VI = 'G6 VI';
    const SPECTRAL_CLASS_F6_VI = 'F6 VI';
    const SPECTRAL_CLASS_F2_IV = 'F2 IV';
    const SPECTRAL_CLASS_G3_VI = 'G3 VI';
    const SPECTRAL_CLASS_M8_V = 'M8 V';
    const SPECTRAL_CLASS_F1_VI = 'F1 VI';
    const SPECTRAL_CLASS_K1_IV = 'K1 IV';
    const SPECTRAL_CLASS_F7_V = 'F7 V';
    const SPECTRAL_CLASS_G5_VI = 'G5 VI';
    const SPECTRAL_CLASS_M5_V = 'M5 V';
    const SPECTRAL_CLASS_G7_VI = 'G7 VI';
    const SPECTRAL_CLASS_F5_V = 'F5 V';
    const SPECTRAL_CLASS_F4_VI = 'F4 VI';
    const SPECTRAL_CLASS_F8_VI = 'F8 VI';
    const SPECTRAL_CLASS_K3_IV = 'K3 IV';
    const SPECTRAL_CLASS_F4_IV = 'F4 IV';
    const SPECTRAL_CLASS_F0_V = 'F0 V';
    const SPECTRAL_CLASS_G7_IV = 'G7 IV';
    const SPECTRAL_CLASS_G8_VI = 'G8 VI';
    const SPECTRAL_CLASS_F2_VI = 'F2 VI';
    const SPECTRAL_CLASS_F4_V = 'F4 V';
    const SPECTRAL_CLASS_F7_VI = 'F7 VI';
    const SPECTRAL_CLASS_F3_V = 'F3 V';
    const SPECTRAL_CLASS_G1_V = 'G1 V';
    const SPECTRAL_CLASS_G9_VI = 'G9 VI';
    const SPECTRAL_CLASS_F3_IV = 'F3 IV';
    const SPECTRAL_CLASS_F9_VI = 'F9 VI';
    const SPECTRAL_CLASS_M9_V = 'M9 V';
    const SPECTRAL_CLASS_K0_IV = 'K0 IV';
    const SPECTRAL_CLASS_F1_IV = 'F1 IV';
    const SPECTRAL_CLASS_G4_IV = 'G4 IV';
    const SPECTRAL_CLASS_F3_VI = 'F3 VI';
    const SPECTRAL_CLASS_K4_IV = 'K4 IV';
    const SPECTRAL_CLASS_G5_IV = 'G5 IV';
    const SPECTRAL_CLASS_G3_IV = 'G3 IV';
    const SPECTRAL_CLASS_G1_IV = 'G1 IV';
    const SPECTRAL_CLASS_K7_IV = 'K7 IV';
    const SPECTRAL_CLASS_G0_IV = 'G0 IV';
    const SPECTRAL_CLASS_K6_IV = 'K6 IV';
    const SPECTRAL_CLASS_K9_IV = 'K9 IV';
    const SPECTRAL_CLASS_G2_IV = 'G2 IV';
    const SPECTRAL_CLASS_F9_IV = 'F9 IV';
    const SPECTRAL_CLASS_F0_IV = 'F0 IV';
    const SPECTRAL_CLASS_K8_IV = 'K8 IV';
    const SPECTRAL_CLASS_G8_IV = 'G8 IV';
    const SPECTRAL_CLASS_F6_IV = 'F6 IV';
    const SPECTRAL_CLASS_F5_IV = 'F5 IV';
    const SPECTRAL_CLASS_A0 = 'A0';
    const SPECTRAL_CLASS_A0_IV = 'A0IV';
    const SPECTRAL_CLASS_A0_IV2 = 'A0IV2';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpectralClassAllowableValues()
    {
        return [
            self::SPECTRAL_CLASS_K2_V,
            self::SPECTRAL_CLASS_K4_V,
            self::SPECTRAL_CLASS_G2_V,
            self::SPECTRAL_CLASS_G8_V,
            self::SPECTRAL_CLASS_M7_V,
            self::SPECTRAL_CLASS_K7_V,
            self::SPECTRAL_CLASS_M2_V,
            self::SPECTRAL_CLASS_K5_V,
            self::SPECTRAL_CLASS_M3_V,
            self::SPECTRAL_CLASS_G0_V,
            self::SPECTRAL_CLASS_G7_V,
            self::SPECTRAL_CLASS_G3_V,
            self::SPECTRAL_CLASS_F9_V,
            self::SPECTRAL_CLASS_G5_V,
            self::SPECTRAL_CLASS_F6_V,
            self::SPECTRAL_CLASS_K8_V,
            self::SPECTRAL_CLASS_K9_V,
            self::SPECTRAL_CLASS_K6_V,
            self::SPECTRAL_CLASS_G9_V,
            self::SPECTRAL_CLASS_G6_V,
            self::SPECTRAL_CLASS_G4_VI,
            self::SPECTRAL_CLASS_G4_V,
            self::SPECTRAL_CLASS_F8_V,
            self::SPECTRAL_CLASS_F2_V,
            self::SPECTRAL_CLASS_F1_V,
            self::SPECTRAL_CLASS_K3_V,
            self::SPECTRAL_CLASS_F0_VI,
            self::SPECTRAL_CLASS_G1_VI,
            self::SPECTRAL_CLASS_G0_VI,
            self::SPECTRAL_CLASS_K1_V,
            self::SPECTRAL_CLASS_M4_V,
            self::SPECTRAL_CLASS_M1_V,
            self::SPECTRAL_CLASS_M6_V,
            self::SPECTRAL_CLASS_M0_V,
            self::SPECTRAL_CLASS_K2_IV,
            self::SPECTRAL_CLASS_G2_VI,
            self::SPECTRAL_CLASS_K0_V,
            self::SPECTRAL_CLASS_K5_IV,
            self::SPECTRAL_CLASS_F5_VI,
            self::SPECTRAL_CLASS_G6_VI,
            self::SPECTRAL_CLASS_F6_VI,
            self::SPECTRAL_CLASS_F2_IV,
            self::SPECTRAL_CLASS_G3_VI,
            self::SPECTRAL_CLASS_M8_V,
            self::SPECTRAL_CLASS_F1_VI,
            self::SPECTRAL_CLASS_K1_IV,
            self::SPECTRAL_CLASS_F7_V,
            self::SPECTRAL_CLASS_G5_VI,
            self::SPECTRAL_CLASS_M5_V,
            self::SPECTRAL_CLASS_G7_VI,
            self::SPECTRAL_CLASS_F5_V,
            self::SPECTRAL_CLASS_F4_VI,
            self::SPECTRAL_CLASS_F8_VI,
            self::SPECTRAL_CLASS_K3_IV,
            self::SPECTRAL_CLASS_F4_IV,
            self::SPECTRAL_CLASS_F0_V,
            self::SPECTRAL_CLASS_G7_IV,
            self::SPECTRAL_CLASS_G8_VI,
            self::SPECTRAL_CLASS_F2_VI,
            self::SPECTRAL_CLASS_F4_V,
            self::SPECTRAL_CLASS_F7_VI,
            self::SPECTRAL_CLASS_F3_V,
            self::SPECTRAL_CLASS_G1_V,
            self::SPECTRAL_CLASS_G9_VI,
            self::SPECTRAL_CLASS_F3_IV,
            self::SPECTRAL_CLASS_F9_VI,
            self::SPECTRAL_CLASS_M9_V,
            self::SPECTRAL_CLASS_K0_IV,
            self::SPECTRAL_CLASS_F1_IV,
            self::SPECTRAL_CLASS_G4_IV,
            self::SPECTRAL_CLASS_F3_VI,
            self::SPECTRAL_CLASS_K4_IV,
            self::SPECTRAL_CLASS_G5_IV,
            self::SPECTRAL_CLASS_G3_IV,
            self::SPECTRAL_CLASS_G1_IV,
            self::SPECTRAL_CLASS_K7_IV,
            self::SPECTRAL_CLASS_G0_IV,
            self::SPECTRAL_CLASS_K6_IV,
            self::SPECTRAL_CLASS_K9_IV,
            self::SPECTRAL_CLASS_G2_IV,
            self::SPECTRAL_CLASS_F9_IV,
            self::SPECTRAL_CLASS_F0_IV,
            self::SPECTRAL_CLASS_K8_IV,
            self::SPECTRAL_CLASS_G8_IV,
            self::SPECTRAL_CLASS_F6_IV,
            self::SPECTRAL_CLASS_F5_IV,
            self::SPECTRAL_CLASS_A0,
            self::SPECTRAL_CLASS_A0_IV,
            self::SPECTRAL_CLASS_A0_IV2,
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
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['luminosity'] = isset($data['luminosity']) ? $data['luminosity'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['radius'] = isset($data['radius']) ? $data['radius'] : null;
        $this->container['solar_system_id'] = isset($data['solar_system_id']) ? $data['solar_system_id'] : null;
        $this->container['spectral_class'] = isset($data['spectral_class']) ? $data['spectral_class'] : null;
        $this->container['temperature'] = isset($data['temperature']) ? $data['temperature'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['age'] === null) {
            $invalidProperties[] = "'age' can't be null";
        }
        if ($this->container['luminosity'] === null) {
            $invalidProperties[] = "'luminosity' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['radius'] === null) {
            $invalidProperties[] = "'radius' can't be null";
        }
        if ($this->container['solar_system_id'] === null) {
            $invalidProperties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['spectral_class'] === null) {
            $invalidProperties[] = "'spectral_class' can't be null";
        }
        $allowedValues = $this->getSpectralClassAllowableValues();
        if (!is_null($this->container['spectral_class']) && !in_array($this->container['spectral_class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'spectral_class', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['temperature'] === null) {
            $invalidProperties[] = "'temperature' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
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
     * Gets age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param int $age Age of star in years
     *
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets luminosity
     *
     * @return float
     */
    public function getLuminosity()
    {
        return $this->container['luminosity'];
    }

    /**
     * Sets luminosity
     *
     * @param float $luminosity luminosity number
     *
     * @return $this
     */
    public function setLuminosity($luminosity)
    {
        $this->container['luminosity'] = $luminosity;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name string
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets radius
     *
     * @return int
     */
    public function getRadius()
    {
        return $this->container['radius'];
    }

    /**
     * Sets radius
     *
     * @param int $radius radius integer
     *
     * @return $this
     */
    public function setRadius($radius)
    {
        $this->container['radius'] = $radius;

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
     * @param int $solar_system_id solar_system_id integer
     *
     * @return $this
     */
    public function setSolarSystemId($solar_system_id)
    {
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets spectral_class
     *
     * @return string
     */
    public function getSpectralClass()
    {
        return $this->container['spectral_class'];
    }

    /**
     * Sets spectral_class
     *
     * @param string $spectral_class spectral_class string
     *
     * @return $this
     */
    public function setSpectralClass($spectral_class)
    {
        $allowedValues = $this->getSpectralClassAllowableValues();
        if (!in_array($spectral_class, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'spectral_class', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spectral_class'] = $spectral_class;

        return $this;
    }

    /**
     * Gets temperature
     *
     * @return int
     */
    public function getTemperature()
    {
        return $this->container['temperature'];
    }

    /**
     * Sets temperature
     *
     * @param int $temperature temperature integer
     *
     * @return $this
     */
    public function setTemperature($temperature)
    {
        $this->container['temperature'] = $temperature;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id type_id integer
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

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
