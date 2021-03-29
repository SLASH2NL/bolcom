# BolApi\Client\TransportsApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTransportInformationByTransportId()**](TransportsApi.md#addTransportInformationByTransportId) | **PUT** /retailer/transports/{transport-id} | Add transport information by transport id


## `addTransportInformationByTransportId()`

```php
addTransportInformationByTransportId($transport_id, $body): \BolApi\Client\Model\ProcessStatus
```

Add transport information by transport id

Add information to an existing transport. The transport id is part of the shipment. You can retrieve the transport id through the GET shipment list request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\TransportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transport_id = 56; // int | The transport id.
$body = new \BolApi\Client\Model\ChangeTransportRequest(); // \BolApi\Client\Model\ChangeTransportRequest | The change transport requested by the user.

try {
    $result = $apiInstance->addTransportInformationByTransportId($transport_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportsApi->addTransportInformationByTransportId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transport_id** | **int**| The transport id. |
 **body** | [**\BolApi\Client\Model\ChangeTransportRequest**](../Model/ChangeTransportRequest.md)| The change transport requested by the user. | [optional]

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
