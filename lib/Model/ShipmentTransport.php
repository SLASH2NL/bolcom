<?php
/**
 * ShipmentTransport
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
 * ShipmentTransport Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShipmentTransport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentTransport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transport_id' => 'string',
        'transporter_code' => 'string',
        'track_and_trace' => 'string',
        'shipping_label_id' => 'string',
        'transport_events' => '\BolApi\Client\Model\TransportEvent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transport_id' => null,
        'transporter_code' => null,
        'track_and_trace' => null,
        'shipping_label_id' => null,
        'transport_events' => null
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
        'transport_id' => 'transportId',
        'transporter_code' => 'transporterCode',
        'track_and_trace' => 'trackAndTrace',
        'shipping_label_id' => 'shippingLabelId',
        'transport_events' => 'transportEvents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transport_id' => 'setTransportId',
        'transporter_code' => 'setTransporterCode',
        'track_and_trace' => 'setTrackAndTrace',
        'shipping_label_id' => 'setShippingLabelId',
        'transport_events' => 'setTransportEvents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transport_id' => 'getTransportId',
        'transporter_code' => 'getTransporterCode',
        'track_and_trace' => 'getTrackAndTrace',
        'shipping_label_id' => 'getShippingLabelId',
        'transport_events' => 'getTransportEvents'
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
        $this->container['transport_id'] = $data['transport_id'] ?? null;
        $this->container['transporter_code'] = $data['transporter_code'] ?? null;
        $this->container['track_and_trace'] = $data['track_and_trace'] ?? null;
        $this->container['shipping_label_id'] = $data['shipping_label_id'] ?? null;
        $this->container['transport_events'] = $data['transport_events'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets transport_id
     *
     * @return string|null
     */
    public function getTransportId()
    {
        return $this->container['transport_id'];
    }

    /**
     * Sets transport_id
     *
     * @param string|null $transport_id The transport id.
     *
     * @return self
     */
    public function setTransportId($transport_id)
    {
        $this->container['transport_id'] = $transport_id;

        return $this;
    }

    /**
     * Gets transporter_code
     *
     * @return string|null
     */
    public function getTransporterCode()
    {
        return $this->container['transporter_code'];
    }

    /**
     * Sets transporter_code
     *
     * @param string|null $transporter_code Specify the transporter that will carry out the shipment.
     *
     * @return self
     */
    public function setTransporterCode($transporter_code)
    {
        $this->container['transporter_code'] = $transporter_code;

        return $this;
    }

    /**
     * Gets track_and_trace
     *
     * @return string|null
     */
    public function getTrackAndTrace()
    {
        return $this->container['track_and_trace'];
    }

    /**
     * Sets track_and_trace
     *
     * @param string|null $track_and_trace The track and trace code that is associated with this transport.
     *
     * @return self
     */
    public function setTrackAndTrace($track_and_trace)
    {
        $this->container['track_and_trace'] = $track_and_trace;

        return $this;
    }

    /**
     * Gets shipping_label_id
     *
     * @return string|null
     */
    public function getShippingLabelId()
    {
        return $this->container['shipping_label_id'];
    }

    /**
     * Sets shipping_label_id
     *
     * @param string|null $shipping_label_id The shipping label id.
     *
     * @return self
     */
    public function setShippingLabelId($shipping_label_id)
    {
        $this->container['shipping_label_id'] = $shipping_label_id;

        return $this;
    }

    /**
     * Gets transport_events
     *
     * @return \BolApi\Client\Model\TransportEvent[]|null
     */
    public function getTransportEvents()
    {
        return $this->container['transport_events'];
    }

    /**
     * Sets transport_events
     *
     * @param \BolApi\Client\Model\TransportEvent[]|null $transport_events transport_events
     *
     * @return self
     */
    public function setTransportEvents($transport_events)
    {
        $this->container['transport_events'] = $transport_events;

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


