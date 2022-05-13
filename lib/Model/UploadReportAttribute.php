<?php
/**
 * UploadReportAttribute
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
 * UploadReportAttribute Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UploadReportAttribute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UploadReportAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'values' => '\BolApi\Client\Model\UploadReportValue[]',
        'status' => 'string',
        'sub_status' => 'string',
        'sub_status_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'values' => null,
        'status' => null,
        'sub_status' => null,
        'sub_status_description' => null
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
        'id' => 'id',
        'values' => 'values',
        'status' => 'status',
        'sub_status' => 'subStatus',
        'sub_status_description' => 'subStatusDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'values' => 'setValues',
        'status' => 'setStatus',
        'sub_status' => 'setSubStatus',
        'sub_status_description' => 'setSubStatusDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'values' => 'getValues',
        'status' => 'getStatus',
        'sub_status' => 'getSubStatus',
        'sub_status_description' => 'getSubStatusDescription'
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

    const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const STATUS_DECLINED = 'DECLINED';
    const STATUS_PUBLISHED = 'PUBLISHED';
    const SUB_STATUS_BLOCKED_BY_RATE_LIMITER = 'BLOCKED_BY_RATE_LIMITER';
    const SUB_STATUS_DEPRECATED = 'DEPRECATED';
    const SUB_STATUS_IDENTICAL_VALUE_AS_BEFORE = 'IDENTICAL_VALUE_AS_BEFORE';
    const SUB_STATUS_MATCH_TO_PRODUCT_FAILED = 'MATCH_TO_PRODUCT_FAILED';
    const SUB_STATUS_NOT_RECENT = 'NOT_RECENT';
    const SUB_STATUS_REJECTED = 'REJECTED';
    const SUB_STATUS_REJECTED_BY_BRAND_AUTHORITY = 'REJECTED_BY_BRAND_AUTHORITY';
    const SUB_STATUS_REJECTED_BY_LOGISTIC = 'REJECTED_BY_LOGISTIC';
    const SUB_STATUS_REJECTED_NO_DATA = 'REJECTED_NO_DATA';
    const SUB_STATUS_REJECTED_UNPROCESSABLE = 'REJECTED_UNPROCESSABLE';
    const SUB_STATUS_TIMED_OUT = 'TIMED_OUT';
    const SUB_STATUS_UNKNOWN = 'UNKNOWN';
    const SUB_STATUS_VALIDATION_FAILED = 'VALIDATION_FAILED';
    const SUB_STATUS_VALIDATION_FAILED_DISABLED_GPC_CODE = 'VALIDATION_FAILED_DISABLED_GPC_CODE';
    const SUB_STATUS_VALIDATION_FAILED_DOES_NOT_EXIST = 'VALIDATION_FAILED_DOES_NOT_EXIST';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_DATE = 'VALIDATION_FAILED_INVALID_DATE';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_EAN = 'VALIDATION_FAILED_INVALID_EAN';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_FRACTION = 'VALIDATION_FAILED_INVALID_FRACTION';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_GPC_CODE = 'VALIDATION_FAILED_INVALID_GPC_CODE';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_INTEGER = 'VALIDATION_FAILED_INVALID_INTEGER';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_ISODATE = 'VALIDATION_FAILED_INVALID_ISODATE';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_ISODATETIME = 'VALIDATION_FAILED_INVALID_ISODATETIME';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_LOV_VALUE = 'VALIDATION_FAILED_INVALID_LOV_VALUE';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_MULTIPLE_VALUES = 'VALIDATION_FAILED_INVALID_MULTIPLE_VALUES';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_NO_VALUES = 'VALIDATION_FAILED_INVALID_NO_VALUES';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_NUMBER = 'VALIDATION_FAILED_INVALID_NUMBER';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_NUMERIC_TEXT = 'VALIDATION_FAILED_INVALID_NUMERIC_TEXT';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_TEXT = 'VALIDATION_FAILED_INVALID_TEXT';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_UNIT = 'VALIDATION_FAILED_INVALID_UNIT';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_URL = 'VALIDATION_FAILED_INVALID_URL';
    const SUB_STATUS_VALIDATION_FAILED_INVALID_VALUES = 'VALIDATION_FAILED_INVALID_VALUES';
    const SUB_STATUS_VALIDATION_FAILED_NOT_ALLOWED = 'VALIDATION_FAILED_NOT_ALLOWED';
    const SUB_STATUS_VALIDATION_FAILED_UNKNOWN_BASETYPE = 'VALIDATION_FAILED_UNKNOWN_BASETYPE';
    const SUB_STATUS_UPLOAD_REJECTED = 'UPLOAD_REJECTED';
    const SUB_STATUS_CREATED = 'CREATED';
    const SUB_STATUS_NOT_CHANGED = 'NOT_CHANGED';
    const SUB_STATUS_PROCESSING_STARTED = 'PROCESSING_STARTED';
    const SUB_STATUS_SELECTED = 'SELECTED';
    const SUB_STATUS_SELECTED_BY_RAND_AUTHORITY = 'SELECTED_BY_RAND_AUTHORITY';
    const SUB_STATUS_SELECTED_BY_LOGISTIC = 'SELECTED_BY_LOGISTIC';
    const SUB_STATUS_SELECTION_DELETED = 'SELECTION_DELETED';
    const SUB_STATUS_SELECTION_MERGED = 'SELECTION_MERGED';
    const SUB_STATUS_UPDATED = 'UPDATED';
    const SUB_STATUS_UPLOADED = 'UPLOADED';
    const SUB_STATUS_VALID_EAN = 'VALID_EAN';
    const SUB_STATUS_VALIDATED = 'VALIDATED';
    const SUB_STATUS_WAITING_FOR_GLOBAL_ID = 'WAITING_FOR_GLOBAL_ID';
    const SUB_STATUS_LABEL_UPDATE = 'LABEL_UPDATE';
    const SUB_STATUS_PUBLISHED = 'PUBLISHED';
    const SUB_STATUS_RECEIVED = 'RECEIVED';
    const SUB_STATUS_STORED = 'STORED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_DECLINED,
            self::STATUS_PUBLISHED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubStatusAllowableValues()
    {
        return [
            self::SUB_STATUS_BLOCKED_BY_RATE_LIMITER,
            self::SUB_STATUS_DEPRECATED,
            self::SUB_STATUS_IDENTICAL_VALUE_AS_BEFORE,
            self::SUB_STATUS_MATCH_TO_PRODUCT_FAILED,
            self::SUB_STATUS_NOT_RECENT,
            self::SUB_STATUS_REJECTED,
            self::SUB_STATUS_REJECTED_BY_BRAND_AUTHORITY,
            self::SUB_STATUS_REJECTED_BY_LOGISTIC,
            self::SUB_STATUS_REJECTED_NO_DATA,
            self::SUB_STATUS_REJECTED_UNPROCESSABLE,
            self::SUB_STATUS_TIMED_OUT,
            self::SUB_STATUS_UNKNOWN,
            self::SUB_STATUS_VALIDATION_FAILED,
            self::SUB_STATUS_VALIDATION_FAILED_DISABLED_GPC_CODE,
            self::SUB_STATUS_VALIDATION_FAILED_DOES_NOT_EXIST,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_DATE,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_EAN,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_FRACTION,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_GPC_CODE,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_INTEGER,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_ISODATE,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_ISODATETIME,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_LOV_VALUE,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_MULTIPLE_VALUES,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_NO_VALUES,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_NUMBER,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_NUMERIC_TEXT,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_TEXT,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_UNIT,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_URL,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_VALUES,
            self::SUB_STATUS_VALIDATION_FAILED_NOT_ALLOWED,
            self::SUB_STATUS_VALIDATION_FAILED_UNKNOWN_BASETYPE,
            self::SUB_STATUS_UPLOAD_REJECTED,
            self::SUB_STATUS_CREATED,
            self::SUB_STATUS_NOT_CHANGED,
            self::SUB_STATUS_PROCESSING_STARTED,
            self::SUB_STATUS_SELECTED,
            self::SUB_STATUS_SELECTED_BY_RAND_AUTHORITY,
            self::SUB_STATUS_SELECTED_BY_LOGISTIC,
            self::SUB_STATUS_SELECTION_DELETED,
            self::SUB_STATUS_SELECTION_MERGED,
            self::SUB_STATUS_UPDATED,
            self::SUB_STATUS_UPLOADED,
            self::SUB_STATUS_VALID_EAN,
            self::SUB_STATUS_VALIDATED,
            self::SUB_STATUS_WAITING_FOR_GLOBAL_ID,
            self::SUB_STATUS_LABEL_UPDATE,
            self::SUB_STATUS_PUBLISHED,
            self::SUB_STATUS_RECEIVED,
            self::SUB_STATUS_STORED,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['values'] = $data['values'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['sub_status'] = $data['sub_status'] ?? null;
        $this->container['sub_status_description'] = $data['sub_status_description'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubStatusAllowableValues();
        if (!is_null($this->container['sub_status']) && !in_array($this->container['sub_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sub_status', must be one of '%s'",
                $this->container['sub_status'],
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The identifier of the attribute for which the value has changed.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \BolApi\Client\Model\UploadReportValue[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \BolApi\Client\Model\UploadReportValue[] $values values
     *
     * @return self
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The processing state of the submitted attribute.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets sub_status
     *
     * @return string|null
     */
    public function getSubStatus()
    {
        return $this->container['sub_status'];
    }

    /**
     * Sets sub_status
     *
     * @param string|null $sub_status The reason code explaining why the value was rejected.
     *
     * @return self
     */
    public function setSubStatus($sub_status)
    {
        $allowedValues = $this->getSubStatusAllowableValues();
        if (!is_null($sub_status) && !in_array($sub_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sub_status', must be one of '%s'",
                    $sub_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sub_status'] = $sub_status;

        return $this;
    }

    /**
     * Gets sub_status_description
     *
     * @return string|null
     */
    public function getSubStatusDescription()
    {
        return $this->container['sub_status_description'];
    }

    /**
     * Sets sub_status_description
     *
     * @param string|null $sub_status_description The reason explaining why the value was rejected.
     *
     * @return self
     */
    public function setSubStatusDescription($sub_status_description)
    {
        $this->container['sub_status_description'] = $sub_status_description;

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


