# BankingInstitutionConnectionEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | connection id | [default to 1]
**name** | **string** | cnnection name | [default to 'Wells Fargo']
**institution_identifier** | **string** | institution identifier (Plaid institution id) | 
**status** | **string** | connection status | [default to 'connected']
**card_types** | **string** | types of cards held in this account | [default to 'credit cards']
**banking_connection_error_at** | [**\DateTime**](\DateTime.md) | Date the connection error occurred if it exists | [optional] 
**config** | **string** | Platform-specific config | [optional] 
**institution** | **string** | Platform-specific institution | [optional] 
**platform** | **string** | Platform name | [optional] [default to 'quovo']
**banking_accounts** | [**\Swagger\Client\Model\BankingAccountEntity[]**](BankingAccountEntity.md) | accounts in this institution | [optional] 
**superseded** | **bool** | Indicates if this institution is being superseded by another | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

