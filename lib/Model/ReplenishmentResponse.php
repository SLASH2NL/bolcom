<?php
/**
 * ReplenishmentResponse
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
 * ReplenishmentResponse Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReplenishmentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReplenishmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'replenishment_id' => 'string',
        'creation_date_time' => '\DateTime',
        'reference' => 'string',
        'labeling_by_bol' => 'bool',
        'state' => 'string',
        'delivery_information' => '\BolApi\Client\Model\DeliveryInformation',
        'pickup_appointment' => '\BolApi\Client\Model\PickupAppointment',
        'number_of_load_carriers' => 'int',
        'load_carriers' => '\BolApi\Client\Model\LoadCarrier[]',
        'lines' => '\BolApi\Client\Model\ReplenishmentLine[]',
        'invalid_lines' => '\BolApi\Client\Model\InvalidReplenishmentLine[]',
        'state_transitions' => '\BolApi\Client\Model\StateTransition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'replenishment_id' => null,
        'creation_date_time' => 'date-time',
        'reference' => null,
        'labeling_by_bol' => null,
        'state' => null,
        'delivery_information' => null,
        'pickup_appointment' => null,
        'number_of_load_carriers' => 'int32',
        'load_carriers' => null,
        'lines' => null,
        'invalid_lines' => null,
        'state_transitions' => null
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
        'replenishment_id' => 'replenishmentId',
        'creation_date_time' => 'creationDateTime',
        'reference' => 'reference',
        'labeling_by_bol' => 'labelingByBol',
        'state' => 'state',
        'delivery_information' => 'deliveryInformation',
        'pickup_appointment' => 'pickupAppointment',
        'number_of_load_carriers' => 'numberOfLoadCarriers',
        'load_carriers' => 'loadCarriers',
        'lines' => 'lines',
        'invalid_lines' => 'invalidLines',
        'state_transitions' => 'stateTransitions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'replenishment_id' => 'setReplenishmentId',
        'creation_date_time' => 'setCreationDateTime',
        'reference' => 'setReference',
        'labeling_by_bol' => 'setLabelingByBol',
        'state' => 'setState',
        'delivery_information' => 'setDeliveryInformation',
        'pickup_appointment' => 'setPickupAppointment',
        'number_of_load_carriers' => 'setNumberOfLoadCarriers',
        'load_carriers' => 'setLoadCarriers',
        'lines' => 'setLines',
        'invalid_lines' => 'setInvalidLines',
        'state_transitions' => 'setStateTransitions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'replenishment_id' => 'getReplenishmentId',
        'creation_date_time' => 'getCreationDateTime',
        'reference' => 'getReference',
        'labeling_by_bol' => 'getLabelingByBol',
        'state' => 'getState',
        'delivery_information' => 'getDeliveryInformation',
        'pickup_appointment' => 'getPickupAppointment',
        'number_of_load_carriers' => 'getNumberOfLoadCarriers',
        'load_carriers' => 'getLoadCarriers',
        'lines' => 'getLines',
        'invalid_lines' => 'getInvalidLines',
        'state_transitions' => 'getStateTransitions'
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

    const STATE_ANNOUNCED = 'ANNOUNCED';
    const STATE_IN_TRANSIT = 'IN_TRANSIT';
    const STATE_ARRIVED_AT_WH = 'ARRIVED_AT_WH';
    const STATE_IN_PROGRESS_AT_WH = 'IN_PROGRESS_AT_WH';
    const STATE_CANCELLED = 'CANCELLED';
    const STATE_DONE = 'DONE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ANNOUNCED,
            self::STATE_IN_TRANSIT,
            self::STATE_ARRIVED_AT_WH,
            self::STATE_IN_PROGRESS_AT_WH,
            self::STATE_CANCELLED,
            self::STATE_DONE,
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
        $this->container['replenishment_id'] = $data['replenishment_id'] ?? null;
        $this->container['creation_date_time'] = $data['creation_date_time'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['labeling_by_bol'] = $data['labeling_by_bol'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['delivery_information'] = $data['delivery_information'] ?? null;
        $this->container['pickup_appointment'] = $data['pickup_appointment'] ?? null;
        $this->container['number_of_load_carriers'] = $data['number_of_load_carriers'] ?? null;
        $this->container['load_carriers'] = $data['load_carriers'] ?? null;
        $this->container['lines'] = $data['lines'] ?? null;
        $this->container['invalid_lines'] = $data['invalid_lines'] ?? null;
        $this->container['state_transitions'] = $data['state_transitions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['replenishment_id'] === null) {
            $invalidProperties[] = "'replenishment_id' can't be null";
        }
        if ($this->container['creation_date_time'] === null) {
            $invalidProperties[] = "'creation_date_time' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['labeling_by_bol'] === null) {
            $invalidProperties[] = "'labeling_by_bol' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['delivery_information'] === null) {
            $invalidProperties[] = "'delivery_information' can't be null";
        }
        if ($this->container['load_carriers'] === null) {
            $invalidProperties[] = "'load_carriers' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
        if ($this->container['invalid_lines'] === null) {
            $invalidProperties[] = "'invalid_lines' can't be null";
        }
        if ($this->container['state_transitions'] === null) {
            $invalidProperties[] = "'state_transitions' can't be null";
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
     * Gets replenishment_id
     *
     * @return string
     */
    public function getReplenishmentId()
    {
        return $this->container['replenishment_id'];
    }

    /**
     * Sets replenishment_id
     *
     * @param string $replenishment_id The unique identifier of the replenishment.
     *
     * @return self
     */
    public function setReplenishmentId($replenishment_id)
    {
        $this->container['replenishment_id'] = $replenishment_id;

        return $this;
    }

    /**
     * Gets creation_date_time
     *
     * @return \DateTime
     */
    public function getCreationDateTime()
    {
        return $this->container['creation_date_time'];
    }

    /**
     * Sets creation_date_time
     *
     * @param \DateTime $creation_date_time The date and time when this replenishment was created. In ISO 8601 format.
     *
     * @return self
     */
    public function setCreationDateTime($creation_date_time)
    {
        $this->container['creation_date_time'] = $creation_date_time;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Custom user defined reference to identify the replenishment.
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets labeling_by_bol
     *
     * @return bool
     */
    public function getLabelingByBol()
    {
        return $this->container['labeling_by_bol'];
    }

    /**
     * Sets labeling_by_bol
     *
     * @param bool $labeling_by_bol Indicates whether the replenishment will be labeled by bol.com or not.
     *
     * @return self
     */
    public function setLabelingByBol($labeling_by_bol)
    {
        $this->container['labeling_by_bol'] = $labeling_by_bol;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Indicates the state of this replenishment order.
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
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
     * Gets delivery_information
     *
     * @return \BolApi\Client\Model\DeliveryInformation
     */
    public function getDeliveryInformation()
    {
        return $this->container['delivery_information'];
    }

    /**
     * Sets delivery_information
     *
     * @param \BolApi\Client\Model\DeliveryInformation $delivery_information delivery_information
     *
     * @return self
     */
    public function setDeliveryInformation($delivery_information)
    {
        $this->container['delivery_information'] = $delivery_information;

        return $this;
    }

    /**
     * Gets pickup_appointment
     *
     * @return \BolApi\Client\Model\PickupAppointment|null
     */
    public function getPickupAppointment()
    {
        return $this->container['pickup_appointment'];
    }

    /**
     * Sets pickup_appointment
     *
     * @param \BolApi\Client\Model\PickupAppointment|null $pickup_appointment pickup_appointment
     *
     * @return self
     */
    public function setPickupAppointment($pickup_appointment)
    {
        $this->container['pickup_appointment'] = $pickup_appointment;

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
     * @param int|null $number_of_load_carriers The number of load carriers in this shipment.
     *
     * @return self
     */
    public function setNumberOfLoadCarriers($number_of_load_carriers)
    {
        $this->container['number_of_load_carriers'] = $number_of_load_carriers;

        return $this;
    }

    /**
     * Gets load_carriers
     *
     * @return \BolApi\Client\Model\LoadCarrier[]
     */
    public function getLoadCarriers()
    {
        return $this->container['load_carriers'];
    }

    /**
     * Sets load_carriers
     *
     * @param \BolApi\Client\Model\LoadCarrier[] $load_carriers load_carriers
     *
     * @return self
     */
    public function setLoadCarriers($load_carriers)
    {
        $this->container['load_carriers'] = $load_carriers;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \BolApi\Client\Model\ReplenishmentLine[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \BolApi\Client\Model\ReplenishmentLine[] $lines lines
     *
     * @return self
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets invalid_lines
     *
     * @return \BolApi\Client\Model\InvalidReplenishmentLine[]
     */
    public function getInvalidLines()
    {
        return $this->container['invalid_lines'];
    }

    /**
     * Sets invalid_lines
     *
     * @param \BolApi\Client\Model\InvalidReplenishmentLine[] $invalid_lines invalid_lines
     *
     * @return self
     */
    public function setInvalidLines($invalid_lines)
    {
        $this->container['invalid_lines'] = $invalid_lines;

        return $this;
    }

    /**
     * Gets state_transitions
     *
     * @return \BolApi\Client\Model\StateTransition[]
     */
    public function getStateTransitions()
    {
        return $this->container['state_transitions'];
    }

    /**
     * Sets state_transitions
     *
     * @param \BolApi\Client\Model\StateTransition[] $state_transitions state_transitions
     *
     * @return self
     */
    public function setStateTransitions($state_transitions)
    {
        $this->container['state_transitions'] = $state_transitions;

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


