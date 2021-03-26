<?php
/**
 * ReturnItem
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
 * ReturnItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReturnItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rma_id' => 'int',
        'order_id' => 'string',
        'ean' => 'string',
        'title' => 'string',
        'expected_quantity' => 'int',
        'return_reason' => 'string',
        'return_reason_comments' => 'string',
        'track_and_trace' => 'string',
        'transporter_name' => 'string',
        'handled' => 'bool',
        'processing_results' => '\OpenAPI\Client\Model\ReturnProcessingResult[]',
        'customer_details' => '\OpenAPI\Client\Model\CustomerDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rma_id' => 'int64',
        'order_id' => null,
        'ean' => null,
        'title' => null,
        'expected_quantity' => 'int32',
        'return_reason' => null,
        'return_reason_comments' => null,
        'track_and_trace' => null,
        'transporter_name' => null,
        'handled' => null,
        'processing_results' => null,
        'customer_details' => null
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
        'rma_id' => 'rmaId',
        'order_id' => 'orderId',
        'ean' => 'ean',
        'title' => 'title',
        'expected_quantity' => 'expectedQuantity',
        'return_reason' => 'returnReason',
        'return_reason_comments' => 'returnReasonComments',
        'track_and_trace' => 'trackAndTrace',
        'transporter_name' => 'transporterName',
        'handled' => 'handled',
        'processing_results' => 'processingResults',
        'customer_details' => 'customerDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rma_id' => 'setRmaId',
        'order_id' => 'setOrderId',
        'ean' => 'setEan',
        'title' => 'setTitle',
        'expected_quantity' => 'setExpectedQuantity',
        'return_reason' => 'setReturnReason',
        'return_reason_comments' => 'setReturnReasonComments',
        'track_and_trace' => 'setTrackAndTrace',
        'transporter_name' => 'setTransporterName',
        'handled' => 'setHandled',
        'processing_results' => 'setProcessingResults',
        'customer_details' => 'setCustomerDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rma_id' => 'getRmaId',
        'order_id' => 'getOrderId',
        'ean' => 'getEan',
        'title' => 'getTitle',
        'expected_quantity' => 'getExpectedQuantity',
        'return_reason' => 'getReturnReason',
        'return_reason_comments' => 'getReturnReasonComments',
        'track_and_trace' => 'getTrackAndTrace',
        'transporter_name' => 'getTransporterName',
        'handled' => 'getHandled',
        'processing_results' => 'getProcessingResults',
        'customer_details' => 'getCustomerDetails'
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
        $this->container['rma_id'] = $data['rma_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['expected_quantity'] = $data['expected_quantity'] ?? null;
        $this->container['return_reason'] = $data['return_reason'] ?? null;
        $this->container['return_reason_comments'] = $data['return_reason_comments'] ?? null;
        $this->container['track_and_trace'] = $data['track_and_trace'] ?? null;
        $this->container['transporter_name'] = $data['transporter_name'] ?? null;
        $this->container['handled'] = $data['handled'] ?? null;
        $this->container['processing_results'] = $data['processing_results'] ?? null;
        $this->container['customer_details'] = $data['customer_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['processing_results'] === null) {
            $invalidProperties[] = "'processing_results' can't be null";
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
     * Gets rma_id
     *
     * @return int|null
     */
    public function getRmaId()
    {
        return $this->container['rma_id'];
    }

    /**
     * Sets rma_id
     *
     * @param int|null $rma_id The RMA (Return Merchandise Authorization) id that identifies this particular return.
     *
     * @return self
     */
    public function setRmaId($rma_id)
    {
        $this->container['rma_id'] = $rma_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id The id of the customer order this return item is in.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean The EAN number associated with this product.
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The product title.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets expected_quantity
     *
     * @return int|null
     */
    public function getExpectedQuantity()
    {
        return $this->container['expected_quantity'];
    }

    /**
     * Sets expected_quantity
     *
     * @param int|null $expected_quantity The quantity that is expected to be returned by the customer. Note: this can be greater than 1 in case the customer ordered a quantity greater than 1 of the same product in the same customer order.
     *
     * @return self
     */
    public function setExpectedQuantity($expected_quantity)
    {
        $this->container['expected_quantity'] = $expected_quantity;

        return $this;
    }

    /**
     * Gets return_reason
     *
     * @return string|null
     */
    public function getReturnReason()
    {
        return $this->container['return_reason'];
    }

    /**
     * Sets return_reason
     *
     * @param string|null $return_reason The reason why the customer returned this product.
     *
     * @return self
     */
    public function setReturnReason($return_reason)
    {
        $this->container['return_reason'] = $return_reason;

        return $this;
    }

    /**
     * Gets return_reason_comments
     *
     * @return string|null
     */
    public function getReturnReasonComments()
    {
        return $this->container['return_reason_comments'];
    }

    /**
     * Sets return_reason_comments
     *
     * @param string|null $return_reason_comments Additional details from the customer as to why this item was returned.
     *
     * @return self
     */
    public function setReturnReasonComments($return_reason_comments)
    {
        $this->container['return_reason_comments'] = $return_reason_comments;

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
     * Gets transporter_name
     *
     * @return string|null
     */
    public function getTransporterName()
    {
        return $this->container['transporter_name'];
    }

    /**
     * Sets transporter_name
     *
     * @param string|null $transporter_name The name of the transporter.
     *
     * @return self
     */
    public function setTransporterName($transporter_name)
    {
        $this->container['transporter_name'] = $transporter_name;

        return $this;
    }

    /**
     * Gets handled
     *
     * @return bool|null
     */
    public function getHandled()
    {
        return $this->container['handled'];
    }

    /**
     * Sets handled
     *
     * @param bool|null $handled Indicates if this return item has been handled (by the retailer).
     *
     * @return self
     */
    public function setHandled($handled)
    {
        $this->container['handled'] = $handled;

        return $this;
    }

    /**
     * Gets processing_results
     *
     * @return \OpenAPI\Client\Model\ReturnProcessingResult[]
     */
    public function getProcessingResults()
    {
        return $this->container['processing_results'];
    }

    /**
     * Sets processing_results
     *
     * @param \OpenAPI\Client\Model\ReturnProcessingResult[] $processing_results processing_results
     *
     * @return self
     */
    public function setProcessingResults($processing_results)
    {
        $this->container['processing_results'] = $processing_results;

        return $this;
    }

    /**
     * Gets customer_details
     *
     * @return \OpenAPI\Client\Model\CustomerDetails|null
     */
    public function getCustomerDetails()
    {
        return $this->container['customer_details'];
    }

    /**
     * Sets customer_details
     *
     * @param \OpenAPI\Client\Model\CustomerDetails|null $customer_details customer_details
     *
     * @return self
     */
    public function setCustomerDetails($customer_details)
    {
        $this->container['customer_details'] = $customer_details;

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


