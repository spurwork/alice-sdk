# InvoiceEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Invoice id | [optional] [default to 1]
**name** | **string** | Invoice generated identifier | [optional] [default to '000120000300001']
**status** | **string** | Status of the invoice | [optional] [default to 'pending']
**created_at** | [**\DateTime**](\DateTime.md) | Date the invoice was created | [optional] 
**paid_date** | [**\DateTime**](\DateTime.md) | Date the invoice was paid | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Start date of the earliest invoice item pay period | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | End date of the lastest invoice item pay period | [optional] 
**employer_gross_savings_dollars** | **float** | Total employer gross savings | [optional] [default to 9.5]
**employer_net_savings_dollars** | **float** | Total employer net savings | [optional] [default to 4.75]
**amount_dollars** | **float** | Alice share | [optional] [default to 4.75]
**path** | **string** | Relative path to invoice details view | [optional] [default to '/manage/invoices/1']
**employer** | [**\Swagger\Client\Model\EmployerMinimalEntity**](EmployerMinimalEntity.md) |  | [optional] 
**invoice_items** | [**\Swagger\Client\Model\InvoiceItemEntity**](InvoiceItemEntity.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

