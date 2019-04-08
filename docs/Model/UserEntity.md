# UserEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employee_id** | **int** | Id | [default to 222]
**first_name** | **string** | First Name | [default to 'Albus']
**last_name** | **string** | Last Name | [default to 'Dumbledore']
**email** | **string** | Email | [default to 'albus@example.com']
**tel** | **string** | Telephone | [default to '+15556754343']
**organization_admin_profile** | [**\Swagger\Client\Model\OrganizationAdminProfileEntity**](OrganizationAdminProfileEntity.md) |  | [optional] 
**admin_profile** | [**\Swagger\Client\Model\UserAdminProfileEntity**](UserAdminProfileEntity.md) |  | [optional] 
**employee_profile** | [**\Swagger\Client\Model\EmployeeProfileEntity**](EmployeeProfileEntity.md) |  | [optional] 
**settings** | **object** | App settings | [optional] 
**birthdate** | **string** | US format birthdate | [optional] [default to '09/01/1980']
**over_eighteen** | **string** | Determines if employee is eligible for certain benefits | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

