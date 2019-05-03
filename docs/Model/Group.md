# Group

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**owner_id** | **string** | The UUID of the owning account. | 
**brand_id** | **string** | The UUID of the brand this album is for. | 
**group_id** | **string** | The UUID of the Group | 
**name** | **string** | The name of the album | [optional] 
**token** | **string** | A unique short code for this album. | 
**count** | **int** | The number of photos in this album | 
**video_count** | **int** | The number of videos in this album | 
**thumb** | **string** | A preview thumbnail for this album. | [optional] 
**thumb_region** | [**\OpenAPI\Client\Model\Region**](Region.md) |  | [optional] 
**thumb1** | **string** | A second preview thumbnail for this album. | [optional] 
**thumb1_region** | [**\OpenAPI\Client\Model\Region**](Region.md) |  | [optional] 
**thumb2** | **string** | A third preview thumbnail for this album. | [optional] 
**thumb2_region** | [**\OpenAPI\Client\Model\Region**](Region.md) |  | [optional] 
**when_unix** | **int** | The time this album exists in. | 
**deleted** | **bool** | If this album has been deleted. | [optional] 
**last_updated_unix** | **int** | The last time this album was modified | [optional] 
**created_by** | **string** | A description of which app created this album | [optional] 
**hide_from_store** | **bool** | If this album should be hidden from the online store. | [optional] 
**pricing_id** | **string** | If present, which Special override pricing this album has. | [optional] 
**formatted_time** | **string** | A formated version of the time we thing this album was at. It gets generated by examining the album name. | [optional] 
**time_of_tour** | **int** | The time we we think this album is at. This gets generated by examining the album name. | [optional] 
**interaction_count** | **int** | The number of Emails and Orders made from this album. | [optional] 
**uploading_unix** | **int** | The last time we know we uploaded to this album at. Reported by the client and a set interval. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

