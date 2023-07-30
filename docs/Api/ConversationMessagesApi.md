# OpenAPI\Client\ConversationMessagesApi

All URIs are relative to https://cloud9.circuitid.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConversationMessage()**](ConversationMessagesApi.md#createConversationMessage) | **POST** /conversationmessages | Create a new object |
| [**findConversationMessages()**](ConversationMessagesApi.md#findConversationMessages) | **GET** /conversationmessages | Find multiple objects |
| [**getConversationMessage()**](ConversationMessagesApi.md#getConversationMessage) | **GET** /conversationmessages/{id} | Get object by id |
| [**patchConversationMessage()**](ConversationMessagesApi.md#patchConversationMessage) | **PATCH** /conversationmessages/{id} | Patch object&#39;s data |
| [**removeConversationMessage()**](ConversationMessagesApi.md#removeConversationMessage) | **DELETE** /conversationmessages/{id} | Delete object by id |


## `createConversationMessage()`

```php
createConversationMessage($createconversationmessages): \OpenAPI\Client\CircuitID\GetConversationMessage200Response
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


$apiInstance = new OpenAPI\Client\Api\ConversationMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createconversationmessages = new \OpenAPI\Client\CircuitID\Createconversationmessages(); // \OpenAPI\Client\CircuitID\Createconversationmessages | The JSON object that will be posted to the REST API endpoint.

try {
    $result = $apiInstance->createConversationMessage($createconversationmessages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationMessagesApi->createConversationMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createconversationmessages** | [**\OpenAPI\Client\CircuitID\Createconversationmessages**](../Model/Createconversationmessages.md)| The JSON object that will be posted to the REST API endpoint. | |

### Return type

[**\OpenAPI\Client\CircuitID\GetConversationMessage200Response**](../Model/GetConversationMessage200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findConversationMessages()`

```php
findConversationMessages($search, $limit, $skip, $sort, $select, $or, $and): \OpenAPI\Client\CircuitID\FindConversationMessages200Response
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


$apiInstance = new OpenAPI\Client\Api\ConversationMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Filter results by the specified value.
$limit = 56; // int | $limit will return only the number of results you specify.
$skip = 56; // int | $skip will skip the specified number of results.
$sort = array('key' => new \stdClass); // object | $sort will sort based on the object you provide. It can contain a list of properties by which to sort mapped to the order (1 ascending, -1 descending).
$select = array('select_example'); // string[] | $select allows to pick which fields to include in the result.
$or = array(new \stdClass); // object[] | Find all records that match any of the given criteria.
$and = array(new \stdClass); // object[] | Find all records that match all of the given criteria.

try {
    $result = $apiInstance->findConversationMessages($search, $limit, $skip, $sort, $select, $or, $and);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationMessagesApi->findConversationMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Filter results by the specified value. | [optional] |
| **limit** | **int**| $limit will return only the number of results you specify. | [optional] |
| **skip** | **int**| $skip will skip the specified number of results. | [optional] |
| **sort** | [**object**](../Model/.md)| $sort will sort based on the object you provide. It can contain a list of properties by which to sort mapped to the order (1 ascending, -1 descending). | [optional] |
| **select** | [**string[]**](../Model/string.md)| $select allows to pick which fields to include in the result. | [optional] |
| **or** | [**object[]**](../Model/object.md)| Find all records that match any of the given criteria. | [optional] |
| **and** | [**object[]**](../Model/object.md)| Find all records that match all of the given criteria. | [optional] |

### Return type

[**\OpenAPI\Client\CircuitID\FindConversationMessages200Response**](../Model/FindConversationMessages200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationMessage()`

```php
getConversationMessage($id): \OpenAPI\Client\CircuitID\GetConversationMessage200Response
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


$apiInstance = new OpenAPI\Client\Api\ConversationMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ObjectId (unique 12 bytes ID) of record you would like to GET.

try {
    $result = $apiInstance->getConversationMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationMessagesApi->getConversationMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ObjectId (unique 12 bytes ID) of record you would like to GET. | |

### Return type

[**\OpenAPI\Client\CircuitID\GetConversationMessage200Response**](../Model/GetConversationMessage200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchConversationMessage()`

```php
patchConversationMessage($id, $conversationmessages): \OpenAPI\Client\CircuitID\GetConversationMessage200Response
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


$apiInstance = new OpenAPI\Client\Api\ConversationMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ObjectId (unique 12 bytes ID) of record you would like to GET.
$conversationmessages = new \OpenAPI\Client\CircuitID\Conversationmessages(); // \OpenAPI\Client\CircuitID\Conversationmessages | The request data.

try {
    $result = $apiInstance->patchConversationMessage($id, $conversationmessages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationMessagesApi->patchConversationMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ObjectId (unique 12 bytes ID) of record you would like to GET. | |
| **conversationmessages** | [**\OpenAPI\Client\CircuitID\Conversationmessages**](../Model/Conversationmessages.md)| The request data. | |

### Return type

[**\OpenAPI\Client\CircuitID\GetConversationMessage200Response**](../Model/GetConversationMessage200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeConversationMessage()`

```php
removeConversationMessage($id): \OpenAPI\Client\CircuitID\GetConversationMessage200Response
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


$apiInstance = new OpenAPI\Client\Api\ConversationMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ObjectId (unique 12 bytes ID) of record you would like to GET.

try {
    $result = $apiInstance->removeConversationMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationMessagesApi->removeConversationMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ObjectId (unique 12 bytes ID) of record you would like to GET. | |

### Return type

[**\OpenAPI\Client\CircuitID\GetConversationMessage200Response**](../Model/GetConversationMessage200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
