# # InboundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | A user defined reference to identify the inbound shipment. | [optional]
**time_slot** | [**\OpenAPI\Client\Model\TimeSlot**](TimeSlot.md) |  |
**inbound_transporter** | [**\OpenAPI\Client\Model\Transporter**](Transporter.md) |  |
**labelling_service** | **bool** | Indicates whether the inbound will be labeled by bol.com or not. |
**products** | [**\OpenAPI\Client\Model\InboundProductRequest[]**](InboundProductRequest.md) | List of products. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
