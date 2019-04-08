# EmployeeOrganizationBenefitEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of benefit | [default to 'Mass transit']
**benefit_type** | **string** | Benefit type | [default to 'mass_transit']
**enrollment_open** | **bool** | Is enrollment open for this employee? | [default to true]
**status** | **string** | Status of benefit | [default to 'enabled']
**safe_to_spend_limit** | **int** | Contribution limit | [default to 500]
**plan_year_for_new_enrollment** | [**\Swagger\Client\Model\PlanYearEntity**](PlanYearEntity.md) |  | [optional] 
**upcoming_plan_year** | [**\Swagger\Client\Model\PlanYearEntity**](PlanYearEntity.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

