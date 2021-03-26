<?php
/**
 * HandoverDetails
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v4
 *
 * The bol.com API for Retailers.
 *
 * The version of the OpenAPI document: 4.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * HandoverDetails Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class HandoverDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HandoverDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meets_customer_expectation' => 'bool',
        'latest_handover_date_time' => '\DateTime',
        'collection_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meets_customer_expectation' => null,
        'latest_handover_date_time' => 'date-time',
        'collection_method' => null
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
        'meets_customer_expectation' => 'meetsCustomerExpectation',
        'latest_handover_date_time' => 'latestHandoverDateTime',
        'collection_method' => 'collectionMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meets_customer_expectation' => 'setMeetsCustomerExpectation',
        'latest_handover_date_time' => 'setLatestHandoverDateTime',
        'collection_method' => 'setCollectionMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meets_customer_expectation' => 'getMeetsCustomerExpectation',
        'latest_handover_date_time' => 'getLatestHandoverDateTime',
        'collection_method' => 'getCollectionMethod'
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

    const COLLECTION_METHOD_DROP_OFF = 'DROP_OFF';
    const COLLECTION_METHOD_PICK_UP = 'PICK_UP';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCollectionMethodAllowableValues()
    {
        return [
            self::COLLECTION_METHOD_DROP_OFF,
            self::COLLECTION_METHOD_PICK_UP,
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
        $this->container['meets_customer_expectation'] = $data['meets_customer_expectation'] ?? null;
        $this->container['latest_handover_date_time'] = $data['latest_handover_date_time'] ?? null;
        $this->container['collection_method'] = $data['collection_method'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCollectionMethodAllowableValues();
        if (!is_null($this->container['collection_method']) && !in_array($this->container['collection_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'collection_method', must be one of '%s'",
                $this->container['collection_method'],
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
     * Gets meets_customer_expectation
     *
     * @return bool|null
     */
    public function getMeetsCustomerExpectation()
    {
        return $this->container['meets_customer_expectation'];
    }

    /**
     * Sets meets_customer_expectation
     *
     * @param bool|null $meets_customer_expectation Indicates if you can use this label without receiving a strike if you handover before the latestHandoverDateTime. If this field is 'false' you can still buy and use this label but it will have negative consequences on your performance score because the order will be delivered too early or too late.
     *
     * @return self
     */
    public function setMeetsCustomerExpectation($meets_customer_expectation)
    {
        $this->container['meets_customer_expectation'] = $meets_customer_expectation;

        return $this;
    }

    /**
     * Gets latest_handover_date_time
     *
     * @return \DateTime|null
     */
    public function getLatestHandoverDateTime()
    {
        return $this->container['latest_handover_date_time'];
    }

    /**
     * Sets latest_handover_date_time
     *
     * @param \DateTime|null $latest_handover_date_time The date and time at which the parcel must ultimately be at the transporter to make sure your parcel is delivered on time. If you handover after this date you will receive a strike because you order will be delivered too late.
     *
     * @return self
     */
    public function setLatestHandoverDateTime($latest_handover_date_time)
    {
        $this->container['latest_handover_date_time'] = $latest_handover_date_time;

        return $this;
    }

    /**
     * Gets collection_method
     *
     * @return string|null
     */
    public function getCollectionMethod()
    {
        return $this->container['collection_method'];
    }

    /**
     * Sets collection_method
     *
     * @param string|null $collection_method The type of collection for this parcel.
     *
     * @return self
     */
    public function setCollectionMethod($collection_method)
    {
        $allowedValues = $this->getCollectionMethodAllowableValues();
        if (!is_null($collection_method) && !in_array($collection_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'collection_method', must be one of '%s'",
                    $collection_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['collection_method'] = $collection_method;

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


