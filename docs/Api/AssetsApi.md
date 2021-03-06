# ESI\AssetsApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdAssets**](AssetsApi.md#getCharactersCharacterIdAssets) | **GET** /characters/{character_id}/assets/ | Get character assets


# **getCharactersCharacterIdAssets**
> \ESI\Model\GetCharactersCharacterIdAssets200Ok[] getCharactersCharacterIdAssets($characterId, $datasource)

Get character assets

Return a list of the characters assets  ---  Alternate route: `/v1/characters/{character_id}/assets/`  Alternate route: `/legacy/characters/{character_id}/assets/`  Alternate route: `/dev/characters/{character_id}/assets/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\AssetsApi();
$characterId = 56; // int | Character id of the target character
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdAssets($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getCharactersCharacterIdAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| Character id of the target character |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdAssets200Ok[]**](../Model/GetCharactersCharacterIdAssets200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

