# # PhoneinboundruleactionsCreateOrPatch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**phoneinboundrule** | **string** | ObjectId (unique 12 bytes ID) |
**timeschedule** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**timeout** | **int** |  | [optional]
**status** | **int** |  | [optional] [default to self::STATUS_1]
**priority** | **int** |  | [default to 1]
**destinationType** | **string** |  |
**destination** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**ref** | **string** |  | [optional]
**callForwardingDestination** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
