# OpenAPI\Client\PhoneOutboundRulesApi

All URIs are relative to https://rest.circuitid.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPhoneOutboundRule()**](PhoneOutboundRulesApi.md#createPhoneOutboundRule) | **POST** /phoneoutboundrules | Create a new object |
| [**findPhoneOutboundRules()**](PhoneOutboundRulesApi.md#findPhoneOutboundRules) | **GET** /phoneoutboundrules | Find multiple objects |
| [**getPhoneOutboundRule()**](PhoneOutboundRulesApi.md#getPhoneOutboundRule) | **GET** /phoneoutboundrules/{id} | Get object by id |
| [**patchPhoneOutboundRule()**](PhoneOutboundRulesApi.md#patchPhoneOutboundRule) | **PATCH** /phoneoutboundrules/{id} | Patch object&#39;s data |
| [**removePhoneOutboundRule()**](PhoneOutboundRulesApi.md#removePhoneOutboundRule) | **DELETE** /phoneoutboundrules/{id} | Delete object by id |


## `createPhoneOutboundRule()`

```php
createPhoneOutboundRule($phoneoutboundrulesCreateOrPatch): \OpenAPI\Client\CircuitID\GetPhoneOutboundRule200Response
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


$apiInstance = new OpenAPI\Client\Api\PhoneOutboundRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneoutboundrulesCreateOrPatch = new \OpenAPI\Client\CircuitID\PhoneoutboundrulesCreateOrPatch(); // \OpenAPI\Client\CircuitID\PhoneoutboundrulesCreateOrPatch | The JSON object that will be posted to the REST API endpoint.

try {
    $result = $apiInstance->createPhoneOutboundRule($phoneoutboundrulesCreateOrPatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneOutboundRulesApi->createPhoneOutboundRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phoneoutboundrulesCreateOrPatch** | [**\OpenAPI\Client\CircuitID\PhoneoutboundrulesCreateOrPatch**](../Model/PhoneoutboundrulesCreateOrPatch.md)| The JSON object that will be posted to the REST API endpoint. | |

### Return type

[**\OpenAPI\Client\CircuitID\GetPhoneOutboundRule200Response**](../Model/GetPhoneOutboundRule200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findPhoneOutboundRules()`

```php
findPhoneOutboundRules($search, $limit, $skip, $sort, $select, $or, $and): \OpenAPI\Client\CircuitID\FindPhoneOutboundRules200Response
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


$apiInstance = new OpenAPI\Client\Api\PhoneOutboundRulesApi(
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
    $result = $apiInstance->findPhoneOutboundRules($search, $limit, $skip, $sort, $select, $or, $and);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneOutboundRulesApi->findPhoneOutboundRules: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\CircuitID\FindPhoneOutboundRules200Response**](../Model/FindPhoneOutboundRules200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhoneOutboundRule()`

```php
getPhoneOutboundRule($id): \OpenAPI\Client\CircuitID\GetPhoneOutboundRule200Response
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


$apiInstance = new OpenAPI\Client\Api\PhoneOutboundRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ObjectId (unique 12 bytes ID) of record you would like to GET.

try {
    $result = $apiInstance->getPhoneOutboundRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneOutboundRulesApi->getPhoneOutboundRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ObjectId (unique 12 bytes ID) of record you would like to GET. | |

### Return type

[**\OpenAPI\Client\CircuitID\GetPhoneOutboundRule200Response**](../Model/GetPhoneOutboundRule200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPhoneOutboundRule()`

```php
patchPhoneOutboundRule($id, $phoneoutboundrulesCreateOrPatch): \OpenAPI\Client\CircuitID\GetPhoneOutboundRule200Response
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


$apiInstance = new OpenAPI\Client\Api\PhoneOutboundRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ObjectId (unique 12 bytes ID) of record you would like to GET.
$phoneoutboundrulesCreateOrPatch = new \OpenAPI\Client\CircuitID\PhoneoutboundrulesCreateOrPatch(); // \OpenAPI\Client\CircuitID\PhoneoutboundrulesCreateOrPatch | The request data.

try {
    $result = $apiInstance->patchPhoneOutboundRule($id, $phoneoutboundrulesCreateOrPatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneOutboundRulesApi->patchPhoneOutboundRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ObjectId (unique 12 bytes ID) of record you would like to GET. | |
| **phoneoutboundrulesCreateOrPatch** | [**\OpenAPI\Client\CircuitID\PhoneoutboundrulesCreateOrPatch**](../Model/PhoneoutboundrulesCreateOrPatch.md)| The request data. | |

### Return type

[**\OpenAPI\Client\CircuitID\GetPhoneOutboundRule200Response**](../Model/GetPhoneOutboundRule200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePhoneOutboundRule()`

```php
removePhoneOutboundRule($id): \OpenAPI\Client\CircuitID\GetPhoneOutboundRule200Response
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


$apiInstance = new OpenAPI\Client\Api\PhoneOutboundRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ObjectId (unique 12 bytes ID) of record you would like to GET.

try {
    $result = $apiInstance->removePhoneOutboundRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneOutboundRulesApi->removePhoneOutboundRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ObjectId (unique 12 bytes ID) of record you would like to GET. | |

### Return type

[**\OpenAPI\Client\CircuitID\GetPhoneOutboundRule200Response**](../Model/GetPhoneOutboundRule200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
