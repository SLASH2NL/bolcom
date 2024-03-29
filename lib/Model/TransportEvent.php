<?php
/**
 * TransportEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v7 - Retailer API
 *
 * The bol.com API for retailers.
 *
 * The version of the OpenAPI document: 7.x
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BolApi\Client\Model;

use \ArrayAccess;
use \BolApi\Client\ObjectSerializer;

/**
 * TransportEvent Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransportEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransportEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event_code' => 'string',
        'event_date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event_code' => null,
        'event_date_time' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'event_code' => 'eventCode',
        'event_date_time' => 'eventDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_code' => 'setEventCode',
        'event_date_time' => 'setEventDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_code' => 'getEventCode',
        'event_date_time' => 'getEventDateTime'
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
        return self::$openAPIModelName;
    }

    const EVENT_CODE_PRE_ANNOUNCED = 'PRE_ANNOUNCED';
    const EVENT_CODE_AT_TRANSPORTER = 'AT_TRANSPORTER';
    const EVENT_CODE_IN_TRANSIT = 'IN_TRANSIT';
    const EVENT_CODE_DELIVERED_AT_NEIGHBOURS = 'DELIVERED_AT_NEIGHBOURS';
    const EVENT_CODE_DELIVERED_AT_CUSTOMER = 'DELIVERED_AT_CUSTOMER';
    const EVENT_CODE_PICKED_UP_AT_PICK_UP_POINT = 'PICKED_UP_AT_PICK_UP_POINT';
    const EVENT_CODE_AT_PICK_UP_POINT = 'AT_PICK_UP_POINT';
    const EVENT_CODE_RETURNED_TO_SENDER = 'RETURNED_TO_SENDER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventCodeAllowableValues()
    {
        return [
            self::EVENT_CODE_PRE_ANNOUNCED,
            self::EVENT_CODE_AT_TRANSPORTER,
            self::EVENT_CODE_IN_TRANSIT,
            self::EVENT_CODE_DELIVERED_AT_NEIGHBOURS,
            self::EVENT_CODE_DELIVERED_AT_CUSTOMER,
            self::EVENT_CODE_PICKED_UP_AT_PICK_UP_POINT,
            self::EVENT_CODE_AT_PICK_UP_POINT,
            self::EVENT_CODE_RETURNED_TO_SENDER,
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
        $this->container['event_code'] = $data['event_code'] ?? null;
        $this->container['event_date_time'] = $data['event_date_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEventCodeAllowableValues();
        if (!is_null($this->container['event_code']) && !in_array($this->container['event_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_code', must be one of '%s'",
                $this->container['event_code'],
                implode("', '", $allowedValues)
            );
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
     * Gets event_code
     *
     * @return string|null
     */
    public function getEventCode()
    {
        return $this->container['event_code'];
    }

    /**
     * Sets event_code
     *
     * @param string|null $event_code The transport event code indicates the location of the parcel within the distribution process.
     *
     * @return self
     */
    public function setEventCode($event_code)
    {
        $allowedValues = $this->getEventCodeAllowableValues();
        if (!is_null($event_code) && !in_array($event_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_code', must be one of '%s'",
                    $event_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_code'] = $event_code;

        return $this;
    }

    /**
     * Gets event_date_time
     *
     * @return \DateTime|null
     */
    public function getEventDateTime()
    {
        return $this->container['event_date_time'];
    }

    /**
     * Sets event_date_time
     *
     * @param \DateTime|null $event_date_time The date time of the transport event.
     *
     * @return self
     */
    public function setEventDateTime($event_date_time)
    {
        $this->container['event_date_time'] = $event_date_time;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


