# OpenAPIClient-php

The bol.com API for Retailers.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/slash2nl/bolcom.git"
    }
  ],
  "require": {
    "slash2nl/bolcom": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new BolApi\Client\Api\BETAApi(
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

## API Endpoints

All URIs are relative to *https://api.bol.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BETAApi* | [**deletePushNotificationSubscription**](docs/Api/BETAApi.md#deletepushnotificationsubscription) | **DELETE** /retailer/subscriptions/{subscription-id} | BETA: Delete push notification subscription
*BETAApi* | [**getPushNotificationSubscription**](docs/Api/BETAApi.md#getpushnotificationsubscription) | **GET** /retailer/subscriptions/{subscription-id} | BETA: Get push notification subscription by id
*BETAApi* | [**getPushNotificationSubscriptions**](docs/Api/BETAApi.md#getpushnotificationsubscriptions) | **GET** /retailer/subscriptions | BETA: Get push notification subscriptions
*BETAApi* | [**getRetailPrice**](docs/Api/BETAApi.md#getretailprice) | **GET** /retailer/pricing/retail-prices/{ean} | BETA: Retrieve retail price information for an EAN.
*BETAApi* | [**getSubscriptionKeys**](docs/Api/BETAApi.md#getsubscriptionkeys) | **GET** /retailer/subscriptions/signature-keys | BETA: Retrieve public keys for push notification signature validation.
*BETAApi* | [**getUnpublishedOfferReport**](docs/Api/BETAApi.md#getunpublishedofferreport) | **GET** /retailer/offers/unpublished/{report-id} | BETA: Retrieve an unpublished offer report by report id
*BETAApi* | [**postPushNotificationSubscription**](docs/Api/BETAApi.md#postpushnotificationsubscription) | **POST** /retailer/subscriptions | BETA: Create push notification subscription
*BETAApi* | [**postTestPushNotification**](docs/Api/BETAApi.md#posttestpushnotification) | **POST** /retailer/subscriptions/test | BETA: Send test push notification for subscriptions
*BETAApi* | [**postUnpublishedOfferReport**](docs/Api/BETAApi.md#postunpublishedofferreport) | **POST** /retailer/offers/unpublished | BETA: Request an unpublished offer report
*BETAApi* | [**putPushNotificationSubscription**](docs/Api/BETAApi.md#putpushnotificationsubscription) | **PUT** /retailer/subscriptions/{subscription-id} | BETA: Update push notification subscription
*CommissionsApi* | [**getCommission**](docs/Api/CommissionsApi.md#getcommission) | **GET** /retailer/commission/{ean} | Get all commissions and reductions by EAN per single EAN
*CommissionsApi* | [**getCommissions**](docs/Api/CommissionsApi.md#getcommissions) | **POST** /retailer/commission | Get all commissions and reductions by EAN in bulk
*InboundsApi* | [**getDeliveryWindows**](docs/Api/InboundsApi.md#getdeliverywindows) | **GET** /retailer/inbounds/delivery-windows | Get delivery windows for new inbound shipments
*InboundsApi* | [**getInbound**](docs/Api/InboundsApi.md#getinbound) | **GET** /retailer/inbounds/{inbound-id} | Get inbound by inbound id
*InboundsApi* | [**getInboundShippingLabel**](docs/Api/InboundsApi.md#getinboundshippinglabel) | **GET** /retailer/inbounds/{inbound-id}/shippinglabel | Get inbound shipping label by inbound id
*InboundsApi* | [**getInboundTransporters**](docs/Api/InboundsApi.md#getinboundtransporters) | **GET** /retailer/inbounds/inbound-transporters | Get inbound transporters list
*InboundsApi* | [**getInbounds**](docs/Api/InboundsApi.md#getinbounds) | **GET** /retailer/inbounds | Get inbound shipment list
*InboundsApi* | [**getPackingList**](docs/Api/InboundsApi.md#getpackinglist) | **GET** /retailer/inbounds/{inbound-id}/packinglist | Get packing list by inbound id
*InboundsApi* | [**getProductLabels**](docs/Api/InboundsApi.md#getproductlabels) | **POST** /retailer/inbounds/productlabels | Get inbound product labels by EAN
*InboundsApi* | [**postInbound**](docs/Api/InboundsApi.md#postinbound) | **POST** /retailer/inbounds | Post inbound shipment
*InsightsApi* | [**getOfferInsights**](docs/Api/InsightsApi.md#getofferinsights) | **GET** /retailer/insights/offer | Get offer insights
*InsightsApi* | [**getPerformanceIndicator**](docs/Api/InsightsApi.md#getperformanceindicator) | **GET** /retailer/insights/performance/indicator | Get performance indicators
*InsightsApi* | [**getSalesForecast**](docs/Api/InsightsApi.md#getsalesforecast) | **GET** /retailer/insights/sales-forecast | Get sales forecast
*InventoryApi* | [**getInventory**](docs/Api/InventoryApi.md#getinventory) | **GET** /retailer/inventory | Get LVB/FBB inventory
*InvoicesApi* | [**getInvoice**](docs/Api/InvoicesApi.md#getinvoice) | **GET** /retailer/invoices/{invoice-id} | Get an invoice by invoice id
*InvoicesApi* | [**getInvoiceSpecification**](docs/Api/InvoicesApi.md#getinvoicespecification) | **GET** /retailer/invoices/{invoice-id}/specification | Get an invoice specification by invoice id
*InvoicesApi* | [**getInvoices**](docs/Api/InvoicesApi.md#getinvoices) | **GET** /retailer/invoices | Get all invoices
*OffersApi* | [**deleteOffer**](docs/Api/OffersApi.md#deleteoffer) | **DELETE** /retailer/offers/{offer-id} | Delete offer by id
*OffersApi* | [**getOffer**](docs/Api/OffersApi.md#getoffer) | **GET** /retailer/offers/{offer-id} | Retrieve an offer by its offer id
*OffersApi* | [**getOfferExport**](docs/Api/OffersApi.md#getofferexport) | **GET** /retailer/offers/export/{report-id} | Retrieve an offer export file by offer export id
*OffersApi* | [**getUnpublishedOfferReport**](docs/Api/OffersApi.md#getunpublishedofferreport) | **GET** /retailer/offers/unpublished/{report-id} | BETA: Retrieve an unpublished offer report by report id
*OffersApi* | [**postOffer**](docs/Api/OffersApi.md#postoffer) | **POST** /retailer/offers | Create a new offer
*OffersApi* | [**postOfferExport**](docs/Api/OffersApi.md#postofferexport) | **POST** /retailer/offers/export | Request an offer export file
*OffersApi* | [**postUnpublishedOfferReport**](docs/Api/OffersApi.md#postunpublishedofferreport) | **POST** /retailer/offers/unpublished | BETA: Request an unpublished offer report
*OffersApi* | [**putOffer**](docs/Api/OffersApi.md#putoffer) | **PUT** /retailer/offers/{offer-id} | Update an offer
*OffersApi* | [**updateOfferPrice**](docs/Api/OffersApi.md#updateofferprice) | **PUT** /retailer/offers/{offer-id}/price | Update price(s) for offer by id
*OffersApi* | [**updateOfferStock**](docs/Api/OffersApi.md#updateofferstock) | **PUT** /retailer/offers/{offer-id}/stock | Update stock for offer by id
*OrdersApi* | [**cancelOrderItem**](docs/Api/OrdersApi.md#cancelorderitem) | **PUT** /retailer/orders/cancellation | Cancel an order item by an order item id
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /retailer/orders/{order-id} | Get an open order by order id
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /retailer/orders | Get open orders
*OrdersApi* | [**shipOrderItem**](docs/Api/OrdersApi.md#shiporderitem) | **PUT** /retailer/orders/shipment | Ship order item
*PricingApi* | [**getRetailPrice**](docs/Api/PricingApi.md#getretailprice) | **GET** /retailer/pricing/retail-prices/{ean} | BETA: Retrieve retail price information for an EAN.
*ProcessStatusApi* | [**getProcessStatus**](docs/Api/ProcessStatusApi.md#getprocessstatus) | **GET** /retailer/process-status/{process-status-id} | Get the status of an asynchronous process by id
*ProcessStatusApi* | [**getProcessStatusBulk**](docs/Api/ProcessStatusApi.md#getprocessstatusbulk) | **POST** /retailer/process-status | Gets the status of multiple asynchronous processes by an array of process status id&#39;s for a retailer
*ProcessStatusApi* | [**getProcessStatusEntityId**](docs/Api/ProcessStatusApi.md#getprocessstatusentityid) | **GET** /retailer/process-status | Gets the status of an asynchronous process by entity id and event type for a retailer
*ProductContentApi* | [**getValidationReport**](docs/Api/ProductContentApi.md#getvalidationreport) | **GET** /retailer/content/validation-report/{uploadId} | Get validation report
*ProductContentApi* | [**postProductContent**](docs/Api/ProductContentApi.md#postproductcontent) | **POST** /retailer/content/product | Post product content
*ReturnsApi* | [**createReturn**](docs/Api/ReturnsApi.md#createreturn) | **POST** /retailer/returns | Create return
*ReturnsApi* | [**getReturn**](docs/Api/ReturnsApi.md#getreturn) | **GET** /retailer/returns/{return-id} | Get a return by return id
*ReturnsApi* | [**getReturns**](docs/Api/ReturnsApi.md#getreturns) | **GET** /retailer/returns | Get returns
*ReturnsApi* | [**handleReturn**](docs/Api/ReturnsApi.md#handlereturn) | **PUT** /retailer/returns/{rma-id} | Handle a return
*ShipmentsApi* | [**getShipment**](docs/Api/ShipmentsApi.md#getshipment) | **GET** /retailer/shipments/{shipment-id} | Get a shipment by shipment id
*ShipmentsApi* | [**getShipments**](docs/Api/ShipmentsApi.md#getshipments) | **GET** /retailer/shipments | Get shipment list
*ShippingLabelsApi* | [**getDeliveryOptions**](docs/Api/ShippingLabelsApi.md#getdeliveryoptions) | **POST** /retailer/shipping-labels/delivery-options | Get delivery options for a shippable configuration of a number of order items within an order.
*ShippingLabelsApi* | [**getShippingLabel**](docs/Api/ShippingLabelsApi.md#getshippinglabel) | **GET** /retailer/shipping-labels/{shipping-label-id} | Get a shipping label
*ShippingLabelsApi* | [**postShippingLabel**](docs/Api/ShippingLabelsApi.md#postshippinglabel) | **POST** /retailer/shipping-labels | Create a shipping label
*SubscriptionsApi* | [**deletePushNotificationSubscription**](docs/Api/SubscriptionsApi.md#deletepushnotificationsubscription) | **DELETE** /retailer/subscriptions/{subscription-id} | BETA: Delete push notification subscription
*SubscriptionsApi* | [**getPushNotificationSubscription**](docs/Api/SubscriptionsApi.md#getpushnotificationsubscription) | **GET** /retailer/subscriptions/{subscription-id} | BETA: Get push notification subscription by id
*SubscriptionsApi* | [**getPushNotificationSubscriptions**](docs/Api/SubscriptionsApi.md#getpushnotificationsubscriptions) | **GET** /retailer/subscriptions | BETA: Get push notification subscriptions
*SubscriptionsApi* | [**getSubscriptionKeys**](docs/Api/SubscriptionsApi.md#getsubscriptionkeys) | **GET** /retailer/subscriptions/signature-keys | BETA: Retrieve public keys for push notification signature validation.
*SubscriptionsApi* | [**postPushNotificationSubscription**](docs/Api/SubscriptionsApi.md#postpushnotificationsubscription) | **POST** /retailer/subscriptions | BETA: Create push notification subscription
*SubscriptionsApi* | [**postTestPushNotification**](docs/Api/SubscriptionsApi.md#posttestpushnotification) | **POST** /retailer/subscriptions/test | BETA: Send test push notification for subscriptions
*SubscriptionsApi* | [**putPushNotificationSubscription**](docs/Api/SubscriptionsApi.md#putpushnotificationsubscription) | **PUT** /retailer/subscriptions/{subscription-id} | BETA: Update push notification subscription
*TransportsApi* | [**addTransportInformationByTransportId**](docs/Api/TransportsApi.md#addtransportinformationbytransportid) | **PUT** /retailer/transports/{transport-id} | Add transport information by transport id

## Models

- [AdditionalService](docs/Model/AdditionalService.md)
- [Attribute](docs/Model/Attribute.md)
- [AttributeValue](docs/Model/AttributeValue.md)
- [BillingDetails](docs/Model/BillingDetails.md)
- [BulkCommissionQuery](docs/Model/BulkCommissionQuery.md)
- [BulkCommissionRequest](docs/Model/BulkCommissionRequest.md)
- [BulkCommissionResponse](docs/Model/BulkCommissionResponse.md)
- [BulkProcessStatusRequest](docs/Model/BulkProcessStatusRequest.md)
- [BundlePrice](docs/Model/BundlePrice.md)
- [ChangeTransportRequest](docs/Model/ChangeTransportRequest.md)
- [Commission](docs/Model/Commission.md)
- [Condition](docs/Model/Condition.md)
- [ContainerForTheOrderItemsThatHaveToBeCancelled](docs/Model/ContainerForTheOrderItemsThatHaveToBeCancelled.md)
- [Countries](docs/Model/Countries.md)
- [Country](docs/Model/Country.md)
- [CountryCode](docs/Model/CountryCode.md)
- [CreateOfferExportRequest](docs/Model/CreateOfferExportRequest.md)
- [CreateOfferRequest](docs/Model/CreateOfferRequest.md)
- [CreateProductContentRequest](docs/Model/CreateProductContentRequest.md)
- [CreateReturnRequest](docs/Model/CreateReturnRequest.md)
- [CreateSubscriptionRequest](docs/Model/CreateSubscriptionRequest.md)
- [CreateUnpublishedOfferReportRequest](docs/Model/CreateUnpublishedOfferReportRequest.md)
- [CustomerDetails](docs/Model/CustomerDetails.md)
- [DeliveryOption](docs/Model/DeliveryOption.md)
- [DeliveryOptionsRequest](docs/Model/DeliveryOptionsRequest.md)
- [DeliveryOptionsResponse](docs/Model/DeliveryOptionsResponse.md)
- [DeliveryWindowsForInboundShipments](docs/Model/DeliveryWindowsForInboundShipments.md)
- [Details](docs/Model/Details.md)
- [Fulfilment](docs/Model/Fulfilment.md)
- [HandoverDetails](docs/Model/HandoverDetails.md)
- [Inbound](docs/Model/Inbound.md)
- [InboundProductRequest](docs/Model/InboundProductRequest.md)
- [InboundRequest](docs/Model/InboundRequest.md)
- [Inbounds](docs/Model/Inbounds.md)
- [Inventory](docs/Model/Inventory.md)
- [InventoryResponse](docs/Model/InventoryResponse.md)
- [KeySet](docs/Model/KeySet.md)
- [KeySetResponse](docs/Model/KeySetResponse.md)
- [LabelPrice](docs/Model/LabelPrice.md)
- [Link](docs/Model/Link.md)
- [ModelReturn](docs/Model/ModelReturn.md)
- [Norm](docs/Model/Norm.md)
- [NotPublishableReason](docs/Model/NotPublishableReason.md)
- [OfferInsight](docs/Model/OfferInsight.md)
- [OfferInsights](docs/Model/OfferInsights.md)
- [Order](docs/Model/Order.md)
- [OrderFulfilment](docs/Model/OrderFulfilment.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItemCancellation](docs/Model/OrderItemCancellation.md)
- [OrderOffer](docs/Model/OrderOffer.md)
- [OrderOrderItem](docs/Model/OrderOrderItem.md)
- [OrderProduct](docs/Model/OrderProduct.md)
- [PackageRestrictions](docs/Model/PackageRestrictions.md)
- [PerformanceIndicator](docs/Model/PerformanceIndicator.md)
- [PerformanceIndicators](docs/Model/PerformanceIndicators.md)
- [Period](docs/Model/Period.md)
- [Periods](docs/Model/Periods.md)
- [PickUpPoint](docs/Model/PickUpPoint.md)
- [Pricing](docs/Model/Pricing.md)
- [Problem](docs/Model/Problem.md)
- [ProcessStatus](docs/Model/ProcessStatus.md)
- [ProcessStatusId](docs/Model/ProcessStatusId.md)
- [ProcessStatusResponse](docs/Model/ProcessStatusResponse.md)
- [Product](docs/Model/Product.md)
- [ProductContent](docs/Model/ProductContent.md)
- [ProductContentResponse](docs/Model/ProductContentResponse.md)
- [ProductLabel](docs/Model/ProductLabel.md)
- [ProductLabelsRequest](docs/Model/ProductLabelsRequest.md)
- [ReducedInbound](docs/Model/ReducedInbound.md)
- [ReducedOrder](docs/Model/ReducedOrder.md)
- [ReducedOrderItem](docs/Model/ReducedOrderItem.md)
- [ReducedOrders](docs/Model/ReducedOrders.md)
- [ReducedReturn](docs/Model/ReducedReturn.md)
- [ReducedReturnItem](docs/Model/ReducedReturnItem.md)
- [ReducedShipment](docs/Model/ReducedShipment.md)
- [ReducedShipmentItem](docs/Model/ReducedShipmentItem.md)
- [ReducedShipmentOrder](docs/Model/ReducedShipmentOrder.md)
- [ReducedTransport](docs/Model/ReducedTransport.md)
- [Reduction](docs/Model/Reduction.md)
- [RejectedAttributeResponse](docs/Model/RejectedAttributeResponse.md)
- [RejectionError](docs/Model/RejectionError.md)
- [RetailPrice](docs/Model/RetailPrice.md)
- [RetailPriceResponse](docs/Model/RetailPriceResponse.md)
- [RetailerOffer](docs/Model/RetailerOffer.md)
- [ReturnItem](docs/Model/ReturnItem.md)
- [ReturnProcessingResult](docs/Model/ReturnProcessingResult.md)
- [ReturnRequest](docs/Model/ReturnRequest.md)
- [ReturnsResponse](docs/Model/ReturnsResponse.md)
- [SalesForecastResponse](docs/Model/SalesForecastResponse.md)
- [Score](docs/Model/Score.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentDetails](docs/Model/ShipmentDetails.md)
- [ShipmentFulfilment](docs/Model/ShipmentFulfilment.md)
- [ShipmentItem](docs/Model/ShipmentItem.md)
- [ShipmentOrder](docs/Model/ShipmentOrder.md)
- [ShipmentRequest](docs/Model/ShipmentRequest.md)
- [ShipmentTransport](docs/Model/ShipmentTransport.md)
- [ShipmentsResponse](docs/Model/ShipmentsResponse.md)
- [ShippingLabelRequest](docs/Model/ShippingLabelRequest.md)
- [StateTransition](docs/Model/StateTransition.md)
- [Stock](docs/Model/Stock.md)
- [StockCreate](docs/Model/StockCreate.md)
- [Store](docs/Model/Store.md)
- [SubscriptionResponse](docs/Model/SubscriptionResponse.md)
- [SubscriptionsResponse](docs/Model/SubscriptionsResponse.md)
- [TimeSlot](docs/Model/TimeSlot.md)
- [Total](docs/Model/Total.md)
- [TransportInstruction](docs/Model/TransportInstruction.md)
- [Transporter](docs/Model/Transporter.md)
- [TransportersResponse](docs/Model/TransportersResponse.md)
- [UpdateOfferPriceRequest](docs/Model/UpdateOfferPriceRequest.md)
- [UpdateOfferRequest](docs/Model/UpdateOfferRequest.md)
- [UpdateOfferStockRequest](docs/Model/UpdateOfferStockRequest.md)
- [UpdateSubscriptionRequest](docs/Model/UpdateSubscriptionRequest.md)
- [ValidationReportResponse](docs/Model/ValidationReportResponse.md)
- [Violation](docs/Model/Violation.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `4.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
