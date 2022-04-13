# BolApi\Client\PromotionsApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProducts()**](PromotionsApi.md#getProducts) | **GET** /retailer/promotions/{promotion-id}/products | Get a list of products
[**getPromotion()**](PromotionsApi.md#getPromotion) | **GET** /retailer/promotions/{promotion-id} | Get a promotion by promotion id
[**getPromotions()**](PromotionsApi.md#getPromotions) | **GET** /retailer/promotions | Get a list of promotions


## `getProducts()`

```php
getProducts($promotion_id, $page): \BolApi\Client\Model\Products
```

Get a list of products

Gets a paginated list of all products that are present within a promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_id = 'promotion_id_example'; // string | The identifier of the promotion.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getProducts($promotion_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The identifier of the promotion. |
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]

### Return type

[**\BolApi\Client\Model\Products**](../Model/Products.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotion()`

```php
getPromotion($promotion_id): \BolApi\Client\Model\Promotion
```

Get a promotion by promotion id

Gets the details of a promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_id = 'promotion_id_example'; // string | The identifier of the promotion.

try {
    $result = $apiInstance->getPromotion($promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->getPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The identifier of the promotion. |

### Return type

[**\BolApi\Client\Model\Promotion**](../Model/Promotion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotions()`

```php
getPromotions($promotion_type, $page): \BolApi\Client\Model\Promotions
```

Get a list of promotions

Gets a paginated list of all promotions for a retailer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BolApi\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_type = array('promotion_type_example'); // string[] | The type(s) of promotion to be retrieved.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getPromotions($promotion_type, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->getPromotions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_type** | [**string[]**](../Model/string.md)| The type(s) of promotion to be retrieved. |
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]

### Return type

[**\BolApi\Client\Model\Promotions**](../Model/Promotions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
