# # ReplenishmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**replenishment_id** | **string** | The unique identifier of the replenishment. |
**creation_date_time** | [**\DateTime**](\DateTime.md) | The date and time when this replenishment was created. In ISO 8601 format. |
**reference** | **string** | Custom user defined reference to identify the replenishment. |
**labeling_by_bol** | **bool** | Indicates whether the replenishment will be labeled by bol.com or not. |
**state** | **string** | Indicates the state of this replenishment order. |
**delivery_information** | [**\BolApi\Client\Model\DeliveryInformation**](DeliveryInformation.md) |  |
**pickup_appointment** | [**\BolApi\Client\Model\PickupAppointment**](PickupAppointment.md) |  | [optional]
**number_of_load_carriers** | **int** | The number of load carriers in this shipment. | [optional]
**load_carriers** | [**\BolApi\Client\Model\LoadCarrier[]**](LoadCarrier.md) |  |
**lines** | [**\BolApi\Client\Model\ReplenishmentLine[]**](ReplenishmentLine.md) |  |
**invalid_lines** | [**\BolApi\Client\Model\InvalidReplenishmentLine[]**](InvalidReplenishmentLine.md) |  |
**state_transitions** | [**\BolApi\Client\Model\StateTransition[]**](StateTransition.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
