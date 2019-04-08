# PretaxCategoryPredictionPerformanceEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | The date the api was called | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date for the recent analysis node | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date for the recent analysis node | [optional] 
**audit_threshold** | **float** | The threshold for auditing transactions. all transactions with confidence below this number are reviewed. Lower numbers imply fewer reviews (but more chance of missing something | [optional] 
**recent** | [**\Swagger\Client\Model\MachineLearningPerformanceEntity**](MachineLearningPerformanceEntity.md) |  | [optional] 
**all_time** | [**\Swagger\Client\Model\MachineLearningPerformanceEntity**](MachineLearningPerformanceEntity.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

