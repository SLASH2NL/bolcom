# # DeliveryOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_label_offer_id** | **string** | Unique identifier for the shipping label offer. | [optional]
**valid_until_date** | [**\DateTime**](\DateTime.md) | The date until the delivery option (incl total price) is valid. | [optional]
**transporter_code** | **string** | A code representing the transporter which is being used for transportation. | [optional]
**label_type** | **string** | The type of the label, representing the way an item is being transported. | [optional]
**label_price** | [**\OpenAPI\Client\Model\LabelPrice**](LabelPrice.md) |  |
**package_restrictions** | [**\OpenAPI\Client\Model\PackageRestrictions**](PackageRestrictions.md) |  |
**handover_details** | [**\OpenAPI\Client\Model\HandoverDetails**](HandoverDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
