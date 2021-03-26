# OpenAPI\Client\BETAApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePushNotificationSubscription()**](BETAApi.md#deletePushNotificationSubscription) | **DELETE** /retailer/subscriptions/{subscription-id} | BETA: Delete push notification subscription
[**getPushNotificationSubscription()**](BETAApi.md#getPushNotificationSubscription) | **GET** /retailer/subscriptions/{subscription-id} | BETA: Get push notification subscription by id
[**getPushNotificationSubscriptions()**](BETAApi.md#getPushNotificationSubscriptions) | **GET** /retailer/subscriptions | BETA: Get push notification subscriptions
[**getRetailPrice()**](BETAApi.md#getRetailPrice) | **GET** /retailer/pricing/retail-prices/{ean} | BETA: Retrieve retail price information for an EAN.
[**getSubscriptionKeys()**](BETAApi.md#getSubscriptionKeys) | **GET** /retailer/subscriptions/signature-keys | BETA: Retrieve public keys for push notification signature validation.
[**getUnpublishedOfferReport()**](BETAApi.md#getUnpublishedOfferReport) | **GET** /retailer/offers/unpublished/{report-id} | BETA: Retrieve an unpublished offer report by report id
[**postPushNotificationSubscription()**](BETAApi.md#postPushNotificationSubscription) | **POST** /retailer/subscriptions | BETA: Create push notification subscription
[**postTestPushNotification()**](BETAApi.md#postTestPushNotification) | **POST** /retailer/subscriptions/test | BETA: Send test push notification for subscriptions
[**postUnpublishedOfferReport()**](BETAApi.md#postUnpublishedOfferReport) | **POST** /retailer/offers/unpublished | BETA: Request an unpublished offer report
[**putPushNotificationSubscription()**](BETAApi.md#putPushNotificationSubscription) | **PUT** /retailer/subscriptions/{subscription-id} | BETA: Update push notification subscription


## `deletePushNotificationSubscription()`

```php
deletePushNotificationSubscription($subscription_id): \OpenAPI\Client\Model\ProcessStatus
```

BETA: Delete push notification subscription

Delete a push notification subscription with the provided id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BETAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 1234; // int | A unique identifier for the subscription

try {
    $result = $apiInstance->deletePushNotificationSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BETAApi->deletePushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| A unique identifier for the subscription |

### Return type

[**\OpenAPI\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushNotificationSubscription()`

```php
getPushNotificationSubscription($subscription_id): \OpenAPI\Client\Model\SubscriptionResponse
```

BETA: Get push notification subscription by id

Retrieve a configured and active push notification subscription with the provided id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BETAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 1234; // int | A unique identifier for the subscription

try {
    $result = $apiInstance->getPushNotificationSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BETAApi->getPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| A unique identifier for the subscription |

### Return type

[**\OpenAPI\Client\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushNotificationSubscriptions()`

```php
getPushNotificationSubscriptions(): \OpenAPI\Client\Model\SubscriptionsResponse
```

BETA: Get push notification subscriptions

Retrieve a list of all configured and active push notification subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BETAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPushNotificationSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BETAApi->getPushNotificationSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SubscriptionsResponse**](../Model/SubscriptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRetailPrice()`

```php
getRetailPrice($ean): \OpenAPI\Client\Model\RetailPriceResponse
```

BETA: Retrieve retail price information for an EAN.

Currently this endpoint only supports the allowable retail price and can support the following use cases:<br /><br />                     1) EANs that have been unpublished due to price related reasons can be checked against this endpoint.<br />                     2) Requesting the allowable retail price for EANs that are not yet in your assortment can help inform price setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BETAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = 0000007740404; // string | The EAN number associated with this product.

try {
    $result = $apiInstance->getRetailPrice($ean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BETAApi->getRetailPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this product. |

### Return type

[**\OpenAPI\Client\Model\RetailPriceResponse**](../Model/RetailPriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionKeys()`

```php
getSubscriptionKeys(): \OpenAPI\Client\Model\KeySetResponse
```

BETA: Retrieve public keys for push notification signature validation.

Retrieve a list of public keys that should be used to validate the signature header for push notifications received from bol.com

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BETAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSubscriptionKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BETAApi->getSubscriptionKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\KeySetResponse**](../Model/KeySetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnpublishedOfferReport()`

```php
getUnpublishedOfferReport($report_id)
```

BETA: Retrieve an unpublished offer report by report id

Retrieve an unpublished offer report containing all unpublished offers and reasons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BETAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = 'report_id_example'; // string | Unique identifier for unpublished offer report.

try {
    $apiInstance->getUnpublishedOfferReport($report_id);
} catch (Exception $e) {
    echo 'Exception when calling BETAApi->getUnpublishedOfferReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| Unique identifier for unpublished offer report. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPushNotificationSubscription()`

```php
postPushNotificationSubscription($body): \OpenAPI\Client\Model\ProcessStatus
```

BETA: Create push notification subscription

Create a push notification subscription for one (or more) of the available resources. The configured URL has to support https scheme.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BETAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\CreateSubscriptionRequest(); // \OpenAPI\Client\Model\CreateSubscriptionRequest

try {
    $result = $apiInstance->postPushNotificationSubscription($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BETAApi->postPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTestPushNotification()`

```php
postTestPushNotification(): \OpenAPI\Client\Model\ProcessStatus
```

BETA: Send test push notification for subscriptions

Send a test push notification to all subscriptions for the provided event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BETAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->postTestPushNotification();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BETAApi->postTestPushNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUnpublishedOfferReport()`

```php
postUnpublishedOfferReport($body): \OpenAPI\Client\Model\ProcessStatus
```

BETA: Request an unpublished offer report

Request an unpublished offer report containing all unpublished offers and reasons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BETAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\CreateUnpublishedOfferReportRequest(); // \OpenAPI\Client\Model\CreateUnpublishedOfferReportRequest

try {
    $result = $apiInstance->postUnpublishedOfferReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BETAApi->postUnpublishedOfferReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\CreateUnpublishedOfferReportRequest**](../Model/CreateUnpublishedOfferReportRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPushNotificationSubscription()`

```php
putPushNotificationSubscription($subscription_id, $body): \OpenAPI\Client\Model\ProcessStatus
```

BETA: Update push notification subscription

Update an existing push notification subscription with the supplied id. The configured URL has to support https scheme.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BETAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 1234; // int | A unique identifier for the subscription
$body = new \OpenAPI\Client\Model\UpdateSubscriptionRequest(); // \OpenAPI\Client\Model\UpdateSubscriptionRequest

try {
    $result = $apiInstance->putPushNotificationSubscription($subscription_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BETAApi->putPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| A unique identifier for the subscription |
 **body** | [**\OpenAPI\Client\Model\UpdateSubscriptionRequest**](../Model/UpdateSubscriptionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`
- **Accept**: `application/vnd.retailer.v4+json`, `application/vnd.retailer.v4+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
