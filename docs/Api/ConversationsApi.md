# OpenAPI\Client\ConversationsApi

All URIs are relative to https://cloud9.circuitid.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConversation()**](ConversationsApi.md#createConversation) | **POST** /conversations | Create a new object |
| [**findConversations()**](ConversationsApi.md#findConversations) | **GET** /conversations | Find multiple objects |
| [**getConversation()**](ConversationsApi.md#getConversation) | **GET** /conversations/{id} | Get object by id |
| [**patchConversation()**](ConversationsApi.md#patchConversation) | **PATCH** /conversations/{id} | Patch object&#39;s data |
| [**removeConversation()**](ConversationsApi.md#removeConversation) | **DELETE** /conversations/{id} | Delete object by id |


## `createConversation()`

```php
createConversation($conversations): mixed
```

Create a new object

Add a new object to the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversations = new \OpenAPI\Client\CircuitID\Conversations(); // \OpenAPI\Client\CircuitID\Conversations | The JSON object that will be posted to the REST API endpoint.

try {
    $result = $apiInstance->createConversation($conversations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->createConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversations** | [**\OpenAPI\Client\CircuitID\Conversations**](../Model/Conversations.md)| The JSON object that will be posted to the REST API endpoint. | |

### Return type

**mixed**

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findConversations()`

```php
findConversations($search, $limit, $skip, $sort, $select, $or, $and): mixed
```

Find multiple objects

Search and retrieve multiple objects simultaneously.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = NULL; // mixed | Filter results by the specified value.
$limit = NULL; // mixed | $limit will return only the number of results you specify.
$skip = NULL; // mixed | $skip will skip the specified number of results.
$sort = NULL; // mixed | $sort will sort based on the object you provide. It can contain a list of properties by which to sort mapped to the order (1 ascending, -1 descending).
$select = NULL; // mixed | $select allows to pick which fields to include in the result.
$or = NULL; // mixed | Find all records that match any of the given criteria.
$and = NULL; // mixed | Find all records that match all of the given criteria.

try {
    $result = $apiInstance->findConversations($search, $limit, $skip, $sort, $select, $or, $and);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->findConversations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | [**mixed**](../Model/.md)| Filter results by the specified value. | [optional] |
| **limit** | [**mixed**](../Model/.md)| $limit will return only the number of results you specify. | [optional] |
| **skip** | [**mixed**](../Model/.md)| $skip will skip the specified number of results. | [optional] |
| **sort** | [**mixed**](../Model/.md)| $sort will sort based on the object you provide. It can contain a list of properties by which to sort mapped to the order (1 ascending, -1 descending). | [optional] |
| **select** | [**mixed**](../Model/.md)| $select allows to pick which fields to include in the result. | [optional] |
| **or** | [**mixed**](../Model/.md)| Find all records that match any of the given criteria. | [optional] |
| **and** | [**mixed**](../Model/.md)| Find all records that match all of the given criteria. | [optional] |

### Return type

**mixed**

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversation()`

```php
getConversation($id): mixed
```

Get object by id

Get an object from the REST API Endpoint by its unique id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = NULL; // mixed | The ObjectId (unique 12 bytes ID) of record you would like to GET.

try {
    $result = $apiInstance->getConversation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| The ObjectId (unique 12 bytes ID) of record you would like to GET. | |

### Return type

**mixed**

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchConversation()`

```php
patchConversation($id, $conversations): mixed
```

Patch object's data

Make updates to specific fields within the record without replacing the entire dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = NULL; // mixed | The ObjectId (unique 12 bytes ID) of record you would like to GET.
$conversations = new \OpenAPI\Client\CircuitID\Conversations(); // \OpenAPI\Client\CircuitID\Conversations | The request data.

try {
    $result = $apiInstance->patchConversation($id, $conversations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| The ObjectId (unique 12 bytes ID) of record you would like to GET. | |
| **conversations** | [**\OpenAPI\Client\CircuitID\Conversations**](../Model/Conversations.md)| The request data. | |

### Return type

**mixed**

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeConversation()`

```php
removeConversation($id): mixed
```

Delete object by id

Delete an object by id, removing it from the service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = NULL; // mixed | The ObjectId (unique 12 bytes ID) of record you would like to GET.

try {
    $result = $apiInstance->removeConversation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->removeConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| The ObjectId (unique 12 bytes ID) of record you would like to GET. | |

### Return type

**mixed**

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
