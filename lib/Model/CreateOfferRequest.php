<?php
/**
 * CreateOfferRequest
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
 * CreateOfferRequest Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateOfferRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateOfferRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ean' => 'string',
        'condition' => '\BolApi\Client\Model\Condition',
        'reference' => 'string',
        'on_hold_by_retailer' => 'bool',
        'unknown_product_title' => 'string',
        'pricing' => '\BolApi\Client\Model\Pricing',
        'stock' => '\BolApi\Client\Model\StockCreate',
        'fulfilment' => '\BolApi\Client\Model\Fulfilment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ean' => null,
        'condition' => null,
        'reference' => null,
        'on_hold_by_retailer' => null,
        'unknown_product_title' => null,
        'pricing' => null,
        'stock' => null,
        'fulfilment' => null
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
        'ean' => 'ean',
        'condition' => 'condition',
        'reference' => 'reference',
        'on_hold_by_retailer' => 'onHoldByRetailer',
        'unknown_product_title' => 'unknownProductTitle',
        'pricing' => 'pricing',
        'stock' => 'stock',
        'fulfilment' => 'fulfilment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ean' => 'setEan',
        'condition' => 'setCondition',
        'reference' => 'setReference',
        'on_hold_by_retailer' => 'setOnHoldByRetailer',
        'unknown_product_title' => 'setUnknownProductTitle',
        'pricing' => 'setPricing',
        'stock' => 'setStock',
        'fulfilment' => 'setFulfilment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ean' => 'getEan',
        'condition' => 'getCondition',
        'reference' => 'getReference',
        'on_hold_by_retailer' => 'getOnHoldByRetailer',
        'unknown_product_title' => 'getUnknownProductTitle',
        'pricing' => 'getPricing',
        'stock' => 'getStock',
        'fulfilment' => 'getFulfilment'
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
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['on_hold_by_retailer'] = $data['on_hold_by_retailer'] ?? null;
        $this->container['unknown_product_title'] = $data['unknown_product_title'] ?? null;
        $this->container['pricing'] = $data['pricing'] ?? null;
        $this->container['stock'] = $data['stock'] ?? null;
        $this->container['fulfilment'] = $data['fulfilment'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ean'] === null) {
            $invalidProperties[] = "'ean' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 20)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['unknown_product_title']) && (mb_strlen($this->container['unknown_product_title']) > 500)) {
            $invalidProperties[] = "invalid value for 'unknown_product_title', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['unknown_product_title']) && (mb_strlen($this->container['unknown_product_title']) < 0)) {
            $invalidProperties[] = "invalid value for 'unknown_product_title', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['pricing'] === null) {
            $invalidProperties[] = "'pricing' can't be null";
        }
        if ($this->container['stock'] === null) {
            $invalidProperties[] = "'stock' can't be null";
        }
        if ($this->container['fulfilment'] === null) {
            $invalidProperties[] = "'fulfilment' can't be null";
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
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean The EAN number associated with this product. Note: in case an ISBN is provided, the ISBN will be replaced with the actual EAN belonging to this ISBN.
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \BolApi\Client\Model\Condition
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \BolApi\Client\Model\Condition $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference A user-defined reference that helps you identify this particular offer when receiving data from us. This element can optionally be left empty and has a maximum amount of 20 characters.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 20)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling CreateOfferRequest., must be smaller than or equal to 20.');
        }
        if (!is_null($reference) && (mb_strlen($reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling CreateOfferRequest., must be bigger than or equal to 0.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets on_hold_by_retailer
     *
     * @return bool|null
     */
    public function getOnHoldByRetailer()
    {
        return $this->container['on_hold_by_retailer'];
    }

    /**
     * Sets on_hold_by_retailer
     *
     * @param bool|null $on_hold_by_retailer Indicates whether or not you want to put this offer for sale on the bol.com website. Defaults to false.
     *
     * @return self
     */
    public function setOnHoldByRetailer($on_hold_by_retailer)
    {
        $this->container['on_hold_by_retailer'] = $on_hold_by_retailer;

        return $this;
    }

    /**
     * Gets unknown_product_title
     *
     * @return string|null
     */
    public function getUnknownProductTitle()
    {
        return $this->container['unknown_product_title'];
    }

    /**
     * Sets unknown_product_title
     *
     * @param string|null $unknown_product_title In case the item is not known to bol.com you can use this field to identify this particular product. Note: in case the product is known to bol.com, the unknown product title will not be stored.
     *
     * @return self
     */
    public function setUnknownProductTitle($unknown_product_title)
    {
        if (!is_null($unknown_product_title) && (mb_strlen($unknown_product_title) > 500)) {
            throw new \InvalidArgumentException('invalid length for $unknown_product_title when calling CreateOfferRequest., must be smaller than or equal to 500.');
        }
        if (!is_null($unknown_product_title) && (mb_strlen($unknown_product_title) < 0)) {
            throw new \InvalidArgumentException('invalid length for $unknown_product_title when calling CreateOfferRequest., must be bigger than or equal to 0.');
        }

        $this->container['unknown_product_title'] = $unknown_product_title;

        return $this;
    }

    /**
     * Gets pricing
     *
     * @return \BolApi\Client\Model\Pricing
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param \BolApi\Client\Model\Pricing $pricing pricing
     *
     * @return self
     */
    public function setPricing($pricing)
    {
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return \BolApi\Client\Model\StockCreate
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param \BolApi\Client\Model\StockCreate $stock stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets fulfilment
     *
     * @return \BolApi\Client\Model\Fulfilment
     */
    public function getFulfilment()
    {
        return $this->container['fulfilment'];
    }

    /**
     * Sets fulfilment
     *
     * @param \BolApi\Client\Model\Fulfilment $fulfilment fulfilment
     *
     * @return self
     */
    public function setFulfilment($fulfilment)
    {
        $this->container['fulfilment'] = $fulfilment;

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


