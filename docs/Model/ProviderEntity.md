# ProviderEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Provider name | [optional] [default to 'Some Day Care']
**email** | **string** | Provider email | [optional] [default to 'some_dc@example.com']
**tel** | **string** | Provider tel | [optional] [default to '1231231234']
**tax_identification_number** | **string** | Tax ID | [optional] [default to '123-45-6789']
**is_individual** | **bool** | Provider is an individual as opposed to a business | [optional] 
**is_ssn** | **bool** | Tax ID is a Social Security number, maybe business EIN or individual ITIN otherwise | [optional] 
**over_eighteen** | **bool** | Provider is over 18 years of age | [optional] 
**is_tax_exempt** | **bool** | Provider is a tax-exempt business | [optional] 
**signatory_name** | **string** | Signatory name for a provider that is a business | [optional] [default to '01/0/2010']
**employee_name** | **string** | Associated employee name | [optional] [default to 'Moe']
**documents** | [**\Swagger\Client\Model\DocumentEntity[]**](DocumentEntity.md) | List of documents | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

