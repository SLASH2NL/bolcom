<?php
/**
 * ShipmentsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v6
 *
 * The bol.com API for Retailers.
 *
 * The version of the OpenAPI document: 6.0
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
 * ShipmentsApi Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentsApi
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
     * Operation getShipment
     *
     * Get a shipment by shipment id
     *
     * @param  string $shipment_id The id of the shipment. (required)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BolApi\Client\Model\Shipment|\BolApi\Client\Model\Problem
     */
    public function getShipment($shipment_id)
    {
        list($response) = $this->getShipmentWithHttpInfo($shipment_id);
        return $response;
    }

    /**
     * Operation getShipmentWithHttpInfo
     *
     * Get a shipment by shipment id
     *
     * @param  string $shipment_id The id of the shipment. (required)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BolApi\Client\Model\Shipment|\BolApi\Client\Model\Problem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getShipmentWithHttpInfo($shipment_id)
    {
        $request = $this->getShipmentRequest($shipment_id);

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
                    if ('\BolApi\Client\Model\Shipment' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BolApi\Client\Model\Shipment', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
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

            $returnType = '\BolApi\Client\Model\Shipment';
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
                        '\BolApi\Client\Model\Shipment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
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
     * Operation getShipmentAsync
     *
     * Get a shipment by shipment id
     *
     * @param  string $shipment_id The id of the shipment. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShipmentAsync($shipment_id)
    {
        return $this->getShipmentAsyncWithHttpInfo($shipment_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getShipmentAsyncWithHttpInfo
     *
     * Get a shipment by shipment id
     *
     * @param  string $shipment_id The id of the shipment. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShipmentAsyncWithHttpInfo($shipment_id)
    {
        $returnType = '\BolApi\Client\Model\Shipment';
        $request = $this->getShipmentRequest($shipment_id);

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
     * Create request for operation 'getShipment'
     *
     * @param  string $shipment_id The id of the shipment. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getShipmentRequest($shipment_id)
    {
        // verify the required parameter 'shipment_id' is set
        if ($shipment_id === null || (is_array($shipment_id) && count($shipment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shipment_id when calling getShipment'
            );
        }

        $resourcePath = '/retailer/shipments/{shipment-id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($shipment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'shipment-id' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v6+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v6+json'],
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
     * Operation getShipments
     *
     * Get shipment list
     *
     * @param  int $page The page to get with a page size of 50. (optional, default to 1)
     * @param  string $fulfilment_method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). (optional, default to 'FBR')
     * @param  string $order_id The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. (optional)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BolApi\Client\Model\ShipmentsResponse|\BolApi\Client\Model\Problem
     */
    public function getShipments($page = 1, $fulfilment_method = 'FBR', $order_id = null)
    {
        list($response) = $this->getShipmentsWithHttpInfo($page, $fulfilment_method, $order_id);
        return $response;
    }

    /**
     * Operation getShipmentsWithHttpInfo
     *
     * Get shipment list
     *
     * @param  int $page The page to get with a page size of 50. (optional, default to 1)
     * @param  string $fulfilment_method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). (optional, default to 'FBR')
     * @param  string $order_id The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. (optional)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BolApi\Client\Model\ShipmentsResponse|\BolApi\Client\Model\Problem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getShipmentsWithHttpInfo($page = 1, $fulfilment_method = 'FBR', $order_id = null)
    {
        $request = $this->getShipmentsRequest($page, $fulfilment_method, $order_id);

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
                    if ('\BolApi\Client\Model\ShipmentsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BolApi\Client\Model\ShipmentsResponse', []),
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

            $returnType = '\BolApi\Client\Model\ShipmentsResponse';
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
                        '\BolApi\Client\Model\ShipmentsResponse',
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
     * Operation getShipmentsAsync
     *
     * Get shipment list
     *
     * @param  int $page The page to get with a page size of 50. (optional, default to 1)
     * @param  string $fulfilment_method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). (optional, default to 'FBR')
     * @param  string $order_id The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShipmentsAsync($page = 1, $fulfilment_method = 'FBR', $order_id = null)
    {
        return $this->getShipmentsAsyncWithHttpInfo($page, $fulfilment_method, $order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getShipmentsAsyncWithHttpInfo
     *
     * Get shipment list
     *
     * @param  int $page The page to get with a page size of 50. (optional, default to 1)
     * @param  string $fulfilment_method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). (optional, default to 'FBR')
     * @param  string $order_id The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShipmentsAsyncWithHttpInfo($page = 1, $fulfilment_method = 'FBR', $order_id = null)
    {
        $returnType = '\BolApi\Client\Model\ShipmentsResponse';
        $request = $this->getShipmentsRequest($page, $fulfilment_method, $order_id);

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
     * Create request for operation 'getShipments'
     *
     * @param  int $page The page to get with a page size of 50. (optional, default to 1)
     * @param  string $fulfilment_method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). (optional, default to 'FBR')
     * @param  string $order_id The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getShipmentsRequest($page = 1, $fulfilment_method = 'FBR', $order_id = null)
    {

        $resourcePath = '/retailer/shipments';
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
        if (is_array($fulfilment_method)) {
            $fulfilment_method = ObjectSerializer::serializeCollection($fulfilment_method, '', true);
        }
        if ($fulfilment_method !== null) {
            $queryParams['fulfilment-method'] = $fulfilment_method;
        }
        // query params
        if (is_array($order_id)) {
            $order_id = ObjectSerializer::serializeCollection($order_id, '', true);
        }
        if ($order_id !== null) {
            $queryParams['order-id'] = $order_id;
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v6+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v6+json'],
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
