# # Fulfilment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | Specifies whether this shipment has been fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). Defaults to FBR. |
**delivery_code** | **string** | The delivery promise that applies to this offer. This value will only be used in combination with fulfilmentMethod &#39;FBR&#39;. | [optional]
**pick_up_points** | [**\BolApi\Client\Model\PickUpPoint[]**](PickUpPoint.md) | Indicates whether this order is shipped to a Pick Up Point. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
