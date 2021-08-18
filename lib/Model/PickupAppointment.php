<?php
/**
 * PickupAppointment
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v5
 *
 * The bol.com API for Retailers.
 *
 * The version of the OpenAPI document: 5.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * PickupAppointment Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PickupAppointment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PickupAppointment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comment_to_transporter' => 'string',
        'address' => '\BolApi\Client\Model\Address',
        'pickup_time_slot' => '\BolApi\Client\Model\ReplenishmentPickupTimeSlot',
        'pickup_date_time' => '\DateTime',
        'cancellation_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'comment_to_transporter' => null,
        'address' => null,
        'pickup_time_slot' => null,
        'pickup_date_time' => 'date-time',
        'cancellation_reason' => null
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
        'comment_to_transporter' => 'commentToTransporter',
        'address' => 'address',
        'pickup_time_slot' => 'pickupTimeSlot',
        'pickup_date_time' => 'pickupDateTime',
        'cancellation_reason' => 'cancellationReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment_to_transporter' => 'setCommentToTransporter',
        'address' => 'setAddress',
        'pickup_time_slot' => 'setPickupTimeSlot',
        'pickup_date_time' => 'setPickupDateTime',
        'cancellation_reason' => 'setCancellationReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment_to_transporter' => 'getCommentToTransporter',
        'address' => 'getAddress',
        'pickup_time_slot' => 'getPickupTimeSlot',
        'pickup_date_time' => 'getPickupDateTime',
        'cancellation_reason' => 'getCancellationReason'
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

    const CANCELLATION_REASON_UNKNOWN_ADDRESS = 'UNKNOWN_ADDRESS';
    const CANCELLATION_REASON_NOT_READY = 'NOT_READY';
    const CANCELLATION_REASON_NO_LABEL = 'NO_LABEL';
    const CANCELLATION_REASON_WRONG_PACKAGE = 'WRONG_PACKAGE';
    const CANCELLATION_REASON_NOT_AT_HOME = 'NOT_AT_HOME';
    const CANCELLATION_REASON_OTHER_REASON = 'OTHER_REASON';
    const CANCELLATION_REASON_REQUEST_FROM_RETAILER = 'REQUEST_FROM_RETAILER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCancellationReasonAllowableValues()
    {
        return [
            self::CANCELLATION_REASON_UNKNOWN_ADDRESS,
            self::CANCELLATION_REASON_NOT_READY,
            self::CANCELLATION_REASON_NO_LABEL,
            self::CANCELLATION_REASON_WRONG_PACKAGE,
            self::CANCELLATION_REASON_NOT_AT_HOME,
            self::CANCELLATION_REASON_OTHER_REASON,
            self::CANCELLATION_REASON_REQUEST_FROM_RETAILER,
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
        $this->container['comment_to_transporter'] = $data['comment_to_transporter'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['pickup_time_slot'] = $data['pickup_time_slot'] ?? null;
        $this->container['pickup_date_time'] = $data['pickup_date_time'] ?? null;
        $this->container['cancellation_reason'] = $data['cancellation_reason'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['pickup_time_slot'] === null) {
            $invalidProperties[] = "'pickup_time_slot' can't be null";
        }
        $allowedValues = $this->getCancellationReasonAllowableValues();
        if (!is_null($this->container['cancellation_reason']) && !in_array($this->container['cancellation_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cancellation_reason', must be one of '%s'",
                $this->container['cancellation_reason'],
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
     * Gets comment_to_transporter
     *
     * @return string|null
     */
    public function getCommentToTransporter()
    {
        return $this->container['comment_to_transporter'];
    }

    /**
     * Sets comment_to_transporter
     *
     * @param string|null $comment_to_transporter A comment to the transporter regarding the pickup appointment.
     *
     * @return self
     */
    public function setCommentToTransporter($comment_to_transporter)
    {
        $this->container['comment_to_transporter'] = $comment_to_transporter;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \BolApi\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \BolApi\Client\Model\Address $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets pickup_time_slot
     *
     * @return \BolApi\Client\Model\ReplenishmentPickupTimeSlot
     */
    public function getPickupTimeSlot()
    {
        return $this->container['pickup_time_slot'];
    }

    /**
     * Sets pickup_time_slot
     *
     * @param \BolApi\Client\Model\ReplenishmentPickupTimeSlot $pickup_time_slot pickup_time_slot
     *
     * @return self
     */
    public function setPickupTimeSlot($pickup_time_slot)
    {
        $this->container['pickup_time_slot'] = $pickup_time_slot;

        return $this;
    }

    /**
     * Gets pickup_date_time
     *
     * @return \DateTime|null
     */
    public function getPickupDateTime()
    {
        return $this->container['pickup_date_time'];
    }

    /**
     * Sets pickup_date_time
     *
     * @param \DateTime|null $pickup_date_time The date and time in ISO 8601 format when this replenishment was picked up by the transporter.
     *
     * @return self
     */
    public function setPickupDateTime($pickup_date_time)
    {
        $this->container['pickup_date_time'] = $pickup_date_time;

        return $this;
    }

    /**
     * Gets cancellation_reason
     *
     * @return string|null
     */
    public function getCancellationReason()
    {
        return $this->container['cancellation_reason'];
    }

    /**
     * Sets cancellation_reason
     *
     * @param string|null $cancellation_reason In case of a pickup cancellation this field indicates the reason for cancelling this pickup.
     *
     * @return self
     */
    public function setCancellationReason($cancellation_reason)
    {
        $allowedValues = $this->getCancellationReasonAllowableValues();
        if (!is_null($cancellation_reason) && !in_array($cancellation_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cancellation_reason', must be one of '%s'",
                    $cancellation_reason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cancellation_reason'] = $cancellation_reason;

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


