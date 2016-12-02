# ESI\InsuranceApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInsurancePrices**](InsuranceApi.md#getInsurancePrices) | **GET** /insurance/prices/ | List insurance levels


# **getInsurancePrices**
> \ESI\Model\GetInsurancePrices200Ok[] getInsurancePrices($acceptLanguage, $datasource)

List insurance levels

Return available insurance levels for all ship types  ---  Alternate route: `/v1/insurance/prices/`  Alternate route: `/legacy/insurance/prices/`  Alternate route: `/dev/insurance/prices/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\InsuranceApi();
$acceptLanguage = "en"; // string | Language to use in the response
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getInsurancePrices($acceptLanguage, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsuranceApi->getInsurancePrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acceptLanguage** | **string**| Language to use in the response | [optional] [default to en]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetInsurancePrices200Ok[]**](../Model/GetInsurancePrices200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

