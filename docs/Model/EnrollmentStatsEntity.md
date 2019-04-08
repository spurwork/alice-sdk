# EnrollmentStatsEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | Date these stats relate to | [optional] 
**enrollment_count** | **int** | Number of employees that enrolled within a 1 week period | [optional] [default to 56]
**new_account_enrollment_count** | **int** | Number of employees enrolled who are from accounts &lt;&#x3D; 1 week old | [optional] [default to 17]
**semi_new_account_enrollment_count** | **int** | Number of employees enrolled who are from accounts &gt; 1 week old and &lt;&#x3D; 30 days old | [optional] [default to 31]
**old_account_enrollment_count** | **int** | Number of employees enrolled who are from accounts &gt; 30 days old | [optional] [default to 8]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

