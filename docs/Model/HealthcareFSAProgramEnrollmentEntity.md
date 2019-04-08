# HealthcareFSAProgramEnrollmentEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Human friendly name for the program | [default to 'Mass Transit']
**benefit_type** | **string** | benefit type | [default to 'mass_transit']
**estimated_savings_dollars** | **float** | Total Employee savings using this program since customer signed up | [optional] [default to 290.77]
**total_spend_dollars** | **float** | Total Employee pretax spending put through this program | [optional] [default to 590.77]
**id** | **int** | Enrollment ID | 
**balance** | **float** | Total deductions minus total reimbursements (in dollars) | [optional] [default to 1000.0]
**total_deductions** | **float** | Total deductions (in dollars) | [optional] [default to 1000.0]
**total_deductions_and_balance** | **float** | Total deductions plus balance (in dollars) | [optional] [default to 1200.0]
**yearly_limit** | **float** | Annual spending cap (in dollars) | [optional] [default to 5000.0]
**estimated_yearly_limit_savings_dollars** | **float** | Estimated savings for annual spending cap (in dollars) | [optional] [default to 1000.0]
**election** | **float** | Election per pay period (in dollars) | [optional] [default to 500.0]
**preexisting_deduction** | **float** | Contribution already made to benefit for the current year (in cents) | [optional] [default to 0.0]
**status** | **string** | Enrollment status | [optional] [default to 'qualified']
**can_change_election** | **bool** | Election may not be changed due to certain rules | [optional] 
**total_reimbursements_in_plan_year** | **float** | Total reimbursements in plan year (dollars) | [optional] [default to 100.0]
**purpose** | **string** | General or limited purpose | [optional] [default to 'general']
**plan_year_start_date** | [**\DateTime**](\DateTime.md) | Start date for the FSA enrollment | [optional] 
**plan_year_started** | **bool** | In plan year? | [optional] 
**plan_year_election** | **float** | Election for plan year (in dollars) | [optional] [default to 500.0]
**plan_year_total_spend_dollars** | **float** | Total Employee pretax spending put through this program for the plan year | [optional] [default to 590.77]
**plan_year_estimated_savings_dollars** | **float** | Total Employee savings using this program since for this plan year | [optional] [default to 290.77]
**plan_year** | [**\Swagger\Client\Model\PlanYearEntity**](PlanYearEntity.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

