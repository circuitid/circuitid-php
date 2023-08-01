# OpenAPI\Client\AuthenticationApi

All URIs are relative to https://cloud9.circuitid.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAuthentication()**](AuthenticationApi.md#createAuthentication) | **POST** /authentication | Create a new object |


## `createAuthentication()`

```php
createAuthentication($authenticationCreateOrPatch): \OpenAPI\Client\CircuitID\CreateAuthentication200Response
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


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authenticationCreateOrPatch = new \OpenAPI\Client\CircuitID\AuthenticationCreateOrPatch(); // \OpenAPI\Client\CircuitID\AuthenticationCreateOrPatch | The JSON object that will be posted to the REST API endpoint.

try {
    $result = $apiInstance->createAuthentication($authenticationCreateOrPatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->createAuthentication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authenticationCreateOrPatch** | [**\OpenAPI\Client\CircuitID\AuthenticationCreateOrPatch**](../Model/AuthenticationCreateOrPatch.md)| The JSON object that will be posted to the REST API endpoint. | |

### Return type

[**\OpenAPI\Client\CircuitID\CreateAuthentication200Response**](../Model/CreateAuthentication200Response.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
