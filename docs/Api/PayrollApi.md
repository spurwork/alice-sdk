# Swagger\Client\PayrollApi

All URIs are relative to *//staging.thisisalice.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV1PayrollCompanies**](PayrollApi.md#getV1PayrollCompanies) | **GET** /v1/payroll/companies | Companies list
[**getV1PayrollCompaniesCafeteriaPlan**](PayrollApi.md#getV1PayrollCompaniesCafeteriaPlan) | **GET** /v1/payroll/companies/cafeteria_plan | Return Cafeteria plan HTML for Square
[**getV1PayrollCompaniesCompanyId**](PayrollApi.md#getV1PayrollCompaniesCompanyId) | **GET** /v1/payroll/companies/{company_id} | Company details
[**getV1PayrollCompaniesTos**](PayrollApi.md#getV1PayrollCompaniesTos) | **GET** /v1/payroll/companies/tos | Return HTML TOS for Square
[**getV1PayrollPayPeriods**](PayrollApi.md#getV1PayrollPayPeriods) | **GET** /v1/payroll/pay_periods | Pay periods list
[**getV1PayrollPayPeriodsId**](PayrollApi.md#getV1PayrollPayPeriodsId) | **GET** /v1/payroll/pay_periods/{id} | Pay period details
[**postV1PayrollCompaniesCompanyIdEmployeesEmployeeIdSessions**](PayrollApi.md#postV1PayrollCompaniesCompanyIdEmployeesEmployeeIdSessions) | **POST** /v1/payroll/companies/{company_id}/employees/{employee_id}/sessions | Create single-use login token
[**postV1PayrollCompaniesCompanyIdSessions**](PayrollApi.md#postV1PayrollCompaniesCompanyIdSessions) | **POST** /v1/payroll/companies/{company_id}/sessions | Create single-use login token
[**postV1PayrollCompaniesOauthSignup**](PayrollApi.md#postV1PayrollCompaniesOauthSignup) | **POST** /v1/payroll/companies/oauth/signup | Signs up a new Square company
[**postV1PayrollEvents**](PayrollApi.md#postV1PayrollEvents) | **POST** /v1/payroll/events | webhook for payroll companies to push events to us

# **getV1PayrollCompanies**
> \Swagger\Client\Model\EmployerCollectionEntity getV1PayrollCompanies()

Companies list

Company list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getV1PayrollCompanies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->getV1PayrollCompanies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\EmployerCollectionEntity**](../Model/EmployerCollectionEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1PayrollCompaniesCafeteriaPlan**
> getV1PayrollCompaniesCafeteriaPlan($company_name)

Return Cafeteria plan HTML for Square

Return Cafeteria plan HTML for Square

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_name = "company_name_example"; // string | Company Name

try {
    $apiInstance->getV1PayrollCompaniesCafeteriaPlan($company_name);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->getV1PayrollCompaniesCafeteriaPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_name** | **string**| Company Name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1PayrollCompaniesCompanyId**
> \Swagger\Client\Model\EmployerPayrollEntity getV1PayrollCompaniesCompanyId($company_id)

Company details

Company details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | 

try {
    $result = $apiInstance->getV1PayrollCompaniesCompanyId($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->getV1PayrollCompaniesCompanyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\EmployerPayrollEntity**](../Model/EmployerPayrollEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1PayrollCompaniesTos**
> getV1PayrollCompaniesTos($company_name, $company_address, $signatory_name, $signatory_phone, $signatory_email)

Return HTML TOS for Square

Return HTML TOS for Square

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_name = "company_name_example"; // string | Company Name
$company_address = "company_address_example"; // string | Company Address
$signatory_name = "signatory_name_example"; // string | Signatory Name
$signatory_phone = "signatory_phone_example"; // string | Signatory Phone
$signatory_email = "signatory_email_example"; // string | Signatory Email

try {
    $apiInstance->getV1PayrollCompaniesTos($company_name, $company_address, $signatory_name, $signatory_phone, $signatory_email);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->getV1PayrollCompaniesTos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_name** | **string**| Company Name |
 **company_address** | **string**| Company Address |
 **signatory_name** | **string**| Signatory Name |
 **signatory_phone** | **string**| Signatory Phone |
 **signatory_email** | **string**| Signatory Email |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1PayrollPayPeriods**
> \Swagger\Client\Model\PayPeriodCollectionPayrollEntity getV1PayrollPayPeriods($status, $employer_id)

Pay periods list

Pay periods list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = "status_example"; // string | Filters by status
$employer_id = 56; // int | Filters by company

try {
    $result = $apiInstance->getV1PayrollPayPeriods($status, $employer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->getV1PayrollPayPeriods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Filters by status | [optional]
 **employer_id** | **int**| Filters by company | [optional]

### Return type

[**\Swagger\Client\Model\PayPeriodCollectionPayrollEntity**](../Model/PayPeriodCollectionPayrollEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1PayrollPayPeriodsId**
> \Swagger\Client\Model\PayPeriodPayrollEntity getV1PayrollPayPeriodsId($id)

Pay period details

Pay periods details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->getV1PayrollPayPeriodsId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->getV1PayrollPayPeriodsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\PayPeriodPayrollEntity**](../Model/PayPeriodPayrollEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1PayrollCompaniesCompanyIdEmployeesEmployeeIdSessions**
> postV1PayrollCompaniesCompanyIdEmployeesEmployeeIdSessions($company_id, $employee_id)

Create single-use login token

Returns single-use login link, base64 URL encoded. Employee ID is from payroll system, may not correspond to existing user in Alice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | 
$employee_id = 56; // int | 

try {
    $apiInstance->postV1PayrollCompaniesCompanyIdEmployeesEmployeeIdSessions($company_id, $employee_id);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->postV1PayrollCompaniesCompanyIdEmployeesEmployeeIdSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**|  |
 **employee_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1PayrollCompaniesCompanyIdSessions**
> postV1PayrollCompaniesCompanyIdSessions($company_id)

Create single-use login token

Returns single-use login link, base64 URL encoded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | 

try {
    $apiInstance->postV1PayrollCompaniesCompanyIdSessions($company_id);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->postV1PayrollCompaniesCompanyIdSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1PayrollCompaniesOauthSignup**
> postV1PayrollCompaniesOauthSignup($body)

Signs up a new Square company

Creates a new company from Square, receiving code and merchant id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\null(); //  | 

try {
    $apiInstance->postV1PayrollCompaniesOauthSignup($body);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->postV1PayrollCompaniesOauthSignup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1PayrollEvents**
> postV1PayrollEvents($body)

webhook for payroll companies to push events to us

Authenticated payroll platforms can push events to our endpoint using a provided API key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\null(); //  | 

try {
    $apiInstance->postV1PayrollEvents($body);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->postV1PayrollEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

