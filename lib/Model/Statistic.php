<?php
/**
 * Statistic
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Overview  nextgen.kajomigenerator.de
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
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
 * Statistic Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Statistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'statistic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mailing_id' => 'int',
        'subject' => 'string',
        'senderemail' => 'string',
        'sendername' => 'string',
        'opens' => '\Swagger\Client\Model\StatisticOpens',
        'clicks' => '\Swagger\Client\Model\StatisticOpens',
        'bounces' => '\Swagger\Client\Model\StatisticBounces',
        'description' => 'string',
        'datesent' => '\DateTime',
        'amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mailing_id' => null,
        'subject' => null,
        'senderemail' => null,
        'sendername' => null,
        'opens' => null,
        'clicks' => null,
        'bounces' => null,
        'description' => null,
        'datesent' => 'date-time',
        'amount' => null
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
        'mailing_id' => 'mailing_id',
        'subject' => 'subject',
        'senderemail' => 'senderemail',
        'sendername' => 'sendername',
        'opens' => 'opens',
        'clicks' => 'clicks',
        'bounces' => 'bounces',
        'description' => 'description',
        'datesent' => 'datesent',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mailing_id' => 'setMailingId',
        'subject' => 'setSubject',
        'senderemail' => 'setSenderemail',
        'sendername' => 'setSendername',
        'opens' => 'setOpens',
        'clicks' => 'setClicks',
        'bounces' => 'setBounces',
        'description' => 'setDescription',
        'datesent' => 'setDatesent',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mailing_id' => 'getMailingId',
        'subject' => 'getSubject',
        'senderemail' => 'getSenderemail',
        'sendername' => 'getSendername',
        'opens' => 'getOpens',
        'clicks' => 'getClicks',
        'bounces' => 'getBounces',
        'description' => 'getDescription',
        'datesent' => 'getDatesent',
        'amount' => 'getAmount'
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
        $this->container['mailing_id'] = isset($data['mailing_id']) ? $data['mailing_id'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['senderemail'] = isset($data['senderemail']) ? $data['senderemail'] : null;
        $this->container['sendername'] = isset($data['sendername']) ? $data['sendername'] : null;
        $this->container['opens'] = isset($data['opens']) ? $data['opens'] : null;
        $this->container['clicks'] = isset($data['clicks']) ? $data['clicks'] : null;
        $this->container['bounces'] = isset($data['bounces']) ? $data['bounces'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['datesent'] = isset($data['datesent']) ? $data['datesent'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mailing_id'] === null) {
            $invalidProperties[] = "'mailing_id' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['senderemail'] === null) {
            $invalidProperties[] = "'senderemail' can't be null";
        }
        if ($this->container['sendername'] === null) {
            $invalidProperties[] = "'sendername' can't be null";
        }
        if ($this->container['opens'] === null) {
            $invalidProperties[] = "'opens' can't be null";
        }
        if ($this->container['clicks'] === null) {
            $invalidProperties[] = "'clicks' can't be null";
        }
        if ($this->container['bounces'] === null) {
            $invalidProperties[] = "'bounces' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['datesent'] === null) {
            $invalidProperties[] = "'datesent' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets mailing_id
     *
     * @return int
     */
    public function getMailingId()
    {
        return $this->container['mailing_id'];
    }

    /**
     * Sets mailing_id
     *
     * @param int $mailing_id mailing_id
     *
     * @return $this
     */
    public function setMailingId($mailing_id)
    {
        $this->container['mailing_id'] = $mailing_id;

        return $this;
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
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets senderemail
     *
     * @return string
     */
    public function getSenderemail()
    {
        return $this->container['senderemail'];
    }

    /**
     * Sets senderemail
     *
     * @param string $senderemail senderemail
     *
     * @return $this
     */
    public function setSenderemail($senderemail)
    {
        $this->container['senderemail'] = $senderemail;

        return $this;
    }

    /**
     * Gets sendername
     *
     * @return string
     */
    public function getSendername()
    {
        return $this->container['sendername'];
    }

    /**
     * Sets sendername
     *
     * @param string $sendername sendername
     *
     * @return $this
     */
    public function setSendername($sendername)
    {
        $this->container['sendername'] = $sendername;

        return $this;
    }

    /**
     * Gets opens
     *
     * @return \Swagger\Client\Model\StatisticOpens
     */
    public function getOpens()
    {
        return $this->container['opens'];
    }

    /**
     * Sets opens
     *
     * @param \Swagger\Client\Model\StatisticOpens $opens opens
     *
     * @return $this
     */
    public function setOpens($opens)
    {
        $this->container['opens'] = $opens;

        return $this;
    }

    /**
     * Gets clicks
     *
     * @return \Swagger\Client\Model\StatisticOpens
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param \Swagger\Client\Model\StatisticOpens $clicks clicks
     *
     * @return $this
     */
    public function setClicks($clicks)
    {
        $this->container['clicks'] = $clicks;

        return $this;
    }

    /**
     * Gets bounces
     *
     * @return \Swagger\Client\Model\StatisticBounces
     */
    public function getBounces()
    {
        return $this->container['bounces'];
    }

    /**
     * Sets bounces
     *
     * @param \Swagger\Client\Model\StatisticBounces $bounces bounces
     *
     * @return $this
     */
    public function setBounces($bounces)
    {
        $this->container['bounces'] = $bounces;

        return $this;
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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets datesent
     *
     * @return \DateTime
     */
    public function getDatesent()
    {
        return $this->container['datesent'];
    }

    /**
     * Sets datesent
     *
     * @param \DateTime $datesent datesent
     *
     * @return $this
     */
    public function setDatesent($datesent)
    {
        $this->container['datesent'] = $datesent;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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


