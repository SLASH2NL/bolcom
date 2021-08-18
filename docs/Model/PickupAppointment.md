# # PickupAppointment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment_to_transporter** | **string** | A comment to the transporter regarding the pickup appointment. | [optional]
**address** | [**\BolApi\Client\Model\Address**](Address.md) |  |
**pickup_time_slot** | [**\BolApi\Client\Model\ReplenishmentPickupTimeSlot**](ReplenishmentPickupTimeSlot.md) |  |
**pickup_date_time** | [**\DateTime**](\DateTime.md) | The date and time in ISO 8601 format when this replenishment was picked up by the transporter. | [optional]
**cancellation_reason** | **string** | In case of a pickup cancellation this field indicates the reason for cancelling this pickup. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
