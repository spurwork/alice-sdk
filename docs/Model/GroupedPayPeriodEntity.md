# GroupedPayPeriodEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the period in question | 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the period in question | 
**employee_count** | **int** | The number of employees in question for this period. For a pay period it is the # ppl enrolled in that period,                                       For annual savings, it is the total # of employees, and for total savings, its the # of employees enrolled | 
**employee_deductions_dollars** | **float** | Total Employee deductions for this period | 
**employee_savings_dollars** | **float** | Estimated Employee tax savings for this period | [default to 1380.53]
**employer_gross_savings_dollars** | **float** | Estimated Employer tax savings for this period not including Alice fees | [default to 305.81]
**employer_fee_dollars** | **float** | Alice Fee for this period | [default to 139.8]
**employer_net_savings_dollars** | **float** | Estimated Employer tax savings for this period minus  Alice fee | [default to 166.01]
**payday** | [**\DateTime**](\DateTime.md) | The payday of the periods in question | 
**payroll_deadline** | [**\DateTime**](\DateTime.md) | The payday of the periods in question | 
**company_count** | **int** | The number of companies included in this period. | [default to 2]
**id** | **int** | Payroll ID | [default to 1]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

