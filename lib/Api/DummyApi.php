<?php
/**
 * DummyApi
 * PHP version 5
 *
 * @category Class
 * @package  ESI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.2.6.dev1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ESI\Api;

use \ESI\ApiClient;
use \ESI\ApiException;
use \ESI\Configuration;
use \ESI\ObjectSerializer;

/**
 * DummyApi Class Doc Comment
 *
 * @category Class
 * @package  ESI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DummyApi
{
    /**
     * API Client
     *
     * @var \ESI\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ESI\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ESI\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://esi.tech.ccp.is/latest');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ESI\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ESI\ApiClient $apiClient set the API client
     *
     * @return DummyApi
     */
    public function setApiClient(\ESI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCharactersCharacterIdWalletsJournal
     *
     * Get character wallet journal
     *
     * @param int $characterId An EVE character ID (required)
     * @param int $lastSeenId A journal reference ID to paginate from (optional)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return \ESI\Model\GetCharactersCharacterIdWalletsJournal200Ok[]
     */
    public function getCharactersCharacterIdWalletsJournal($characterId, $lastSeenId = null, $datasource = null)
    {
        list($response) = $this->getCharactersCharacterIdWalletsJournalWithHttpInfo($characterId, $lastSeenId, $datasource);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdWalletsJournalWithHttpInfo
     *
     * Get character wallet journal
     *
     * @param int $characterId An EVE character ID (required)
     * @param int $lastSeenId A journal reference ID to paginate from (optional)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of \ESI\Model\GetCharactersCharacterIdWalletsJournal200Ok[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCharactersCharacterIdWalletsJournalWithHttpInfo($characterId, $lastSeenId = null, $datasource = null)
    {
        // verify the required parameter 'characterId' is set
        if ($characterId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $characterId when calling getCharactersCharacterIdWalletsJournal');
        }
        // parse inputs
        $resourcePath = "/characters/{character_id}/wallets/journal/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($lastSeenId !== null) {
            $queryParams['last_seen_id'] = $this->apiClient->getSerializer()->toQueryValue($lastSeenId);
        }
        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($characterId !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($characterId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ESI\Model\GetCharactersCharacterIdWalletsJournal200Ok[]',
                '/characters/{character_id}/wallets/journal/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ESI\Model\GetCharactersCharacterIdWalletsJournal200Ok[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetCharactersCharacterIdWalletsJournal200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetCharactersCharacterIdWalletsJournalForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetCharactersCharacterIdWalletsJournalInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCharactersCharacterIdWalletsTransactions
     *
     * Get wallet transactions
     *
     * @param int $characterId An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return \ESI\Model\GetCharactersCharacterIdWalletsTransactions200Ok[]
     */
    public function getCharactersCharacterIdWalletsTransactions($characterId, $datasource = null)
    {
        list($response) = $this->getCharactersCharacterIdWalletsTransactionsWithHttpInfo($characterId, $datasource);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdWalletsTransactionsWithHttpInfo
     *
     * Get wallet transactions
     *
     * @param int $characterId An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of \ESI\Model\GetCharactersCharacterIdWalletsTransactions200Ok[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCharactersCharacterIdWalletsTransactionsWithHttpInfo($characterId, $datasource = null)
    {
        // verify the required parameter 'characterId' is set
        if ($characterId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $characterId when calling getCharactersCharacterIdWalletsTransactions');
        }
        // parse inputs
        $resourcePath = "/characters/{character_id}/wallets/transactions/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($characterId !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($characterId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ESI\Model\GetCharactersCharacterIdWalletsTransactions200Ok[]',
                '/characters/{character_id}/wallets/transactions/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ESI\Model\GetCharactersCharacterIdWalletsTransactions200Ok[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetCharactersCharacterIdWalletsTransactions200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetCharactersCharacterIdWalletsTransactionsForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetCharactersCharacterIdWalletsTransactionsInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCorporationsCorporationIdWallets
     *
     * Dummy Endpoint, Please Ignore
     *
     * @param int $corporationId An EVE corporation ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return void
     */
    public function getCorporationsCorporationIdWallets($corporationId, $datasource = null)
    {
        list($response) = $this->getCorporationsCorporationIdWalletsWithHttpInfo($corporationId, $datasource);
        return $response;
    }

    /**
     * Operation getCorporationsCorporationIdWalletsWithHttpInfo
     *
     * Dummy Endpoint, Please Ignore
     *
     * @param int $corporationId An EVE corporation ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCorporationsCorporationIdWalletsWithHttpInfo($corporationId, $datasource = null)
    {
        // verify the required parameter 'corporationId' is set
        if ($corporationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corporationId when calling getCorporationsCorporationIdWallets');
        }
        // parse inputs
        $resourcePath = "/corporations/{corporation_id}/wallets/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($corporationId !== null) {
            $resourcePath = str_replace(
                "{" . "corporation_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($corporationId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/corporations/{corporation_id}/wallets/'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetCorporationsCorporationIdWalletsInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCorporationsCorporationIdWalletsWalletIdJournal
     *
     * Dummy Endpoint, Please Ignore
     *
     * @param int $corporationId An EVE corporation ID (required)
     * @param int $walletId Wallet ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return void
     */
    public function getCorporationsCorporationIdWalletsWalletIdJournal($corporationId, $walletId, $datasource = null)
    {
        list($response) = $this->getCorporationsCorporationIdWalletsWalletIdJournalWithHttpInfo($corporationId, $walletId, $datasource);
        return $response;
    }

    /**
     * Operation getCorporationsCorporationIdWalletsWalletIdJournalWithHttpInfo
     *
     * Dummy Endpoint, Please Ignore
     *
     * @param int $corporationId An EVE corporation ID (required)
     * @param int $walletId Wallet ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCorporationsCorporationIdWalletsWalletIdJournalWithHttpInfo($corporationId, $walletId, $datasource = null)
    {
        // verify the required parameter 'corporationId' is set
        if ($corporationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corporationId when calling getCorporationsCorporationIdWalletsWalletIdJournal');
        }
        // verify the required parameter 'walletId' is set
        if ($walletId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $walletId when calling getCorporationsCorporationIdWalletsWalletIdJournal');
        }
        // parse inputs
        $resourcePath = "/corporations/{corporation_id}/wallets/{wallet_id}/journal/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($corporationId !== null) {
            $resourcePath = str_replace(
                "{" . "corporation_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($corporationId),
                $resourcePath
            );
        }
        // path params
        if ($walletId !== null) {
            $resourcePath = str_replace(
                "{" . "wallet_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($walletId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/corporations/{corporation_id}/wallets/{wallet_id}/journal/'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetCorporationsCorporationIdWalletsWalletIdJournalInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCorporationsCorporationIdWalletsWalletIdTransactions
     *
     * Dummy Endpoint, Please Ignore
     *
     * @param int $corporationId An EVE corporation ID (required)
     * @param int $walletId Wallet ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return void
     */
    public function getCorporationsCorporationIdWalletsWalletIdTransactions($corporationId, $walletId, $datasource = null)
    {
        list($response) = $this->getCorporationsCorporationIdWalletsWalletIdTransactionsWithHttpInfo($corporationId, $walletId, $datasource);
        return $response;
    }

    /**
     * Operation getCorporationsCorporationIdWalletsWalletIdTransactionsWithHttpInfo
     *
     * Dummy Endpoint, Please Ignore
     *
     * @param int $corporationId An EVE corporation ID (required)
     * @param int $walletId Wallet ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCorporationsCorporationIdWalletsWalletIdTransactionsWithHttpInfo($corporationId, $walletId, $datasource = null)
    {
        // verify the required parameter 'corporationId' is set
        if ($corporationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corporationId when calling getCorporationsCorporationIdWalletsWalletIdTransactions');
        }
        // verify the required parameter 'walletId' is set
        if ($walletId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $walletId when calling getCorporationsCorporationIdWalletsWalletIdTransactions');
        }
        // parse inputs
        $resourcePath = "/corporations/{corporation_id}/wallets/{wallet_id}/transactions/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($corporationId !== null) {
            $resourcePath = str_replace(
                "{" . "corporation_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($corporationId),
                $resourcePath
            );
        }
        // path params
        if ($walletId !== null) {
            $resourcePath = str_replace(
                "{" . "wallet_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($walletId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/corporations/{corporation_id}/wallets/{wallet_id}/transactions/'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetCorporationsCorporationIdWalletsWalletIdTransactionsInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUniversePlanetsPlanetId
     *
     * Get planet information
     *
     * @param int $planetId An Eve planet ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return \ESI\Model\GetUniversePlanetsPlanetIdOk
     */
    public function getUniversePlanetsPlanetId($planetId, $datasource = null)
    {
        list($response) = $this->getUniversePlanetsPlanetIdWithHttpInfo($planetId, $datasource);
        return $response;
    }

    /**
     * Operation getUniversePlanetsPlanetIdWithHttpInfo
     *
     * Get planet information
     *
     * @param int $planetId An Eve planet ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of \ESI\Model\GetUniversePlanetsPlanetIdOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUniversePlanetsPlanetIdWithHttpInfo($planetId, $datasource = null)
    {
        // verify the required parameter 'planetId' is set
        if ($planetId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $planetId when calling getUniversePlanetsPlanetId');
        }
        // parse inputs
        $resourcePath = "/universe/planets/{planet_id}/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($planetId !== null) {
            $resourcePath = str_replace(
                "{" . "planet_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($planetId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ESI\Model\GetUniversePlanetsPlanetIdOk',
                '/universe/planets/{planet_id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ESI\Model\GetUniversePlanetsPlanetIdOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniversePlanetsPlanetIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniversePlanetsPlanetIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
