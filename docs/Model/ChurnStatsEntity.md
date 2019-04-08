# ChurnStatsEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | [**\DateTime**](\DateTime.md) | start date of analysis period | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | end date of analysis period | [optional] 
**alice_churn_count** | **int** | total number of users unenrolled and turned inactive during the period | [optional] 
**alice_customer_churn** | **float** | Mean churn of all enrolled employees in a period | [default to 0.1327]
**removed_from_roster_count** | **int** | total number of users removed from roster during the period | [optional] 
**inactive_user_count** | **int** | total number of users turned inactive during the period | [optional] 
**card_disconnect_count** | **int** | of the inactive user count, total number of users who have at least 1 card disconnected | [optional] 
**average_churn_by_employer** | **float** | Mean of chruns for each employer | [default to 0.1402]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

