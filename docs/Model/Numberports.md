# # Numberports

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**numbers** | **string[]** |  |
**name** | **string** |  |
**type** | **string** |  | [default to 'port in']
**typeOfService** | **string** |  |
**authorizedPerson** | **string** |  |
**desiredDueDate** | **\DateTime** |  |
**accountNumber** | **string** |  |
**accountPhoneNumber** | **string** |  |
**office** | **string** | ObjectId (unique 12 bytes ID) |
**e911** | **int** |  | [optional] [default to self::E911_0]
**invoice** | **string** | ObjectId (unique 12 bytes ID) |
**status** | **string** |  | [default to 'processing']
**destinationType** | **string** |  |
**destination** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**ref** | **string** |  | [optional]
**callForwardingDestination** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
