# ESI\MarketApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketsPrices**](MarketApi.md#getMarketsPrices) | **GET** /markets/prices/ | List market prices
[**getMarketsRegionIdHistory**](MarketApi.md#getMarketsRegionIdHistory) | **GET** /markets/{region_id}/history/ | List historical market statistics in a region
[**getMarketsRegionIdOrders**](MarketApi.md#getMarketsRegionIdOrders) | **GET** /markets/{region_id}/orders/ | List orders in a region


# **getMarketsPrices**
> \ESI\Model\GetMarketsPrices200Ok[] getMarketsPrices($datasource)

List market prices

Return a list of prices  ---  Alternate route: `/v1/markets/prices/`  Alternate route: `/legacy/markets/prices/`  Alternate route: `/dev/markets/prices/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\MarketApi();
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getMarketsPrices($datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getMarketsPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetMarketsPrices200Ok[]**](../Model/GetMarketsPrices200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketsRegionIdHistory**
> \ESI\Model\GetMarketsRegionIdHistory200Ok[] getMarketsRegionIdHistory($regionId, $typeId, $datasource)

List historical market statistics in a region

Return a list of historical market statistics for the specified type in a region  ---  Alternate route: `/v1/markets/{region_id}/history/`  Alternate route: `/legacy/markets/{region_id}/history/`  Alternate route: `/dev/markets/{region_id}/history/`   ---  This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\MarketApi();
$regionId = 789; // int | Return statistics in this region
$typeId = 789; // int | Return statistics for this type
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getMarketsRegionIdHistory($regionId, $typeId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getMarketsRegionIdHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **regionId** | **int**| Return statistics in this region |
 **typeId** | **int**| Return statistics for this type |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetMarketsRegionIdHistory200Ok[]**](../Model/GetMarketsRegionIdHistory200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketsRegionIdOrders**
> \ESI\Model\GetMarketsRegionIdOrders200Ok[] getMarketsRegionIdOrders($regionId, $orderType, $typeId, $page, $datasource)

List orders in a region

Return a list of orders in a region  ---  Alternate route: `/v1/markets/{region_id}/orders/`  Alternate route: `/legacy/markets/{region_id}/orders/`  Alternate route: `/dev/markets/{region_id}/orders/`   ---  This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\MarketApi();
$regionId = 789; // int | Return orders in this region
$orderType = "all"; // string | Filter buy/sell orders, return all orders by default. If you query without type_id, we always return both buy and sell orders.
$typeId = 789; // int | Return orders only for this type
$page = 1; // int | Which page to query, only used for querying without type_id. Starting at 1
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getMarketsRegionIdOrders($regionId, $orderType, $typeId, $page, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getMarketsRegionIdOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **regionId** | **int**| Return orders in this region |
 **orderType** | **string**| Filter buy/sell orders, return all orders by default. If you query without type_id, we always return both buy and sell orders. | [default to all]
 **typeId** | **int**| Return orders only for this type | [optional]
 **page** | **int**| Which page to query, only used for querying without type_id. Starting at 1 | [optional] [default to 1]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetMarketsRegionIdOrders200Ok[]**](../Model/GetMarketsRegionIdOrders200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

