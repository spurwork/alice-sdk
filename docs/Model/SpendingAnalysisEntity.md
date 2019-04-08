# SpendingAnalysisEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the period in question | 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the period in question | 
**employee_count** | **int** | The number of employees in question for this period. For a pay period it is the # ppl enrolled in that period,                                       For annual savings, it is the total # of employees, and for total savings, its the # of employees enrolled | 
**employee_savings_dollars** | **float** | Estimated Employee tax savings for this period | [default to 1380.53]
**employer_gross_savings_dollars** | **float** | Estimated Employer tax savings for this period not including Alice fees | [default to 305.81]
**employer_fee_dollars** | **float** | Alice Fee for this period | [default to 139.8]
**employer_net_savings_dollars** | **float** | Estimated Employer tax savings for this period minus  Alice fee | [default to 166.01]
**employee_spend_dollars** | **float** | Total Employee spend for this period | [optional] [default to 3495.38]
**employee_spend_annualized_dollars** | **float** | Annualized Employee spend | [optional] [default to 11495.38]
**employee_savings_annualized_dollars** | **float** | Annualized employee savings | [optional] [default to 11495.38]
**employer_gross_savings_annualized_dollars** | **float** | Annualized gross employer savings | [optional] [default to 11495.38]
**employer_fee_annualized_dollars** | **float** | Annualized employer fee | [optional] [default to 11495.38]
**employer_net_savings_annualized_dollars** | **float** | Annualized employer fee | [optional] [default to 11495.38]
**employee_data** | [**\Swagger\Client\Model\EmployeeSpendingAnalysisEntity**](EmployeeSpendingAnalysisEntity.md) |  | [optional] 
**city_data** | [**\Swagger\Client\Model\CitySpendingAnalysisEntity**](CitySpendingAnalysisEntity.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

