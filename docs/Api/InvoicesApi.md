# BolApi\Client\InvoicesApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoice()**](InvoicesApi.md#getInvoice) | **GET** /retailer/invoices/{invoice-id} | Get an invoice by invoice id
[**getInvoiceSpecification()**](InvoicesApi.md#getInvoiceSpecification) | **GET** /retailer/invoices/{invoice-id}/specification | Get an invoice specification by invoice id
[**getInvoices()**](InvoicesApi.md#getInvoices) | **GET** /retailer/invoices | Get all invoices


## `getInvoice()`

```php
getInvoice($invoice_id): string[]
```

Get an invoice by invoice id

Gets an invoice by invoice id. The available media types differ per invoice and are listed within the response from the ‘GET all invoices’ call. Note: the media types listed in the response must be given in our standard API format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = 56; // int | The id of the invoice

try {
    $result = $apiInstance->getInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| The id of the invoice |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`, `application/vnd.retailer.v4+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceSpecification()`

```php
getInvoiceSpecification($invoice_id, $page): string[]
```

Get an invoice specification by invoice id

Gets an invoice specification for an invoice with a paginated list of its transactions. The available media types differ per invoice specification and are listed within the response from the ‘GET all invoices’ call. Note, the media types listed in the response must be given in our standard API format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = 56; // int | The id of the invoice.
$page = 56; // int | The page to get. Each page contains a maximum of 25.000 lines.

try {
    $result = $apiInstance->getInvoiceSpecification($invoice_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceSpecification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| The id of the invoice. |
 **page** | **int**| The page to get. Each page contains a maximum of 25.000 lines. | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`, `application/vnd.retailer.v4+pdf`, `application/vnd.retailer.v4+openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoices()`

```php
getInvoices($period_start_date, $period_end_date): string[]
```

Get all invoices

Gets a list of invoices, by default from the past 4 weeks. The optional period-start-date and period-end-date-date parameters can be used together to retrieve invoices from a specific date range in the past, the period can be no longer than 31 days. Invoices and their specifications can be downloaded separately in different media formats with the ‘GET an invoice by id’ and the ‘GET an invoice specification by id’ calls. The available media types differ per invoice and are listed per invoice within the response. Note: the media types listed in the response must be given in our standard API format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$period_start_date = 2019-03-01; // string | Period start date in ISO 8601 standard.
$period_end_date = 2019-03-31; // string | Period end date in ISO 8601 standard.

try {
    $result = $apiInstance->getInvoices($period_start_date, $period_end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **period_start_date** | **string**| Period start date in ISO 8601 standard. | [optional]
 **period_end_date** | **string**| Period end date in ISO 8601 standard. | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
