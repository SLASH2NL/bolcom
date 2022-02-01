<?php
/**
 * UpdateReplenishmentRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v6
 *
 * The bol.com API for Retailers.
 *
 * The version of the OpenAPI document: 6.0
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
 * UpdateReplenishmentRequest Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateReplenishmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateReplenishmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'state' => 'string',
        'delivery_info' => '\BolApi\Client\Model\UpdateDeliveryInfo',
        'number_of_load_carriers' => 'int',
        'load_carriers' => '\BolApi\Client\Model\UpdateLoadCarrier[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'state' => null,
        'delivery_info' => null,
        'number_of_load_carriers' => 'int32',
        'load_carriers' => null
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
        'state' => 'state',
        'delivery_info' => 'deliveryInfo',
        'number_of_load_carriers' => 'numberOfLoadCarriers',
        'load_carriers' => 'loadCarriers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state' => 'setState',
        'delivery_info' => 'setDeliveryInfo',
        'number_of_load_carriers' => 'setNumberOfLoadCarriers',
        'load_carriers' => 'setLoadCarriers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state' => 'getState',
        'delivery_info' => 'getDeliveryInfo',
        'number_of_load_carriers' => 'getNumberOfLoadCarriers',
        'load_carriers' => 'getLoadCarriers'
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

    const STATE_CANCELLED = 'CANCELLED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_CANCELLED,
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
        $this->container['state'] = $data['state'] ?? null;
        $this->container['delivery_info'] = $data['delivery_info'] ?? null;
        $this->container['number_of_load_carriers'] = $data['number_of_load_carriers'] ?? null;
        $this->container['load_carriers'] = $data['load_carriers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['number_of_load_carriers']) && ($this->container['number_of_load_carriers'] > 50)) {
            $invalidProperties[] = "invalid value for 'number_of_load_carriers', must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['number_of_load_carriers']) && ($this->container['number_of_load_carriers'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_of_load_carriers', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['load_carriers']) && (count($this->container['load_carriers']) > 50)) {
            $invalidProperties[] = "invalid value for 'load_carriers', number of items must be less than or equal to 50.";
        }

        if (!is_null($this->container['load_carriers']) && (count($this->container['load_carriers']) < 1)) {
            $invalidProperties[] = "invalid value for 'load_carriers', number of items must be greater than or equal to 1.";
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
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state Update the state of the replenishment to cancel the replenishment.
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets delivery_info
     *
     * @return \BolApi\Client\Model\UpdateDeliveryInfo|null
     */
    public function getDeliveryInfo()
    {
        return $this->container['delivery_info'];
    }

    /**
     * Sets delivery_info
     *
     * @param \BolApi\Client\Model\UpdateDeliveryInfo|null $delivery_info delivery_info
     *
     * @return self
     */
    public function setDeliveryInfo($delivery_info)
    {
        $this->container['delivery_info'] = $delivery_info;

        return $this;
    }

    /**
     * Gets number_of_load_carriers
     *
     * @return int|null
     */
    public function getNumberOfLoadCarriers()
    {
        return $this->container['number_of_load_carriers'];
    }

    /**
     * Sets number_of_load_carriers
     *
     * @param int|null $number_of_load_carriers The number of parcels in this replenishment. Note: for first mile this is only a maximum of 20 load carriers.
     *
     * @return self
     */
    public function setNumberOfLoadCarriers($number_of_load_carriers)
    {

        if (!is_null($number_of_load_carriers) && ($number_of_load_carriers > 50)) {
            throw new \InvalidArgumentException('invalid value for $number_of_load_carriers when calling UpdateReplenishmentRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($number_of_load_carriers) && ($number_of_load_carriers < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_of_load_carriers when calling UpdateReplenishmentRequest., must be bigger than or equal to 1.');
        }

        $this->container['number_of_load_carriers'] = $number_of_load_carriers;

        return $this;
    }

    /**
     * Gets load_carriers
     *
     * @return \BolApi\Client\Model\UpdateLoadCarrier[]|null
     */
    public function getLoadCarriers()
    {
        return $this->container['load_carriers'];
    }

    /**
     * Sets load_carriers
     *
     * @param \BolApi\Client\Model\UpdateLoadCarrier[]|null $load_carriers load_carriers
     *
     * @return self
     */
    public function setLoadCarriers($load_carriers)
    {

        if (!is_null($load_carriers) && (count($load_carriers) > 50)) {
            throw new \InvalidArgumentException('invalid value for $load_carriers when calling UpdateReplenishmentRequest., number of items must be less than or equal to 50.');
        }
        if (!is_null($load_carriers) && (count($load_carriers) < 1)) {
            throw new \InvalidArgumentException('invalid length for $load_carriers when calling UpdateReplenishmentRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['load_carriers'] = $load_carriers;

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


