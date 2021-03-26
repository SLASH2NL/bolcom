# BolApi\Client\ProductContentApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getValidationReport()**](ProductContentApi.md#getValidationReport) | **GET** /retailer/content/validation-report/{uploadId} | Get validation report
[**postProductContent()**](ProductContentApi.md#postProductContent) | **POST** /retailer/content/product | Post product content


## `getValidationReport()`

```php
getValidationReport($upload_id): \BolApi\Client\Model\ValidationReportResponse
```

Get validation report

Retrieve a validation report of the product content upload based on the upload id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$upload_id = 'upload_id_example'; // string | The identifier of the product content upload.

try {
    $result = $apiInstance->getValidationReport($upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->getValidationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **string**| The identifier of the product content upload. |

### Return type

[**\BolApi\Client\Model\ValidationReportResponse**](../Model/ValidationReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductContent()`

```php
postProductContent($body): \BolApi\Client\Model\ProcessStatus
```

Post product content

Create content for existing products or new products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \BolApi\Client\Model\CreateProductContentRequest(); // \BolApi\Client\Model\CreateProductContentRequest

try {
    $result = $apiInstance->postProductContent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->postProductContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BolApi\Client\Model\CreateProductContentRequest**](../Model/CreateProductContentRequest.md)|  | [optional]

### Return type

[**\BolApi\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v4+json`
- **Accept**: `application/vnd.retailer.v4+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
