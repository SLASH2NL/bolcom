# BolApi\Client\ProcessStatusApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProcessStatus()**](ProcessStatusApi.md#getProcessStatus) | **GET** /retailer/process-status/{process-status-id} | Get the status of an asynchronous process by id
[**getProcessStatusBulk()**](ProcessStatusApi.md#getProcessStatusBulk) | **POST** /retailer/process-status | Gets the status of multiple asynchronous processes by an array of process status id&#39;s for a retailer
[**getProcessStatusEntityId()**](ProcessStatusApi.md#getProcessStatusEntityId) | **GET** /retailer/process-status | Gets the status of an asynchronous process by entity id and event type for a retailer


## `getProcessStatus()`

```php
getProcessStatus($process_status_id): \BolApi\Client\Model\ProcessStatus
```

Get the status of an asynchronous process by id

Retrieve a specific process-status, which shows information regarding a previously executed PUT/POST/DELETE request. All PUT/POST/DELETE requests on the other endpoints will supply a process-status-id in the related response. You can use this id to retrieve a status by using the endpoint below. Please note: process status instances are only retained for a limited period of time after completion. Outside of this period, a 404 will be returned for missing process statuses. Please handle this accordingly, by stopping any active polling for these statuses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ProcessStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_status_id = 56; // int | The id of the process status being requested. This id is supplied in every response to a PUT/POST/DELETE request on the other endpoints.

try {
    $result = $apiInstance->getProcessStatus($process_status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessStatusApi->getProcessStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_status_id** | **int**| The id of the process status being requested. This id is supplied in every response to a PUT/POST/DELETE request on the other endpoints. |

### Return type

[**\BolApi\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessStatusBulk()`

```php
getProcessStatusBulk($body): \BolApi\Client\Model\ProcessStatusResponse
```

Gets the status of multiple asynchronous processes by an array of process status id's for a retailer

Retrieve a list of process statuses, which shows information regarding previously executed PUT/POST/DELETE requests. No more than 1000 process status id's can be sent in a single request.Please note: process status instances are only retained for a limited period of time after completion. Outside of this period, deleted process statuses will no longer be returned. Please handle this accordingly, by stopping any active polling for these statuses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ProcessStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \BolApi\Client\Model\BulkProcessStatusRequest(); // \BolApi\Client\Model\BulkProcessStatusRequest

try {
    $result = $apiInstance->getProcessStatusBulk($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessStatusApi->getProcessStatusBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BolApi\Client\Model\BulkProcessStatusRequest**](../Model/BulkProcessStatusRequest.md)|  | [optional]

### Return type

[**\BolApi\Client\Model\ProcessStatusResponse**](../Model/ProcessStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v4+json`
- **Accept**: `application/vnd.retailer.v4+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessStatusEntityId()`

```php
getProcessStatusEntityId($entity_id, $event_type, $page): \BolApi\Client\Model\ProcessStatusResponse
```

Gets the status of an asynchronous process by entity id and event type for a retailer

Retrieve a list of process statuses, which shows information regarding previously executed PUT/POST/DELETE requests in descending order. You need to supply an entity id and event type. Please note: process status instances are only retained for a limited period of time after completion. Outside of this period, deleted process statuses will no longer be returned. Please handle this accordingly, by stopping any active polling for these statuses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ProcessStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = 987654321; // string | The entity id is not unique so you need to provide an event type. The entity id can either be order item id, transport id, return number or inbound reference.
$event_type = CONFIRM_SHIPMENT; // string | The event type can only be used in combination with the entity id.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getProcessStatusEntityId($entity_id, $event_type, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessStatusApi->getProcessStatusEntityId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| The entity id is not unique so you need to provide an event type. The entity id can either be order item id, transport id, return number or inbound reference. |
 **event_type** | **string**| The event type can only be used in combination with the entity id. |
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]

### Return type

[**\BolApi\Client\Model\ProcessStatusResponse**](../Model/ProcessStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
