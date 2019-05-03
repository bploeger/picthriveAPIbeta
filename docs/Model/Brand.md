# Brand

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**owner_id** | **string** | The UUID of the Owner account this Brand belongs to. | 
**brand_id** | **string** | The UUID of this Brand/Store | 
**vanity_url** | **string** | A unique short prefix for this Brand. Used for display on the online store, and for other short prefix needs. | 
**name** | **string** | The name of this Store | [optional] 
**website** | **string** | The website of your Tour. Used to direct guests to your website. | [optional] 
**booking_link** | **string** |  | [optional] 
**description** | **string** | A brief description of your tour. | [optional] 
**social** | [**\OpenAPI\Client\Model\BrandSocial**](BrandSocial.md) |  | [optional] 
**review** | [**\OpenAPI\Client\Model\BrandReview**](BrandReview.md) |  | [optional] 
**banner300** | **string** | The path to a Banner image to display on the Online Store. Mobile optimized | [optional] 
**banner1280** | **string** | The path to a Banner image to display on the Online Store. Desktop optimized. | [optional] 
**logo100** | **string** | The path to your Logo. 100x100px. | [optional] 
**logo150** | **string** | The path to your Logo. 150x150px. | [optional] 
**logo300** | **string** | The path to your Logo. 300x300px. | [optional] 
**google_analytics** | **string** | Your GA code to inject on the Online Store and Guest Gallery. | [optional] 
**pricing** | [**object**](.md) |  | [optional] 
**default_pricing_id** | **string** | The UUID of the default pricing to use for this account. | [optional] 
**campaign** | [**object**](.md) |  | [optional] 
**ads** | **object[]** |  | [optional] 
**ads_updated** | **int** |  | [optional] 
**custom_gallery_domain** | **string** | The Domain name to use for Galleries. | [optional] 
**custom_store_prefix** | **string** | The Domain name or prefix for a custom store domain. | [optional] 
**google_remarketing_code** | **string** | The Google Remarketing code to use on Stores and galleries. | [optional] 
**google_remarketing_label_code** | **string** | The Google remarketing label to use. | [optional] 
**facebook_remarketing_code** | **string** | The Facebook remarketing code to use on Stores and galleries. | [optional] 
**remarketing_updated** | **int** | The last unix time the remarketing codes were updated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


