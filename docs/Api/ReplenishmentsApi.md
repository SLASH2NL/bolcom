# BolApi\Client\ReplenishmentsApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeliveryDates()**](ReplenishmentsApi.md#getDeliveryDates) | **GET** /retailer/replenishments/delivery-dates | Get delivery dates
[**getLoadCarrierLabels()**](ReplenishmentsApi.md#getLoadCarrierLabels) | **GET** /retailer/replenishments/{replenishment-id}/load-carrier-labels | Get load carrier labels
[**getPickList()**](ReplenishmentsApi.md#getPickList) | **GET** /retailer/replenishments/{replenishment-id}/pick-list | Get pick list
[**getReplenishment()**](ReplenishmentsApi.md#getReplenishment) | **GET** /retailer/replenishments/{replenishment-id} | Get a replenishment by replenishment id
[**getReplenishments()**](ReplenishmentsApi.md#getReplenishments) | **GET** /retailer/replenishments | Get replenishments
[**postPickupTimeSlots()**](ReplenishmentsApi.md#postPickupTimeSlots) | **POST** /retailer/replenishments/pickup-time-slots | Post pickup time slots
[**postProductLabels()**](ReplenishmentsApi.md#postProductLabels) | **POST** /retailer/replenishments/product-labels | Post product labels
[**postReplenishment()**](ReplenishmentsApi.md#postReplenishment) | **POST** /retailer/replenishments | Post replenishment
[**putReplenishment()**](ReplenishmentsApi.md#putReplenishment) | **PUT** /retailer/replenishments/{replenishment-id} | Update replenishment


## `getDeliveryDates()`

```php
getDeliveryDates(): \BolApi\Client\Model\DeliveryDatesResponse
```

Get delivery dates

Retrieve a list of available delivery dates for a replenishment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDeliveryDates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getDeliveryDates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BolApi\Client\Model\DeliveryDatesResponse**](../Model/DeliveryDatesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v6+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoadCarrierLabels()`

```php
getLoadCarrierLabels($replenishment_id, $label_type): string[]
```

Get load carrier labels

Retrieve the load carrier labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$replenishment_id = 2312078154; // string | The unique identifier of the replenishment.
$label_type = WAREHOUSE; // string | The type of label which you want to print.

try {
    $result = $apiInstance->getLoadCarrierLabels($replenishment_id, $label_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getLoadCarrierLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **string**| The unique identifier of the replenishment. |
 **label_type** | **string**| The type of label which you want to print. | [optional] [default to &#39;WAREHOUSE&#39;]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v6+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPickList()`

```php
getPickList($replenishment_id): string[]
```

Get pick list

Retrieve the pick list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$replenishment_id = 2312078154; // string | The unique identifier of the replenishment.

try {
    $result = $apiInstance->getPickList($replenishment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getPickList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **string**| The unique identifier of the replenishment. |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v6+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReplenishment()`

```php
getReplenishment($replenishment_id): \BolApi\Client\Model\ReplenishmentResponse
```

Get a replenishment by replenishment id

Gets a replenishment by replenishment id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$replenishment_id = 2312078154; // string | The unique identifier of the replenishment.

try {
    $result = $apiInstance->getReplenishment($replenishment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getReplenishment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **string**| The unique identifier of the replenishment. |

### Return type

[**\BolApi\Client\Model\ReplenishmentResponse**](../Model/ReplenishmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v6+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReplenishments()`

```php
getReplenishments($reference, $ean, $start_date, $end_date, $state, $page): \BolApi\Client\Model\ReplenishmentsResponse
```

Get replenishments

Gets a list of replenishments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reference = REFERENCE1; // string | Custom user defined reference to identify the replenishment.
$ean = 0000007740404; // string | The EAN number associated with this product.
$start_date = 2021-01-01; // string | The creation start date to find the replenishment. In ISO 8601 format.
$end_date = 2021-01-02; // string | The end date of the range to find the replenishment. In ISO 8601 format.
$state = ANNOUNCED; // string[] | The current state(s) of the replenishment.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getReplenishments($reference, $ean, $start_date, $end_date, $state, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getReplenishments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| Custom user defined reference to identify the replenishment. | [optional]
 **ean** | **string**| The EAN number associated with this product. | [optional]
 **start_date** | **string**| The creation start date to find the replenishment. In ISO 8601 format. | [optional]
 **end_date** | **string**| The end date of the range to find the replenishment. In ISO 8601 format. | [optional]
 **state** | [**string[]**](../Model/string.md)| The current state(s) of the replenishment. | [optional]
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]

### Return type

[**\BolApi\Client\Model\ReplenishmentsResponse**](../Model/ReplenishmentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v6+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPickupTimeSlots()`

```php
postPickupTimeSlots($body): \BolApi\Client\Model\PickupTimeSlotsResponse
```

Post pickup time slots

Retrieve pickup time slots.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \BolApi\Client\Model\PickupTimeSlotsRequest(); // \BolApi\Client\Model\PickupTimeSlotsRequest

try {
    $result = $apiInstance->postPickupTimeSlots($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->postPickupTimeSlots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BolApi\Client\Model\PickupTimeSlotsRequest**](../Model/PickupTimeSlotsRequest.md)|  | [optional]

### Return type

[**\BolApi\Client\Model\PickupTimeSlotsResponse**](../Model/PickupTimeSlotsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v6+json`
- **Accept**: `application/vnd.retailer.v6+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductLabels()`

```php
postProductLabels($body): string[]
```

Post product labels

Retrieve product labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \BolApi\Client\Model\ProductLabelsRequest(); // \BolApi\Client\Model\ProductLabelsRequest

try {
    $result = $apiInstance->postProductLabels($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->postProductLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BolApi\Client\Model\ProductLabelsRequest**](../Model/ProductLabelsRequest.md)|  | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v6+json`
- **Accept**: `application/vnd.retailer.v6+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReplenishment()`

```php
postReplenishment($body): \BolApi\Client\Model\ProcessStatus
```

Post replenishment

Create a replenishment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \BolApi\Client\Model\CreateReplenishmentRequest(); // \BolApi\Client\Model\CreateReplenishmentRequest

try {
    $result = $apiInstance->postReplenishment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->postReplenishment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BolApi\Client\Model\CreateReplenishmentRequest**](../Model/CreateReplenishmentRequest.md)|  | [optional]

### Return type

[**\BolApi\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v6+json`
- **Accept**: `application/vnd.retailer.v6+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putReplenishment()`

```php
putReplenishment($replenishment_id, $body): \BolApi\Client\Model\ProcessStatus
```

Update replenishment

Update a replenishment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$replenishment_id = 2312078154; // string | The unique identifier of the replenishment.
$body = new \BolApi\Client\Model\UpdateReplenishmentRequest(); // \BolApi\Client\Model\UpdateReplenishmentRequest

try {
    $result = $apiInstance->putReplenishment($replenishment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->putReplenishment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **string**| The unique identifier of the replenishment. |
 **body** | [**\BolApi\Client\Model\UpdateReplenishmentRequest**](../Model/UpdateReplenishmentRequest.md)|  | [optional]

### Return type

[**\BolApi\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v6+json`
- **Accept**: `application/vnd.retailer.v6+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
