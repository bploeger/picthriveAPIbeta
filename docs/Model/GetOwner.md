# GetOwner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**owner_id** | **string** | The Root identifier for your account. | 
**created** | **int** | The unix time this account was created at. | 
**stripe_sub_status** | **string** | Your account status. Eg. active, canceled. | [optional] 
**current_period_end** | **int** | The end of your next \&quot;Billing\&quot; cycle. | [optional] 
**card_details** | **string** | Basic details about your card on file. | [optional] 
**last_name** | **string** | The name last of the root customer. | [optional] 
**first_name** | **string** | The first name last of the root customer. | [optional] 
**email** | **string** | The email of the root customer. Also where invoices will be sent to. | [optional] 
**primary_brand** | **string** | The \&quot;Primary\&quot; Store/Brand to use. Eg, when creating a new Group and no BrandId is specified. | [optional] 
**timezone** | **string** | The Timezone of this account. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


