# OpenAPI\Client\OwnerApi

All URIs are relative to *https://api.picthrive.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccount**](OwnerApi.md#getAccount) | **GET** /Owner/ | Get Your Account


# **getAccount**
> \OpenAPI\Client\Model\GetOwner getAccount()

Get Your Account

Return top level account information. Your \"Owner\" information contains root preferences, settings, and billing information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\OwnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnerApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetOwner**](../Model/GetOwner.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

