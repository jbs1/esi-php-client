# Swagger\Client\OpportunitiesApi

All URIs are relative to *https://esi.evetech.net/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdOpportunities**](OpportunitiesApi.md#getcharacterscharacteridopportunities) | **GET** /characters/{character_id}/opportunities/ | Get a character&#x27;s completed tasks
[**getOpportunitiesGroups**](OpportunitiesApi.md#getopportunitiesgroups) | **GET** /opportunities/groups/ | Get opportunities groups
[**getOpportunitiesGroupsGroupId**](OpportunitiesApi.md#getopportunitiesgroupsgroupid) | **GET** /opportunities/groups/{group_id}/ | Get opportunities group
[**getOpportunitiesTasks**](OpportunitiesApi.md#getopportunitiestasks) | **GET** /opportunities/tasks/ | Get opportunities tasks
[**getOpportunitiesTasksTaskId**](OpportunitiesApi.md#getopportunitiestaskstaskid) | **GET** /opportunities/tasks/{task_id}/ | Get opportunities task

# **getCharactersCharacterIdOpportunities**
> \Swagger\Client\Model\GetCharactersCharacterIdOpportunities200Ok[] getCharactersCharacterIdOpportunities($character_id, $datasource, $if_none_match, $token)

Get a character's completed tasks

Return a list of tasks finished by a character  --- Alternate route: `/dev/characters/{character_id}/opportunities/`  Alternate route: `/legacy/characters/{character_id}/opportunities/`  Alternate route: `/v1/characters/{character_id}/opportunities/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdOpportunities($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getCharactersCharacterIdOpportunities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Model\GetCharactersCharacterIdOpportunities200Ok[]**](../Model/GetCharactersCharacterIdOpportunities200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunitiesGroups**
> int[] getOpportunitiesGroups($datasource, $if_none_match)

Get opportunities groups

Return a list of opportunities groups  --- Alternate route: `/dev/opportunities/groups/`  Alternate route: `/legacy/opportunities/groups/`  Alternate route: `/v1/opportunities/groups/`  --- This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getOpportunitiesGroups($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunitiesGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunitiesGroupsGroupId**
> \Swagger\Client\Model\GetOpportunitiesGroupsGroupIdOk getOpportunitiesGroupsGroupId($group_id, $accept_language, $datasource, $if_none_match, $language)

Get opportunities group

Return information of an opportunities group  --- Alternate route: `/dev/opportunities/groups/{group_id}/`  Alternate route: `/legacy/opportunities/groups/{group_id}/`  Alternate route: `/v1/opportunities/groups/{group_id}/`  --- This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | ID of an opportunities group
$accept_language = "en"; // string | Language to use in the response
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = "en"; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getOpportunitiesGroupsGroupId($group_id, $accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunitiesGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of an opportunities group |
 **accept_language** | **string**| Language to use in the response | [optional] [default to en]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to en]

### Return type

[**\Swagger\Client\Model\GetOpportunitiesGroupsGroupIdOk**](../Model/GetOpportunitiesGroupsGroupIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunitiesTasks**
> int[] getOpportunitiesTasks($datasource, $if_none_match)

Get opportunities tasks

Return a list of opportunities tasks  --- Alternate route: `/dev/opportunities/tasks/`  Alternate route: `/legacy/opportunities/tasks/`  Alternate route: `/v1/opportunities/tasks/`  --- This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getOpportunitiesTasks($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunitiesTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunitiesTasksTaskId**
> \Swagger\Client\Model\GetOpportunitiesTasksTaskIdOk getOpportunitiesTasksTaskId($task_id, $datasource, $if_none_match)

Get opportunities task

Return information of an opportunities task  --- Alternate route: `/dev/opportunities/tasks/{task_id}/`  Alternate route: `/legacy/opportunities/tasks/{task_id}/`  Alternate route: `/v1/opportunities/tasks/{task_id}/`  --- This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = 56; // int | ID of an opportunities task
$datasource = "tranquility"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getOpportunitiesTasksTaskId($task_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunitiesTasksTaskId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID of an opportunities task |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Model\GetOpportunitiesTasksTaskIdOk**](../Model/GetOpportunitiesTasksTaskIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

