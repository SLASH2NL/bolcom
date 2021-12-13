# # ReducedShipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **int** | A unique identifier for this shipment. | [optional]
**shipment_date_time** | **\DateTime** | The date and time in ISO 8601 format when the order item was shipped. | [optional]
**shipment_reference** | **string** | Reference supplied by the user when this item was shipped. | [optional]
**order** | [**\BolApi\Client\Model\ReducedShipmentOrder**](ReducedShipmentOrder.md) |  |
**shipment_items** | [**\BolApi\Client\Model\ReducedShipmentItem[]**](ReducedShipmentItem.md) |  |
**transport** | [**\BolApi\Client\Model\ReducedTransport**](ReducedTransport.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
