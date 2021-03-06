# BolApi\Client\InventoryApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInventory()**](InventoryApi.md#getInventory) | **GET** /retailer/inventory | Get LVB/FBB inventory


## `getInventory()`

```php
getInventory($page, $quantity, $stock, $state, $query): \BolApi\Client\Model\InventoryResponse
```

Get LVB/FBB inventory

The inventory endpoint is a specific LVB/FBB endpoint. It provides a paginated list containing your fulfilment by bol.com inventory. This endpoint does not provide information about your own stock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The requested page number with a page size of 50 items.
$quantity = 0-10,20-30; // string[] | Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default.
$stock = SUFFICIENT; // string | Filter inventory by stock level.
$state = REGULAR; // string | Filter inventory by stock type.
$query = 0000007740404; // string | Filter inventory by EAN or product title.

try {
    $result = $apiInstance->getInventory($page, $quantity, $stock, $state, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]
 **quantity** | [**string[]**](../Model/string.md)| Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. | [optional]
 **stock** | **string**| Filter inventory by stock level. | [optional]
 **state** | **string**| Filter inventory by stock type. | [optional]
 **query** | **string**| Filter inventory by EAN or product title. | [optional]

### Return type

[**\BolApi\Client\Model\InventoryResponse**](../Model/InventoryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v5+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
