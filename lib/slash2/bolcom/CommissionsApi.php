<?php
/**
 * CommissionsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Bolcom\Client
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

namespace Bolcom\Client\slash2/bolcom;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Bolcom\Client\ApiException;
use Bolcom\Client\Configuration;
use Bolcom\Client\HeaderSelector;
use Bolcom\Client\ObjectSerializer;

/**
 * CommissionsApi Class Doc Comment
 *
 * @category Class
 * @package  Bolcom\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CommissionsApi
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
     * Operation getCommission
     *
     * Get all commissions and reductions by EAN per single EAN
     *
     * @param  string $ean The EAN number associated with this product. (required)
     * @param  float $unit_price The price of the product with a period as a decimal separator. The price should always have two decimals precision. (required)
     * @param  string $condition The condition of the offer. (optional, default to 'NEW')
     *
     * @throws \Bolcom\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bolcom\Client\Model\Commission|\Bolcom\Client\Model\Problem|\Bolcom\Client\Model\Problem
     */
    public function getCommission($ean, $unit_price, $condition = 'NEW')
    {
        list($response) = $this->getCommissionWithHttpInfo($ean, $unit_price, $condition);
        return $response;
    }

    /**
     * Operation getCommissionWithHttpInfo
     *
     * Get all commissions and reductions by EAN per single EAN
     *
     * @param  string $ean The EAN number associated with this product. (required)
     * @param  float $unit_price The price of the product with a period as a decimal separator. The price should always have two decimals precision. (required)
     * @param  string $condition The condition of the offer. (optional, default to 'NEW')
     *
     * @throws \Bolcom\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bolcom\Client\Model\Commission|\Bolcom\Client\Model\Problem|\Bolcom\Client\Model\Problem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCommissionWithHttpInfo($ean, $unit_price, $condition = 'NEW')
    {
        $request = $this->getCommissionRequest($ean, $unit_price, $condition);

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
                    if ('\Bolcom\Client\Model\Commission' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bolcom\Client\Model\Commission', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Bolcom\Client\Model\Problem' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bolcom\Client\Model\Problem', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Bolcom\Client\Model\Problem' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bolcom\Client\Model\Problem', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bolcom\Client\Model\Commission';
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
                        '\Bolcom\Client\Model\Commission',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bolcom\Client\Model\Problem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bolcom\Client\Model\Problem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCommissionAsync
     *
     * Get all commissions and reductions by EAN per single EAN
     *
     * @param  string $ean The EAN number associated with this product. (required)
     * @param  float $unit_price The price of the product with a period as a decimal separator. The price should always have two decimals precision. (required)
     * @param  string $condition The condition of the offer. (optional, default to 'NEW')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCommissionAsync($ean, $unit_price, $condition = 'NEW')
    {
        return $this->getCommissionAsyncWithHttpInfo($ean, $unit_price, $condition)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCommissionAsyncWithHttpInfo
     *
     * Get all commissions and reductions by EAN per single EAN
     *
     * @param  string $ean The EAN number associated with this product. (required)
     * @param  float $unit_price The price of the product with a period as a decimal separator. The price should always have two decimals precision. (required)
     * @param  string $condition The condition of the offer. (optional, default to 'NEW')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCommissionAsyncWithHttpInfo($ean, $unit_price, $condition = 'NEW')
    {
        $returnType = '\Bolcom\Client\Model\Commission';
        $request = $this->getCommissionRequest($ean, $unit_price, $condition);

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
     * Create request for operation 'getCommission'
     *
     * @param  string $ean The EAN number associated with this product. (required)
     * @param  float $unit_price The price of the product with a period as a decimal separator. The price should always have two decimals precision. (required)
     * @param  string $condition The condition of the offer. (optional, default to 'NEW')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCommissionRequest($ean, $unit_price, $condition = 'NEW')
    {
        // verify the required parameter 'ean' is set
        if ($ean === null || (is_array($ean) && count($ean) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ean when calling getCommission'
            );
        }
        // verify the required parameter 'unit_price' is set
        if ($unit_price === null || (is_array($unit_price) && count($unit_price) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $unit_price when calling getCommission'
            );
        }

        $resourcePath = '/retailer/commission/{ean}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($condition)) {
            $condition = ObjectSerializer::serializeCollection($condition, '', true);
        }
        if ($condition !== null) {
            $queryParams['condition'] = $condition;
        }
        // query params
        if (is_array($unit_price)) {
            $unit_price = ObjectSerializer::serializeCollection($unit_price, '', true);
        }
        if ($unit_price !== null) {
            $queryParams['unit-price'] = $unit_price;
        }


        // path params
        if ($ean !== null) {
            $resourcePath = str_replace(
                '{' . 'ean' . '}',
                ObjectSerializer::toPathValue($ean),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v4+json', 'application/vnd.retailer.v4+xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v4+json', 'application/vnd.retailer.v4+xml'],
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
     * Operation getCommissions
     *
     * Get all commissions and reductions by EAN in bulk
     *
     * @param  \Bolcom\Client\Model\BulkCommissionRequest $body body (optional)
     *
     * @throws \Bolcom\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bolcom\Client\Model\BulkCommissionResponse|\Bolcom\Client\Model\Problem|\Bolcom\Client\Model\Problem
     */
    public function getCommissions($body = null)
    {
        list($response) = $this->getCommissionsWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation getCommissionsWithHttpInfo
     *
     * Get all commissions and reductions by EAN in bulk
     *
     * @param  \Bolcom\Client\Model\BulkCommissionRequest $body (optional)
     *
     * @throws \Bolcom\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bolcom\Client\Model\BulkCommissionResponse|\Bolcom\Client\Model\Problem|\Bolcom\Client\Model\Problem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCommissionsWithHttpInfo($body = null)
    {
        $request = $this->getCommissionsRequest($body);

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
                    if ('\Bolcom\Client\Model\BulkCommissionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bolcom\Client\Model\BulkCommissionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Bolcom\Client\Model\Problem' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bolcom\Client\Model\Problem', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Bolcom\Client\Model\Problem' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bolcom\Client\Model\Problem', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bolcom\Client\Model\BulkCommissionResponse';
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
                        '\Bolcom\Client\Model\BulkCommissionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bolcom\Client\Model\Problem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bolcom\Client\Model\Problem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCommissionsAsync
     *
     * Get all commissions and reductions by EAN in bulk
     *
     * @param  \Bolcom\Client\Model\BulkCommissionRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCommissionsAsync($body = null)
    {
        return $this->getCommissionsAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCommissionsAsyncWithHttpInfo
     *
     * Get all commissions and reductions by EAN in bulk
     *
     * @param  \Bolcom\Client\Model\BulkCommissionRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCommissionsAsyncWithHttpInfo($body = null)
    {
        $returnType = '\Bolcom\Client\Model\BulkCommissionResponse';
        $request = $this->getCommissionsRequest($body);

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
     * Create request for operation 'getCommissions'
     *
     * @param  \Bolcom\Client\Model\BulkCommissionRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCommissionsRequest($body = null)
    {

        $resourcePath = '/retailer/commission';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v4+json', 'application/vnd.retailer.v4+xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v4+json', 'application/vnd.retailer.v4+xml'],
                ['application/vnd.retailer.v4+json', 'application/vnd.retailer.v4+xml']
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
