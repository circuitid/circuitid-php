# # Users

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** |  |
**password** | **string** |  |
**sipPassword** | **string** |  |
**turnPassword** | **string** |  | [optional]
**first** | **string** |  |
**last** | **string** |  |
**mobilePhone** | **string** |  | [optional]
**businessPhone** | **string** |  | [optional]
**extension** | **int** |  | [optional]
**customCallerId** | **int** |  | [optional]
**jobTitle** | **string** |  | [optional]
**department** | **string** |  | [optional]
**office** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**avatar** | **string** |  | [optional]
**language** | **string** |  | [optional] [default to 'en']
**isPrimary** | **int** |  | [optional] [default to self::IS_PRIMARY_0]
**vmGreetingType** | **string** |  | [optional] [default to 'default']
**vmTimeout** | **int** |  | [optional] [default to 20]
**vmFile** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**vmPlaybackNumber** | **string** |  | [optional]
**pin** | **int** |  | [optional] [default to 1234]
**number** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**region** | **string** | ObjectId (unique 12 bytes ID) | [optional]
**callerIdNumber** | **string** |  | [optional]
**adminPermission** | **string** |  | [optional]
**billingPermission** | **string** |  | [optional]
**phonePermission** | **string** |  | [optional]
**timezone** | **string** |  | [default to 'America/New_York']
**vmTranscription** | **int** |  | [optional] [default to self::VM_TRANSCRIPTION_0]
**communication** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
