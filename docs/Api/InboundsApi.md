# BolApi\Client\InboundsApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeliveryWindows()**](InboundsApi.md#getDeliveryWindows) | **GET** /retailer/inbounds/delivery-windows | Get delivery windows for new inbound shipments
[**getInbound()**](InboundsApi.md#getInbound) | **GET** /retailer/inbounds/{inbound-id} | Get inbound by inbound id
[**getInboundShippingLabel()**](InboundsApi.md#getInboundShippingLabel) | **GET** /retailer/inbounds/{inbound-id}/shippinglabel | Get inbound shipping label by inbound id
[**getInboundTransporters()**](InboundsApi.md#getInboundTransporters) | **GET** /retailer/inbounds/inbound-transporters | Get inbound transporters list
[**getInbounds()**](InboundsApi.md#getInbounds) | **GET** /retailer/inbounds | Get inbound shipment list
[**getPackingList()**](InboundsApi.md#getPackingList) | **GET** /retailer/inbounds/{inbound-id}/packinglist | Get packing list by inbound id
[**getProductLabels()**](InboundsApi.md#getProductLabels) | **POST** /retailer/inbounds/productlabels | Get inbound product labels by EAN
[**postInbound()**](InboundsApi.md#postInbound) | **POST** /retailer/inbounds | Post inbound shipment


## `getDeliveryWindows()`

```php
getDeliveryWindows($delivery_date, $items_to_send): \BolApi\Client\Model\DeliveryWindowsForInboundShipments
```

Get delivery windows for new inbound shipments

Retrieve a list of available delivery windows when creating a new inbound shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_date = 2020-01-01; // string | The expected delivery date for the inbound in ISO 8601 format.
$items_to_send = 1; // int | The number of items that will be sent in the inbound.

try {
    $result = $apiInstance->getDeliveryWindows($delivery_date, $items_to_send);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getDeliveryWindows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_date** | **string**| The expected delivery date for the inbound in ISO 8601 format. | [optional] [default to &#39;Today&#39;s date.&#39;]
 **items_to_send** | **int**| The number of items that will be sent in the inbound. | [optional] [default to 1]

### Return type

[**\BolApi\Client\Model\DeliveryWindowsForInboundShipments**](../Model/DeliveryWindowsForInboundShipments.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInbound()`

```php
getInbound($inbound_id): \BolApi\Client\Model\Inbound
```

Get inbound by inbound id

Get inbound details by inbound id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_id = 12345678; // int | A unique identifier for an inbound shipment.

try {
    $result = $apiInstance->getInbound($inbound_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getInbound: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_id** | **int**| A unique identifier for an inbound shipment. |

### Return type

[**\BolApi\Client\Model\Inbound**](../Model/Inbound.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundShippingLabel()`

```php
getInboundShippingLabel($inbound_id): string[]
```

Get inbound shipping label by inbound id

Get inbound shipping label by inbound id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_id = 12345678; // int | A unique identifier for an inbound shipment.

try {
    $result = $apiInstance->getInboundShippingLabel($inbound_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getInboundShippingLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_id** | **int**| A unique identifier for an inbound shipment. |

### Return type

**string[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundTransporters()`

```php
getInboundTransporters(): \BolApi\Client\Model\TransportersResponse
```

Get inbound transporters list

Get all available transporters that carry out transports for inbound shipments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInboundTransporters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getInboundTransporters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BolApi\Client\Model\TransportersResponse**](../Model/TransportersResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInbounds()`

```php
getInbounds($reference, $bsku, $creation_start_date, $creation_end_date, $state, $page): \BolApi\Client\Model\Inbounds
```

Get inbound shipment list

A paginated list of all inbound shipments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = SHIPMENT1; // string | A user defined reference to identify the inbound shipment.
$bsku = 2950002126612; // string | The BSKU number associated with this product.
$creation_start_date = 2020-01-01; // string | The creation start date and time to find the inbound shipment in ISO 8601 format.
$creation_end_date = 2020-01-01; // string | The end date of the range to find the inbound shipment, in ISO 8601 format.
$state = DRAFT; // string | The current state of the inbound shipment.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getInbounds($reference, $bsku, $creation_start_date, $creation_end_date, $state, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getInbounds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| A user defined reference to identify the inbound shipment. | [optional]
 **bsku** | **string**| The BSKU number associated with this product. | [optional]
 **creation_start_date** | **string**| The creation start date and time to find the inbound shipment in ISO 8601 format. | [optional]
 **creation_end_date** | **string**| The end date of the range to find the inbound shipment, in ISO 8601 format. | [optional]
 **state** | **string**| The current state of the inbound shipment. | [optional]
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]

### Return type

[**\BolApi\Client\Model\Inbounds**](../Model/Inbounds.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPackingList()`

```php
getPackingList($inbound_id): string[]
```

Get packing list by inbound id

Get packing list by inbound id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_id = 12345678; // int | A unique identifier for an inbound shipment.

try {
    $result = $apiInstance->getPackingList($inbound_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getPackingList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_id** | **int**| A unique identifier for an inbound shipment. |

### Return type

**string[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductLabels()`

```php
getProductLabels($body): string[]
```

Get inbound product labels by EAN

Get inbound product labels by EAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BolApi\Client\Model\ProductLabelsRequest(); // \BolApi\Client\Model\ProductLabelsRequest

try {
    $result = $apiInstance->getProductLabels($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getProductLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BolApi\Client\Model\ProductLabelsRequest**](../Model/ProductLabelsRequest.md)|  | [optional]

### Return type

**string[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v4+json`
- **Accept**: `application/vnd.retailer.v4+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postInbound()`

```php
postInbound($body): \BolApi\Client\Model\ProcessStatus
```

Post inbound shipment

Create a new inbound shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BolApi\Client\Model\InboundRequest(); // \BolApi\Client\Model\InboundRequest

try {
    $result = $apiInstance->postInbound($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->postInbound: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BolApi\Client\Model\InboundRequest**](../Model/InboundRequest.md)|  | [optional]

### Return type

[**\BolApi\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v4+json`
- **Accept**: `application/vnd.retailer.v4+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
