<?php
/**
 * GetDogmaEffectsEffectIdOk
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
 * GetDogmaEffectsEffectIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetDogmaEffectsEffectIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_dogma_effects_effect_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'disallow_auto_repeat' => 'bool',
        'discharge_attribute_id' => 'int',
        'display_name' => 'string',
        'duration_attribute_id' => 'int',
        'effect_category' => 'int',
        'effect_id' => 'int',
        'electronic_chance' => 'bool',
        'falloff_attribute_id' => 'int',
        'icon_id' => 'int',
        'is_assistance' => 'bool',
        'is_offensive' => 'bool',
        'is_warp_safe' => 'bool',
        'modifiers' => '\Swagger\Client\Model\GetDogmaEffectsEffectIdModifier[]',
        'name' => 'string',
        'post_expression' => 'int',
        'pre_expression' => 'int',
        'published' => 'bool',
        'range_attribute_id' => 'int',
        'range_chance' => 'bool',
        'tracking_speed_attribute_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'disallow_auto_repeat' => null,
        'discharge_attribute_id' => 'int32',
        'display_name' => null,
        'duration_attribute_id' => 'int32',
        'effect_category' => 'int32',
        'effect_id' => 'int32',
        'electronic_chance' => null,
        'falloff_attribute_id' => 'int32',
        'icon_id' => 'int32',
        'is_assistance' => null,
        'is_offensive' => null,
        'is_warp_safe' => null,
        'modifiers' => null,
        'name' => null,
        'post_expression' => 'int32',
        'pre_expression' => 'int32',
        'published' => null,
        'range_attribute_id' => 'int32',
        'range_chance' => null,
        'tracking_speed_attribute_id' => 'int32'
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
        'description' => 'description',
        'disallow_auto_repeat' => 'disallow_auto_repeat',
        'discharge_attribute_id' => 'discharge_attribute_id',
        'display_name' => 'display_name',
        'duration_attribute_id' => 'duration_attribute_id',
        'effect_category' => 'effect_category',
        'effect_id' => 'effect_id',
        'electronic_chance' => 'electronic_chance',
        'falloff_attribute_id' => 'falloff_attribute_id',
        'icon_id' => 'icon_id',
        'is_assistance' => 'is_assistance',
        'is_offensive' => 'is_offensive',
        'is_warp_safe' => 'is_warp_safe',
        'modifiers' => 'modifiers',
        'name' => 'name',
        'post_expression' => 'post_expression',
        'pre_expression' => 'pre_expression',
        'published' => 'published',
        'range_attribute_id' => 'range_attribute_id',
        'range_chance' => 'range_chance',
        'tracking_speed_attribute_id' => 'tracking_speed_attribute_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'disallow_auto_repeat' => 'setDisallowAutoRepeat',
        'discharge_attribute_id' => 'setDischargeAttributeId',
        'display_name' => 'setDisplayName',
        'duration_attribute_id' => 'setDurationAttributeId',
        'effect_category' => 'setEffectCategory',
        'effect_id' => 'setEffectId',
        'electronic_chance' => 'setElectronicChance',
        'falloff_attribute_id' => 'setFalloffAttributeId',
        'icon_id' => 'setIconId',
        'is_assistance' => 'setIsAssistance',
        'is_offensive' => 'setIsOffensive',
        'is_warp_safe' => 'setIsWarpSafe',
        'modifiers' => 'setModifiers',
        'name' => 'setName',
        'post_expression' => 'setPostExpression',
        'pre_expression' => 'setPreExpression',
        'published' => 'setPublished',
        'range_attribute_id' => 'setRangeAttributeId',
        'range_chance' => 'setRangeChance',
        'tracking_speed_attribute_id' => 'setTrackingSpeedAttributeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'disallow_auto_repeat' => 'getDisallowAutoRepeat',
        'discharge_attribute_id' => 'getDischargeAttributeId',
        'display_name' => 'getDisplayName',
        'duration_attribute_id' => 'getDurationAttributeId',
        'effect_category' => 'getEffectCategory',
        'effect_id' => 'getEffectId',
        'electronic_chance' => 'getElectronicChance',
        'falloff_attribute_id' => 'getFalloffAttributeId',
        'icon_id' => 'getIconId',
        'is_assistance' => 'getIsAssistance',
        'is_offensive' => 'getIsOffensive',
        'is_warp_safe' => 'getIsWarpSafe',
        'modifiers' => 'getModifiers',
        'name' => 'getName',
        'post_expression' => 'getPostExpression',
        'pre_expression' => 'getPreExpression',
        'published' => 'getPublished',
        'range_attribute_id' => 'getRangeAttributeId',
        'range_chance' => 'getRangeChance',
        'tracking_speed_attribute_id' => 'getTrackingSpeedAttributeId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['disallow_auto_repeat'] = isset($data['disallow_auto_repeat']) ? $data['disallow_auto_repeat'] : null;
        $this->container['discharge_attribute_id'] = isset($data['discharge_attribute_id']) ? $data['discharge_attribute_id'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['duration_attribute_id'] = isset($data['duration_attribute_id']) ? $data['duration_attribute_id'] : null;
        $this->container['effect_category'] = isset($data['effect_category']) ? $data['effect_category'] : null;
        $this->container['effect_id'] = isset($data['effect_id']) ? $data['effect_id'] : null;
        $this->container['electronic_chance'] = isset($data['electronic_chance']) ? $data['electronic_chance'] : null;
        $this->container['falloff_attribute_id'] = isset($data['falloff_attribute_id']) ? $data['falloff_attribute_id'] : null;
        $this->container['icon_id'] = isset($data['icon_id']) ? $data['icon_id'] : null;
        $this->container['is_assistance'] = isset($data['is_assistance']) ? $data['is_assistance'] : null;
        $this->container['is_offensive'] = isset($data['is_offensive']) ? $data['is_offensive'] : null;
        $this->container['is_warp_safe'] = isset($data['is_warp_safe']) ? $data['is_warp_safe'] : null;
        $this->container['modifiers'] = isset($data['modifiers']) ? $data['modifiers'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['post_expression'] = isset($data['post_expression']) ? $data['post_expression'] : null;
        $this->container['pre_expression'] = isset($data['pre_expression']) ? $data['pre_expression'] : null;
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['range_attribute_id'] = isset($data['range_attribute_id']) ? $data['range_attribute_id'] : null;
        $this->container['range_chance'] = isset($data['range_chance']) ? $data['range_chance'] : null;
        $this->container['tracking_speed_attribute_id'] = isset($data['tracking_speed_attribute_id']) ? $data['tracking_speed_attribute_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['effect_id'] === null) {
            $invalidProperties[] = "'effect_id' can't be null";
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description string
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets disallow_auto_repeat
     *
     * @return bool
     */
    public function getDisallowAutoRepeat()
    {
        return $this->container['disallow_auto_repeat'];
    }

    /**
     * Sets disallow_auto_repeat
     *
     * @param bool $disallow_auto_repeat disallow_auto_repeat boolean
     *
     * @return $this
     */
    public function setDisallowAutoRepeat($disallow_auto_repeat)
    {
        $this->container['disallow_auto_repeat'] = $disallow_auto_repeat;

        return $this;
    }

    /**
     * Gets discharge_attribute_id
     *
     * @return int
     */
    public function getDischargeAttributeId()
    {
        return $this->container['discharge_attribute_id'];
    }

    /**
     * Sets discharge_attribute_id
     *
     * @param int $discharge_attribute_id discharge_attribute_id integer
     *
     * @return $this
     */
    public function setDischargeAttributeId($discharge_attribute_id)
    {
        $this->container['discharge_attribute_id'] = $discharge_attribute_id;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name string
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets duration_attribute_id
     *
     * @return int
     */
    public function getDurationAttributeId()
    {
        return $this->container['duration_attribute_id'];
    }

    /**
     * Sets duration_attribute_id
     *
     * @param int $duration_attribute_id duration_attribute_id integer
     *
     * @return $this
     */
    public function setDurationAttributeId($duration_attribute_id)
    {
        $this->container['duration_attribute_id'] = $duration_attribute_id;

        return $this;
    }

    /**
     * Gets effect_category
     *
     * @return int
     */
    public function getEffectCategory()
    {
        return $this->container['effect_category'];
    }

    /**
     * Sets effect_category
     *
     * @param int $effect_category effect_category integer
     *
     * @return $this
     */
    public function setEffectCategory($effect_category)
    {
        $this->container['effect_category'] = $effect_category;

        return $this;
    }

    /**
     * Gets effect_id
     *
     * @return int
     */
    public function getEffectId()
    {
        return $this->container['effect_id'];
    }

    /**
     * Sets effect_id
     *
     * @param int $effect_id effect_id integer
     *
     * @return $this
     */
    public function setEffectId($effect_id)
    {
        $this->container['effect_id'] = $effect_id;

        return $this;
    }

    /**
     * Gets electronic_chance
     *
     * @return bool
     */
    public function getElectronicChance()
    {
        return $this->container['electronic_chance'];
    }

    /**
     * Sets electronic_chance
     *
     * @param bool $electronic_chance electronic_chance boolean
     *
     * @return $this
     */
    public function setElectronicChance($electronic_chance)
    {
        $this->container['electronic_chance'] = $electronic_chance;

        return $this;
    }

    /**
     * Gets falloff_attribute_id
     *
     * @return int
     */
    public function getFalloffAttributeId()
    {
        return $this->container['falloff_attribute_id'];
    }

    /**
     * Sets falloff_attribute_id
     *
     * @param int $falloff_attribute_id falloff_attribute_id integer
     *
     * @return $this
     */
    public function setFalloffAttributeId($falloff_attribute_id)
    {
        $this->container['falloff_attribute_id'] = $falloff_attribute_id;

        return $this;
    }

    /**
     * Gets icon_id
     *
     * @return int
     */
    public function getIconId()
    {
        return $this->container['icon_id'];
    }

    /**
     * Sets icon_id
     *
     * @param int $icon_id icon_id integer
     *
     * @return $this
     */
    public function setIconId($icon_id)
    {
        $this->container['icon_id'] = $icon_id;

        return $this;
    }

    /**
     * Gets is_assistance
     *
     * @return bool
     */
    public function getIsAssistance()
    {
        return $this->container['is_assistance'];
    }

    /**
     * Sets is_assistance
     *
     * @param bool $is_assistance is_assistance boolean
     *
     * @return $this
     */
    public function setIsAssistance($is_assistance)
    {
        $this->container['is_assistance'] = $is_assistance;

        return $this;
    }

    /**
     * Gets is_offensive
     *
     * @return bool
     */
    public function getIsOffensive()
    {
        return $this->container['is_offensive'];
    }

    /**
     * Sets is_offensive
     *
     * @param bool $is_offensive is_offensive boolean
     *
     * @return $this
     */
    public function setIsOffensive($is_offensive)
    {
        $this->container['is_offensive'] = $is_offensive;

        return $this;
    }

    /**
     * Gets is_warp_safe
     *
     * @return bool
     */
    public function getIsWarpSafe()
    {
        return $this->container['is_warp_safe'];
    }

    /**
     * Sets is_warp_safe
     *
     * @param bool $is_warp_safe is_warp_safe boolean
     *
     * @return $this
     */
    public function setIsWarpSafe($is_warp_safe)
    {
        $this->container['is_warp_safe'] = $is_warp_safe;

        return $this;
    }

    /**
     * Gets modifiers
     *
     * @return \Swagger\Client\Model\GetDogmaEffectsEffectIdModifier[]
     */
    public function getModifiers()
    {
        return $this->container['modifiers'];
    }

    /**
     * Sets modifiers
     *
     * @param \Swagger\Client\Model\GetDogmaEffectsEffectIdModifier[] $modifiers modifiers array
     *
     * @return $this
     */
    public function setModifiers($modifiers)
    {
        $this->container['modifiers'] = $modifiers;

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
     * Gets post_expression
     *
     * @return int
     */
    public function getPostExpression()
    {
        return $this->container['post_expression'];
    }

    /**
     * Sets post_expression
     *
     * @param int $post_expression post_expression integer
     *
     * @return $this
     */
    public function setPostExpression($post_expression)
    {
        $this->container['post_expression'] = $post_expression;

        return $this;
    }

    /**
     * Gets pre_expression
     *
     * @return int
     */
    public function getPreExpression()
    {
        return $this->container['pre_expression'];
    }

    /**
     * Sets pre_expression
     *
     * @param int $pre_expression pre_expression integer
     *
     * @return $this
     */
    public function setPreExpression($pre_expression)
    {
        $this->container['pre_expression'] = $pre_expression;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool $published published boolean
     *
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets range_attribute_id
     *
     * @return int
     */
    public function getRangeAttributeId()
    {
        return $this->container['range_attribute_id'];
    }

    /**
     * Sets range_attribute_id
     *
     * @param int $range_attribute_id range_attribute_id integer
     *
     * @return $this
     */
    public function setRangeAttributeId($range_attribute_id)
    {
        $this->container['range_attribute_id'] = $range_attribute_id;

        return $this;
    }

    /**
     * Gets range_chance
     *
     * @return bool
     */
    public function getRangeChance()
    {
        return $this->container['range_chance'];
    }

    /**
     * Sets range_chance
     *
     * @param bool $range_chance range_chance boolean
     *
     * @return $this
     */
    public function setRangeChance($range_chance)
    {
        $this->container['range_chance'] = $range_chance;

        return $this;
    }

    /**
     * Gets tracking_speed_attribute_id
     *
     * @return int
     */
    public function getTrackingSpeedAttributeId()
    {
        return $this->container['tracking_speed_attribute_id'];
    }

    /**
     * Sets tracking_speed_attribute_id
     *
     * @param int $tracking_speed_attribute_id tracking_speed_attribute_id integer
     *
     * @return $this
     */
    public function setTrackingSpeedAttributeId($tracking_speed_attribute_id)
    {
        $this->container['tracking_speed_attribute_id'] = $tracking_speed_attribute_id;

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
