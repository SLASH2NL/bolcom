<?php
/**
 * UploadReportResponse
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
 * UploadReportResponse Class Doc Comment
 *
 * @category Class
 * @description Upload report.
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UploadReportResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UploadReportResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'upload_id' => 'string',
        'language' => 'string',
        'status' => 'string',
        'attributes' => '\BolApi\Client\Model\UploadReportAttribute[]',
        'assets' => '\BolApi\Client\Model\UploadReportAsset[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'upload_id' => null,
        'language' => null,
        'status' => null,
        'attributes' => null,
        'assets' => null
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
        'upload_id' => 'uploadId',
        'language' => 'language',
        'status' => 'status',
        'attributes' => 'attributes',
        'assets' => 'assets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'upload_id' => 'setUploadId',
        'language' => 'setLanguage',
        'status' => 'setStatus',
        'attributes' => 'setAttributes',
        'assets' => 'setAssets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'upload_id' => 'getUploadId',
        'language' => 'getLanguage',
        'status' => 'getStatus',
        'attributes' => 'getAttributes',
        'assets' => 'getAssets'
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

    const LANGUAGE_NL = 'nl';
    const LANGUAGE_NL_BE = 'nl-BE';
    const LANGUAGE_FR = 'fr';
    const LANGUAGE_FR_BE = 'fr-BE';
    const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const STATUS_COMPLETED = 'COMPLETED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_NL,
            self::LANGUAGE_NL_BE,
            self::LANGUAGE_FR,
            self::LANGUAGE_FR_BE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_COMPLETED,
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
        $this->container['upload_id'] = $data['upload_id'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['assets'] = $data['assets'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['upload_id'] === null) {
            $invalidProperties[] = "'upload_id' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'language', must be one of '%s'",
                $this->container['language'],
                implode("', '", $allowedValues)
            );
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

        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
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
     * Gets upload_id
     *
     * @return string
     */
    public function getUploadId()
    {
        return $this->container['upload_id'];
    }

    /**
     * Sets upload_id
     *
     * @param string $upload_id The identifier of the upload report.
     *
     * @return self
     */
    public function setUploadId($upload_id)
    {
        $this->container['upload_id'] = $upload_id;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The language in which content is submitted.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'language', must be one of '%s'",
                    $language,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

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
     * @param string $status The current status of the upload report.
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
     * Gets attributes
     *
     * @return \BolApi\Client\Model\UploadReportAttribute[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \BolApi\Client\Model\UploadReportAttribute[] $attributes attributes
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets assets
     *
     * @return \BolApi\Client\Model\UploadReportAsset[]|null
     */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
     * Sets assets
     *
     * @param \BolApi\Client\Model\UploadReportAsset[]|null $assets assets
     *
     * @return self
     */
    public function setAssets($assets)
    {
        $this->container['assets'] = $assets;

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


