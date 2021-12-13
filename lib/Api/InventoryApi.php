<?php
/**
 * InventoryApi
 * PHP version 7.3
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v5
 *
 * The bol.com API for Retailers.
 *
 * The version of the OpenAPI document: 5.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BolApi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use BolApi\Client\ApiException;
use BolApi\Client\Configuration;
use BolApi\Client\HeaderSelector;
use BolApi\Client\ObjectSerializer;

/**
 * InventoryApi Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InventoryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getInventory
     *
     * Get LVB/FBB inventory
     *
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     * @param  string[] $quantity Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. (optional)
     * @param  string $stock Filter inventory by stock level. (optional)
     * @param  string $state Filter inventory by stock type. (optional)
     * @param  string $query Filter inventory by EAN or product title. (optional)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BolApi\Client\Model\InventoryResponse|\BolApi\Client\Model\Problem
     */
    public function getInventory($page = 1, $quantity = null, $stock = null, $state = null, $query = null)
    {
        list($response) = $this->getInventoryWithHttpInfo($page, $quantity, $stock, $state, $query);
        return $response;
    }

    /**
     * Operation getInventoryWithHttpInfo
     *
     * Get LVB/FBB inventory
     *
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     * @param  string[] $quantity Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. (optional)
     * @param  string $stock Filter inventory by stock level. (optional)
     * @param  string $state Filter inventory by stock type. (optional)
     * @param  string $query Filter inventory by EAN or product title. (optional)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BolApi\Client\Model\InventoryResponse|\BolApi\Client\Model\Problem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInventoryWithHttpInfo($page = 1, $quantity = null, $stock = null, $state = null, $query = null)
    {
        $request = $this->getInventoryRequest($page, $quantity, $stock, $state, $query);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\BolApi\Client\Model\InventoryResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BolApi\Client\Model\InventoryResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\BolApi\Client\Model\Problem' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BolApi\Client\Model\Problem', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\BolApi\Client\Model\InventoryResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BolApi\Client\Model\InventoryResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BolApi\Client\Model\Problem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInventoryAsync
     *
     * Get LVB/FBB inventory
     *
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     * @param  string[] $quantity Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. (optional)
     * @param  string $stock Filter inventory by stock level. (optional)
     * @param  string $state Filter inventory by stock type. (optional)
     * @param  string $query Filter inventory by EAN or product title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryAsync($page = 1, $quantity = null, $stock = null, $state = null, $query = null)
    {
        return $this->getInventoryAsyncWithHttpInfo($page, $quantity, $stock, $state, $query)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInventoryAsyncWithHttpInfo
     *
     * Get LVB/FBB inventory
     *
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     * @param  string[] $quantity Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. (optional)
     * @param  string $stock Filter inventory by stock level. (optional)
     * @param  string $state Filter inventory by stock type. (optional)
     * @param  string $query Filter inventory by EAN or product title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryAsyncWithHttpInfo($page = 1, $quantity = null, $stock = null, $state = null, $query = null)
    {
        $returnType = '\BolApi\Client\Model\InventoryResponse';
        $request = $this->getInventoryRequest($page, $quantity, $stock, $state, $query);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getInventory'
     *
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     * @param  string[] $quantity Filter inventory by providing a range of quantity (min-range)-(max-range). Note that if no state query is submitted in the same request, then the quantity will be filtered on regularStock by default. (optional)
     * @param  string $stock Filter inventory by stock level. (optional)
     * @param  string $state Filter inventory by stock type. (optional)
     * @param  string $query Filter inventory by EAN or product title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInventoryRequest($page = 1, $quantity = null, $stock = null, $state = null, $query = null)
    {
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling InventoryApi.getInventory, must be bigger than or equal to 1.');
        }


        $resourcePath = '/retailer/inventory';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($page)) {
            $page = ObjectSerializer::serializeCollection($page, '', true);
        }
        if ($page !== null) {
            $queryParams['page'] = $page;
        }
        // query params
        if ($quantity !== null) {
            if('form' === 'form' && is_array($quantity)) {
                foreach($quantity as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['quantity'] = $quantity;
            }
        }
        // query params
        if (is_array($stock)) {
            $stock = ObjectSerializer::serializeCollection($stock, '', true);
        }
        if ($stock !== null) {
            $queryParams['stock'] = $stock;
        }
        // query params
        if (is_array($state)) {
            $state = ObjectSerializer::serializeCollection($state, '', true);
        }
        if ($state !== null) {
            $queryParams['state'] = $state;
        }
        // query params
        if (is_array($query)) {
            $query = ObjectSerializer::serializeCollection($query, '', true);
        }
        if ($query !== null) {
            $queryParams['query'] = $query;
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v5+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v5+json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
