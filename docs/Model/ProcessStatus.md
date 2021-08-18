# # ProcessStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**process_status_id** | **string** | The process status id. | [optional]
**entity_id** | **string** | The id of the object being processed. E.g. in case of a shipment process id, you will receive the id of the order item being processed. | [optional]
**event_type** | **string** | Name of the requested action that is being processed. |
**description** | **string** | Describes the action that is being processed. |
**status** | **string** | Status of the action being processed. |
**error_message** | **string** | Shows error message if applicable. | [optional]
**create_timestamp** | [**\DateTime**](\DateTime.md) | Time of creation of the response. |
**links** | [**\BolApi\Client\Model\Link[]**](Link.md) | Lists available actions applicable to this endpoint. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
