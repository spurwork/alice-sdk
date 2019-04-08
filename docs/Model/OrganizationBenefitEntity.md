# OrganizationBenefitEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of benefit | [default to 'Mass transit']
**benefit_type** | **string** | Benefit type | [default to 'mass_transit']
**enrollment_start_date** | **string** | Start of enrollment period | [optional] 
**enrollment_end_date** | **string** | End of enrollment period | [optional] 
**plan_year_start_date** | **string** | Plan year start date | [optional] 
**plan_year_end_date** | **string** | Plan year end date | [optional] 
**enrollment_days_remaining** | **int** | Number of days remaining until plan start, if benefit is an FSA | [optional] 
**is_fsa** | **bool** | Is this an FSA benefit? | 
**requires_caf_plan** | **bool** | Does this benefit require a cafeteria plan? | 
**enabled** | **bool** | Is this benefit enabled? | [default to true]
**pretax_category** | **string** | Benefit pretax category | [default to 'mass_transit']
**enrolled_employee_count** | **int** | Number of employees enrolled in this benefit | [default to 1]
**deductions_per_pay_period_dollars** | **float** | Deductions per pay period (FSA only) | [optional] [default to 1000.0]
**deductions_this_year_dollars** | **float** | Deductions so far this year | [default to 1000.0]
**estimated_annual_payroll_tax_savings_dollars** | **float** | Estimated total payroll tax savings this year | [default to 1000.0]
**reimbursements_this_year_dollars** | **float** | Reimbursements so far this year | [default to 1000.0]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

