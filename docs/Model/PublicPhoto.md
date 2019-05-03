# PublicPhoto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**owner_id** | **string** | The UUID of the owning account. | [optional] 
**group_id** | **string** | The UUID of the group this photo is in. | [optional] 
**photo_id** | **string** | The UUID of the photo. | [optional] 
**created** | **int** | The unix timestamp this photo was created. | [optional] 
**small** | **string** | Path to the Thumbnail of this photo | [optional] 
**watermark** | **string** | Path to Medium sized Watermark photo. | [optional] 
**watermark_small** | **string** | Path to Thumbnail sized Watermark photo. | [optional] 
**watermark_square** | **string** | Path to the Square cropped Watermark photo. | [optional] 
**sort_order** | **string** | The original filename of the photo. | [optional] 
**region** | [**\OpenAPI\Client\Model\Region**](Region.md) |  | [optional] 
**ratio** | **float** | The w / h  ratio of the photo | [optional] 
**width** | **int** | The width of the original photo. | [optional] 
**height** | **int** | The height of the original photo. | [optional] 
**megapixels** | **float** | The estimated Megapixels of the photo. | [optional] 
**hue** | **string** | The overall Hue of this photo. Used for displaying the background before loading the photo. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


