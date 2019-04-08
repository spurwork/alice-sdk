# EmployeeReimbursementClaimEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID | [default to 1]
**approval_status** | **string** | Status of approval | [default to 'pending']
**claim_documents** | [**\Swagger\Client\Model\ClaimDocumentEntity[]**](ClaimDocumentEntity.md) | Claim document, with image | [optional] 
**reviewed_at** | [**\DateTime**](\DateTime.md) | Approval date | [optional] 
**reviewer_note** | **string** | Approver comment | [optional] [default to 'Denied reason']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

