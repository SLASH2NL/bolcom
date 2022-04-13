<?php
/**
 * CreateDeliveryInfo
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
 * CreateDeliveryInfo Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateDeliveryInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateDeliveryInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expected_delivery_date' => 'string',
        'transporter_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expected_delivery_date' => null,
        'transporter_code' => null
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
        'expected_delivery_date' => 'expectedDeliveryDate',
        'transporter_code' => 'transporterCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expected_delivery_date' => 'setExpectedDeliveryDate',
        'transporter_code' => 'setTransporterCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expected_delivery_date' => 'getExpectedDeliveryDate',
        'transporter_code' => 'getTransporterCode'
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

    const TRANSPORTER_CODE_POSTNL = 'POSTNL';
    const TRANSPORTER_CODE_DHL = 'DHL';
    const TRANSPORTER_CODE_DPD = 'DPD';
    const TRANSPORTER_CODE_GLS = 'GLS';
    const TRANSPORTER_CODE_UPS = 'UPS';
    const TRANSPORTER_CODE_OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransporterCodeAllowableValues()
    {
        return [
            self::TRANSPORTER_CODE_POSTNL,
            self::TRANSPORTER_CODE_DHL,
            self::TRANSPORTER_CODE_DPD,
            self::TRANSPORTER_CODE_GLS,
            self::TRANSPORTER_CODE_UPS,
            self::TRANSPORTER_CODE_OTHER,
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
        $this->container['expected_delivery_date'] = $data['expected_delivery_date'] ?? null;
        $this->container['transporter_code'] = $data['transporter_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['expected_delivery_date'] === null) {
            $invalidProperties[] = "'expected_delivery_date' can't be null";
        }
        if ($this->container['transporter_code'] === null) {
            $invalidProperties[] = "'transporter_code' can't be null";
        }
        $allowedValues = $this->getTransporterCodeAllowableValues();
        if (!is_null($this->container['transporter_code']) && !in_array($this->container['transporter_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transporter_code', must be one of '%s'",
                $this->container['transporter_code'],
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
     * Gets expected_delivery_date
     *
     * @return string
     */
    public function getExpectedDeliveryDate()
    {
        return $this->container['expected_delivery_date'];
    }

    /**
     * Sets expected_delivery_date
     *
     * @param string $expected_delivery_date The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     *
     * @return self
     */
    public function setExpectedDeliveryDate($expected_delivery_date)
    {
        $this->container['expected_delivery_date'] = $expected_delivery_date;

        return $this;
    }

    /**
     * Gets transporter_code
     *
     * @return string
     */
    public function getTransporterCode()
    {
        return $this->container['transporter_code'];
    }

    /**
     * Sets transporter_code
     *
     * @param string $transporter_code The transporter code that correlates to the transport used for this replenishment.
     *
     * @return self
     */
    public function setTransporterCode($transporter_code)
    {
        $allowedValues = $this->getTransporterCodeAllowableValues();
        if (!in_array($transporter_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transporter_code', must be one of '%s'",
                    $transporter_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transporter_code'] = $transporter_code;

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


