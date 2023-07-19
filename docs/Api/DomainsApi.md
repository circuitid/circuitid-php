# OpenAPI\Client\DomainsApi

All URIs are relative to https://cloud9.circuitid.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDomain()**](DomainsApi.md#createDomain) | **POST** /domains | Create a new object |
| [**findDomains()**](DomainsApi.md#findDomains) | **GET** /domains | Find multiple objects |
| [**getDomain()**](DomainsApi.md#getDomain) | **GET** /domains/{id} | Get object by id |
| [**patchDomain()**](DomainsApi.md#patchDomain) | **PATCH** /domains/{id} | Patch object&#39;s data |
| [**removeDomain()**](DomainsApi.md#removeDomain) | **DELETE** /domains/{id} | Delete object by id |


## `createDomain()`

```php
createDomain($domains): mixed
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


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domains = new \OpenAPI\Client\CircuitID\Domains(); // \OpenAPI\Client\CircuitID\Domains | The JSON object that will be posted to the REST API endpoint.

try {
    $result = $apiInstance->createDomain($domains);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domains** | [**\OpenAPI\Client\CircuitID\Domains**](../Model/Domains.md)| The JSON object that will be posted to the REST API endpoint. | |

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

## `findDomains()`

```php
findDomains($search, $limit, $skip, $sort, $select, $or, $and): \OpenAPI\Client\CircuitID\FindDomains200Response
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


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
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
    $result = $apiInstance->findDomains($search, $limit, $skip, $sort, $select, $or, $and);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->findDomains: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\CircuitID\FindDomains200Response**](../Model/FindDomains200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomain()`

```php
getDomain($id): mixed
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


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = NULL; // mixed | The ObjectId (unique 12 bytes ID) of record you would like to GET.

try {
    $result = $apiInstance->getDomain($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomain: ', $e->getMessage(), PHP_EOL;
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

## `patchDomain()`

```php
patchDomain($id, $domainsNotRequired): mixed
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


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = NULL; // mixed | The ObjectId (unique 12 bytes ID) of record you would like to GET.
$domainsNotRequired = new \OpenAPI\Client\CircuitID\DomainsNotRequired(); // \OpenAPI\Client\CircuitID\DomainsNotRequired | The request data.

try {
    $result = $apiInstance->patchDomain($id, $domainsNotRequired);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->patchDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| The ObjectId (unique 12 bytes ID) of record you would like to GET. | |
| **domainsNotRequired** | [**\OpenAPI\Client\CircuitID\DomainsNotRequired**](../Model/DomainsNotRequired.md)| The request data. | |

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

## `removeDomain()`

```php
removeDomain($id): mixed
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


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = NULL; // mixed | The ObjectId (unique 12 bytes ID) of record you would like to GET.

try {
    $result = $apiInstance->removeDomain($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->removeDomain: ', $e->getMessage(), PHP_EOL;
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
