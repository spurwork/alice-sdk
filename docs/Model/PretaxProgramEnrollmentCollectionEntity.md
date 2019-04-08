# PretaxProgramEnrollmentCollectionEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**estimated_annual_savings_dollars** | **float** | Estimated Employee annual tax savings across all programs | [optional] [default to 570.82]
**estimated_dependent_care_annual_savings_dollars** | **float** | Estimated Employee annual tax savings for dependent care | [optional] [default to 2150.0]
**estimated_hsa_annual_savings_dollars** | **float** | Estimated Employee annual tax savings for HSA | [optional] [default to 1400.0]
**total_estimated_pretax_savings_dollars** | **float** | Total Employee savings across all programs since customer signed up | [optional] [default to 290.77]
**total_pretax_spend_dollars** | **float** | Total Employee spend across all programs | [optional] [default to 1290.77]
**organization_offers_dependent_care** | **bool** | Org has signed caf plan, and enabled depcare for their employees | [optional] 
**organization_offers_hsa** | **bool** | Org has signed caf plan, and enabled HSA for their employees | [optional] 
**organization_offers_general_hfsa** | **bool** | Org has signed caf plan, and enabled HFSA for their employees | [optional] 
**organization_offers_limited_hfsa** | **bool** | Org has signed caf plan, and enabled HFSA for their employees | [optional] 
**transit_programs** | [**\Swagger\Client\Model\PretaxProgramEnrollmentEntity[]**](PretaxProgramEnrollmentEntity.md) | Details for transit programs | [optional] 
**dependent_care_programs** | [**\Swagger\Client\Model\DependentCareProgramEnrollmentEntity**](DependentCareProgramEnrollmentEntity.md) |  | [optional] 
**hsa_program** | [**\Swagger\Client\Model\HSAProgramEnrollmentEntity**](HSAProgramEnrollmentEntity.md) |  | [optional] 
**healthcare_fsa_programs** | [**\Swagger\Client\Model\HealthcareFSAProgramEnrollmentEntity**](HealthcareFSAProgramEnrollmentEntity.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

