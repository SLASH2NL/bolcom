<?php
/**
 * Commission
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  BolApi\Client
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

namespace BolApi\Client\Model;

use \ArrayAccess;
use \BolApi\Client\ObjectSerializer;

/**
 * Commission Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Commission implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Commission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ean' => 'string',
        'condition' => 'string',
        'unit_price' => 'float',
        'fixed_amount' => 'float',
        'percentage' => 'float',
        'total_cost' => 'float',
        'total_cost_without_reduction' => 'float',
        'reductions' => '\BolApi\Client\Model\Reduction[]'
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
        'unit_price' => null,
        'fixed_amount' => null,
        'percentage' => null,
        'total_cost' => null,
        'total_cost_without_reduction' => null,
        'reductions' => null
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
        'unit_price' => 'unitPrice',
        'fixed_amount' => 'fixedAmount',
        'percentage' => 'percentage',
        'total_cost' => 'totalCost',
        'total_cost_without_reduction' => 'totalCostWithoutReduction',
        'reductions' => 'reductions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ean' => 'setEan',
        'condition' => 'setCondition',
        'unit_price' => 'setUnitPrice',
        'fixed_amount' => 'setFixedAmount',
        'percentage' => 'setPercentage',
        'total_cost' => 'setTotalCost',
        'total_cost_without_reduction' => 'setTotalCostWithoutReduction',
        'reductions' => 'setReductions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ean' => 'getEan',
        'condition' => 'getCondition',
        'unit_price' => 'getUnitPrice',
        'fixed_amount' => 'getFixedAmount',
        'percentage' => 'getPercentage',
        'total_cost' => 'getTotalCost',
        'total_cost_without_reduction' => 'getTotalCostWithoutReduction',
        'reductions' => 'getReductions'
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
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['fixed_amount'] = $data['fixed_amount'] ?? null;
        $this->container['percentage'] = $data['percentage'] ?? null;
        $this->container['total_cost'] = $data['total_cost'] ?? null;
        $this->container['total_cost_without_reduction'] = $data['total_cost_without_reduction'] ?? null;
        $this->container['reductions'] = $data['reductions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['reductions'] === null) {
            $invalidProperties[] = "'reductions' can't be null";
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
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition The condition of the offer.
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float $unit_price The intended selling price per single unit up to 2 decimals precision, including VAT.
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets fixed_amount
     *
     * @return float|null
     */
    public function getFixedAmount()
    {
        return $this->container['fixed_amount'];
    }

    /**
     * Sets fixed_amount
     *
     * @param float|null $fixed_amount A fixed commission fee, including VAT.
     *
     * @return self
     */
    public function setFixedAmount($fixed_amount)
    {
        $this->container['fixed_amount'] = $fixed_amount;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return float|null
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param float|null $percentage A percentage of commission, based on the intended selling price per unit, including VAT.
     *
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;

        return $this;
    }

    /**
     * Gets total_cost
     *
     * @return float|null
     */
    public function getTotalCost()
    {
        return $this->container['total_cost'];
    }

    /**
     * Sets total_cost
     *
     * @param float|null $total_cost The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers, and excludes VAT for Belgium sellers.
     *
     * @return self
     */
    public function setTotalCost($total_cost)
    {
        $this->container['total_cost'] = $total_cost;

        return $this;
    }

    /**
     * Gets total_cost_without_reduction
     *
     * @return float|null
     */
    public function getTotalCostWithoutReduction()
    {
        return $this->container['total_cost_without_reduction'];
    }

    /**
     * Sets total_cost_without_reduction
     *
     * @param float|null $total_cost_without_reduction The total commission for selling this product at bol.com without reductions including VAT.
     *
     * @return self
     */
    public function setTotalCostWithoutReduction($total_cost_without_reduction)
    {
        $this->container['total_cost_without_reduction'] = $total_cost_without_reduction;

        return $this;
    }

    /**
     * Gets reductions
     *
     * @return \BolApi\Client\Model\Reduction[]
     */
    public function getReductions()
    {
        return $this->container['reductions'];
    }

    /**
     * Sets reductions
     *
     * @param \BolApi\Client\Model\Reduction[] $reductions reductions
     *
     * @return self
     */
    public function setReductions($reductions)
    {
        $this->container['reductions'] = $reductions;

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


