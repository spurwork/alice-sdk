# PayPeriodPayrollEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the period in question | 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the period in question | 
**employee_deductions_dollars** | **float** | Total Employee deductions for this period | 
**id** | **int** | Payroll ID | 
**payroll_system_id** | **string** | Employee ID within the external payroll system | 
**status** | **string** | Pay period status | [default to 'pending']
**payday** | [**\DateTime**](\DateTime.md) | The pay day of the period in question | 
**employee_reimbursements_dollars** | **float** | Total Employee reimbursements for this period | 
**employer** | [**\Swagger\Client\Model\EmployerMinimalEntity**](EmployerMinimalEntity.md) |  | 
**employees** | [**\Swagger\Client\Model\EmployeeBenefitsEntity[]**](EmployeeBenefitsEntity.md) | Employee&#x27;s and their pay period records | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

