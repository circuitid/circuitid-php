# OpenAPI\Client\MessageBrandsApi

All URIs are relative to https://cloud9.circuitid.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMessageBrand()**](MessageBrandsApi.md#createMessageBrand) | **POST** /messagebrands | Create a new object |
| [**findMessageBrands()**](MessageBrandsApi.md#findMessageBrands) | **GET** /messagebrands | Find multiple objects |
| [**getMessageBrand()**](MessageBrandsApi.md#getMessageBrand) | **GET** /messagebrands/{id} | Get object by id |


## `createMessageBrand()`

```php
createMessageBrand($messagebrandsCreateOrPatch): \OpenAPI\Client\CircuitID\GetMessageBrand200Response
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


$apiInstance = new OpenAPI\Client\Api\MessageBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$messagebrandsCreateOrPatch = new \OpenAPI\Client\CircuitID\MessagebrandsCreateOrPatch(); // \OpenAPI\Client\CircuitID\MessagebrandsCreateOrPatch | The JSON object that will be posted to the REST API endpoint.

try {
    $result = $apiInstance->createMessageBrand($messagebrandsCreateOrPatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageBrandsApi->createMessageBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **messagebrandsCreateOrPatch** | [**\OpenAPI\Client\CircuitID\MessagebrandsCreateOrPatch**](../Model/MessagebrandsCreateOrPatch.md)| The JSON object that will be posted to the REST API endpoint. | |

### Return type

[**\OpenAPI\Client\CircuitID\GetMessageBrand200Response**](../Model/GetMessageBrand200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findMessageBrands()`

```php
findMessageBrands($search, $limit, $skip, $sort, $select, $or, $and): \OpenAPI\Client\CircuitID\FindMessageBrands200Response
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


$apiInstance = new OpenAPI\Client\Api\MessageBrandsApi(
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
    $result = $apiInstance->findMessageBrands($search, $limit, $skip, $sort, $select, $or, $and);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageBrandsApi->findMessageBrands: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\CircuitID\FindMessageBrands200Response**](../Model/FindMessageBrands200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessageBrand()`

```php
getMessageBrand($id): \OpenAPI\Client\CircuitID\GetMessageBrand200Response
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


$apiInstance = new OpenAPI\Client\Api\MessageBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ObjectId (unique 12 bytes ID) of record you would like to GET.

try {
    $result = $apiInstance->getMessageBrand($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageBrandsApi->getMessageBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ObjectId (unique 12 bytes ID) of record you would like to GET. | |

### Return type

[**\OpenAPI\Client\CircuitID\GetMessageBrand200Response**](../Model/GetMessageBrand200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
