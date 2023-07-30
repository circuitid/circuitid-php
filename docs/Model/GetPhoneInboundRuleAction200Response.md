# # GetPhoneInboundRuleAction200Response

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
**id** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**updatedByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
