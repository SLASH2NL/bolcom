# BolApi\Client\InsightsApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOfferInsights()**](InsightsApi.md#getOfferInsights) | **GET** /retailer/insights/offer | Get offer insights
[**getPerformanceIndicator()**](InsightsApi.md#getPerformanceIndicator) | **GET** /retailer/insights/performance/indicator | Get performance indicators
[**getSalesForecast()**](InsightsApi.md#getSalesForecast) | **GET** /retailer/insights/sales-forecast | Get sales forecast
[**getSearchTerms()**](InsightsApi.md#getSearchTerms) | **GET** /retailer/insights/search-terms | Get search terms


## `getOfferInsights()`

```php
getOfferInsights($offer_id, $period, $number_of_periods, $name): \BolApi\Client\Model\OfferInsights
```

Get offer insights

Get the product visits and the buy box percentage for an offer during a given period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Unique identifier for an offer.
$period = 'period_example'; // string | The time unit in which the offer insights are grouped.
$number_of_periods = 56; // int | The number of periods for which the offer insights are requested back in time.
$name = array('name_example'); // string[] | The name of the requested offer insight.

try {
    $result = $apiInstance->getOfferInsights($offer_id, $period, $number_of_periods, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getOfferInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Unique identifier for an offer. |
 **period** | **string**| The time unit in which the offer insights are grouped. |
 **number_of_periods** | **int**| The number of periods for which the offer insights are requested back in time. |
 **name** | [**string[]**](../Model/string.md)| The name of the requested offer insight. |

### Return type

[**\BolApi\Client\Model\OfferInsights**](../Model/OfferInsights.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v5+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPerformanceIndicator()`

```php
getPerformanceIndicator($name, $year, $week): \BolApi\Client\Model\PerformanceIndicators
```

Get performance indicators

Gets the measurements for your performance indicators per week.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = array('name_example'); // string[] | The type of the performance indicator
$year = 'year_example'; // string | Year number in the ISO-8601 standard.
$week = 'week_example'; // string | Week number in the ISO-8601 standard. If you would like to get the relative scores from the current week, please provide the current week number here. Be advised that measurements can change heavily over the course of the week.

try {
    $result = $apiInstance->getPerformanceIndicator($name, $year, $week);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getPerformanceIndicator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | [**string[]**](../Model/string.md)| The type of the performance indicator |
 **year** | **string**| Year number in the ISO-8601 standard. |
 **week** | **string**| Week number in the ISO-8601 standard. If you would like to get the relative scores from the current week, please provide the current week number here. Be advised that measurements can change heavily over the course of the week. |

### Return type

[**\BolApi\Client\Model\PerformanceIndicators**](../Model/PerformanceIndicators.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v5+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesForecast()`

```php
getSalesForecast($offer_id, $weeks_ahead): \BolApi\Client\Model\SalesForecastResponse
```

Get sales forecast

Get sales forecast to estimate the sales expectations on the total bol.com platform for the requested number of weeks ahead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Unique identifier for an offer.
$weeks_ahead = 56; // int | The number of weeks into the future, starting from today.

try {
    $result = $apiInstance->getSalesForecast($offer_id, $weeks_ahead);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getSalesForecast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Unique identifier for an offer. |
 **weeks_ahead** | **int**| The number of weeks into the future, starting from today. |

### Return type

[**\BolApi\Client\Model\SalesForecastResponse**](../Model/SalesForecastResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v5+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearchTerms()`

```php
getSearchTerms($search_term, $period, $number_of_periods, $related_search_terms): \BolApi\Client\Model\SearchTerms
```

Get search terms

Retrieves the search volume for a specified search term and period. The search volume allows you to see what bol.com customers are searching for. Based on the search volume per search term you can optimize your product content, or spot opportunities to extend your assortment, or analyzing trends for inventory management.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: bearerAuth
$config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BolApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new BolApi\Client\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_term = 'search_term_example'; // string | The search term for which you want to request the search volume.
$period = 'period_example'; // string | The time unit in which the offer insights are grouped.
$number_of_periods = 56; // int | The number of periods for which the offer insights are requested back in time.
$related_search_terms = false; // bool | Indicates whether or not you want to retrieve the related search terms.

try {
    $result = $apiInstance->getSearchTerms($search_term, $period, $number_of_periods, $related_search_terms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getSearchTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_term** | **string**| The search term for which you want to request the search volume. |
 **period** | **string**| The time unit in which the offer insights are grouped. |
 **number_of_periods** | **int**| The number of periods for which the offer insights are requested back in time. |
 **related_search_terms** | **bool**| Indicates whether or not you want to retrieve the related search terms. | [optional] [default to false]

### Return type

[**\BolApi\Client\Model\SearchTerms**](../Model/SearchTerms.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v5+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
