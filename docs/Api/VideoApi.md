# OpenAPI\Client\VideoApi

All URIs are relative to *https://api.picthrive.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listGroupVideos**](VideoApi.md#listGroupVideos) | **GET** /Group/{groupId}/Video | List videos
[**markGroupAsUploading**](VideoApi.md#markGroupAsUploading) | **PUT** /Group/{groupId}/UploadStatus | Update Upload Status


# **listGroupVideos**
> \OpenAPI\Client\Model\GetGroupVideosResponse listGroupVideos()

List videos

List videos inside an Group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\VideoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listGroupVideos();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoApi->listGroupVideos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetGroupVideosResponse**](../Model/GetGroupVideosResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markGroupAsUploading**
> object markGroupAsUploading($group_id)

Update Upload Status

Updates the Group to mark it as still uploading. Call this if files are still being queued, and thus album is still uploading.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\VideoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | The UUID of the Group

try {
    $result = $apiInstance->markGroupAsUploading($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoApi->markGroupAsUploading: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The UUID of the Group |

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

