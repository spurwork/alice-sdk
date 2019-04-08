# EmployeeBenefitsEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Employee ID | 
**payroll_system_id** | **string** | Employee ID within the external payroll system | 
**first_name** | **string** | First Name | 
**last_name** | **string** | First Name | 
**account_status** | **string** | Status of the account | [default to 'not_enrolled']
**is_admin_user** | **bool** | Identifies if employee can administer Employer Account | 
**is_organization_admin** | **bool** | Identifies if employee can administer their organization | 
**benefits** | [**\Swagger\Client\Model\EmployeePayPeriodRecordEntity[]**](EmployeePayPeriodRecordEntity.md) | Employee&#x27;s pay period records | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

