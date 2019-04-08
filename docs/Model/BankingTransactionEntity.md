# BankingTransactionEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Transaction name | [default to 'Metropolitain Transportation Authority']
**date** | [**\DateTime**](\DateTime.md) | Transaction date | 
**amount_dollars** | **float** | Amount of the transaction in dollars | [default to 40.0]
**pretax_category** | **string** | Pretax program this transaction belongs to | [default to 'mass_transit']
**estimated_savings_dollars** | **float** | Estimated tax saving for this transaction | [default to 18.38]
**confirmed** | **bool** | Confirmed | [default to true]
**confirmed_at** | [**\DateTime**](\DateTime.md) | Confirmation date | 
**confirmed_eligible_spend** | **bool** | Confirmed eligible spend by user | 
**id** | **string** | Id | [default to 'txn_1']
**approval_status** | **string** | Approval status from the reimbursement claim, if it exists | [default to 'not_required']
**reimbursement_claim** | [**\Swagger\Client\Model\EmployeeReimbursementClaimEntity**](EmployeeReimbursementClaimEntity.md) |  | [optional] 
**standalone** | **bool** | Is this a standalone transaction, with no bank account? | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

