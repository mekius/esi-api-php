# ESI\LiveApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCharactersCharacterIdMailMailId**](LiveApi.md#deleteCharactersCharacterIdMailMailId) | **DELETE** /characters/{character_id}/mail/{mail_id}/ | Delete a mail
[**getAlliances**](LiveApi.md#getAlliances) | **GET** /alliances/ | List all alliances
[**getAlliancesAllianceId**](LiveApi.md#getAlliancesAllianceId) | **GET** /alliances/{alliance_id}/ | Get alliance information
[**getAlliancesAllianceIdCorporations**](LiveApi.md#getAlliancesAllianceIdCorporations) | **GET** /alliances/{alliance_id}/corporations/ | List alliance&#39;s corporations
[**getAlliancesAllianceIdIcons**](LiveApi.md#getAlliancesAllianceIdIcons) | **GET** /alliances/{alliance_id}/icons/ | Get alliance icon
[**getAlliancesNames**](LiveApi.md#getAlliancesNames) | **GET** /alliances/names/ | Get alliance names
[**getCharactersCharacterId**](LiveApi.md#getCharactersCharacterId) | **GET** /characters/{character_id}/ | Get character&#39;s public information
[**getCharactersCharacterIdBookmarks**](LiveApi.md#getCharactersCharacterIdBookmarks) | **GET** /characters/{character_id}/bookmarks/ | List bookmarks
[**getCharactersCharacterIdBookmarksFolders**](LiveApi.md#getCharactersCharacterIdBookmarksFolders) | **GET** /characters/{character_id}/bookmarks/folders/ | List bookmark folders
[**getCharactersCharacterIdCalendar**](LiveApi.md#getCharactersCharacterIdCalendar) | **GET** /characters/{character_id}/calendar/ | List calendar event summaries
[**getCharactersCharacterIdCalendarEventId**](LiveApi.md#getCharactersCharacterIdCalendarEventId) | **GET** /characters/{character_id}/calendar/{event_id}/ | Get an event
[**getCharactersCharacterIdClones**](LiveApi.md#getCharactersCharacterIdClones) | **GET** /characters/{character_id}/clones/ | Get clones
[**getCharactersCharacterIdCorporationhistory**](LiveApi.md#getCharactersCharacterIdCorporationhistory) | **GET** /characters/{character_id}/corporationhistory/ | Get corporation history
[**getCharactersCharacterIdKillmailsRecent**](LiveApi.md#getCharactersCharacterIdKillmailsRecent) | **GET** /characters/{character_id}/killmails/recent/ | List kills and losses
[**getCharactersCharacterIdLocation**](LiveApi.md#getCharactersCharacterIdLocation) | **GET** /characters/{character_id}/location/ | Get character location
[**getCharactersCharacterIdMail**](LiveApi.md#getCharactersCharacterIdMail) | **GET** /characters/{character_id}/mail/ | Return mail headers
[**getCharactersCharacterIdMailLabels**](LiveApi.md#getCharactersCharacterIdMailLabels) | **GET** /characters/{character_id}/mail/labels/ | Get mail labels and unread counts
[**getCharactersCharacterIdMailLists**](LiveApi.md#getCharactersCharacterIdMailLists) | **GET** /characters/{character_id}/mail/lists/ | Return mailing list subscriptions
[**getCharactersCharacterIdMailMailId**](LiveApi.md#getCharactersCharacterIdMailMailId) | **GET** /characters/{character_id}/mail/{mail_id}/ | Return a mail
[**getCharactersCharacterIdPortrait**](LiveApi.md#getCharactersCharacterIdPortrait) | **GET** /characters/{character_id}/portrait/ | Get character portraits
[**getCharactersCharacterIdSearch**](LiveApi.md#getCharactersCharacterIdSearch) | **GET** /characters/{character_id}/search/ | Search on a string
[**getCharactersCharacterIdShip**](LiveApi.md#getCharactersCharacterIdShip) | **GET** /characters/{character_id}/ship/ | Get current ship
[**getCharactersCharacterIdSkillqueue**](LiveApi.md#getCharactersCharacterIdSkillqueue) | **GET** /characters/{character_id}/skillqueue/ | Get character&#39;s skill queue
[**getCharactersCharacterIdSkills**](LiveApi.md#getCharactersCharacterIdSkills) | **GET** /characters/{character_id}/skills/ | Get character skills
[**getCharactersCharacterIdWallets**](LiveApi.md#getCharactersCharacterIdWallets) | **GET** /characters/{character_id}/wallets/ | List wallets and balances
[**getCharactersNames**](LiveApi.md#getCharactersNames) | **GET** /characters/names/ | Get character names
[**getCorporationsCorporationId**](LiveApi.md#getCorporationsCorporationId) | **GET** /corporations/{corporation_id}/ | Get corporation information
[**getCorporationsCorporationIdAlliancehistory**](LiveApi.md#getCorporationsCorporationIdAlliancehistory) | **GET** /corporations/{corporation_id}/alliancehistory/ | Get alliance history
[**getCorporationsCorporationIdIcons**](LiveApi.md#getCorporationsCorporationIdIcons) | **GET** /corporations/{corporation_id}/icons/ | Get corporation icon
[**getCorporationsCorporationIdMembers**](LiveApi.md#getCorporationsCorporationIdMembers) | **GET** /corporations/{corporation_id}/members/ | Get corporation members
[**getCorporationsCorporationIdRoles**](LiveApi.md#getCorporationsCorporationIdRoles) | **GET** /corporations/{corporation_id}/roles/ | Get corporation members
[**getCorporationsNames**](LiveApi.md#getCorporationsNames) | **GET** /corporations/names/ | Get corporation names
[**getKillmailsKillmailIdKillmailHash**](LiveApi.md#getKillmailsKillmailIdKillmailHash) | **GET** /killmails/{killmail_id}/{killmail_hash}/ | Get a single killmail
[**getSearch**](LiveApi.md#getSearch) | **GET** /search/ | Search on a string
[**getSovereigntyCampaigns**](LiveApi.md#getSovereigntyCampaigns) | **GET** /sovereignty/campaigns/ | List sovereignty campaigns
[**getSovereigntyStructures**](LiveApi.md#getSovereigntyStructures) | **GET** /sovereignty/structures/ | List sovereignty structures
[**getUniverseStationsStationId**](LiveApi.md#getUniverseStationsStationId) | **GET** /universe/stations/{station_id}/ | Get station information
[**getUniverseStructures**](LiveApi.md#getUniverseStructures) | **GET** /universe/structures/ | List all public structures
[**getUniverseStructuresStructureId**](LiveApi.md#getUniverseStructuresStructureId) | **GET** /universe/structures/{structure_id}/ | Get structure information
[**getUniverseSystemsSystemId**](LiveApi.md#getUniverseSystemsSystemId) | **GET** /universe/systems/{system_id}/ | Get solar system information
[**getUniverseTypesTypeId**](LiveApi.md#getUniverseTypesTypeId) | **GET** /universe/types/{type_id}/ | Get type information
[**postCharactersCharacterIdCspa**](LiveApi.md#postCharactersCharacterIdCspa) | **POST** /characters/{character_id}/cspa/ | Calculate a CSPA charge cost
[**postCharactersCharacterIdMail**](LiveApi.md#postCharactersCharacterIdMail) | **POST** /characters/{character_id}/mail/ | Send a new mail
[**postCharactersCharacterIdMailLabels**](LiveApi.md#postCharactersCharacterIdMailLabels) | **POST** /characters/{character_id}/mail/labels/ | Create a mail label
[**postUniverseNames**](LiveApi.md#postUniverseNames) | **POST** /universe/names/ | Get names and categories for a set of ID&#39;s
[**putCharactersCharacterIdCalendarEventId**](LiveApi.md#putCharactersCharacterIdCalendarEventId) | **PUT** /characters/{character_id}/calendar/{event_id}/ | Respond to an event
[**putCharactersCharacterIdMailMailId**](LiveApi.md#putCharactersCharacterIdMailMailId) | **PUT** /characters/{character_id}/mail/{mail_id}/ | Update metadata about a mail


# **deleteCharactersCharacterIdMailMailId**
> deleteCharactersCharacterIdMailMailId($characterId, $mailId, $datasource)

Delete a mail

Delete a mail  ---  Alternate route: `/v1/characters/{character_id}/mail/{mail_id}/`  Alternate route: `/legacy/characters/{character_id}/mail/{mail_id}/`  Alternate route: `/dev/characters/{character_id}/mail/{mail_id}/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$mailId = 56; // int | An EVE mail ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $api_instance->deleteCharactersCharacterIdMailMailId($characterId, $mailId, $datasource);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->deleteCharactersCharacterIdMailMailId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **mailId** | **int**| An EVE mail ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlliances**
> int[] getAlliances($datasource)

List all alliances

List all active player alliances  ---  Alternate route: `/v1/alliances/`  Alternate route: `/legacy/alliances/`  Alternate route: `/dev/alliances/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getAlliances($datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getAlliances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlliancesAllianceId**
> \ESI\Model\GetAlliancesAllianceIdOk getAlliancesAllianceId($allianceId, $datasource)

Get alliance information

Public information about an alliance  ---  Alternate route: `/v2/alliances/{alliance_id}/`  Alternate route: `/dev/alliances/{alliance_id}/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$allianceId = 56; // int | An Eve alliance ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getAlliancesAllianceId($allianceId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getAlliancesAllianceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allianceId** | **int**| An Eve alliance ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetAlliancesAllianceIdOk**](../Model/GetAlliancesAllianceIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlliancesAllianceIdCorporations**
> int[] getAlliancesAllianceIdCorporations($allianceId, $datasource)

List alliance's corporations

List all current member corporations of an alliance  ---  Alternate route: `/v1/alliances/{alliance_id}/corporations/`  Alternate route: `/legacy/alliances/{alliance_id}/corporations/`  Alternate route: `/dev/alliances/{alliance_id}/corporations/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$allianceId = 56; // int | An EVE alliance ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getAlliancesAllianceIdCorporations($allianceId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getAlliancesAllianceIdCorporations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allianceId** | **int**| An EVE alliance ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlliancesAllianceIdIcons**
> \ESI\Model\GetAlliancesAllianceIdIconsOk getAlliancesAllianceIdIcons($allianceId, $datasource)

Get alliance icon

Get the icon urls for a alliance  ---  Alternate route: `/v1/alliances/{alliance_id}/icons/`  Alternate route: `/legacy/alliances/{alliance_id}/icons/`  Alternate route: `/dev/alliances/{alliance_id}/icons/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$allianceId = 56; // int | An EVE alliance ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getAlliancesAllianceIdIcons($allianceId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getAlliancesAllianceIdIcons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allianceId** | **int**| An EVE alliance ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetAlliancesAllianceIdIconsOk**](../Model/GetAlliancesAllianceIdIconsOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlliancesNames**
> \ESI\Model\GetAlliancesNames200OkObject[] getAlliancesNames($allianceIds, $datasource)

Get alliance names

Resolve a set of alliance IDs to alliance names  ---  Alternate route: `/v1/alliances/names/`  Alternate route: `/legacy/alliances/names/`  Alternate route: `/dev/alliances/names/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$allianceIds = array(56); // int[] | A comma separated list of alliance IDs
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getAlliancesNames($allianceIds, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getAlliancesNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allianceIds** | [**int[]**](../Model/int.md)| A comma separated list of alliance IDs |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetAlliancesNames200OkObject[]**](../Model/GetAlliancesNames200OkObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterId**
> \ESI\Model\GetCharactersCharacterIdOk getCharactersCharacterId($characterId, $datasource)

Get character's public information

Public information about a character  ---  Alternate route: `/v3/characters/{character_id}/`  Alternate route: `/legacy/characters/{character_id}/`  Alternate route: `/dev/characters/{character_id}/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterId($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdOk**](../Model/GetCharactersCharacterIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdBookmarks($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdBookmarks: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdBookmarksFolders($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdBookmarksFolders: ', $e->getMessage(), PHP_EOL;
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

# **getCharactersCharacterIdCalendar**
> \ESI\Model\GetCharactersCharacterIdCalendar200OkObject[] getCharactersCharacterIdCalendar($characterId, $fromEvent, $datasource)

List calendar event summaries

Get 50 event summaries from the calendar. If no event ID is given, the resource will return the next 50 chronological event summaries from now. If an event ID is specified, it will return the next 50 chronological event summaries from after that event.   ---  Alternate route: `/v1/characters/{character_id}/calendar/`  Alternate route: `/legacy/characters/{character_id}/calendar/`  Alternate route: `/dev/characters/{character_id}/calendar/`   ---  This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 789; // int | The character to retrieve events from
$fromEvent = 56; // int | The event ID to retrieve events from
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdCalendar($characterId, $fromEvent, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdCalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The character to retrieve events from |
 **fromEvent** | **int**| The event ID to retrieve events from | [optional]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdCalendar200OkObject[]**](../Model/GetCharactersCharacterIdCalendar200OkObject.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdCalendarEventId**
> \ESI\Model\GetCharactersCharacterIdCalendarEventIdOk getCharactersCharacterIdCalendarEventId($characterId, $eventId, $datasource)

Get an event

Get all the information for a specific event  ---  Alternate route: `/v3/characters/{character_id}/calendar/{event_id}/`  Alternate route: `/dev/characters/{character_id}/calendar/{event_id}/`   ---  This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 789; // int | The character id requesting the event
$eventId = 56; // int | The id of the event requested
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdCalendarEventId($characterId, $eventId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdCalendarEventId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The character id requesting the event |
 **eventId** | **int**| The id of the event requested |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdCalendarEventIdOk**](../Model/GetCharactersCharacterIdCalendarEventIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdClones**
> \ESI\Model\GetCharactersCharacterIdClonesOk getCharactersCharacterIdClones($characterId, $datasource)

Get clones

A list of the character's clones  ---  Alternate route: `/v2/characters/{character_id}/clones/`  Alternate route: `/dev/characters/{character_id}/clones/`   ---  This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdClones($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdClones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdClonesOk**](../Model/GetCharactersCharacterIdClonesOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdCorporationhistory**
> \ESI\Model\GetCharactersCharacterIdCorporationhistory200OkObject[] getCharactersCharacterIdCorporationhistory($characterId, $datasource)

Get corporation history

Get a list of all the corporations a character has been a member of  ---  Alternate route: `/v1/characters/{character_id}/corporationhistory/`  Alternate route: `/legacy/characters/{character_id}/corporationhistory/`  Alternate route: `/dev/characters/{character_id}/corporationhistory/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdCorporationhistory($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdCorporationhistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdCorporationhistory200OkObject[]**](../Model/GetCharactersCharacterIdCorporationhistory200OkObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdKillmailsRecent**
> \ESI\Model\GetCharactersCharacterIdKillmailsRecent200OkObject[] getCharactersCharacterIdKillmailsRecent($characterId, $maxCount, $maxKillId, $datasource)

List kills and losses

Return a list of character's recent kills and losses  ---  Alternate route: `/v1/characters/{character_id}/killmails/recent/`  Alternate route: `/legacy/characters/{character_id}/killmails/recent/`  Alternate route: `/dev/characters/{character_id}/killmails/recent/`   ---  This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 789; // int | An EVE character ID
$maxCount = 50; // int | How many killmails to return at maximum
$maxKillId = 789; // int | Only return killmails with ID smaller than this.
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdKillmailsRecent($characterId, $maxCount, $maxKillId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdKillmailsRecent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **maxCount** | **int**| How many killmails to return at maximum | [optional] [default to 50]
 **maxKillId** | **int**| Only return killmails with ID smaller than this. | [optional]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdKillmailsRecent200OkObject[]**](../Model/GetCharactersCharacterIdKillmailsRecent200OkObject.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdLocation**
> \ESI\Model\GetCharactersCharacterIdLocationOk getCharactersCharacterIdLocation($characterId, $datasource)

Get character location

Information about the characters current location. Returns the current solar system id, and also the current station or structure ID if applicable.  ---  Alternate route: `/v1/characters/{character_id}/location/`  Alternate route: `/legacy/characters/{character_id}/location/`  Alternate route: `/dev/characters/{character_id}/location/`   ---  This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdLocation($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdLocationOk**](../Model/GetCharactersCharacterIdLocationOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdMail**
> \ESI\Model\GetCharactersCharacterIdMail200OkObject[] getCharactersCharacterIdMail($characterId, $labels, $lastMailId, $datasource)

Return mail headers

Return the 50 most recent mail headers belonging to the character that match the query criteria. Queries can be filtered by label, and last_mail_id can be used to paginate backwards.  ---  Alternate route: `/v1/characters/{character_id}/mail/`  Alternate route: `/legacy/characters/{character_id}/mail/`  Alternate route: `/dev/characters/{character_id}/mail/`   ---  This route is cached for up to 30 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$labels = array(56); // int[] | Fetch only mails that match one or more of the given labels
$lastMailId = 56; // int | List only mail with an ID lower than the given ID, if present
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdMail($characterId, $labels, $lastMailId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **labels** | [**int[]**](../Model/int.md)| Fetch only mails that match one or more of the given labels | [optional]
 **lastMailId** | **int**| List only mail with an ID lower than the given ID, if present | [optional]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdMail200OkObject[]**](../Model/GetCharactersCharacterIdMail200OkObject.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdMailLabels**
> \ESI\Model\GetCharactersCharacterIdMailLabelsOk getCharactersCharacterIdMailLabels($characterId, $datasource)

Get mail labels and unread counts

Return a list of the users mail labels, unread counts for each label and a total unread count.  ---  Alternate route: `/v3/characters/{character_id}/mail/labels/`  Alternate route: `/dev/characters/{character_id}/mail/labels/`   ---  This route is cached for up to 30 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdMailLabels($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdMailLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdMailLabelsOk**](../Model/GetCharactersCharacterIdMailLabelsOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdMailLists**
> \ESI\Model\GetCharactersCharacterIdMailLists200OkObject[] getCharactersCharacterIdMailLists($characterId, $datasource)

Return mailing list subscriptions

Return all mailing lists that the character is subscribed to   ---  Alternate route: `/v1/characters/{character_id}/mail/lists/`  Alternate route: `/legacy/characters/{character_id}/mail/lists/`  Alternate route: `/dev/characters/{character_id}/mail/lists/`   ---  This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdMailLists($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdMailLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdMailLists200OkObject[]**](../Model/GetCharactersCharacterIdMailLists200OkObject.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdMailMailId**
> \ESI\Model\GetCharactersCharacterIdMailMailIdOk getCharactersCharacterIdMailMailId($characterId, $mailId, $datasource)

Return a mail

Return the contents of an EVE mail  ---  Alternate route: `/v1/characters/{character_id}/mail/{mail_id}/`  Alternate route: `/legacy/characters/{character_id}/mail/{mail_id}/`  Alternate route: `/dev/characters/{character_id}/mail/{mail_id}/`   ---  This route is cached for up to 30 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$mailId = 56; // int | An EVE mail ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdMailMailId($characterId, $mailId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdMailMailId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **mailId** | **int**| An EVE mail ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdMailMailIdOk**](../Model/GetCharactersCharacterIdMailMailIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdPortrait**
> \ESI\Model\GetCharactersCharacterIdPortraitOk getCharactersCharacterIdPortrait($characterId, $datasource)

Get character portraits

Get portrait urls for a character  ---  Alternate route: `/v2/characters/{character_id}/portrait/`  Alternate route: `/dev/characters/{character_id}/portrait/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdPortrait($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdPortrait: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdPortraitOk**](../Model/GetCharactersCharacterIdPortraitOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdSearch**
> \ESI\Model\GetCharactersCharacterIdSearchOk getCharactersCharacterIdSearch($characterId, $search, $categories, $language, $strict, $datasource)

Search on a string

Search for entities that match a given sub-string.  ---  Alternate route: `/v2/characters/{character_id}/search/`  Alternate route: `/dev/characters/{character_id}/search/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$search = "search_example"; // string | The string to search on
$categories = array("categories_example"); // string[] | Type of entities to search for
$language = "en-us"; // string | Search locale
$strict = false; // bool | Whether the search should be a strict match
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdSearch($characterId, $search, $categories, $language, $strict, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **search** | **string**| The string to search on |
 **categories** | [**string[]**](../Model/string.md)| Type of entities to search for |
 **language** | **string**| Search locale | [optional] [default to en-us]
 **strict** | **bool**| Whether the search should be a strict match | [optional] [default to false]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdSearchOk**](../Model/GetCharactersCharacterIdSearchOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdShip**
> \ESI\Model\GetCharactersCharacterIdShipOk getCharactersCharacterIdShip($characterId, $datasource)

Get current ship

Get the current ship type, name and id  ---  Alternate route: `/v1/characters/{character_id}/ship/`  Alternate route: `/legacy/characters/{character_id}/ship/`  Alternate route: `/dev/characters/{character_id}/ship/`   ---  This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdShip($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdShip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdShipOk**](../Model/GetCharactersCharacterIdShipOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdSkillqueue**
> \ESI\Model\GetCharactersCharacterIdSkillqueue200OkObject[] getCharactersCharacterIdSkillqueue($characterId, $datasource)

Get character's skill queue

List the configured skill queue for the given character  ---  Alternate route: `/v2/characters/{character_id}/skillqueue/`  Alternate route: `/legacy/characters/{character_id}/skillqueue/`  Alternate route: `/dev/characters/{character_id}/skillqueue/`   ---  This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | Character id of the target character
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdSkillqueue($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdSkillqueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| Character id of the target character |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdSkillqueue200OkObject[]**](../Model/GetCharactersCharacterIdSkillqueue200OkObject.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdSkills**
> \ESI\Model\GetCharactersCharacterIdSkillsOk getCharactersCharacterIdSkills($characterId, $datasource)

Get character skills

List all trained skills for the given character  ---  Alternate route: `/v3/characters/{character_id}/skills/`  Alternate route: `/dev/characters/{character_id}/skills/`   ---  This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdSkills($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdSkills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersCharacterIdSkillsOk**](../Model/GetCharactersCharacterIdSkillsOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdWallets($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersCharacterIdWallets: ', $e->getMessage(), PHP_EOL;
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

# **getCharactersNames**
> \ESI\Model\GetCharactersNames200OkObject[] getCharactersNames($characterIds, $datasource)

Get character names

Resolve a set of character IDs to character names  ---  Alternate route: `/v1/characters/names/`  Alternate route: `/legacy/characters/names/`  Alternate route: `/dev/characters/names/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$characterIds = array(56); // int[] | A comma separated list of character IDs
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersNames($characterIds, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCharactersNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterIds** | [**int[]**](../Model/int.md)| A comma separated list of character IDs |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCharactersNames200OkObject[]**](../Model/GetCharactersNames200OkObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationId**
> \ESI\Model\GetCorporationsCorporationIdOk getCorporationsCorporationId($corporationId, $datasource)

Get corporation information

Public information about a corporation  ---  Alternate route: `/v2/corporations/{corporation_id}/`  Alternate route: `/dev/corporations/{corporation_id}/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$corporationId = 56; // int | An Eve corporation ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCorporationsCorporationId($corporationId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCorporationsCorporationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An Eve corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCorporationsCorporationIdOk**](../Model/GetCorporationsCorporationIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdAlliancehistory**
> \ESI\Model\GetCorporationsCorporationIdAlliancehistory200OkObject[] getCorporationsCorporationIdAlliancehistory($corporationId, $datasource)

Get alliance history

Get a list of all the alliances a corporation has been a member of  ---  Alternate route: `/v1/corporations/{corporation_id}/alliancehistory/`  Alternate route: `/legacy/corporations/{corporation_id}/alliancehistory/`  Alternate route: `/dev/corporations/{corporation_id}/alliancehistory/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCorporationsCorporationIdAlliancehistory($corporationId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCorporationsCorporationIdAlliancehistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCorporationsCorporationIdAlliancehistory200OkObject[]**](../Model/GetCorporationsCorporationIdAlliancehistory200OkObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdIcons**
> \ESI\Model\GetCorporationsCorporationIdIconsOk getCorporationsCorporationIdIcons($corporationId, $datasource)

Get corporation icon

Get the icon urls for a corporation  ---  Alternate route: `/v1/corporations/{corporation_id}/icons/`  Alternate route: `/legacy/corporations/{corporation_id}/icons/`  Alternate route: `/dev/corporations/{corporation_id}/icons/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCorporationsCorporationIdIcons($corporationId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCorporationsCorporationIdIcons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCorporationsCorporationIdIconsOk**](../Model/GetCorporationsCorporationIdIconsOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdMembers**
> \ESI\Model\GetCorporationsCorporationIdMembers200OkObject[] getCorporationsCorporationIdMembers($corporationId, $datasource)

Get corporation members

Read the current list of members if the calling character is a member.  ---  Alternate route: `/v2/corporations/{corporation_id}/members/`  Alternate route: `/legacy/corporations/{corporation_id}/members/`  Alternate route: `/dev/corporations/{corporation_id}/members/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$corporationId = 56; // int | A corporation ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCorporationsCorporationIdMembers($corporationId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCorporationsCorporationIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| A corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCorporationsCorporationIdMembers200OkObject[]**](../Model/GetCorporationsCorporationIdMembers200OkObject.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdRoles**
> \ESI\Model\GetCorporationsCorporationIdRoles200OkObject[] getCorporationsCorporationIdRoles($corporationId, $datasource)

Get corporation members

Return the roles of all members if the character has the personnel manager role or any grantable role.  ---  Alternate route: `/v1/corporations/{corporation_id}/roles/`  Alternate route: `/legacy/corporations/{corporation_id}/roles/`  Alternate route: `/dev/corporations/{corporation_id}/roles/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$corporationId = 56; // int | A corporation ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCorporationsCorporationIdRoles($corporationId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCorporationsCorporationIdRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| A corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCorporationsCorporationIdRoles200OkObject[]**](../Model/GetCorporationsCorporationIdRoles200OkObject.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsNames**
> \ESI\Model\GetCorporationsNames200OkObject[] getCorporationsNames($corporationIds, $datasource)

Get corporation names

Resolve a set of corporation IDs to corporation names  ---  Alternate route: `/v1/corporations/names/`  Alternate route: `/legacy/corporations/names/`  Alternate route: `/dev/corporations/names/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$corporationIds = array(56); // int[] | A comma separated list of corporation IDs
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCorporationsNames($corporationIds, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getCorporationsNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationIds** | [**int[]**](../Model/int.md)| A comma separated list of corporation IDs |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetCorporationsNames200OkObject[]**](../Model/GetCorporationsNames200OkObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKillmailsKillmailIdKillmailHash**
> \ESI\Model\GetKillmailsKillmailIdKillmailHashOk getKillmailsKillmailIdKillmailHash($killmailId, $killmailHash, $datasource)

Get a single killmail

Return a single killmail from its ID and hash  ---  Alternate route: `/v1/killmails/{killmail_id}/{killmail_hash}/`  Alternate route: `/legacy/killmails/{killmail_id}/{killmail_hash}/`  Alternate route: `/dev/killmails/{killmail_id}/{killmail_hash}/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$killmailId = 789; // int | The killmail ID to be queried
$killmailHash = "killmailHash_example"; // string | The killmail hash for verification
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getKillmailsKillmailIdKillmailHash($killmailId, $killmailHash, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getKillmailsKillmailIdKillmailHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **killmailId** | **int**| The killmail ID to be queried |
 **killmailHash** | **string**| The killmail hash for verification |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetKillmailsKillmailIdKillmailHashOk**](../Model/GetKillmailsKillmailIdKillmailHashOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSearch**
> \ESI\Model\GetSearchOk getSearch($search, $categories, $language, $strict, $datasource)

Search on a string

Search for entities that match a given sub-string.  ---  Alternate route: `/v1/search/`  Alternate route: `/legacy/search/`  Alternate route: `/dev/search/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$search = "search_example"; // string | The string to search on
$categories = array("categories_example"); // string[] | Type of entities to search for
$language = "en-us"; // string | Search locale
$strict = false; // bool | Whether the search should be a strict match
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getSearch($search, $categories, $language, $strict, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| The string to search on |
 **categories** | [**string[]**](../Model/string.md)| Type of entities to search for |
 **language** | **string**| Search locale | [optional] [default to en-us]
 **strict** | **bool**| Whether the search should be a strict match | [optional] [default to false]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetSearchOk**](../Model/GetSearchOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSovereigntyCampaigns**
> \ESI\Model\GetSovereigntyCampaigns200OkObject[] getSovereigntyCampaigns($datasource)

List sovereignty campaigns

Shows sovereignty data for campaigns.  ---  Alternate route: `/v1/sovereignty/campaigns/`  Alternate route: `/legacy/sovereignty/campaigns/`  Alternate route: `/dev/sovereignty/campaigns/`   ---  This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getSovereigntyCampaigns($datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getSovereigntyCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetSovereigntyCampaigns200OkObject[]**](../Model/GetSovereigntyCampaigns200OkObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSovereigntyStructures**
> \ESI\Model\GetSovereigntyStructures200OkObject[] getSovereigntyStructures($datasource)

List sovereignty structures

Shows sovereignty data for structures.  ---  Alternate route: `/v1/sovereignty/structures/`  Alternate route: `/legacy/sovereignty/structures/`  Alternate route: `/dev/sovereignty/structures/`   ---  This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getSovereigntyStructures($datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getSovereigntyStructures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetSovereigntyStructures200OkObject[]**](../Model/GetSovereigntyStructures200OkObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseStationsStationId**
> \ESI\Model\GetUniverseStationsStationIdOk getUniverseStationsStationId($stationId, $datasource)

Get station information

Public information on stations  ---  Alternate route: `/v1/universe/stations/{station_id}/`  Alternate route: `/legacy/universe/stations/{station_id}/`  Alternate route: `/dev/universe/stations/{station_id}/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$stationId = 56; // int | An Eve station ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getUniverseStationsStationId($stationId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getUniverseStationsStationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stationId** | **int**| An Eve station ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetUniverseStationsStationIdOk**](../Model/GetUniverseStationsStationIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseStructures**
> int[] getUniverseStructures($datasource)

List all public structures

List all public structures  ---  Alternate route: `/v1/universe/structures/`  Alternate route: `/legacy/universe/structures/`  Alternate route: `/dev/universe/structures/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getUniverseStructures($datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getUniverseStructures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseStructuresStructureId**
> \ESI\Model\GetUniverseStructuresStructureIdOk getUniverseStructuresStructureId($structureId, $datasource)

Get structure information

Returns information on requested structure, if you are on the ACL. Otherwise, returns \"Forbidden\" for all inputs.  ---  Alternate route: `/v1/universe/structures/{structure_id}/`  Alternate route: `/legacy/universe/structures/{structure_id}/`  Alternate route: `/dev/universe/structures/{structure_id}/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$structureId = 789; // int | An Eve structure ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getUniverseStructuresStructureId($structureId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getUniverseStructuresStructureId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **structureId** | **int**| An Eve structure ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetUniverseStructuresStructureIdOk**](../Model/GetUniverseStructuresStructureIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseSystemsSystemId**
> \ESI\Model\GetUniverseSystemsSystemIdOk getUniverseSystemsSystemId($systemId, $datasource)

Get solar system information

Information on solar systems  ---  Alternate route: `/v1/universe/systems/{system_id}/`  Alternate route: `/legacy/universe/systems/{system_id}/`  Alternate route: `/dev/universe/systems/{system_id}/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$systemId = 56; // int | An Eve solar system ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getUniverseSystemsSystemId($systemId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getUniverseSystemsSystemId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **systemId** | **int**| An Eve solar system ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetUniverseSystemsSystemIdOk**](../Model/GetUniverseSystemsSystemIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseTypesTypeId**
> \ESI\Model\GetUniverseTypesTypeIdOk getUniverseTypesTypeId($typeId, $datasource)

Get type information

Get information on a type  ---  Alternate route: `/v1/universe/types/{type_id}/`  Alternate route: `/legacy/universe/types/{type_id}/`  Alternate route: `/dev/universe/types/{type_id}/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$typeId = 56; // int | An Eve item type ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getUniverseTypesTypeId($typeId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->getUniverseTypesTypeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **typeId** | **int**| An Eve item type ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\GetUniverseTypesTypeIdOk**](../Model/GetUniverseTypesTypeIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersCharacterIdCspa**
> \ESI\Model\PostCharactersCharacterIdCspaCreated postCharactersCharacterIdCspa($characterId, $characters, $datasource)

Calculate a CSPA charge cost

Takes a source character ID in the url and a set of target character ID's in the body, returns a CSPA charge cost  ---  Alternate route: `/v3/characters/{character_id}/cspa/`  Alternate route: `/legacy/characters/{character_id}/cspa/`  Alternate route: `/dev/characters/{character_id}/cspa/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$characters = new \ESI\Model\PostCharactersCharacterIdCspaCharacters(); // \ESI\Model\PostCharactersCharacterIdCspaCharacters | The target characters to calculate the charge for
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->postCharactersCharacterIdCspa($characterId, $characters, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->postCharactersCharacterIdCspa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **characters** | [**\ESI\Model\PostCharactersCharacterIdCspaCharacters**](../Model/\ESI\Model\PostCharactersCharacterIdCspaCharacters.md)| The target characters to calculate the charge for |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\PostCharactersCharacterIdCspaCreated**](../Model/PostCharactersCharacterIdCspaCreated.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersCharacterIdMail**
> int postCharactersCharacterIdMail($characterId, $mail, $datasource)

Send a new mail

Create and send a new mail  ---  Alternate route: `/v1/characters/{character_id}/mail/`  Alternate route: `/legacy/characters/{character_id}/mail/`  Alternate route: `/dev/characters/{character_id}/mail/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | The sender's character ID
$mail = new \ESI\Model\PostCharactersCharacterIdMailMail(); // \ESI\Model\PostCharactersCharacterIdMailMail | The mail to send
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->postCharactersCharacterIdMail($characterId, $mail, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->postCharactersCharacterIdMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The sender&#39;s character ID |
 **mail** | [**\ESI\Model\PostCharactersCharacterIdMailMail**](../Model/\ESI\Model\PostCharactersCharacterIdMailMail.md)| The mail to send |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

**int**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersCharacterIdMailLabels**
> int postCharactersCharacterIdMailLabels($characterId, $label, $datasource)

Create a mail label

Create a mail label  ---  Alternate route: `/v2/characters/{character_id}/mail/labels/`  Alternate route: `/legacy/characters/{character_id}/mail/labels/`  Alternate route: `/dev/characters/{character_id}/mail/labels/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$label = new \ESI\Model\PostCharactersCharacterIdMailLabelsLabel(); // \ESI\Model\PostCharactersCharacterIdMailLabelsLabel | Label to create
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->postCharactersCharacterIdMailLabels($characterId, $label, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->postCharactersCharacterIdMailLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **label** | [**\ESI\Model\PostCharactersCharacterIdMailLabelsLabel**](../Model/\ESI\Model\PostCharactersCharacterIdMailLabelsLabel.md)| Label to create | [optional]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

**int**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUniverseNames**
> \ESI\Model\PostUniverseNames200OkObject[] postUniverseNames($ids, $datasource)

Get names and categories for a set of ID's

Resolve a set of IDs to names and categories. Supported ID's for resolving are: Characters, Corporations, Alliances, Stations, Solar Systems, Constellations, Regions, Types.  ---  Alternate route: `/v1/universe/names/`  Alternate route: `/legacy/universe/names/`  Alternate route: `/dev/universe/names/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ESI\Api\LiveApi();
$ids = new \ESI\Model\PostUniverseNamesIds(); // \ESI\Model\PostUniverseNamesIds | The ids to resolve
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->postUniverseNames($ids, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->postUniverseNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**\ESI\Model\PostUniverseNamesIds**](../Model/\ESI\Model\PostUniverseNamesIds.md)| The ids to resolve |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\ESI\Model\PostUniverseNames200OkObject[]**](../Model/PostUniverseNames200OkObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCharactersCharacterIdCalendarEventId**
> putCharactersCharacterIdCalendarEventId($characterId, $eventId, $response, $datasource)

Respond to an event

Set your response status to an event  ---  Alternate route: `/v3/characters/{character_id}/calendar/{event_id}/`  Alternate route: `/dev/characters/{character_id}/calendar/{event_id}/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | The character ID requesting the event
$eventId = 56; // int | The ID of the event requested
$response = new \ESI\Model\PutCharactersCharacterIdCalendarEventIdResponse(); // \ESI\Model\PutCharactersCharacterIdCalendarEventIdResponse | The response value to set, overriding current value.
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $api_instance->putCharactersCharacterIdCalendarEventId($characterId, $eventId, $response, $datasource);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->putCharactersCharacterIdCalendarEventId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The character ID requesting the event |
 **eventId** | **int**| The ID of the event requested |
 **response** | [**\ESI\Model\PutCharactersCharacterIdCalendarEventIdResponse**](../Model/\ESI\Model\PutCharactersCharacterIdCalendarEventIdResponse.md)| The response value to set, overriding current value. |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCharactersCharacterIdMailMailId**
> putCharactersCharacterIdMailMailId($characterId, $mailId, $contents, $datasource)

Update metadata about a mail

Update metadata about a mail  ---  Alternate route: `/v1/characters/{character_id}/mail/{mail_id}/`  Alternate route: `/legacy/characters/{character_id}/mail/{mail_id}/`  Alternate route: `/dev/characters/{character_id}/mail/{mail_id}/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ESI\Api\LiveApi();
$characterId = 56; // int | An EVE character ID
$mailId = 56; // int | An EVE mail ID
$contents = new \ESI\Model\PutCharactersCharacterIdMailMailIdContents(); // \ESI\Model\PutCharactersCharacterIdMailMailIdContents | Data used to update the mail
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $api_instance->putCharactersCharacterIdMailMailId($characterId, $mailId, $contents, $datasource);
} catch (Exception $e) {
    echo 'Exception when calling LiveApi->putCharactersCharacterIdMailMailId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **mailId** | **int**| An EVE mail ID |
 **contents** | [**\ESI\Model\PutCharactersCharacterIdMailMailIdContents**](../Model/\ESI\Model\PutCharactersCharacterIdMailMailIdContents.md)| Data used to update the mail |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

