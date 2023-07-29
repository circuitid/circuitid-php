# # Numbers

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inUse** | **int** |  | [optional] [default to self::IN_USE_1]
**name** | **string** |  |
**countryCode** | **string** |  |
**amount** | **int** |  | [optional]
**perMinuteRate** | **int** |  | [optional]
**provider** | **string** | ObjectId (unique 12 bytes ID) |
**originalProvider** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**providerOrderId** | **string** |  | [optional]
**fax** | **int** |  | [optional] [default to self::FAX_0]
**voice** | **int** |  | [optional] [default to self::VOICE_0]
**status** | **int** |  | [optional] [default to self::STATUS_1]
**sms** | **int** |  | [optional] [default to self::SMS_0]
**mms** | **int** |  | [optional] [default to self::MMS_0]
**changeRegionOrderId** | **string** |  | [optional]
**changeRegionOrderDate** | **\DateTime** |  | [optional]
**directoryListing** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**directoryListingOrderId** | **string** |  | [optional]
**directoryListingOrderDate** | **\DateTime** |  | [optional]
**callerName** | **string** |  | [optional]
**callerNameOrderId** | **string** |  | [optional]
**callerNameOrderDate** | **\DateTime** |  | [optional]
**e911** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**e911OrderId** | **string** |  | [optional]
**e911OrderDate** | **\DateTime** |  | [optional]
**messageCampaign** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**messageClass** | **string** |  | [optional]
**messageType** | **string** |  | [optional]
**messageCampaignOrderId** | **string** |  | [optional]
**messageCampaignOrderDate** | **\DateTime** |  | [optional]
**e911Supported** | **int** |  | [optional] [default to self::E911_SUPPORTED_0]
**callerNameSupported** | **int** |  | [optional] [default to self::CALLER_NAME_SUPPORTED_0]
**directoryListingSupported** | **int** |  | [optional] [default to self::DIRECTORY_LISTING_SUPPORTED_0]
**messagingSupported** | **int** |  | [optional] [default to self::MESSAGING_SUPPORTED_0]
**destinationType** | **string** |  | [default to 'park']
**destination** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**ref** | **string** |  | [optional]
**callForwardingDestination** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
