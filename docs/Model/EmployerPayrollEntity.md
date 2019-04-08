# EmployerPayrollEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Company ID | 
**payroll_system_id** | **string** | Employee ID within the external payroll system | 
**name** | **string** | Company Name | 
**marketing_friendly_name** | **string** | Company Friendly Name | [optional] 
**payroll_account** | [**\Swagger\Client\Model\AccountEntity**](AccountEntity.md) |  | [optional] 
**requires_benefit_bank_account** | **bool** | Whether the organization offers a benefit that requires a bank account, like HFSA or HSA | 
**unified_billing** | **bool** | Unified billing | [optional] 
**next_pay_period** | [**\Swagger\Client\Model\PayPeriodMinimalEntity**](PayPeriodMinimalEntity.md) |  | [optional] 
**payroll_config** | [**\Swagger\Client\Model\PayrollConfigEntity**](PayrollConfigEntity.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

