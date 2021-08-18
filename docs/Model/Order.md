# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The order id. | [optional]
**pickup_point** | **bool** | Indicates whether this order is shipped to a Pick Up Point. | [optional]
**order_placed_date_time** | [**\DateTime**](\DateTime.md) | The date and time in ISO 8601 format when the order was placed. | [optional]
**shipment_details** | [**\BolApi\Client\Model\ShipmentDetails**](ShipmentDetails.md) |  |
**billing_details** | [**\BolApi\Client\Model\BillingDetails**](BillingDetails.md) |  | [optional]
**order_items** | [**\BolApi\Client\Model\OrderOrderItem[]**](OrderOrderItem.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
