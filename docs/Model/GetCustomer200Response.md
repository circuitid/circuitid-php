# # GetCustomer200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**websiteUrl** | **string** |  | [optional]
**logo** | **string** |  | [optional]
**credit** | **int** |  | [optional] [default to 0]
**adminUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**billingUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**callRecordingUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**supportUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**automaticRefillAmount** | **int** |  | [optional] [default to 0]
**lowBalanceAlertAmount** | **int** |  | [optional] [default to 0]
**internationalCalling** | **int** |  | [optional] [default to self::INTERNATIONAL_CALLING_0]
**createdByIP** | **string** |  | [optional]
**mediaBypass** | **int** |  | [optional] [default to self::MEDIA_BYPASS_0]
**accountLock** | **int** |  | [optional] [default to self::ACCOUNT_LOCK_1]
**callRecording** | **int** |  | [optional] [default to self::CALL_RECORDING_0]
**cdrRetention** | **int** |  | [optional] [default to 12]
**cnamLookUps** | **int** |  | [optional] [default to self::CNAM_LOOK_UPS_0]
**holdMusic** | **int** |  | [optional] [default to self::HOLD_MUSIC_0]
**transcribeCalls** | **int** |  | [optional]
**maxOutboundCallRate** | **int** |  | [optional] [default to 1]
**defaultBillMethod** | **string** |  | [default to 'credit']
**id** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**updatedByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
