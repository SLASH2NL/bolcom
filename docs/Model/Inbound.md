# # Inbound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inbound_id** | **int** | A unique identifier for an inbound shipment. |
**reference** | **string** | A user defined reference to identify the inbound shipment. |
**creation_date_time** | [**\DateTime**](\DateTime.md) | The date and time the inbound shipment was created, in ISO 8601 format. | [optional]
**state** | **string** | The current state of the inbound shipment. |
**labelling_service** | **bool** | Indicates whether the inbound will be labeled by bol.com or not. |
**announced_bskus** | **int** | The number of announced BSKU‘s. |
**announced_quantity** | **int** | The number of announced items. |
**received_bskus** | **int** | Number of lines that were scanned in our warehouse. This value does not provide the unique number of received bsku&#39;s. |
**received_quantity** | **int** | The number of received items. |
**time_slot** | [**\BolApi\Client\Model\TimeSlot**](TimeSlot.md) |  | [optional]
**products** | [**\BolApi\Client\Model\Product[]**](Product.md) | List of products. |
**state_transitions** | [**\BolApi\Client\Model\StateTransition[]**](StateTransition.md) | List of state transitions. |
**inbound_transporter** | [**\BolApi\Client\Model\Transporter**](Transporter.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
