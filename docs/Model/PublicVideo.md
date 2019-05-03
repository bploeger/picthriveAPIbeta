# PublicVideo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**owner_id** | **string** | The UUID of the owning account. | 
**group_id** | **string** | The UUID of the group this photo is in. | 
**video_id** | **string** | The UUID of the video | 
**created** | **int** | The unix timestamp this video was created. | 
**sort_order** | **string** | The original filename of the video. | 
**width** | **int** | The Width of the original video | 
**height** | **int** | The Height of the original video | 
**duration** | **string** | A string describing the duration of the video. Extract from video metadata data. | 
**resolution_name** | **string** | A human readable name for this video. | [optional] 
**static_watermark_small** | **string** | An image thumbnail of the video. Contains a watermark. | [optional] 
**static_watermark_medium** | **string** | An image thumbnail (Medium Sized) of the video. Contains a watermark. | [optional] 
**watermark_small** | **string** | An MP4 watermarked preview of the video. Thumbnail sized. Preferabbly use this instead of a GIF. | [optional] 
**watermark_medium** | **string** | An MP4 watermarked preview of the video. Medium sized. Preferabbly use this instead of a GIF. | [optional] 
**watermark_small_gif** | **string** | An GIF watermarked preview of the video. Medium sized. Preferabbly use the MP4. | [optional] 
**watermark_medium_gif** | **string** | An GIF watermarked preview of the video. Medium sized. Preferabbly use the MP4. | [optional] 
**is360** | **bool** | Is this Video a 360 Video | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


