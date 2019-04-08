# EmployeeProfileEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_name** | **string** | type of profile | [default to 'employee']
**onboarding_status** | **string** | How far through onboarding a user is | [default to 'onboarded']
**account_status** | **string** | The employee&#x27;s account status | [default to 'not_enrolled']
**company_name** | **string** | Employer Name | [default to 'Acme co.']
**require_tos_acceptance** | **bool** | Indicates whether or not the user needs to accept the employee TOS | [optional] 
**tos_accepted_at** | [**\DateTime**](\DateTime.md) | Date that the employee&#x27;s terms of service were accepted | [optional] 
**employer_id** | **int** | Employer ID | [default to 1]
**enrollments** | [**\Swagger\Client\Model\PretaxProgramEnrollmentCollectionEntity**](PretaxProgramEnrollmentCollectionEntity.md) |  | [optional] 
**banking_institutions** | [**\Swagger\Client\Model\BankingInstitutionConnectionEntity[]**](BankingInstitutionConnectionEntity.md) |  | [optional] 
**dependents** | [**\Swagger\Client\Model\DependentEntity**](DependentEntity.md) |  | [optional] 
**marital_status** | **string** | Employee marital status | [optional] [default to 'single']
**pay_period_type** | **string** | Frequency of employer payroll | [optional] [default to 'weekly']
**address** | [**\Swagger\Client\Model\AddressEntity**](AddressEntity.md) |  | [optional] 
**employer_onboarded** | **bool** | Has employer completed onboarding | [optional] [default to true]
**organization** | [**\Swagger\Client\Model\EmployeeOrganizationEntity**](EmployeeOrganizationEntity.md) |  | [optional] 
**health_plan** | [**\Swagger\Client\Model\HealthPlanEntity**](HealthPlanEntity.md) |  | [optional] 
**spending_profile** | **object** | Employee spending profile | [optional] 
**hra_enabled** | **bool** | Whether employee is has HRA enabled or not | 
**hra_reimbursement_claims** | [**\Swagger\Client\Model\EmployeeReimbursementClaimEntity[]**](EmployeeReimbursementClaimEntity.md) |  | [optional] 
**needs_ssn** | **bool** | Whether or not we need an SSN from this employee | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

