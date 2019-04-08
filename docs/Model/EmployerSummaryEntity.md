# EmployerSummaryEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Company ID | 
**payroll_system_id** | **string** | Employee ID within the external payroll system | 
**name** | **string** | Company Name | 
**marketing_friendly_name** | **string** | Company Friendly Name | [optional] 
**billing_system_connected** | **bool** | Identifies if the billable can be billed | [optional] [default to true]
**billing_source** | [**\Swagger\Client\Model\BillingSourceEntity**](BillingSourceEntity.md) |  | [optional] 
**payroll_account** | [**\Swagger\Client\Model\AccountEntity**](AccountEntity.md) |  | [optional] 
**requires_benefit_bank_account** | **bool** | Whether the organization offers a benefit that requires a bank account, like HFSA or HSA | 
**unified_billing** | **bool** | Unified billing | [optional] 
**signup_date** | [**\DateTime**](\DateTime.md) | Date the company signed up | [optional] 
**invite_code** | **string** | Invite code | [optional] [default to 'acme420']
**enroll_url** | **string** | Enrollment URL for invite code | [optional] [default to 'https://app.thisisalice.com/enroll/acme420']
**employees** | [**\Swagger\Client\Model\EmployeeCollectionSummaryEntity**](EmployeeCollectionSummaryEntity.md) |  | [optional] 
**estimated_possible_annual_savings** | [**\Swagger\Client\Model\EmployerAnnualSavingsEntity**](EmployerAnnualSavingsEntity.md) |  | [optional] 
**total_savings** | [**\Swagger\Client\Model\EmployerTotalSavingsEntity**](EmployerTotalSavingsEntity.md) |  | [optional] 
**next_pay_period** | [**\Swagger\Client\Model\PayPeriodEntity**](PayPeriodEntity.md) |  | [optional] 
**address** | [**\Swagger\Client\Model\AddressEntity**](AddressEntity.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

