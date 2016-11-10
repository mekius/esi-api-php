# ESI\DummyApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdWalletsJournal**](DummyApi.md#getCharactersCharacterIdWalletsJournal) | **GET** /characters/{character_id}/wallets/journal/ | Get character wallet journal
[**getCharactersCharacterIdWalletsTransactions**](DummyApi.md#getCharactersCharacterIdWalletsTransactions) | **GET** /characters/{character_id}/wallets/transactions/ | Get wallet transactions
[**getCorporationsCorporationIdBookmarks**](DummyApi.md#getCorporationsCorporationIdBookmarks) | **GET** /corporations/{corporation_id}/bookmarks/ | Dummy Endpoint, Please Ignore
[**getCorporationsCorporationIdBookmarksFolders**](DummyApi.md#getCorporationsCorporationIdBookmarksFolders) | **GET** /corporations/{corporation_id}/bookmarks/folders/ | Dummy Endpoint, Please Ignore
[**getCorporationsCorporationIdWallets**](DummyApi.md#getCorporationsCorporationIdWallets) | **GET** /corporations/{corporation_id}/wallets/ | Dummy Endpoint, Please Ignore
[**getCorporationsCorporationIdWalletsWalletIdJournal**](DummyApi.md#getCorporationsCorporationIdWalletsWalletIdJournal) | **GET** /corporations/{corporation_id}/wallets/{wallet_id}/journal/ | Dummy Endpoint, Please Ignore
[**getCorporationsCorporationIdWalletsWalletIdTransactions**](DummyApi.md#getCorporationsCorporationIdWalletsWalletIdTransactions) | **GET** /corporations/{corporation_id}/wallets/{wallet_id}/transactions/ | Dummy Endpoint, Please Ignore
[**getUniversePlanetsPlanetId**](DummyApi.md#getUniversePlanetsPlanetId) | **GET** /universe/planets/{planet_id}/ | Get planet information


# **getCharactersCharacterIdWalletsJournal**
> \ESI\Model\GetCharactersCharacterIdWalletsJournal200OkObject[] getCharactersCharacterIdWalletsJournal($characterId, $lastSeenId, $datasource)

Get character wallet journal

Returns the most recent 50 entries for the characters wallet journal. Optionally, takes an argument with a reference ID, and returns the prior 50 entries from the journal.  ---  Alternate route: `/v1/characters/{character_id}/wallets/journal/`  Alternate route: `/legacy/characters/{character_id}/wallets/journal/`  Alternate route: `/dev/characters/{character_id}/wallets/journal/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\DummyApi();
$characterId = 56; // int | An EVE character ID
$lastSeenId = 789; // int | A journal reference ID to paginate from
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdWalletsJournal($characterId, $lastSeenId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DummyApi->getCharactersCharacterIdWalletsJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **lastSeenId** | **int**| A journal reference ID to paginate from | [optional]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdWalletsJournal200OkObject[]**](../Model/GetCharactersCharacterIdWalletsJournal200OkObject.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdWalletsTransactions**
> \ESI\Model\GetCharactersCharacterIdWalletsTransactions200OkObject[] getCharactersCharacterIdWalletsTransactions($characterId, $datasource)

Get wallet transactions

Gets the 50 most recent transactions in a characters wallet. Optionally, takes an argument with a transaction ID, and returns the prior 50 transactions  ---  Alternate route: `/v1/characters/{character_id}/wallets/transactions/`  Alternate route: `/legacy/characters/{character_id}/wallets/transactions/`  Alternate route: `/dev/characters/{character_id}/wallets/transactions/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\DummyApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdWalletsTransactions($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DummyApi->getCharactersCharacterIdWalletsTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdWalletsTransactions200OkObject[]**](../Model/GetCharactersCharacterIdWalletsTransactions200OkObject.md)

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

$api_instance = new ESI\Api\DummyApi();
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $api_instance->getCorporationsCorporationIdBookmarks($corporationId, $datasource);
} catch (Exception $e) {
    echo 'Exception when calling DummyApi->getCorporationsCorporationIdBookmarks: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new ESI\Api\DummyApi();
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $api_instance->getCorporationsCorporationIdBookmarksFolders($corporationId, $datasource);
} catch (Exception $e) {
    echo 'Exception when calling DummyApi->getCorporationsCorporationIdBookmarksFolders: ', $e->getMessage(), PHP_EOL;
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

# **getCorporationsCorporationIdWallets**
> getCorporationsCorporationIdWallets($corporationId, $datasource)

Dummy Endpoint, Please Ignore

Dummy  ---  Alternate route: `/v1/corporations/{corporation_id}/wallets/`  Alternate route: `/legacy/corporations/{corporation_id}/wallets/`  Alternate route: `/dev/corporations/{corporation_id}/wallets/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\DummyApi();
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $api_instance->getCorporationsCorporationIdWallets($corporationId, $datasource);
} catch (Exception $e) {
    echo 'Exception when calling DummyApi->getCorporationsCorporationIdWallets: ', $e->getMessage(), PHP_EOL;
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

# **getCorporationsCorporationIdWalletsWalletIdJournal**
> string getCorporationsCorporationIdWalletsWalletIdJournal($corporationId, $walletId, $datasource)

Dummy Endpoint, Please Ignore

Dummy  ---  Alternate route: `/v1/corporations/{corporation_id}/wallets/{wallet_id}/journal/`  Alternate route: `/legacy/corporations/{corporation_id}/wallets/{wallet_id}/journal/`  Alternate route: `/dev/corporations/{corporation_id}/wallets/{wallet_id}/journal/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\DummyApi();
$corporationId = 56; // int | An EVE corporation ID
$walletId = 56; // int | Wallet ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCorporationsCorporationIdWalletsWalletIdJournal($corporationId, $walletId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DummyApi->getCorporationsCorporationIdWalletsWalletIdJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **walletId** | **int**| Wallet ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdWalletsWalletIdTransactions**
> string getCorporationsCorporationIdWalletsWalletIdTransactions($corporationId, $walletId, $datasource)

Dummy Endpoint, Please Ignore

Dummy  ---  Alternate route: `/v1/corporations/{corporation_id}/wallets/{wallet_id}/transactions/`  Alternate route: `/legacy/corporations/{corporation_id}/wallets/{wallet_id}/transactions/`  Alternate route: `/dev/corporations/{corporation_id}/wallets/{wallet_id}/transactions/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\DummyApi();
$corporationId = 56; // int | An EVE corporation ID
$walletId = 56; // int | Wallet ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCorporationsCorporationIdWalletsWalletIdTransactions($corporationId, $walletId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DummyApi->getCorporationsCorporationIdWalletsWalletIdTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **walletId** | **int**| Wallet ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniversePlanetsPlanetId**
> \ESI\Model\GetUniversePlanetsPlanetIdOk getUniversePlanetsPlanetId($planetId, $datasource)

Get planet information

Information on a planet  ---  Alternate route: `/v1/universe/planets/{planet_id}/`  Alternate route: `/legacy/universe/planets/{planet_id}/`  Alternate route: `/dev/universe/planets/{planet_id}/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\DummyApi();
$planetId = 56; // int | An Eve planet ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getUniversePlanetsPlanetId($planetId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DummyApi->getUniversePlanetsPlanetId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **planetId** | **int**| An Eve planet ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetUniversePlanetsPlanetIdOk**](../Model/GetUniversePlanetsPlanetIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

