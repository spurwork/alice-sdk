# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.1
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *//staging.thisisalice.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PayrollApi* | [**getV1PayrollCompanies**](docs/Api/PayrollApi.md#getv1payrollcompanies) | **GET** /v1/payroll/companies | Companies list
*PayrollApi* | [**getV1PayrollCompaniesCafeteriaPlan**](docs/Api/PayrollApi.md#getv1payrollcompaniescafeteriaplan) | **GET** /v1/payroll/companies/cafeteria_plan | Return Cafeteria plan HTML for Square
*PayrollApi* | [**getV1PayrollCompaniesCompanyId**](docs/Api/PayrollApi.md#getv1payrollcompaniescompanyid) | **GET** /v1/payroll/companies/{company_id} | Company details
*PayrollApi* | [**getV1PayrollCompaniesTos**](docs/Api/PayrollApi.md#getv1payrollcompaniestos) | **GET** /v1/payroll/companies/tos | Return HTML TOS for Square
*PayrollApi* | [**getV1PayrollPayPeriods**](docs/Api/PayrollApi.md#getv1payrollpayperiods) | **GET** /v1/payroll/pay_periods | Pay periods list
*PayrollApi* | [**getV1PayrollPayPeriodsId**](docs/Api/PayrollApi.md#getv1payrollpayperiodsid) | **GET** /v1/payroll/pay_periods/{id} | Pay period details
*PayrollApi* | [**postV1PayrollCompaniesCompanyIdEmployeesEmployeeIdSessions**](docs/Api/PayrollApi.md#postv1payrollcompaniescompanyidemployeesemployeeidsessions) | **POST** /v1/payroll/companies/{company_id}/employees/{employee_id}/sessions | Create single-use login token
*PayrollApi* | [**postV1PayrollCompaniesCompanyIdSessions**](docs/Api/PayrollApi.md#postv1payrollcompaniescompanyidsessions) | **POST** /v1/payroll/companies/{company_id}/sessions | Create single-use login token
*PayrollApi* | [**postV1PayrollCompaniesOauthSignup**](docs/Api/PayrollApi.md#postv1payrollcompaniesoauthsignup) | **POST** /v1/payroll/companies/oauth/signup | Signs up a new Square company
*PayrollApi* | [**postV1PayrollEvents**](docs/Api/PayrollApi.md#postv1payrollevents) | **POST** /v1/payroll/events | webhook for payroll companies to push events to us

## Documentation For Models

 - [AccountEntity](docs/Model/AccountEntity.md)
 - [AccountManagementStatsEntity](docs/Model/AccountManagementStatsEntity.md)
 - [AddressEntity](docs/Model/AddressEntity.md)
 - [AliceStatsEntity](docs/Model/AliceStatsEntity.md)
 - [BankingAccountEntity](docs/Model/BankingAccountEntity.md)
 - [BankingInstitutionConnectionEntity](docs/Model/BankingInstitutionConnectionEntity.md)
 - [BankingTransactionEntity](docs/Model/BankingTransactionEntity.md)
 - [BeneficiaryEntity](docs/Model/BeneficiaryEntity.md)
 - [BillingSourceEntity](docs/Model/BillingSourceEntity.md)
 - [ChurnStatsEntity](docs/Model/ChurnStatsEntity.md)
 - [CitySpendingAnalysisEntity](docs/Model/CitySpendingAnalysisEntity.md)
 - [ClaimDocumentEntity](docs/Model/ClaimDocumentEntity.md)
 - [CustodianEntity](docs/Model/CustodianEntity.md)
 - [DependentCareOpenEnrollmentEntity](docs/Model/DependentCareOpenEnrollmentEntity.md)
 - [DependentCareProgramEnrollmentCollectionEntity](docs/Model/DependentCareProgramEnrollmentCollectionEntity.md)
 - [DependentCareProgramEnrollmentEntity](docs/Model/DependentCareProgramEnrollmentEntity.md)
 - [DependentCareSummaryEntity](docs/Model/DependentCareSummaryEntity.md)
 - [DependentEntity](docs/Model/DependentEntity.md)
 - [DocumentEntity](docs/Model/DocumentEntity.md)
 - [DocumentUrlEntity](docs/Model/DocumentUrlEntity.md)
 - [EmployeeBenefitsEntity](docs/Model/EmployeeBenefitsEntity.md)
 - [EmployeeCohortTimeSeriesAnalysisEntity](docs/Model/EmployeeCohortTimeSeriesAnalysisEntity.md)
 - [EmployeeCollectionActionResultEntity](docs/Model/EmployeeCollectionActionResultEntity.md)
 - [EmployeeCollectionSummaryEntity](docs/Model/EmployeeCollectionSummaryEntity.md)
 - [EmployeeEnrollmentTimeSeriesAnalysisEntity](docs/Model/EmployeeEnrollmentTimeSeriesAnalysisEntity.md)
 - [EmployeeEnrollmentTimeSeriesSegmentEntity](docs/Model/EmployeeEnrollmentTimeSeriesSegmentEntity.md)
 - [EmployeeEntity](docs/Model/EmployeeEntity.md)
 - [EmployeeOrganizationBenefitEntity](docs/Model/EmployeeOrganizationBenefitEntity.md)
 - [EmployeeOrganizationEntity](docs/Model/EmployeeOrganizationEntity.md)
 - [EmployeePaginatedEntity](docs/Model/EmployeePaginatedEntity.md)
 - [EmployeePaginatedSummaryEntity](docs/Model/EmployeePaginatedSummaryEntity.md)
 - [EmployeePayPeriodRecordEntity](docs/Model/EmployeePayPeriodRecordEntity.md)
 - [EmployeeProfileEntity](docs/Model/EmployeeProfileEntity.md)
 - [EmployeeReimbursementClaimEntity](docs/Model/EmployeeReimbursementClaimEntity.md)
 - [EmployeeSpendStateAnalysisEntity](docs/Model/EmployeeSpendStateAnalysisEntity.md)
 - [EmployeeSpendStateSegmentEntity](docs/Model/EmployeeSpendStateSegmentEntity.md)
 - [EmployeeSpendStateTimeSeriesAnalysisEntity](docs/Model/EmployeeSpendStateTimeSeriesAnalysisEntity.md)
 - [EmployeeSpendStateTimeSeriesSegmentEntity](docs/Model/EmployeeSpendStateTimeSeriesSegmentEntity.md)
 - [EmployeeSpendingAnalysisEntity](docs/Model/EmployeeSpendingAnalysisEntity.md)
 - [EmployeesProviderEntity](docs/Model/EmployeesProviderEntity.md)
 - [EmployerAccountEntity](docs/Model/EmployerAccountEntity.md)
 - [EmployerAnnualSavingsEntity](docs/Model/EmployerAnnualSavingsEntity.md)
 - [EmployerCollectionEntity](docs/Model/EmployerCollectionEntity.md)
 - [EmployerMinimalEntity](docs/Model/EmployerMinimalEntity.md)
 - [EmployerPaginatedEntity](docs/Model/EmployerPaginatedEntity.md)
 - [EmployerPaginatedSummaryEntity](docs/Model/EmployerPaginatedSummaryEntity.md)
 - [EmployerPayrollEntity](docs/Model/EmployerPayrollEntity.md)
 - [EmployerSummaryEntity](docs/Model/EmployerSummaryEntity.md)
 - [EmployerTotalSavingsEntity](docs/Model/EmployerTotalSavingsEntity.md)
 - [EngagementStatNodeEntity](docs/Model/EngagementStatNodeEntity.md)
 - [EngagementStatsEntity](docs/Model/EngagementStatsEntity.md)
 - [EnrollmentStatsEntity](docs/Model/EnrollmentStatsEntity.md)
 - [EstimatedEmployeeTaxSavingsEntity](docs/Model/EstimatedEmployeeTaxSavingsEntity.md)
 - [FundsTransferEntity](docs/Model/FundsTransferEntity.md)
 - [GroupedPayPeriodCollectionEntity](docs/Model/GroupedPayPeriodCollectionEntity.md)
 - [GroupedPayPeriodEntity](docs/Model/GroupedPayPeriodEntity.md)
 - [HSAProgramEnrollmentCollectionEntity](docs/Model/HSAProgramEnrollmentCollectionEntity.md)
 - [HSAProgramEnrollmentEntity](docs/Model/HSAProgramEnrollmentEntity.md)
 - [HealthPlanEntity](docs/Model/HealthPlanEntity.md)
 - [HealthcareFSAProgramEnrollmentCollectionEntity](docs/Model/HealthcareFSAProgramEnrollmentCollectionEntity.md)
 - [HealthcareFSAProgramEnrollmentEntity](docs/Model/HealthcareFSAProgramEnrollmentEntity.md)
 - [HealthcareOpenEnrollmentEntity](docs/Model/HealthcareOpenEnrollmentEntity.md)
 - [ImageUploaderEntity](docs/Model/ImageUploaderEntity.md)
 - [InstitutionCollectionEntity](docs/Model/InstitutionCollectionEntity.md)
 - [InstitutionEntity](docs/Model/InstitutionEntity.md)
 - [InvoiceCollectionEntity](docs/Model/InvoiceCollectionEntity.md)
 - [InvoiceEntity](docs/Model/InvoiceEntity.md)
 - [InvoiceItemEntity](docs/Model/InvoiceItemEntity.md)
 - [MachineLearningPerformanceEntity](docs/Model/MachineLearningPerformanceEntity.md)
 - [MostRecentComplianceReportCollectionEntity](docs/Model/MostRecentComplianceReportCollectionEntity.md)
 - [OpenEnrollmentEntity](docs/Model/OpenEnrollmentEntity.md)
 - [OrganizationAccountsEntity](docs/Model/OrganizationAccountsEntity.md)
 - [OrganizationAdminProfileEntity](docs/Model/OrganizationAdminProfileEntity.md)
 - [OrganizationBenefitEntity](docs/Model/OrganizationBenefitEntity.md)
 - [OrganizationBenefitsEntity](docs/Model/OrganizationBenefitsEntity.md)
 - [OrganizationSummaryEntity](docs/Model/OrganizationSummaryEntity.md)
 - [PaginatedPayGroupPayPeriodCollectionEntity](docs/Model/PaginatedPayGroupPayPeriodCollectionEntity.md)
 - [PayGroupPayPeriodEntity](docs/Model/PayGroupPayPeriodEntity.md)
 - [PayPeriodCollectionEntity](docs/Model/PayPeriodCollectionEntity.md)
 - [PayPeriodCollectionPayrollEntity](docs/Model/PayPeriodCollectionPayrollEntity.md)
 - [PayPeriodEntity](docs/Model/PayPeriodEntity.md)
 - [PayPeriodMinimalEntity](docs/Model/PayPeriodMinimalEntity.md)
 - [PayPeriodPayrollEntity](docs/Model/PayPeriodPayrollEntity.md)
 - [PaymentScheduleEntity](docs/Model/PaymentScheduleEntity.md)
 - [PayrollConfigEntity](docs/Model/PayrollConfigEntity.md)
 - [PayrollPlatformEntity](docs/Model/PayrollPlatformEntity.md)
 - [PeriodsPayGroupEntity](docs/Model/PeriodsPayGroupEntity.md)
 - [PlanYearEntity](docs/Model/PlanYearEntity.md)
 - [PretaxCategoryPredictionPerformanceEntity](docs/Model/PretaxCategoryPredictionPerformanceEntity.md)
 - [PretaxProgramEnrollmentCollectionEntity](docs/Model/PretaxProgramEnrollmentCollectionEntity.md)
 - [PretaxProgramEnrollmentEntity](docs/Model/PretaxProgramEnrollmentEntity.md)
 - [PreviousYearSummaryEntity](docs/Model/PreviousYearSummaryEntity.md)
 - [ProviderEntity](docs/Model/ProviderEntity.md)
 - [QualifyingLifeEventEntity](docs/Model/QualifyingLifeEventEntity.md)
 - [ReportEntity](docs/Model/ReportEntity.md)
 - [RevenueStatsEntity](docs/Model/RevenueStatsEntity.md)
 - [SpendingAnalysisEntity](docs/Model/SpendingAnalysisEntity.md)
 - [SuggestedElectionEntity](docs/Model/SuggestedElectionEntity.md)
 - [TestResultsEntity](docs/Model/TestResultsEntity.md)
 - [UserAdminProfileEntity](docs/Model/UserAdminProfileEntity.md)
 - [UserEntity](docs/Model/UserEntity.md)
 - [UserOnboardingEntity](docs/Model/UserOnboardingEntity.md)
 - [UserSignupEntity](docs/Model/UserSignupEntity.md)

## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: Api-Key
- **Location**: HTTP header


## Author



