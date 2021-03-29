<?php
/**
 * ProcessStatusApi
 * PHP version 7.2
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v4
 *
 * The bol.com API for Retailers.
 *
 * The version of the OpenAPI document: 4.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
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
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use BolApi\Client\ApiException;
use BolApi\Client\Configuration;
use BolApi\Client\HeaderSelector;
use BolApi\Client\ObjectSerializer;

/**
 * ProcessStatusApi Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProcessStatusApi
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
    public function setHostIndex($hostIndex)
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
     * Operation getProcessStatus
     *
     * Get the status of an asynchronous process by id
     *
     * @param  int $process_status_id The id of the process status being requested. This id is supplied in every response to a PUT/POST/DELETE request on the other endpoints. (required)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BolApi\Client\Model\ProcessStatus|\BolApi\Client\Model\Problem
     */
    public function getProcessStatus($process_status_id)
    {
        list($response) = $this->getProcessStatusWithHttpInfo($process_status_id);
        return $response;
    }

    /**
     * Operation getProcessStatusWithHttpInfo
     *
     * Get the status of an asynchronous process by id
     *
     * @param  int $process_status_id The id of the process status being requested. This id is supplied in every response to a PUT/POST/DELETE request on the other endpoints. (required)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BolApi\Client\Model\ProcessStatus|\BolApi\Client\Model\Problem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProcessStatusWithHttpInfo($process_status_id)
    {
        $request = $this->getProcessStatusRequest($process_status_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\BolApi\Client\Model\ProcessStatus' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BolApi\Client\Model\ProcessStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\BolApi\Client\Model\Problem' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BolApi\Client\Model\Problem', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\BolApi\Client\Model\ProcessStatus';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\BolApi\Client\Model\ProcessStatus',
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
     * Operation getProcessStatusAsync
     *
     * Get the status of an asynchronous process by id
     *
     * @param  int $process_status_id The id of the process status being requested. This id is supplied in every response to a PUT/POST/DELETE request on the other endpoints. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProcessStatusAsync($process_status_id)
    {
        return $this->getProcessStatusAsyncWithHttpInfo($process_status_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProcessStatusAsyncWithHttpInfo
     *
     * Get the status of an asynchronous process by id
     *
     * @param  int $process_status_id The id of the process status being requested. This id is supplied in every response to a PUT/POST/DELETE request on the other endpoints. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProcessStatusAsyncWithHttpInfo($process_status_id)
    {
        $returnType = '\BolApi\Client\Model\ProcessStatus';
        $request = $this->getProcessStatusRequest($process_status_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProcessStatus'
     *
     * @param  int $process_status_id The id of the process status being requested. This id is supplied in every response to a PUT/POST/DELETE request on the other endpoints. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProcessStatusRequest($process_status_id)
    {
        // verify the required parameter 'process_status_id' is set
        if ($process_status_id === null || (is_array($process_status_id) && count($process_status_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $process_status_id when calling getProcessStatus'
            );
        }

        $resourcePath = '/retailer/process-status/{process-status-id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($process_status_id !== null) {
            $resourcePath = str_replace(
                '{' . 'process-status-id' . '}',
                ObjectSerializer::toPathValue($process_status_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v4+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v4+json'],
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProcessStatusBulk
     *
     * Gets the status of multiple asynchronous processes by an array of process status id's for a retailer
     *
     * @param  \BolApi\Client\Model\BulkProcessStatusRequest $body body (optional)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BolApi\Client\Model\ProcessStatusResponse|\BolApi\Client\Model\Problem
     */
    public function getProcessStatusBulk($body = null)
    {
        list($response) = $this->getProcessStatusBulkWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation getProcessStatusBulkWithHttpInfo
     *
     * Gets the status of multiple asynchronous processes by an array of process status id's for a retailer
     *
     * @param  \BolApi\Client\Model\BulkProcessStatusRequest $body (optional)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BolApi\Client\Model\ProcessStatusResponse|\BolApi\Client\Model\Problem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProcessStatusBulkWithHttpInfo($body = null)
    {
        $request = $this->getProcessStatusBulkRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\BolApi\Client\Model\ProcessStatusResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BolApi\Client\Model\ProcessStatusResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\BolApi\Client\Model\Problem' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BolApi\Client\Model\Problem', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\BolApi\Client\Model\ProcessStatusResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\BolApi\Client\Model\ProcessStatusResponse',
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
     * Operation getProcessStatusBulkAsync
     *
     * Gets the status of multiple asynchronous processes by an array of process status id's for a retailer
     *
     * @param  \BolApi\Client\Model\BulkProcessStatusRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProcessStatusBulkAsync($body = null)
    {
        return $this->getProcessStatusBulkAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProcessStatusBulkAsyncWithHttpInfo
     *
     * Gets the status of multiple asynchronous processes by an array of process status id's for a retailer
     *
     * @param  \BolApi\Client\Model\BulkProcessStatusRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProcessStatusBulkAsyncWithHttpInfo($body = null)
    {
        $returnType = '\BolApi\Client\Model\ProcessStatusResponse';
        $request = $this->getProcessStatusBulkRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProcessStatusBulk'
     *
     * @param  \BolApi\Client\Model\BulkProcessStatusRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProcessStatusBulkRequest($body = null)
    {

        $resourcePath = '/retailer/process-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v4+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v4+json'],
                ['application/vnd.retailer.v4+json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProcessStatusEntityId
     *
     * Gets the status of an asynchronous process by entity id and event type for a retailer
     *
     * @param  string $entity_id The entity id is not unique so you need to provide an event type. The entity id can either be order item id, transport id, return number or inbound reference. (required)
     * @param  string $event_type The event type can only be used in combination with the entity id. (required)
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BolApi\Client\Model\ProcessStatusResponse|\BolApi\Client\Model\Problem
     */
    public function getProcessStatusEntityId($entity_id, $event_type, $page = 1)
    {
        list($response) = $this->getProcessStatusEntityIdWithHttpInfo($entity_id, $event_type, $page);
        return $response;
    }

    /**
     * Operation getProcessStatusEntityIdWithHttpInfo
     *
     * Gets the status of an asynchronous process by entity id and event type for a retailer
     *
     * @param  string $entity_id The entity id is not unique so you need to provide an event type. The entity id can either be order item id, transport id, return number or inbound reference. (required)
     * @param  string $event_type The event type can only be used in combination with the entity id. (required)
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BolApi\Client\Model\ProcessStatusResponse|\BolApi\Client\Model\Problem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProcessStatusEntityIdWithHttpInfo($entity_id, $event_type, $page = 1)
    {
        $request = $this->getProcessStatusEntityIdRequest($entity_id, $event_type, $page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\BolApi\Client\Model\ProcessStatusResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BolApi\Client\Model\ProcessStatusResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\BolApi\Client\Model\Problem' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BolApi\Client\Model\Problem', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\BolApi\Client\Model\ProcessStatusResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\BolApi\Client\Model\ProcessStatusResponse',
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
     * Operation getProcessStatusEntityIdAsync
     *
     * Gets the status of an asynchronous process by entity id and event type for a retailer
     *
     * @param  string $entity_id The entity id is not unique so you need to provide an event type. The entity id can either be order item id, transport id, return number or inbound reference. (required)
     * @param  string $event_type The event type can only be used in combination with the entity id. (required)
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProcessStatusEntityIdAsync($entity_id, $event_type, $page = 1)
    {
        return $this->getProcessStatusEntityIdAsyncWithHttpInfo($entity_id, $event_type, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProcessStatusEntityIdAsyncWithHttpInfo
     *
     * Gets the status of an asynchronous process by entity id and event type for a retailer
     *
     * @param  string $entity_id The entity id is not unique so you need to provide an event type. The entity id can either be order item id, transport id, return number or inbound reference. (required)
     * @param  string $event_type The event type can only be used in combination with the entity id. (required)
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProcessStatusEntityIdAsyncWithHttpInfo($entity_id, $event_type, $page = 1)
    {
        $returnType = '\BolApi\Client\Model\ProcessStatusResponse';
        $request = $this->getProcessStatusEntityIdRequest($entity_id, $event_type, $page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProcessStatusEntityId'
     *
     * @param  string $entity_id The entity id is not unique so you need to provide an event type. The entity id can either be order item id, transport id, return number or inbound reference. (required)
     * @param  string $event_type The event type can only be used in combination with the entity id. (required)
     * @param  int $page The requested page number with a page size of 50 items. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProcessStatusEntityIdRequest($entity_id, $event_type, $page = 1)
    {
        // verify the required parameter 'entity_id' is set
        if ($entity_id === null || (is_array($entity_id) && count($entity_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $entity_id when calling getProcessStatusEntityId'
            );
        }
        // verify the required parameter 'event_type' is set
        if ($event_type === null || (is_array($event_type) && count($event_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $event_type when calling getProcessStatusEntityId'
            );
        }
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ProcessStatusApi.getProcessStatusEntityId, must be bigger than or equal to 1.');
        }


        $resourcePath = '/retailer/process-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($entity_id)) {
            $entity_id = ObjectSerializer::serializeCollection($entity_id, '', true);
        }
        if ($entity_id !== null) {
            $queryParams['entity-id'] = $entity_id;
        }
        // query params
        if (is_array($event_type)) {
            $event_type = ObjectSerializer::serializeCollection($event_type, '', true);
        }
        if ($event_type !== null) {
            $queryParams['event-type'] = $event_type;
        }
        // query params
        if (is_array($page)) {
            $page = ObjectSerializer::serializeCollection($page, '', true);
        }
        if ($page !== null) {
            $queryParams['page'] = $page;
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v4+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v4+json'],
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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
