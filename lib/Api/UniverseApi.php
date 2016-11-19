<?php
/**
 * UniverseApi
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
 * UniverseApi Class Doc Comment
 *
 * @category Class
 * @package  ESI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UniverseApi
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
     * @return UniverseApi
     */
    public function setApiClient(\ESI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
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

    /**
     * Operation getUniverseStationsStationId
     *
     * Get station information
     *
     * @param int $stationId An Eve station ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return \ESI\Model\GetUniverseStationsStationIdOk
     */
    public function getUniverseStationsStationId($stationId, $datasource = null)
    {
        list($response) = $this->getUniverseStationsStationIdWithHttpInfo($stationId, $datasource);
        return $response;
    }

    /**
     * Operation getUniverseStationsStationIdWithHttpInfo
     *
     * Get station information
     *
     * @param int $stationId An Eve station ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of \ESI\Model\GetUniverseStationsStationIdOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUniverseStationsStationIdWithHttpInfo($stationId, $datasource = null)
    {
        // verify the required parameter 'stationId' is set
        if ($stationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $stationId when calling getUniverseStationsStationId');
        }
        // parse inputs
        $resourcePath = "/universe/stations/{station_id}/";
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
        if ($stationId !== null) {
            $resourcePath = str_replace(
                "{" . "station_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($stationId),
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
                '\ESI\Model\GetUniverseStationsStationIdOk',
                '/universe/stations/{station_id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ESI\Model\GetUniverseStationsStationIdOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseStationsStationIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseStationsStationIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUniverseStructures
     *
     * List all public structures
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return int[]
     */
    public function getUniverseStructures($datasource = null)
    {
        list($response) = $this->getUniverseStructuresWithHttpInfo($datasource);
        return $response;
    }

    /**
     * Operation getUniverseStructuresWithHttpInfo
     *
     * List all public structures
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of int[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getUniverseStructuresWithHttpInfo($datasource = null)
    {
        // parse inputs
        $resourcePath = "/universe/structures/";
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
                'int[]',
                '/universe/structures/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'int[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseStructuresInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUniverseStructuresStructureId
     *
     * Get structure information
     *
     * @param int $structureId An Eve structure ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return \ESI\Model\GetUniverseStructuresStructureIdOk
     */
    public function getUniverseStructuresStructureId($structureId, $datasource = null)
    {
        list($response) = $this->getUniverseStructuresStructureIdWithHttpInfo($structureId, $datasource);
        return $response;
    }

    /**
     * Operation getUniverseStructuresStructureIdWithHttpInfo
     *
     * Get structure information
     *
     * @param int $structureId An Eve structure ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of \ESI\Model\GetUniverseStructuresStructureIdOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUniverseStructuresStructureIdWithHttpInfo($structureId, $datasource = null)
    {
        // verify the required parameter 'structureId' is set
        if ($structureId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $structureId when calling getUniverseStructuresStructureId');
        }
        // parse inputs
        $resourcePath = "/universe/structures/{structure_id}/";
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
        if ($structureId !== null) {
            $resourcePath = str_replace(
                "{" . "structure_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($structureId),
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
                '\ESI\Model\GetUniverseStructuresStructureIdOk',
                '/universe/structures/{structure_id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ESI\Model\GetUniverseStructuresStructureIdOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseStructuresStructureIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseStructuresStructureIdForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseStructuresStructureIdNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseStructuresStructureIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUniverseSystemsSystemId
     *
     * Get solar system information
     *
     * @param int $systemId An Eve solar system ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return \ESI\Model\GetUniverseSystemsSystemIdOk
     */
    public function getUniverseSystemsSystemId($systemId, $datasource = null)
    {
        list($response) = $this->getUniverseSystemsSystemIdWithHttpInfo($systemId, $datasource);
        return $response;
    }

    /**
     * Operation getUniverseSystemsSystemIdWithHttpInfo
     *
     * Get solar system information
     *
     * @param int $systemId An Eve solar system ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of \ESI\Model\GetUniverseSystemsSystemIdOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUniverseSystemsSystemIdWithHttpInfo($systemId, $datasource = null)
    {
        // verify the required parameter 'systemId' is set
        if ($systemId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $systemId when calling getUniverseSystemsSystemId');
        }
        // parse inputs
        $resourcePath = "/universe/systems/{system_id}/";
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
        if ($systemId !== null) {
            $resourcePath = str_replace(
                "{" . "system_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($systemId),
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
                '\ESI\Model\GetUniverseSystemsSystemIdOk',
                '/universe/systems/{system_id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ESI\Model\GetUniverseSystemsSystemIdOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseSystemsSystemIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseSystemsSystemIdNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseSystemsSystemIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUniverseTypesTypeId
     *
     * Get type information
     *
     * @param int $typeId An Eve item type ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return \ESI\Model\GetUniverseTypesTypeIdOk
     */
    public function getUniverseTypesTypeId($typeId, $datasource = null)
    {
        list($response) = $this->getUniverseTypesTypeIdWithHttpInfo($typeId, $datasource);
        return $response;
    }

    /**
     * Operation getUniverseTypesTypeIdWithHttpInfo
     *
     * Get type information
     *
     * @param int $typeId An Eve item type ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of \ESI\Model\GetUniverseTypesTypeIdOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUniverseTypesTypeIdWithHttpInfo($typeId, $datasource = null)
    {
        // verify the required parameter 'typeId' is set
        if ($typeId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $typeId when calling getUniverseTypesTypeId');
        }
        // parse inputs
        $resourcePath = "/universe/types/{type_id}/";
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
        if ($typeId !== null) {
            $resourcePath = str_replace(
                "{" . "type_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($typeId),
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
                '\ESI\Model\GetUniverseTypesTypeIdOk',
                '/universe/types/{type_id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ESI\Model\GetUniverseTypesTypeIdOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseTypesTypeIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseTypesTypeIdNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\GetUniverseTypesTypeIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postUniverseNames
     *
     * Get names and categories for a set of ID's
     *
     * @param \ESI\Model\PostUniverseNamesIds $ids The ids to resolve (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return \ESI\Model\PostUniverseNames200Ok[]
     */
    public function postUniverseNames($ids, $datasource = null)
    {
        list($response) = $this->postUniverseNamesWithHttpInfo($ids, $datasource);
        return $response;
    }

    /**
     * Operation postUniverseNamesWithHttpInfo
     *
     * Get names and categories for a set of ID's
     *
     * @param \ESI\Model\PostUniverseNamesIds $ids The ids to resolve (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @throws \ESI\ApiException on non-2xx response
     * @return array of \ESI\Model\PostUniverseNames200Ok[], HTTP status code, HTTP response headers (array of strings)
     */
    public function postUniverseNamesWithHttpInfo($ids, $datasource = null)
    {
        // verify the required parameter 'ids' is set
        if ($ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ids when calling postUniverseNames');
        }
        // parse inputs
        $resourcePath = "/universe/names/";
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
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($ids)) {
            $_tempBody = $ids;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ESI\Model\PostUniverseNames200Ok[]',
                '/universe/names/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ESI\Model\PostUniverseNames200Ok[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\PostUniverseNames200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\PostUniverseNamesNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ESI\Model\PostUniverseNamesInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
