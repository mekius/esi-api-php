# ESI\WalletApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdWallets**](WalletApi.md#getCharactersCharacterIdWallets) | **GET** /characters/{character_id}/wallets/ | List wallets and balances
[**getCharactersCharacterIdWalletsJournal**](WalletApi.md#getCharactersCharacterIdWalletsJournal) | **GET** /characters/{character_id}/wallets/journal/ | Get character wallet journal
[**getCharactersCharacterIdWalletsTransactions**](WalletApi.md#getCharactersCharacterIdWalletsTransactions) | **GET** /characters/{character_id}/wallets/transactions/ | Get wallet transactions
[**getCorporationsCorporationIdWallets**](WalletApi.md#getCorporationsCorporationIdWallets) | **GET** /corporations/{corporation_id}/wallets/ | Dummy Endpoint, Please Ignore
[**getCorporationsCorporationIdWalletsWalletIdJournal**](WalletApi.md#getCorporationsCorporationIdWalletsWalletIdJournal) | **GET** /corporations/{corporation_id}/wallets/{wallet_id}/journal/ | Dummy Endpoint, Please Ignore
[**getCorporationsCorporationIdWalletsWalletIdTransactions**](WalletApi.md#getCorporationsCorporationIdWalletsWalletIdTransactions) | **GET** /corporations/{corporation_id}/wallets/{wallet_id}/transactions/ | Dummy Endpoint, Please Ignore


# **getCharactersCharacterIdWallets**
> \ESI\Model\GetCharactersCharacterIdWallets200OkObject[] getCharactersCharacterIdWallets($characterId, $datasource)

List wallets and balances

List your wallets and their balances. Characters typically have only one wallet, with wallet_id 1000 being the master wallet.  ---  Alternate route: `/v1/characters/{character_id}/wallets/`  Alternate route: `/legacy/characters/{character_id}/wallets/`  Alternate route: `/dev/characters/{character_id}/wallets/`   ---  This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\WalletApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdWallets($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCharactersCharacterIdWallets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdWallets200OkObject[]**](../Model/GetCharactersCharacterIdWallets200OkObject.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$api_instance = new ESI\Api\WalletApi();
$characterId = 56; // int | An EVE character ID
$lastSeenId = 789; // int | A journal reference ID to paginate from
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdWalletsJournal($characterId, $lastSeenId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCharactersCharacterIdWalletsJournal: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new ESI\Api\WalletApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdWalletsTransactions($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCharactersCharacterIdWalletsTransactions: ', $e->getMessage(), PHP_EOL;
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

# **getCorporationsCorporationIdWallets**
> getCorporationsCorporationIdWallets($corporationId, $datasource)

Dummy Endpoint, Please Ignore

Dummy  ---  Alternate route: `/v1/corporations/{corporation_id}/wallets/`  Alternate route: `/legacy/corporations/{corporation_id}/wallets/`  Alternate route: `/dev/corporations/{corporation_id}/wallets/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\WalletApi();
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $api_instance->getCorporationsCorporationIdWallets($corporationId, $datasource);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCorporationsCorporationIdWallets: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new ESI\Api\WalletApi();
$corporationId = 56; // int | An EVE corporation ID
$walletId = 56; // int | Wallet ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCorporationsCorporationIdWalletsWalletIdJournal($corporationId, $walletId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCorporationsCorporationIdWalletsWalletIdJournal: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new ESI\Api\WalletApi();
$corporationId = 56; // int | An EVE corporation ID
$walletId = 56; // int | Wallet ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCorporationsCorporationIdWalletsWalletIdTransactions($corporationId, $walletId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCorporationsCorporationIdWalletsWalletIdTransactions: ', $e->getMessage(), PHP_EOL;
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

