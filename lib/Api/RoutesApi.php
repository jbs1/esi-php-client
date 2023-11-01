<?php
/**
 * RoutesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 1.19
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * RoutesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoutesApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getRouteOriginDestination
     *
     * Get route
     *
     * @param  int $destination destination solar system ID (required)
     * @param  int $origin origin solar system ID (required)
     * @param  int[] $avoid avoid solar system ID(s) (optional)
     * @param  int[][] $connections connected solar system pairs (optional)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $flag route security preference (optional, default to shortest)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int[]
     */
    public function getRouteOriginDestination($destination, $origin, $avoid = null, $connections = null, $datasource = 'tranquility', $flag = 'shortest', $if_none_match = null)
    {
        list($response) = $this->getRouteOriginDestinationWithHttpInfo($destination, $origin, $avoid, $connections, $datasource, $flag, $if_none_match);
        return $response;
    }

    /**
     * Operation getRouteOriginDestinationWithHttpInfo
     *
     * Get route
     *
     * @param  int $destination destination solar system ID (required)
     * @param  int $origin origin solar system ID (required)
     * @param  int[] $avoid avoid solar system ID(s) (optional)
     * @param  int[][] $connections connected solar system pairs (optional)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $flag route security preference (optional, default to shortest)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getRouteOriginDestinationWithHttpInfo($destination, $origin, $avoid = null, $connections = null, $datasource = 'tranquility', $flag = 'shortest', $if_none_match = null)
    {
        $returnType = 'int[]';
        $request = $this->getRouteOriginDestinationRequest($destination, $origin, $avoid, $connections, $datasource, $flag, $if_none_match);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
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
                        'int[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\BadRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\GetRouteOriginDestinationNotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorLimited',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ServiceUnavailable',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\GatewayTimeout',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRouteOriginDestinationAsync
     *
     * Get route
     *
     * @param  int $destination destination solar system ID (required)
     * @param  int $origin origin solar system ID (required)
     * @param  int[] $avoid avoid solar system ID(s) (optional)
     * @param  int[][] $connections connected solar system pairs (optional)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $flag route security preference (optional, default to shortest)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRouteOriginDestinationAsync($destination, $origin, $avoid = null, $connections = null, $datasource = 'tranquility', $flag = 'shortest', $if_none_match = null)
    {
        return $this->getRouteOriginDestinationAsyncWithHttpInfo($destination, $origin, $avoid, $connections, $datasource, $flag, $if_none_match)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRouteOriginDestinationAsyncWithHttpInfo
     *
     * Get route
     *
     * @param  int $destination destination solar system ID (required)
     * @param  int $origin origin solar system ID (required)
     * @param  int[] $avoid avoid solar system ID(s) (optional)
     * @param  int[][] $connections connected solar system pairs (optional)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $flag route security preference (optional, default to shortest)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRouteOriginDestinationAsyncWithHttpInfo($destination, $origin, $avoid = null, $connections = null, $datasource = 'tranquility', $flag = 'shortest', $if_none_match = null)
    {
        $returnType = 'int[]';
        $request = $this->getRouteOriginDestinationRequest($destination, $origin, $avoid, $connections, $datasource, $flag, $if_none_match);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'getRouteOriginDestination'
     *
     * @param  int $destination destination solar system ID (required)
     * @param  int $origin origin solar system ID (required)
     * @param  int[] $avoid avoid solar system ID(s) (optional)
     * @param  int[][] $connections connected solar system pairs (optional)
     * @param  string $datasource The server name you would like data from (optional, default to tranquility)
     * @param  string $flag route security preference (optional, default to shortest)
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRouteOriginDestinationRequest($destination, $origin, $avoid = null, $connections = null, $datasource = 'tranquility', $flag = 'shortest', $if_none_match = null)
    {
        // verify the required parameter 'destination' is set
        if ($destination === null || (is_array($destination) && count($destination) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $destination when calling getRouteOriginDestination'
            );
        }
        // verify the required parameter 'origin' is set
        if ($origin === null || (is_array($origin) && count($origin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $origin when calling getRouteOriginDestination'
            );
        }

        $resourcePath = '/route/{origin}/{destination}/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($avoid)) {
            $avoid = ObjectSerializer::serializeCollection($avoid, 'csv', true);
        }
        if ($avoid !== null) {
            $queryParams['avoid'] = ObjectSerializer::toQueryValue($avoid, 'int32');
        }
        // query params
        if (is_array($connections)) {
            $connections = ObjectSerializer::serializeCollection($connections, 'csv', true);
        }
        if ($connections !== null) {
            $queryParams['connections'] = ObjectSerializer::toQueryValue($connections, 'int32');
        }
        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = ObjectSerializer::toQueryValue($datasource, null);
        }
        // query params
        if ($flag !== null) {
            $queryParams['flag'] = ObjectSerializer::toQueryValue($flag, null);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = ObjectSerializer::toHeaderValue($if_none_match);
        }

        // path params
        if ($destination !== null) {
            $resourcePath = str_replace(
                '{' . 'destination' . '}',
                ObjectSerializer::toPathValue($destination),
                $resourcePath
            );
        }
        // path params
        if ($origin !== null) {
            $resourcePath = str_replace(
                '{' . 'origin' . '}',
                ObjectSerializer::toPathValue($origin),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
