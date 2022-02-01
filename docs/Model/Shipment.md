# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | A unique identifier for this shipment. | [optional]
**shipment_date_time** | [**\DateTime**](\DateTime.md) | The date and time in ISO 8601 format when the order item was shipped. | [optional]
**shipment_reference** | **string** | Reference supplied by the user when this item was shipped. | [optional]
**pickup_point** | **bool** | Indicates whether this order is shipped to a Pick Up Point. | [optional]
**order** | [**\BolApi\Client\Model\ShipmentOrder**](ShipmentOrder.md) |  |
**shipment_details** | [**\BolApi\Client\Model\ShipmentDetails**](ShipmentDetails.md) |  | [optional]
**billing_details** | [**\BolApi\Client\Model\BillingDetails**](BillingDetails.md) |  | [optional]
**shipment_items** | [**\BolApi\Client\Model\ShipmentItem[]**](ShipmentItem.md) |  |
**transport** | [**\BolApi\Client\Model\ShipmentTransport**](ShipmentTransport.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
