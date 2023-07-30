# # GetServer200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**host** | **string** |  |
**port** | **int** |  | [default to 5060]
**callerId** | **string** |  | [optional]
**type** | **string** |  |
**inboundSipTrunkingOrder** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**outboundSipTrunkingOrder** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**noInstantRingBack** | **int** |  | [optional]
**bypassMedia** | **int** |  | [optional] [default to self::BYPASS_MEDIA_0]
**disableRTPAutoAdjust** | **int** |  | [optional] [default to self::DISABLE_RTP_AUTO_ADJUST_0]
**id** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**updatedByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
