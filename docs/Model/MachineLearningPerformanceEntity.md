# MachineLearningPerformanceEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **int** | total number of features for this analysis | [optional] 
**total_correct** | **int** | total number of correct predictions for this analysis | [optional] 
**accuracy** | **float** | accuracy of the predictions, defined as #correct/ #features | [optional] 
**total_reviewed** | **int** | Number of features audited (given the Audit threshold) | [optional] 
**review_volume** | **float** | The proportion of all features that are reviewed | [optional] 
**incorrect_predicted_below_threshold** | **int** | The number of misclassified features that are reviewed | [optional] 
**incorrect_predicted** | **int** | The number of misclassified features that are reviewed | [optional] 
**audit_success_rate** | **float** | The proportion of misclassified features that are reviewed (scale 0-1, 1 is good) | [optional] 
**classes** | [**\Swagger\Client\Model\MachineLearningPerformanceEntity**](MachineLearningPerformanceEntity.md) |  | [optional] 
**confusion_matrix** | **object** | A Hash for the confusion matrix. consists of (e.g) for a true / false classification                                                     {actual_false:{predicted_true: x, predicted_false: y}, actual_true:{predicted_true: z, predicted_false:c}} | [optional] 
**confusion_matrix_below_threshold** | **object** | A Hash for the confusion matrix for items getting audited. consists of (e.g) for a true / false classification                                                     {actual_false:{predicted_true: x, predicted_false: y}, actual_true:{predicted_true: z, predicted_false:c}} | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

