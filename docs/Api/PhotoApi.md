# OpenAPI\Client\PhotoApi

All URIs are relative to *https://api.picthrive.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUploadPhotoRequest**](PhotoApi.md#createUploadPhotoRequest) | **POST** /Group/{groupId}/Photo | Upload a photo
[**deletePhoto**](PhotoApi.md#deletePhoto) | **DELETE** /Photo/{photoId} | Delete a Photo
[**getPhoto**](PhotoApi.md#getPhoto) | **GET** /Photo/{photoId} | Get a Photo
[**listGroupPhotos**](PhotoApi.md#listGroupPhotos) | **GET** /Group/{groupId}/Photo | List photos
[**markGroupAsUploading**](PhotoApi.md#markGroupAsUploading) | **PUT** /Group/{groupId}/UploadStatus | Update Upload Status
[**updatePhoto**](PhotoApi.md#updatePhoto) | **PUT** /Photo/{photoId} | Copy or Move a Photo
[**zipGroupPhotos**](PhotoApi.md#zipGroupPhotos) | **POST** /Group/{groupId}/Zip | Zip Photos


# **createUploadPhotoRequest**
> \OpenAPI\Client\Model\AddPhotosToGroupResponse createUploadPhotoRequest($group_id, $add_photos_to_group_request)

Upload a photo

Request to upload new photos to this album.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PhotoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | The UUID of the Group
$add_photos_to_group_request = new \OpenAPI\Client\Model\AddPhotosToGroupRequest(); // \OpenAPI\Client\Model\AddPhotosToGroupRequest | 

try {
    $result = $apiInstance->createUploadPhotoRequest($group_id, $add_photos_to_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoApi->createUploadPhotoRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The UUID of the Group |
 **add_photos_to_group_request** | [**\OpenAPI\Client\Model\AddPhotosToGroupRequest**](../Model/AddPhotosToGroupRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AddPhotosToGroupResponse**](../Model/AddPhotosToGroupResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePhoto**
> object deletePhoto($photo_id)

Delete a Photo

Removes a photo from a album

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PhotoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$photo_id = 'photo_id_example'; // string | The unique ID of the Photo

try {
    $result = $apiInstance->deletePhoto($photo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoApi->deletePhoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **photo_id** | **string**| The unique ID of the Photo |

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPhoto**
> \OpenAPI\Client\Model\Photo getPhoto($photo_id)

Get a Photo

Retrieve a photo by its id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PhotoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$photo_id = 'photo_id_example'; // string | The unique ID of the Photo

try {
    $result = $apiInstance->getPhoto($photo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoApi->getPhoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **photo_id** | **string**| The unique ID of the Photo |

### Return type

[**\OpenAPI\Client\Model\Photo**](../Model/Photo.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGroupPhotos**
> \OpenAPI\Client\Model\GetGroupPhotosResponse listGroupPhotos($group_id)

List photos

List photos inside an Group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PhotoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | The UUID of the Group

try {
    $result = $apiInstance->listGroupPhotos($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoApi->listGroupPhotos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The UUID of the Group |

### Return type

[**\OpenAPI\Client\Model\GetGroupPhotosResponse**](../Model/GetGroupPhotosResponse.md)

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

$apiInstance = new OpenAPI\Client\Api\PhotoApi(
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
    echo 'Exception when calling PhotoApi->markGroupAsUploading: ', $e->getMessage(), PHP_EOL;
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

# **updatePhoto**
> \OpenAPI\Client\Model\UpdatePhotoResponse updatePhoto($photo_id, $update_photo_request)

Copy or Move a Photo

Update a photo to a new Group, or generate a copy of itself into another group. This may be expanded in the future to allow other update operations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PhotoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$photo_id = 'photo_id_example'; // string | The unique ID of the Photo
$update_photo_request = new \OpenAPI\Client\Model\UpdatePhotoRequest(); // \OpenAPI\Client\Model\UpdatePhotoRequest | 

try {
    $result = $apiInstance->updatePhoto($photo_id, $update_photo_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoApi->updatePhoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **photo_id** | **string**| The unique ID of the Photo |
 **update_photo_request** | [**\OpenAPI\Client\Model\UpdatePhotoRequest**](../Model/UpdatePhotoRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UpdatePhotoResponse**](../Model/UpdatePhotoResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zipGroupPhotos**
> \OpenAPI\Client\Model\DownloadGroupResponse zipGroupPhotos($group_id, $download_group_request)

Zip Photos

Create a zip file for the given files. Returns a like to check on the Zip progress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\PhotoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | The UUID of the Group
$download_group_request = new \OpenAPI\Client\Model\DownloadGroupRequest(); // \OpenAPI\Client\Model\DownloadGroupRequest | 

try {
    $result = $apiInstance->zipGroupPhotos($group_id, $download_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoApi->zipGroupPhotos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The UUID of the Group |
 **download_group_request** | [**\OpenAPI\Client\Model\DownloadGroupRequest**](../Model/DownloadGroupRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DownloadGroupResponse**](../Model/DownloadGroupResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

