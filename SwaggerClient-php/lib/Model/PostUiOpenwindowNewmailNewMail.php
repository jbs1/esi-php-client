<?php
/**
 * PostUiOpenwindowNewmailNewMail
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
 * Swagger Codegen version: 2.3.0
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
 * PostUiOpenwindowNewmailNewMail Class Doc Comment
 *
 * @category Class
 * @description new_mail object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostUiOpenwindowNewmailNewMail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'post_ui_openwindow_newmail_new_mail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subject' => 'string',
        'body' => 'string',
        'recipients' => 'int[]',
        'to_mailing_list_id' => 'int',
        'to_corp_or_alliance_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subject' => null,
        'body' => null,
        'recipients' => 'int32',
        'to_mailing_list_id' => 'int32',
        'to_corp_or_alliance_id' => 'int32'
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
        'subject' => 'subject',
        'body' => 'body',
        'recipients' => 'recipients',
        'to_mailing_list_id' => 'to_mailing_list_id',
        'to_corp_or_alliance_id' => 'to_corp_or_alliance_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject' => 'setSubject',
        'body' => 'setBody',
        'recipients' => 'setRecipients',
        'to_mailing_list_id' => 'setToMailingListId',
        'to_corp_or_alliance_id' => 'setToCorpOrAllianceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject' => 'getSubject',
        'body' => 'getBody',
        'recipients' => 'getRecipients',
        'to_mailing_list_id' => 'getToMailingListId',
        'to_corp_or_alliance_id' => 'getToCorpOrAllianceId'
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
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['to_mailing_list_id'] = isset($data['to_mailing_list_id']) ? $data['to_mailing_list_id'] : null;
        $this->container['to_corp_or_alliance_id'] = isset($data['to_corp_or_alliance_id']) ? $data['to_corp_or_alliance_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ((strlen($this->container['subject']) > 1000)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 1000.";
        }

        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ((strlen($this->container['body']) > 10000)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be smaller than or equal to 10000.";
        }

        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
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

        if ($this->container['subject'] === null) {
            return false;
        }
        if (strlen($this->container['subject']) > 1000) {
            return false;
        }
        if ($this->container['body'] === null) {
            return false;
        }
        if (strlen($this->container['body']) > 10000) {
            return false;
        }
        if ($this->container['recipients'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject string
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        if ((strlen($subject) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling PostUiOpenwindowNewmailNewMail., must be smaller than or equal to 1000.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body string
     *
     * @return $this
     */
    public function setBody($body)
    {
        if ((strlen($body) > 10000)) {
            throw new \InvalidArgumentException('invalid length for $body when calling PostUiOpenwindowNewmailNewMail., must be smaller than or equal to 10000.');
        }

        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return int[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param int[] $recipients recipients array
     *
     * @return $this
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets to_mailing_list_id
     *
     * @return int
     */
    public function getToMailingListId()
    {
        return $this->container['to_mailing_list_id'];
    }

    /**
     * Sets to_mailing_list_id
     *
     * @param int $to_mailing_list_id Corporations, alliances and mailing lists are all types of mailing groups. You may only send to one mailing group, at a time, so you may fill out either this field or the to_corp_or_alliance_ids field
     *
     * @return $this
     */
    public function setToMailingListId($to_mailing_list_id)
    {
        $this->container['to_mailing_list_id'] = $to_mailing_list_id;

        return $this;
    }

    /**
     * Gets to_corp_or_alliance_id
     *
     * @return int
     */
    public function getToCorpOrAllianceId()
    {
        return $this->container['to_corp_or_alliance_id'];
    }

    /**
     * Sets to_corp_or_alliance_id
     *
     * @param int $to_corp_or_alliance_id to_corp_or_alliance_id integer
     *
     * @return $this
     */
    public function setToCorpOrAllianceId($to_corp_or_alliance_id)
    {
        $this->container['to_corp_or_alliance_id'] = $to_corp_or_alliance_id;

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


