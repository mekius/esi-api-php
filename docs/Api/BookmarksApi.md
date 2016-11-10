# ESI\BookmarksApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdBookmarks**](BookmarksApi.md#getCharactersCharacterIdBookmarks) | **GET** /characters/{character_id}/bookmarks/ | List bookmarks
[**getCharactersCharacterIdBookmarksFolders**](BookmarksApi.md#getCharactersCharacterIdBookmarksFolders) | **GET** /characters/{character_id}/bookmarks/folders/ | List bookmark folders
[**getCorporationsCorporationIdBookmarks**](BookmarksApi.md#getCorporationsCorporationIdBookmarks) | **GET** /corporations/{corporation_id}/bookmarks/ | Dummy Endpoint, Please Ignore
[**getCorporationsCorporationIdBookmarksFolders**](BookmarksApi.md#getCorporationsCorporationIdBookmarksFolders) | **GET** /corporations/{corporation_id}/bookmarks/folders/ | Dummy Endpoint, Please Ignore


# **getCharactersCharacterIdBookmarks**
> \ESI\Model\GetCharactersCharacterIdBookmarks200OkObject[] getCharactersCharacterIdBookmarks($characterId, $datasource)

List bookmarks

List your character's personal bookmarks  ---  Alternate route: `/v1/characters/{character_id}/bookmarks/`  Alternate route: `/legacy/characters/{character_id}/bookmarks/`  Alternate route: `/dev/characters/{character_id}/bookmarks/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\BookmarksApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdBookmarks($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getCharactersCharacterIdBookmarks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdBookmarks200OkObject[]**](../Model/GetCharactersCharacterIdBookmarks200OkObject.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdBookmarksFolders**
> \ESI\Model\GetCharactersCharacterIdBookmarksFolders200OkObject[] getCharactersCharacterIdBookmarksFolders($characterId, $datasource)

List bookmark folders

List your character's personal bookmark folders  ---  Alternate route: `/v1/characters/{character_id}/bookmarks/folders/`  Alternate route: `/legacy/characters/{character_id}/bookmarks/folders/`  Alternate route: `/dev/characters/{character_id}/bookmarks/folders/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\BookmarksApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdBookmarksFolders($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getCharactersCharacterIdBookmarksFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdBookmarksFolders200OkObject[]**](../Model/GetCharactersCharacterIdBookmarksFolders200OkObject.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdBookmarks**
> getCorporationsCorporationIdBookmarks($corporationId, $datasource)

Dummy Endpoint, Please Ignore

Dummy  ---  Alternate route: `/v1/corporations/{corporation_id}/bookmarks/`  Alternate route: `/legacy/corporations/{corporation_id}/bookmarks/`  Alternate route: `/dev/corporations/{corporation_id}/bookmarks/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\BookmarksApi();
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $api_instance->getCorporationsCorporationIdBookmarks($corporationId, $datasource);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getCorporationsCorporationIdBookmarks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdBookmarksFolders**
> getCorporationsCorporationIdBookmarksFolders($corporationId, $datasource)

Dummy Endpoint, Please Ignore

Dummy  ---  Alternate route: `/v1/corporations/{corporation_id}/bookmarks/folders/`  Alternate route: `/legacy/corporations/{corporation_id}/bookmarks/folders/`  Alternate route: `/dev/corporations/{corporation_id}/bookmarks/folders/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\BookmarksApi();
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $api_instance->getCorporationsCorporationIdBookmarksFolders($corporationId, $datasource);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getCorporationsCorporationIdBookmarksFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

