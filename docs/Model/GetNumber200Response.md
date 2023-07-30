# # GetNumber200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inUse** | **int** |  | [optional] [default to self::IN_USE_1]
**name** | **string** |  |
**countryCode** | **string** |  |
**amount** | **int** |  | [optional]
**perMinuteRate** | **int** |  | [optional]
**fax** | **int** |  | [optional] [default to self::FAX_0]
**voice** | **int** |  | [optional] [default to self::VOICE_0]
**status** | **int** |  | [optional] [default to self::STATUS_1]
**sms** | **int** |  | [optional] [default to self::SMS_0]
**mms** | **int** |  | [optional] [default to self::MMS_0]
**directoryListing** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**callerName** | **string** |  | [optional]
**e911** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**messageCampaign** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**messageClass** | **string** |  | [optional]
**messageType** | **string** |  | [optional]
**e911Supported** | **int** |  | [optional] [default to self::E911_SUPPORTED_0]
**callerNameSupported** | **int** |  | [optional] [default to self::CALLER_NAME_SUPPORTED_0]
**directoryListingSupported** | **int** |  | [optional] [default to self::DIRECTORY_LISTING_SUPPORTED_0]
**messagingSupported** | **int** |  | [optional] [default to self::MESSAGING_SUPPORTED_0]
**destinationType** | **string** |  | [default to 'park']
**destination** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**ref** | **string** |  | [optional]
**callForwardingDestination** | **string** |  | [optional]
**id** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**updatedByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
