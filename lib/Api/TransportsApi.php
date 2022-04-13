<?php
/**
 * TransportsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v7 - Retailer API
 *
 * The bol.com API for retailers.
 *
 * The version of the OpenAPI document: 7.x
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
 * TransportsApi Class Doc Comment
 *
 * @category Class
 * @package  BolApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransportsApi
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
     * Operation addTransportInformationByTransportId
     *
     * Add transport information by transport id
     *
     * @param  string $transport_id The transport id. (required)
     * @param  \BolApi\Client\Model\ChangeTransportRequest $body The change transport requested by the user. (optional)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BolApi\Client\Model\ProcessStatus|\BolApi\Client\Model\Problem
     */
    public function addTransportInformationByTransportId($transport_id, $body = null)
    {
        list($response) = $this->addTransportInformationByTransportIdWithHttpInfo($transport_id, $body);
        return $response;
    }

    /**
     * Operation addTransportInformationByTransportIdWithHttpInfo
     *
     * Add transport information by transport id
     *
     * @param  string $transport_id The transport id. (required)
     * @param  \BolApi\Client\Model\ChangeTransportRequest $body The change transport requested by the user. (optional)
     *
     * @throws \BolApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BolApi\Client\Model\ProcessStatus|\BolApi\Client\Model\Problem, HTTP status code, HTTP response headers (array of strings)
     */
    public function addTransportInformationByTransportIdWithHttpInfo($transport_id, $body = null)
    {
        $request = $this->addTransportInformationByTransportIdRequest($transport_id, $body);

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
                case 202:
                    if ('\BolApi\Client\Model\ProcessStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BolApi\Client\Model\ProcessStatus', []),
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

            $returnType = '\BolApi\Client\Model\ProcessStatus';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BolApi\Client\Model\ProcessStatus',
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
     * Operation addTransportInformationByTransportIdAsync
     *
     * Add transport information by transport id
     *
     * @param  string $transport_id The transport id. (required)
     * @param  \BolApi\Client\Model\ChangeTransportRequest $body The change transport requested by the user. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addTransportInformationByTransportIdAsync($transport_id, $body = null)
    {
        return $this->addTransportInformationByTransportIdAsyncWithHttpInfo($transport_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addTransportInformationByTransportIdAsyncWithHttpInfo
     *
     * Add transport information by transport id
     *
     * @param  string $transport_id The transport id. (required)
     * @param  \BolApi\Client\Model\ChangeTransportRequest $body The change transport requested by the user. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addTransportInformationByTransportIdAsyncWithHttpInfo($transport_id, $body = null)
    {
        $returnType = '\BolApi\Client\Model\ProcessStatus';
        $request = $this->addTransportInformationByTransportIdRequest($transport_id, $body);

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
     * Create request for operation 'addTransportInformationByTransportId'
     *
     * @param  string $transport_id The transport id. (required)
     * @param  \BolApi\Client\Model\ChangeTransportRequest $body The change transport requested by the user. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addTransportInformationByTransportIdRequest($transport_id, $body = null)
    {
        // verify the required parameter 'transport_id' is set
        if ($transport_id === null || (is_array($transport_id) && count($transport_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transport_id when calling addTransportInformationByTransportId'
            );
        }

        $resourcePath = '/retailer/transports/{transport-id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($transport_id !== null) {
            $resourcePath = str_replace(
                '{' . 'transport-id' . '}',
                ObjectSerializer::toPathValue($transport_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v7+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v7+json'],
                ['application/vnd.retailer.v7+json']
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
            'PUT',
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
