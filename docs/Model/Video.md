# Video

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
**original** | **string** | The path to the original video. | [optional] 
**state** | **string** | I don&#39;t know? | [optional] 
**deleted** | **bool** | If this video has been deleted or not | [optional] 
**resolution_name** | **string** | A human readable name for this video. | [optional] 
**static_small** | **string** | An image thumbnail of the video. | [optional] 
**static_medium** | **string** | An image thumbnail (Medium Sized) of the video. | [optional] 
**static_watermark_small** | **string** | An image thumbnail of the video. Contains a watermark. | [optional] 
**static_watermark_medium** | **string** | An image thumbnail (Medium Sized) of the video. Contains a watermark. | [optional] 
**small_preview** | **string** | A MP4 preview of the video. Small sized. | [optional] 
**small_preview_gif** | **string** | A GIF preview of the video. Small sized. Preferabbly use the MP4 version | [optional] 
**watermark_small** | **string** | An MP4 watermarked preview of the video. Thumbnail sized. Preferabbly use this instead of a GIF. | [optional] 
**watermark_small_gif** | **string** | An GIF watermarked preview of the video. Medium sized. Preferabbly use the MP4. | [optional] 
**medium_preview** | **string** | A Medium sized MP4 preview of the video. | [optional] 
**medium_preview_gif** | **string** | A Medium sized GIF preview of the video. Preferabbly use the MP4 | [optional] 
**watermark_medium** | **string** | An MP4 watermarked preview of the video. Medium sized. Preferabbly use this instead of a GIF. | [optional] 
**watermark_medium_gif** | **string** | An GIF watermarked preview of the video. Medium sized. Preferabbly use the MP4. | [optional] 
**stream480p** | **string** | A stream optimized version of the original video. Sized at 480p. | [optional] 
**source_video_id** | **string** | If this is a copied video, SourceVideoId will hold a reference to the original video. | [optional] 
**is360** | **bool** | Is this Video a 360 Video | [optional] 
**stereo_mode** | **string** | If this is a 360 Video, this will describe the stereo mode of it. | [optional] 
**region** | [**\OpenAPI\Client\Model\Region**](Region.md) |  | [optional] 
**is_souvenir** | **bool** | If this video is a Souvenir video. | [optional] 
**download_link** | **string** | A time limited download link for the original. This is a pre-signed url that forces the download header on S3. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


