<?php
/**
 * OrderFulfilment
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
 * OrderFulfilment Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderFulfilment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderFulfilment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'method' => 'string',
        'distribution_party' => 'string',
        'latest_delivery_date' => '\DateTime',
        'exact_delivery_date' => '\DateTime',
        'expiry_date' => '\DateTime',
        'time_frame_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'method' => null,
        'distribution_party' => null,
        'latest_delivery_date' => 'date',
        'exact_delivery_date' => 'date',
        'expiry_date' => 'date',
        'time_frame_type' => null
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
        'method' => 'method',
        'distribution_party' => 'distributionParty',
        'latest_delivery_date' => 'latestDeliveryDate',
        'exact_delivery_date' => 'exactDeliveryDate',
        'expiry_date' => 'expiryDate',
        'time_frame_type' => 'timeFrameType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'method' => 'setMethod',
        'distribution_party' => 'setDistributionParty',
        'latest_delivery_date' => 'setLatestDeliveryDate',
        'exact_delivery_date' => 'setExactDeliveryDate',
        'expiry_date' => 'setExpiryDate',
        'time_frame_type' => 'setTimeFrameType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'method' => 'getMethod',
        'distribution_party' => 'getDistributionParty',
        'latest_delivery_date' => 'getLatestDeliveryDate',
        'exact_delivery_date' => 'getExactDeliveryDate',
        'expiry_date' => 'getExpiryDate',
        'time_frame_type' => 'getTimeFrameType'
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

    const DISTRIBUTION_PARTY_RETAILER = 'RETAILER';
    const DISTRIBUTION_PARTY_BOL = 'BOL';
    const TIME_FRAME_TYPE_REGULAR = 'REGULAR';
    const TIME_FRAME_TYPE_EVENING = 'EVENING';
    const TIME_FRAME_TYPE_APPOINTMENT = 'APPOINTMENT';
    const TIME_FRAME_TYPE_SAMEDAY = 'SAMEDAY';
    const TIME_FRAME_TYPE_SUNDAY = 'SUNDAY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDistributionPartyAllowableValues()
    {
        return [
            self::DISTRIBUTION_PARTY_RETAILER,
            self::DISTRIBUTION_PARTY_BOL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTimeFrameTypeAllowableValues()
    {
        return [
            self::TIME_FRAME_TYPE_REGULAR,
            self::TIME_FRAME_TYPE_EVENING,
            self::TIME_FRAME_TYPE_APPOINTMENT,
            self::TIME_FRAME_TYPE_SAMEDAY,
            self::TIME_FRAME_TYPE_SUNDAY,
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
        $this->container['method'] = $data['method'] ?? null;
        $this->container['distribution_party'] = $data['distribution_party'] ?? null;
        $this->container['latest_delivery_date'] = $data['latest_delivery_date'] ?? null;
        $this->container['exact_delivery_date'] = $data['exact_delivery_date'] ?? null;
        $this->container['expiry_date'] = $data['expiry_date'] ?? null;
        $this->container['time_frame_type'] = $data['time_frame_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDistributionPartyAllowableValues();
        if (!is_null($this->container['distribution_party']) && !in_array($this->container['distribution_party'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'distribution_party', must be one of '%s'",
                $this->container['distribution_party'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTimeFrameTypeAllowableValues();
        if (!is_null($this->container['time_frame_type']) && !in_array($this->container['time_frame_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'time_frame_type', must be one of '%s'",
                $this->container['time_frame_type'],
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
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method Specifies whether this shipment has been fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). Defaults to FBR.
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets distribution_party
     *
     * @return string|null
     */
    public function getDistributionParty()
    {
        return $this->container['distribution_party'];
    }

    /**
     * Sets distribution_party
     *
     * @param string|null $distribution_party The party that manages the distribution, either bol.com or the retailer itself.
     *
     * @return self
     */
    public function setDistributionParty($distribution_party)
    {
        $allowedValues = $this->getDistributionPartyAllowableValues();
        if (!is_null($distribution_party) && !in_array($distribution_party, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'distribution_party', must be one of '%s'",
                    $distribution_party,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['distribution_party'] = $distribution_party;

        return $this;
    }

    /**
     * Gets latest_delivery_date
     *
     * @return \DateTime|null
     */
    public function getLatestDeliveryDate()
    {
        return $this->container['latest_delivery_date'];
    }

    /**
     * Sets latest_delivery_date
     *
     * @param \DateTime|null $latest_delivery_date The ultimate delivery date at which this order must be delivered at the customer's shipping address. This field is empty in case the exactDeliveryDate is filled.
     *
     * @return self
     */
    public function setLatestDeliveryDate($latest_delivery_date)
    {
        $this->container['latest_delivery_date'] = $latest_delivery_date;

        return $this;
    }

    /**
     * Gets exact_delivery_date
     *
     * @return \DateTime|null
     */
    public function getExactDeliveryDate()
    {
        return $this->container['exact_delivery_date'];
    }

    /**
     * Sets exact_delivery_date
     *
     * @param \DateTime|null $exact_delivery_date The exact delivery date at which this order must be delivered at the customer's shipping address. This field is only filled when the customer chose an exact date for delivery. This field is empty in case the latestDeliveryDate is filled.
     *
     * @return self
     */
    public function setExactDeliveryDate($exact_delivery_date)
    {
        $this->container['exact_delivery_date'] = $exact_delivery_date;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return \DateTime|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime|null $expiry_date The date this order item will automatically expire and thereby cancelling this order item from the order.
     *
     * @return self
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets time_frame_type
     *
     * @return string|null
     */
    public function getTimeFrameType()
    {
        return $this->container['time_frame_type'];
    }

    /**
     * Sets time_frame_type
     *
     * @param string|null $time_frame_type The selected delivery option.
     *
     * @return self
     */
    public function setTimeFrameType($time_frame_type)
    {
        $allowedValues = $this->getTimeFrameTypeAllowableValues();
        if (!is_null($time_frame_type) && !in_array($time_frame_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'time_frame_type', must be one of '%s'",
                    $time_frame_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['time_frame_type'] = $time_frame_type;

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


