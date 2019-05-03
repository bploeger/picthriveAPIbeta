# OpenAPI\Client\BrandApi

All URIs are relative to *https://api.picthrive.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStore**](BrandApi.md#getStore) | **GET** /Brand/{brandId} | Get Store
[**listStores**](BrandApi.md#listStores) | **GET** /Brand/ | Get all Stores


# **getStore**
> \OpenAPI\Client\Model\Brand getStore($brand_id)

Get Store

Get this specific store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_id = 'brand_id_example'; // string | The unique ID of the Brand

try {
    $result = $apiInstance->getStore($brand_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->getStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_id** | **string**| The unique ID of the Brand |

### Return type

[**\OpenAPI\Client\Model\Brand**](../Model/Brand.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listStores**
> \OpenAPI\Client\Model\GetBrands listStores()

Get all Stores

Return all Stores/Brands for this account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listStores();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->listStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetBrands**](../Model/GetBrands.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

