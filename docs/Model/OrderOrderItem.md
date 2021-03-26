# # OrderOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_item_id** | **string** | The id for the order item (1 order can have multiple order items). | [optional]
**cancellation_request** | **bool** | Indicates whether the order was cancelled on request of the customer before the retailer has shipped it. | [optional]
**fulfilment** | [**\OpenAPI\Client\Model\OrderFulfilment**](OrderFulfilment.md) |  | [optional]
**offer** | [**\OpenAPI\Client\Model\OrderOffer**](OrderOffer.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\OrderProduct**](OrderProduct.md) |  | [optional]
**quantity** | **int** | Amount of ordered products for this order item id. | [optional]
**unit_price** | **float** | The selling price to the customer of a single unit including VAT. | [optional]
**commission** | **float** | The commission for all quantities of this order item. | [optional]
**additional_services** | [**\OpenAPI\Client\Model\AdditionalService[]**](AdditionalService.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
