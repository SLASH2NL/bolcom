# # UpdateReplenishmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | Update the state of the replenishment to cancel the replenishment. | [optional]
**delivery_info** | [**\BolApi\Client\Model\UpdateDeliveryInfo**](UpdateDeliveryInfo.md) |  | [optional]
**number_of_load_carriers** | **int** | The number of parcels in this replenishment. Note: for first mile this is only a maximum of 20 load carriers. | [optional]
**load_carriers** | [**\BolApi\Client\Model\UpdateLoadCarrier[]**](UpdateLoadCarrier.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
