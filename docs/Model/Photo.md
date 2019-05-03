# Photo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**owner_id** | **string** | The UUID of the owning account. | 
**group_id** | **string** | The UUID of the group this photo is in. | 
**photo_id** | **string** | The UUID of the photo. | 
**created** | **int** | The unix timestamp this photo was created. | 
**medium** | **string** | Path to the Medium sized this photo | [optional] 
**original** | **string** | Path to the Original for this photo | [optional] 
**region** | **string** | The S3 region this content is from | [optional] 
**small** | **string** | Path to the Thumbnail of this photo | [optional] 
**watermark** | **string** | Path to Medium sized Watermark photo. | [optional] 
**watermark_small** | **string** | Path to Thumbnail sized Watermark photo. | [optional] 
**deleted** | **bool** | If this photo has been deleted or not. | [optional] 
**sort_order** | **string** | The original filename of the photo. | [optional] 
**ratio** | **float** | The w / h  ratio of the photo | [optional] 
**last_updated_unix** | **int** | The last time this photo was updated | [optional] 
**width** | **int** | The width of the original photo. | [optional] 
**height** | **int** | The height of the original photo. | [optional] 
**megapixels** | **float** | The estimated Megapixels of the photo. | [optional] 
**hue** | **string** | The overall Hue of this photo. Used for displaying the background before loading the photo. | [optional] 
**watermark_square** | **string** | Path to the Square cropped Watermark photo. | [optional] 
**square** | **string** | Path to the Square cropped photo. | [optional] 
**is_souvenir** | **bool** | If this is a Souvenir copied photo | [optional] 
**download_link** | **string** | A time limited download link for the original. This is a pre-signed url that forces the download header on S3. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


