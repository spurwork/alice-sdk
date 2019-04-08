# PayrollConfigEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Payroll config ID | 
**employer** | [**\Swagger\Client\Model\EmployerMinimalEntity**](EmployerMinimalEntity.md) |  | 
**pay_period_type** | **string** | The pay cycle | 
**first_notional_payday** | [**\DateTime**](\DateTime.md) | First notional payday | 
**days_paid_in_arrears** | **int** | Number of days paid in arrears | 
**deadline_days_before_payday** | **int** | Business days before payday to make the Alice deadline | 
**periodic_payday** | **int** | The day of the week for payday, only applies to pay_period_type: weekly, fortnightly | [optional] 
**monthly_payday** | **string** | The day of the month for payday, only applies to pay_period_type: monthly | [optional] 
**twice_monthly_type** | **int** | The days of the month for payday, only applies to pay_period_type: twice_per_month | [optional] 
**twice_monthly_payday_1** | **string** | The first day of the month for payday, only applies to pay_period_type: twice_per_month, twice_monthly_type: other | [optional] 
**twice_monthly_payday_2** | **string** | The second day of the month for payday, only applies to pay_period_type: twice_per_month, twice_monthly_type: other | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

