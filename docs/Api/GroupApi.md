# OpenAPI\Client\GroupApi

All URIs are relative to *https://api.picthrive.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGroup**](GroupApi.md#createGroup) | **POST** /Group/ | Create an new Group.
[**createUploadPhotoRequest**](GroupApi.md#createUploadPhotoRequest) | **POST** /Group/{groupId}/Photo | Upload a photo
[**deleteGroup**](GroupApi.md#deleteGroup) | **DELETE** /Group/{groupId} | Delete the Group
[**getGroup**](GroupApi.md#getGroup) | **GET** /Group/{groupId} | Gets a Group.
[**listGroupPhotos**](GroupApi.md#listGroupPhotos) | **GET** /Group/{groupId}/Photo | List photos
[**listGroupVideos**](GroupApi.md#listGroupVideos) | **GET** /Group/{groupId}/Video | List videos
[**listGroups**](GroupApi.md#listGroups) | **GET** /Group/ | List Groups
[**markGroupAsUploading**](GroupApi.md#markGroupAsUploading) | **PUT** /Group/{groupId}/UploadStatus | Update Upload Status
[**searchForGroupByToken**](GroupApi.md#searchForGroupByToken) | **GET** /Group/Search | Search for Group by Token
[**updateGroup**](GroupApi.md#updateGroup) | **PUT** /Group/{groupId} | Update a Group
[**zipGroupPhotos**](GroupApi.md#zipGroupPhotos) | **POST** /Group/{groupId}/Zip | Zip Photos


# **createGroup**
> \OpenAPI\Client\Model\Group createGroup($create_group_request)

Create an new Group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_group_request = new \OpenAPI\Client\Model\CreateGroupRequest(); // \OpenAPI\Client\Model\CreateGroupRequest | 

try {
    $result = $apiInstance->createGroup($create_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_group_request** | [**\OpenAPI\Client\Model\CreateGroupRequest**](../Model/CreateGroupRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new OpenAPI\Client\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->createUploadPhotoRequest: ', $e->getMessage(), PHP_EOL;
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

# **deleteGroup**
> object deleteGroup($group_id)

Delete the Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | The UUID of the Group

try {
    $result = $apiInstance->deleteGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
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

# **getGroup**
> \OpenAPI\Client\Model\Group getGroup($group_id)

Gets a Group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | The UUID of the Group

try {
    $result = $apiInstance->getGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The UUID of the Group |

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

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

$apiInstance = new OpenAPI\Client\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->listGroupPhotos: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listGroupVideos();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->listGroupVideos: ', $e->getMessage(), PHP_EOL;
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

# **listGroups**
> \OpenAPI\Client\Model\GetGroupsResponse listGroups($when)

List Groups

Returns a list of Groups for an account or brand on a specific day. Groups are albums in the workspace or online store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$when = 2019-01-31; // string | The date to retrieve albums for.

try {
    $result = $apiInstance->listGroups($when);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->listGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **when** | **string**| The date to retrieve albums for. | [optional]

### Return type

[**\OpenAPI\Client\Model\GetGroupsResponse**](../Model/GetGroupsResponse.md)

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

$apiInstance = new OpenAPI\Client\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->markGroupAsUploading: ', $e->getMessage(), PHP_EOL;
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

# **searchForGroupByToken**
> \OpenAPI\Client\Model\GetGroupsResponse searchForGroupByToken($UNKNOWN_PARAMETER_NAME)

Search for Group by Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$UNKNOWN_PARAMETER_NAME = fs52Sz; //  | The Token to look for.

try {
    $result = $apiInstance->searchForGroupByToken($UNKNOWN_PARAMETER_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->searchForGroupByToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UNKNOWN_PARAMETER_NAME** | [****](../Model/.md)| The Token to look for. |

### Return type

[**\OpenAPI\Client\Model\GetGroupsResponse**](../Model/GetGroupsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> \OpenAPI\Client\Model\UpdateGroupResponse updateGroup($group_id, $update_group_request)

Update a Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | The UUID of the Group
$update_group_request = new \OpenAPI\Client\Model\UpdateGroupRequest(); // \OpenAPI\Client\Model\UpdateGroupRequest | 

try {
    $result = $apiInstance->updateGroup($group_id, $update_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The UUID of the Group |
 **update_group_request** | [**\OpenAPI\Client\Model\UpdateGroupRequest**](../Model/UpdateGroupRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\UpdateGroupResponse**](../Model/UpdateGroupResponse.md)

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

$apiInstance = new OpenAPI\Client\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->zipGroupPhotos: ', $e->getMessage(), PHP_EOL;
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

