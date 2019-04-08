# FundsTransferEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Transfer ID | [default to 1]
**date** | [**\DateTime**](\DateTime.md) | Date requested | 
**transaction_type** | **string** | Type of HSA transfer | [default to 'Trustee to Trustee Transfer']
**description** | **string** | Status of transfer | [default to 'Document Generation Pending']
**amount** | **float** | Transfer amount, null if transfer type is :full | 
**transfer_type** | **string** | Transfer type | [default to 'full']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

