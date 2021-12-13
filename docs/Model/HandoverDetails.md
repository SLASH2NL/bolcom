# # HandoverDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meets_customer_expectation** | **bool** | Indicates if you can use this label without receiving a strike if you handover before the latestHandoverDateTime. If this field is &#39;false&#39; you can still buy and use this label but it will have negative consequences on your performance score because the order will be delivered too early or too late. | [optional]
**latest_handover_date_time** | **\DateTime** | The date and time at which the parcel must ultimately be at the transporter to make sure your parcel is delivered on time. If you handover after this date you will receive a strike because you order will be delivered too late. | [optional]
**collection_method** | **string** | The type of collection for this parcel. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
