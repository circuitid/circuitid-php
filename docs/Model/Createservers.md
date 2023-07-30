# # Createservers

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**host** | **string** |  |
**port** | **int** |  | [default to 5060]
**callerId** | **string** |  | [optional]
**type** | **string** |  |
**domesticOutboundCallLimit** | **int** |  | [default to 10]
**domesticInboundCallLimit** | **int** |  | [default to 10]
**internationalOutboundCallLimit** | **int** |  | [default to 10]
**tollFreeChannelLimit** | **int** |  | [default to 10]
**inboundSipTrunkingOrder** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**outboundSipTrunkingOrder** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**noInstantRingBack** | **int** |  | [optional]
**bypassMedia** | **int** |  | [optional] [default to self::BYPASS_MEDIA_0]
**disableRTPAutoAdjust** | **int** |  | [optional] [default to self::DISABLE_RTP_AUTO_ADJUST_0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
