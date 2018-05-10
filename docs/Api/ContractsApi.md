# Swagger\Client\ContractsApi

All URIs are relative to *https://esi.evetech.net/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdContracts**](ContractsApi.md#getCharactersCharacterIdContracts) | **GET** /characters/{character_id}/contracts/ | Get contracts
[**getCharactersCharacterIdContractsContractIdBids**](ContractsApi.md#getCharactersCharacterIdContractsContractIdBids) | **GET** /characters/{character_id}/contracts/{contract_id}/bids/ | Get contract bids
[**getCharactersCharacterIdContractsContractIdItems**](ContractsApi.md#getCharactersCharacterIdContractsContractIdItems) | **GET** /characters/{character_id}/contracts/{contract_id}/items/ | Get contract items
[**getCorporationsCorporationIdContracts**](ContractsApi.md#getCorporationsCorporationIdContracts) | **GET** /corporations/{corporation_id}/contracts/ | Get coporation contracts
[**getCorporationsCorporationIdContractsContractIdBids**](ContractsApi.md#getCorporationsCorporationIdContractsContractIdBids) | **GET** /corporations/{corporation_id}/contracts/{contract_id}/bids/ | Get corporation contract bids
[**getCorporationsCorporationIdContractsContractIdItems**](ContractsApi.md#getCorporationsCorporationIdContractsContractIdItems) | **GET** /corporations/{corporation_id}/contracts/{contract_id}/items/ | Get corporation contract items


# **getCharactersCharacterIdContracts**
> \Swagger\Client\Model\GetCharactersCharacterIdContracts200Ok[] getCharactersCharacterIdContracts($character_id, $datasource, $if_none_match, $page, $token, $user_agent, $x_user_agent)

Get contracts

Returns contracts available to a character, only if the character is issuer, acceptor or assignee. Only returns contracts no older than 30 days, or if the status is \"in_progress\".  --- Alternate route: `/dev/characters/{character_id}/contracts/`  Alternate route: `/legacy/characters/{character_id}/contracts/`  Alternate route: `/v1/characters/{character_id}/contracts/`  --- This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdContracts($character_id, $datasource, $if_none_match, $page, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCharactersCharacterIdContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\Swagger\Client\Model\GetCharactersCharacterIdContracts200Ok[]**](../Model/GetCharactersCharacterIdContracts200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdContractsContractIdBids**
> \Swagger\Client\Model\GetCharactersCharacterIdContractsContractIdBids200Ok[] getCharactersCharacterIdContractsContractIdBids($character_id, $contract_id, $datasource, $if_none_match, $token, $user_agent, $x_user_agent)

Get contract bids

Lists bids on a particular auction contract  --- Alternate route: `/dev/characters/{character_id}/contracts/{contract_id}/bids/`  Alternate route: `/legacy/characters/{character_id}/contracts/{contract_id}/bids/`  Alternate route: `/v1/characters/{character_id}/contracts/{contract_id}/bids/`  --- This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$contract_id = 56; // int | ID of a contract
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdContractsContractIdBids($character_id, $contract_id, $datasource, $if_none_match, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCharactersCharacterIdContractsContractIdBids: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **contract_id** | **int**| ID of a contract |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\Swagger\Client\Model\GetCharactersCharacterIdContractsContractIdBids200Ok[]**](../Model/GetCharactersCharacterIdContractsContractIdBids200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdContractsContractIdItems**
> \Swagger\Client\Model\GetCharactersCharacterIdContractsContractIdItems200Ok[] getCharactersCharacterIdContractsContractIdItems($character_id, $contract_id, $datasource, $if_none_match, $token, $user_agent, $x_user_agent)

Get contract items

Lists items of a particular contract  --- Alternate route: `/dev/characters/{character_id}/contracts/{contract_id}/items/`  Alternate route: `/legacy/characters/{character_id}/contracts/{contract_id}/items/`  Alternate route: `/v1/characters/{character_id}/contracts/{contract_id}/items/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$contract_id = 56; // int | ID of a contract
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdContractsContractIdItems($character_id, $contract_id, $datasource, $if_none_match, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCharactersCharacterIdContractsContractIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **contract_id** | **int**| ID of a contract |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\Swagger\Client\Model\GetCharactersCharacterIdContractsContractIdItems200Ok[]**](../Model/GetCharactersCharacterIdContractsContractIdItems200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdContracts**
> \Swagger\Client\Model\GetCorporationsCorporationIdContracts200Ok[] getCorporationsCorporationIdContracts($corporation_id, $datasource, $if_none_match, $page, $token, $user_agent, $x_user_agent)

Get coporation contracts

Returns contracts available to a coporation, only if the corporation is issuer, acceptor or assignee. Only returns contracts no older than 30 days, or if the status is \"in_progress\".  --- Alternate route: `/dev/corporations/{corporation_id}/contracts/`  Alternate route: `/legacy/corporations/{corporation_id}/contracts/`  Alternate route: `/v1/corporations/{corporation_id}/contracts/`  --- This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdContracts($corporation_id, $datasource, $if_none_match, $page, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCorporationsCorporationIdContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\Swagger\Client\Model\GetCorporationsCorporationIdContracts200Ok[]**](../Model/GetCorporationsCorporationIdContracts200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdContractsContractIdBids**
> \Swagger\Client\Model\GetCorporationsCorporationIdContractsContractIdBids200Ok[] getCorporationsCorporationIdContractsContractIdBids($contract_id, $corporation_id, $datasource, $if_none_match, $page, $token, $user_agent, $x_user_agent)

Get corporation contract bids

Lists bids on a particular auction contract  --- Alternate route: `/dev/corporations/{corporation_id}/contracts/{contract_id}/bids/`  Alternate route: `/legacy/corporations/{corporation_id}/contracts/{contract_id}/bids/`  Alternate route: `/v1/corporations/{corporation_id}/contracts/{contract_id}/bids/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 56; // int | ID of a contract
$corporation_id = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdContractsContractIdBids($contract_id, $corporation_id, $datasource, $if_none_match, $page, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCorporationsCorporationIdContractsContractIdBids: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **int**| ID of a contract |
 **corporation_id** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\Swagger\Client\Model\GetCorporationsCorporationIdContractsContractIdBids200Ok[]**](../Model/GetCorporationsCorporationIdContractsContractIdBids200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdContractsContractIdItems**
> \Swagger\Client\Model\GetCorporationsCorporationIdContractsContractIdItems200Ok[] getCorporationsCorporationIdContractsContractIdItems($contract_id, $corporation_id, $datasource, $if_none_match, $token, $user_agent, $x_user_agent)

Get corporation contract items

Lists items of a particular contract  --- Alternate route: `/dev/corporations/{corporation_id}/contracts/{contract_id}/items/`  Alternate route: `/legacy/corporations/{corporation_id}/contracts/{contract_id}/items/`  Alternate route: `/v1/corporations/{corporation_id}/contracts/{contract_id}/items/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 56; // int | ID of a contract
$corporation_id = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header
$user_agent = "user_agent_example"; // string | Client identifier, takes precedence over headers
$x_user_agent = "x_user_agent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdContractsContractIdItems($contract_id, $corporation_id, $datasource, $if_none_match, $token, $user_agent, $x_user_agent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCorporationsCorporationIdContractsContractIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **int**| ID of a contract |
 **corporation_id** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **user_agent** | **string**| Client identifier, takes precedence over headers | [optional]
 **x_user_agent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\Swagger\Client\Model\GetCorporationsCorporationIdContractsContractIdItems200Ok[]**](../Model/GetCorporationsCorporationIdContractsContractIdItems200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
