# EmployerAccountEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Company ID | 
**payroll_system_id** | **string** | Employee ID within the external payroll system | 
**name** | **string** | Company Name | 
**marketing_friendly_name** | **string** | Company Friendly Name | [optional] 
**admins** | [**\Swagger\Client\Model\EmployeeEntity[]**](EmployeeEntity.md) | List of Admin users | [optional] 
**billing_system_connected** | **bool** | Identifies if the billable can be billed | [optional] [default to true]
**billing_source** | [**\Swagger\Client\Model\BillingSourceEntity**](BillingSourceEntity.md) |  | [optional] 
**payroll_account** | [**\Swagger\Client\Model\AccountEntity**](AccountEntity.md) |  | [optional] 
**requires_benefit_bank_account** | **bool** | Whether the organization offers a benefit that requires a bank account, like HFSA or HSA | 
**unified_billing** | **bool** | Unified billing | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

