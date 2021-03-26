# # InboundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | A user defined reference to identify the inbound shipment. | [optional]
**time_slot** | [**\BolApi\Client\Model\TimeSlot**](TimeSlot.md) |  |
**inbound_transporter** | [**\BolApi\Client\Model\Transporter**](Transporter.md) |  |
**labelling_service** | **bool** | Indicates whether the inbound will be labeled by bol.com or not. |
**products** | [**\BolApi\Client\Model\InboundProductRequest[]**](InboundProductRequest.md) | List of products. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
