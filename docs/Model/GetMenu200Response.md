# # GetMenu200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**maxExtensionLength** | **int** |  | [default to 4]
**speechRecognition** | **int** |  | [optional] [default to self::SPEECH_RECOGNITION_0]
**directory** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**greetingType** | **string** |  |
**greetingTTS** | **string** |  | [optional]
**menuVoice** | **string** |  | [optional]
**exitSound** | **string** |  | [optional] [default to 'default']
**transferAnnouncement** | **string** |  | [optional] [default to 'default']
**maxFailures** | **int** |  | [optional] [default to 3]
**maxTimeouts** | **int** |  | [optional] [default to 3]
**timeout** | **int** |  | [optional] [default to 10]
**touchToneTerminators** | **int** |  | [optional] [default to self::TOUCH_TONE_TERMINATORS_1]
**timeschedule** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**destinationType** | **string** |  | [optional]
**destination** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**ref** | **string** |  | [optional]
**callForwardingDestination** | **string** |  | [optional]
**createdByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**updatedByUserId** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
