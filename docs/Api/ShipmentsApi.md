# BolApi\Client\ShipmentsApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShipment()**](ShipmentsApi.md#getShipment) | **GET** /retailer/shipments/{shipment-id} | Get a shipment by shipment id
[**getShipments()**](ShipmentsApi.md#getShipments) | **GET** /retailer/shipments | Get shipment list


## `getShipment()`

```php
getShipment($shipment_id): \BolApi\Client\Model\Shipment
```

Get a shipment by shipment id

Retrieve a single shipment by its corresponding id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 'shipment_id_example'; // string | The id of the shipment.

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The id of the shipment. |

### Return type

[**\BolApi\Client\Model\Shipment**](../Model/Shipment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v6+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipments()`

```php
getShipments($page, $fulfilment_method, $order_id): \BolApi\Client\Model\ShipmentsResponse
```

Get shipment list

A paginated list to retrieve all your shipments up to 3 months old. The shipments will be sorted by date in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The page to get with a page size of 50.
$fulfilment_method = 'FBR'; // string | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
$order_id = 'order_id_example'; // string | The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored.

try {
    $result = $apiInstance->getShipments($page, $fulfilment_method, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to get with a page size of 50. | [optional] [default to 1]
 **fulfilment_method** | **string**| The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). | [optional] [default to &#39;FBR&#39;]
 **order_id** | **string**| The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. | [optional]

### Return type

[**\BolApi\Client\Model\ShipmentsResponse**](../Model/ShipmentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v6+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
